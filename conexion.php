 <?php

    function conectar(){

    	try {

	   	   $base= new PDO('mysql:host=localhost; dbname=login','root','mnjjar05');

	   	   $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	   	   $base->exec("SET CHARACTER SET utf8");

	   	   return $base;

	   } catch (PDOExeption $e) {

	   		echo 'Error: ' . $e->getMessage();

	   }

    }
	   
?> 