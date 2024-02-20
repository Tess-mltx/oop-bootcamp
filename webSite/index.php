<?php
require("publications.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Web Site</title>
  <!-- <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8"> -->
</head>

<body>         
    <?php
        foreach ($publications as $publication) {
            echo 
            '<h2>' . $publication->setDisplay() . '</h2>
            <p>' . $publication->content . '</p>';
            }
        ?>
</body>