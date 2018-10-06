<?php include './includes/ChromePhp.php' ?><!--PHP Console Log (Chrome Logger)-->
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>let write = (html) => {return document.write(html)}</script><!--Write to document object-->
    <?php include './includes/form_identifiers.php' ?>
    <link rel="stylesheet" href="./form.css">
    <title>Universal Form</title>
  </head>

  <body>
    <h2>Universal Form</h2>
    <nav><!--Navigation Buttons-->
      <script src="./js/form_navigation.js"></script>
    </nav>

    <form class="#" action="#" method="post"><!--Form Input Fields-->
      <script src="./js/form_render.js"></script>
    </form>

    <!--Form Algorithms-->
    <?php include './includes/form_algorithms.php' ?>
  </body>

</html>
