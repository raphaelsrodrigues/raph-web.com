<?php

require_once('database.php');

class Photograph {
	
	protected static $table_name="photographs";
	protected static $db_fields=array('id', 'user_id', 'filename', 'type', 'size', 'caption');
	public $id;
	public $user_id;
	public $filename;
	public $type;
	public $size;
	public $caption;
	
	private $temp_path;
	protected $upload_dir="images";
	public $errors=array();
	
	protected $upload_errors = array(

		UPLOAD_ERR_OK			=> "No errors.",
		UPLOAD_ERR_INI_SIZE		=> "Larger than upload_max_filesize.",
		UPLOAD_ERR_FORM_SIZE	=> "Larger than form MAX_FILE_SIZE.",
		UPLOAD_ERR_PARTIAL		=> "Partial upload.",
		UPLOAD_ERR_NO_FILE		=> "No file.",
		UPLOAD_ERR_NO_TMP_DIR	=> "No temporary directory.",
		UPLOAD_ERR_CANT_WRITE	=> "Can't write to disk.",
		UPLOAD_ERR_EXTENSION	=> "File upload stopped by extension."
);
	//Pass in $_FILE(['uploaded_file']) as an argument
	public function attach_file($file){
		//Perform error checking on the form parameters
		if(!$file || empty($file) || !is_array($file)) {
			//error: nothing uploaded or wrong argument usage
			$this->errors[] = "No file was uploaded.";
			return false;
		} elseif($file['error'] != 0) {
			//error: report what PHP says went wrong
			$this->errors[] = $this->upload_errors[$file['error']];
			return false;
		} else {
		//Set object attributes to the form parameters.
		$this->temp_path = $file['tmp_name'];
		$this->filename = basename($file['name']);
		$this->type = $file['type'];
		$this->size = $file['size'];
		//Don't worry about saving anything to the database yet
		return true;
	}
}

	public function save() {
		//A new record won't have an id yet.
		if(isset($this->user_id)) {
			//Really just to update the caption
			$this->update();
		} else {
			//Make sure there are no errors
			
			//Can't save if there are pre-existing errors
			if(!empty($this->errors)) { return false; }
			
			//Make sure the caption is not too long for the DB
			if(strlen($this->caption) > 255) {
				$this->errors[] = "The caption can only be 255 characters long.";
				return false;
			}
			
			//Can't save without filename and temp location
			if(empty($this->filename) || empty($this->temp_path)) {
				$this->errors[] = "The file location was not available.";
				return false;
			}
			
			//Determine the target_path !!!!!!! CHECK THIS IF THERE IS AN ERROR
			$target_path = "public/" .$this->upload_dir. "/" .$this->filename;
			
			//Make sure a file doesn't already existes in the target location
			if(file_exists($target_path)) {
				$this->errors[] = "The file {$this->filename} already exists.";
				return false;
			}
			
			//Attempt to move the file
			if(move_uploaded_file($this->temp_path, $target_path)) {
				//Success
				//Save a corresponding entry to the database
				if($this->create()) {
					//Done with temp_path, the file isn't there anymore
					unset($this->temp_path);
					return true;
				}
			} else {
				//File was not moved.
				$this->errors[] = "The file uploaded failed, possibly due to incorrect permissions on the upload folder.";
				return false;
			}
		}
	}

	public function destroy() {
		//First remobe the database entry
		if($this->delete()) {
			$target_path = "../public/" .$this->image_path();
			return unlink($target_path) ? true : false;
		} else {
			return false;
		}
		//then remove the file
	}

	public function image_path() {
		return $this->upload_dir. "/" .$this->filename;
	}

	public function size_as_text() {
			if($this->size < 1024) {
				return "{$this->size} bytes";
			} elseif($this->size < 1048576) {
				$size_kb = round($this->size/1024);
				return "{$size_kb} KB";
			} else {
				$size_mb = round($this->size/1048576, 1);
				return "{$size_mb} MB";
			}
		}

	public function comments() {
		return Comment::find_comments_on($this->user_id);
	}

	//Common Database Methods

	public static function find_all() {
		
		return self::find_by_sql("SELECT * FROM ".self::$table_name);
		
		// global $database;
		// $result_set = $database->query("SELECT * FROM clients");
		// return $result_set;
	}
	
