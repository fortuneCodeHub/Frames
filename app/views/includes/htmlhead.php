<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>
      <?php 
      $FolderURL = $_GET["url"];
      $query = explode("/",$FolderURL);
      $Foldername = $query[0];
      echo $Foldername. "- FortuneCodeHub";
      ?>
    </title>
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> -->

    <!-- CSS Links -->
    <?php include_once "cssbootstraplink.php" ?>
  </head>