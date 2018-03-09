<?php

if (isset($_GET['id'])) {

  $db = new PDO("mysql:host=localhost;dbname=lista", 'root', '');

  $stmt = $db->prepare("UPDATE obiective SET status = 1 WHERE id = ?");
  $stmt->execute(array($_GET['id']));

  header("Location: index.php");

}

?>
