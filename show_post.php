<?php
include 'header.php';

include 'application/bdd_connection.php';
$query = 'SELECT * FROM Post WHERE Id='.$_GET["id"];
$resultSet = $pdo->query($query);
$posts = $resultSet->fetchAll();
include 'article.phtml';
include 'footer.php'
?>
