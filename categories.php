<?php
include 'header.php';




include 'application/bdd_connection.php';
$query = 'SELECT Name FROM Category ORDER BY Id';
$resultSet = $pdo->query($query);
$posts = $resultSet->fetchAll();
include 'categories.phtml';



include 'footer.php';

?>