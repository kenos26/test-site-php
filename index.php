<?php
include 'header.php';
?>
<h1>Accueil</h1>
<?php
include 'application/bdd_connection.php';
$query = 'SELECT Post.Id, Title, Contents, CreationTimestamp, FirstName, LastName FROM Post INNER JOIN Author ON Post.Author_Id = Author.Id ORDER BY CreationTimestamp DESC';
$resultSet = $pdo->query($query);
$posts = $resultSet->fetchAll();


include 'index.phtml';
include 'footer.php';