	public static function find_by_id($id=0) {
		global $database;
		
		$result_array = self::find_by_sql("SELECT * FROM " .self::$table_name. " WHERE user_id=" .$database->escape_value($id). " LIMIT 3");
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	
	public static function find_by_id_many($id=0) {
		global $database;
		
		return self::find_by_sql("SELECT * FROM " .self::$table_name. " WHERE id=" .$database->escape_value($id). " LIMIT 8");

	}
	
	public static function find_by_sql($sql="") {
		
	//Take result_set and process.
	//Go through each one of the rows by doing a fetch array, pull back a row and instantiate it.
	//Assign it to a new array (empty array) then do mysql fetch _array in the result set.
	//Assign it to a row and then instantiate the row.
	//What we return is an array of objects. The rows and raw result set won't get back to the index.
		
		global $database;
		$result_set = $database->query($sql);
		$object_array = array();
		while ($row = $database->fetch_array($result_set)) {
			$object_array[] = self::instantiate($row);
		}
		return $object_array;
	}

	public static function count_all() {
		global $database;
		$sql = "SELECT COUNT(*) FROM ".self::$table_name;
		$result_set = $database->query($sql);
		$row = $database->fetch_array($result_set);
		return array_shift($row);
	}
	
	private static function instantiate($record) {
	
		//Could check the $record ecists and is an array
			$object = new self;
			
		//Simple, long-for approach:
		//	$object->user_id 	= $record['user_id'];
		//	$object->password 	= $record['password'];
		//	$object->username 	= $record['username'];
			
		//More dynamic, short-form aapproach:
		foreach($record as $attribute=>$value) {
			if($object->has_attribute($attribute)) {
				$object->$attribute = $value;
			}
		}
		return $object;
	}
	
	private function has_attribute($attribute) {
		//get_object_vars returns an associative array with all attributes
		//(incl. private ones!) as the keys and their current values as te value
		$object_vars = $this->attributes();
		
		//We dont care about the value, we just wantt to know if the key exists
		//Will return true or false
		return array_key_exists($attribute, $object_vars);
	}
	
	protected function attributes() {
		//return an array of attribute names and their values
		$attributes = array();
		foreach(self::$db_fields as $field) {
			if(property_exists($this, $field)) {
				$attributes[$field] = $this->$field;
			}
		}
		return $attributes;
	}
	
	protected function sanitized_attributes() {
		global $database;
		$clean_attributes = array();
		//sanitize the values before submitting
		//Note: does not alter the actual vallue of each attribute
		foreach($this->attributes() as $key => $value) {
			$clean_attributes[$key] = $database->escape_value($value);
		}
		return $clean_attributes;
	}
	
	//replaced with a custom save()
	//public function save() {
		//A new record won't have an id yet.
	//	return isset($this->user_id) ? $this->update() : $this->create();
	//}
	
	public function create() {
		
	global $database;
	
	//SQL syntax
	//INSERT INTO table (key, key) VALUE ('value', 'value')
	//single-quotes around all values
	//escape all values to prevent SQL injection
	
	$attributes = $this->sanitized_attributes();
	
	$sql = "INSERT INTO ".self::$table_name." (";
	$sql .= join(", ", array_keys($attributes)); 
	$sql .= ") VALUES ('";
	$sql .= join("', '", array_values($attributes));
	$sql .= "')";
	
	if($database->query($sql)) {
		$this->user_id = $database->insert_id();
		return true;
		} else {
		return false;
		}
	}
	
	public function update() {
	global $database;
	
	$attributes = $this->sanitized_attributes();
	
	$attribute_pairs = array();
	foreach ($attributes as $key => $value) {
		$attribute_pairs[] = "{$key}='{$value}'";
	}
		
	$sql = "UPDATE ".self::$table_name." SET ";
	$sql .= join(", ", $attribute_pairs);
	$sql .= " WHERE user_id=". $database->escape_value($this->user_id);
	$database->query($sql);
	return ($database->affected_rows() == 1) ? true : false;
	}
	
	public function delete() {
		global $database;
		
		$sql = "DELETE FROM ".self::$table_name;
		$sql .= " WHERE user_id=". $database->escape_value($this->user_id);
		$sql .= " LIMIT 1";
		$database->query($sql);
		return ($database->affected_rows() == 1) ? true : false;
	} 
	
	}

?>