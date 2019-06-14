<?php
include 'header.php';



include 'application/bdd_connection.php';
$query = 'SELECT * FROM Author';
$resultSet = $pdo->query($query);
$posts = $resultSet->fetchAll();

include 'author.phtml';
include 'footer.php';