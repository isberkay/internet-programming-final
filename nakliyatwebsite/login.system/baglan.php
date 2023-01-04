<?php 
try{
    $db = new PDO("mysql:host=localhost; dbname=guvenlik; charset=utf8", 'root', '123');

}
catch(Exception $e){
    echo $e->getMessage();
}


?>