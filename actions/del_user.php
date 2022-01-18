<?php

$userId = $_POST['id'];

$user = $password = 'root';
$pdo = new Pdo('mysql:dbname=fullstac2; fulstack=127.0.0.1', $user);

$query = "DELETE FROM users WHERE id = :id";
 $res = $pdo->prepare($query);
 $res->execute([
     ':id' =>$userId,
      ]);

      header('Location: ../index.php');
