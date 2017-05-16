<?php

	$conn = mysqli_connect('localhost','root','admin123','aniwatch'); //conexão a base de dados
	
	if ($conn->connect_error) 
	{  
  		die("Connection failed: " . $conn->connect_error);  
  	}  
	  
	return $conn; //devolve a variavel com a conexão já feita