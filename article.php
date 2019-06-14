<?php 
include 'header.php';
?>
<h1>Article</h1>
<?php
include 'application/bdd_connection.php';
$query = 'SELECT * FROM Post';
$resultSet = $pdo->query($query);
$posts = $resultSet->fetchAll();
include 'article.phtml';
include 'footer.php'
?>