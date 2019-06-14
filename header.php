<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
  .menu {
    width:100%;
    background: #555;
    display: inline-block;
    min-width: 640px;
  }
  .menu ul {
    margin: 0;
    padding: 0;
    list-style: none;
  }
  .menu ul li {
    display: block;
    position: relative;
    float: left;
  }
  .menu .droite {
    float: right;
  }
  .menu li ul {
    display: none;
    min-width: 150px;
  }
  .menu ul li a {   
    display: block;
    text-decoration: none;
    color: #ffffff;
    padding: 10px;
    background: #555;
    white-space: nowrap;
  }
  .menu ul li a:hover {
    background: #999;
  }
  .menu li:hover ul {
    /* Ici l’affichage du sous-menu */
    display: block;
    position: absolute;
  }
  .menu li:hover li {
    float: none;
  }
  .menu li:hover a {
    background: #999;
  } 
  .menu li:hover li a:hover {
    background: #555;
  }​
</style>

<nav role="navigation" class="menu">
  <ul>
    <li><a href="index.php">Accueil</a></li>
    <li><a href="article.php">Articles</a>
      <ul>
      <?php
      include 'application/bdd_connection.php';
      $query = 'SELECT Title FROM Post';
      $resultSet = $pdo->query($query);
      $posts = $resultSet->fetchAll();
      include 'articles-header.phtml';
      ?>
      </ul>
    </li>
    <li><a href="categories.php">Categories</a>
      <ul>
      <?php
      $query = 'SELECT Name FROM Category ORDER BY Id';
      $resultSet = $pdo->query($query);
      $posts = $resultSet->fetchAll();
      include 'categories-header.phtml';
      ?>
      </ul>
    </li>
    <li><a href="author.php">Auteur</a>
    <ul>
    <?php
      $query = 'SELECT * FROM Author';
      $resultSet = $pdo->query($query);
      $posts = $resultSet->fetchAll();
      include 'author-header.phtml';
      ?>
    </ul>
    </li>
    <li class="droite"><a href="#0">Contact</a></li>
  </ul>​
</nav>
</body>
</html>