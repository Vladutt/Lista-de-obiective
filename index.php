
<?php

$db = new PDO("mysql:host=localhost;dbname=lista", 'root', '');

$stmt = $db->prepare("SELECT * FROM obiective");
$stmt->execute();
$obiective = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listă de obiective</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>
  <body>

    <div class="container">

      <h2 align="center">Listă de obiective</h2>

      <ul>
        <?php foreach ($obiective as $obiectiv): ?>
          <li <?php if($obiectiv['status'] == 1){ echo "class='done'";} ?> > <?php echo $obiectiv['nume']; ?> <?php if($obiectiv['status'] == 0){ echo '<a href="complet.php?id=' . $obiectiv['id'] . '">Făcut</a>';} ?></li>
        <?php endforeach; ?>
      </ul>

      <form class="" action="add.php" method="post" autocomplete="off">
        <input type="text" name="obiectiv" value="" placeholder="Scrie-ți obiectivul...">
        <button type="submit" name="add">Adaugă</button>
      </form>
    </div>

  </body>
</html>
