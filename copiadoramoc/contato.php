<?php include ('header.php'); ?>

<body class=body>
	
	
	<div class="login_main">
		
		 <h4><strong>Prezado cliente, caso possua algum arquivo que deseja: </strong></h4>
		
		 <?php
        $things = array("Imprimir", "Plastificar", "Encardenar", "Remeter como fax");
        foreach ($things as $thing) {
            echo "<li>$thing</li>";
        }
		?>
		<br>
	<strong>Nos envie por e-mail e entre em contato por telefone.</p></strong>
	
	<p>Clique no envelope abaixo e anexe o arquivo desejado.</p>
	
	<a href="mailto:copiadoramoc@hotmail.com"><img  width="80" height="60" src="images/email_envelope.png"></img></a><br>
	<p>Ou pelo e-mail: <a href="mailto:copiadoramoc@hotmail.com">copiadoramoc@hotmail.com</a></p>
	
	</div>
	
	<div class="tel">
	<strong>Telefones para contato:</strong>
	<p>(38) 3221-0798</p>
	<p>(38) 3213-5080</p>
	</div>
	

</body>

<?php include ('footer.php'); ?>