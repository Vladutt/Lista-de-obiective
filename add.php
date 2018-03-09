<?php

if (isset($_POST['add'])) {

  $db = new PDO("mysql:host=localhost;dbname=lista", 'root', '');

  $stmt = $db->prepare("INSERT INTO obiective SET nume = ?, status = ?");
  $stmt->execute(array($_POST['obiectiv'], 0));

  header("Location: index.php");

}

?>
