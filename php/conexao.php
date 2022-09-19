<?php
$banco = "valorant";
try
{
    $pdo = new PDO("mysql:host=localhost;dbname=$banco","root","");
}

catch(PDOException $e)
{
    echo("Error". $e->getMessage());
}

?>