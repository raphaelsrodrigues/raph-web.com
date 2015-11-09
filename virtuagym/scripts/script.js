function myFunction(x) {
	var request;

	if (window.XMLHttpRequest) {
		request = new XMLHttpRequest();
		} else {
		request = new ActiveXObject ("Microsoft.XMLHTTP");
		}
		
	request.open ('GET', 'addexercise.php?c='+x);
	request.onreadystatechange = function() {
		if (request.readyState==4 && request.status==200) {
			console.log(request);
		
		document.getElementById("demo").innerHTML=request.responseText;

	}
}
request.send();

location.reload();

}
