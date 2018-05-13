 <?php 
	   try {

	   	   $base= new PDO('mysql:host=localhost; dbname=login','root','mnjjar05');

	   	   $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	   	   $base->exec("set names utf8");

	   	   return $base;

	   } catch (Exception $e) {

	   		die('Error: ' . $e->getMessage() );

	   }
?> 