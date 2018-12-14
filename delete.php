<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete</title>
  </head>
  <body>
    <?php
      include_once("config.php");
      $id = $_GET['id'];

      $sql = "DELETE FROM pdotrial1 WHERE id = :id";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(["id" => $id]);
      // echo "POST DELETED";
      echo '<script>window.location.href = "indexadmin.php";</script>';
    ?>
  </body>
</html>
