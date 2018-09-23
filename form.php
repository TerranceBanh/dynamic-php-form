
<!Doctype html>
<html lang="en" >
  <head>
    <link rel="stylesheet" href="form.css" type="text/css">
    <meta charset="utf-8">
    <title>Universal Personal Information</title>
  </head>
  <body>
    <?php include_once 'form_variables.php'; ?>
    <?php
      //Translates PHP Multidimensional Array Into Javascript Multidimensional Array
      echo "<script>let formStrings = " . json_encode($formStrings) . " </script>";
    ?>
    <div>
      <form action="<?php echo htmlspecialchars('./form_db_process.php'); ?>" method="post">
        <h2>Universal Personal Information</h2>
        <script src="./form.js" charset="utf-8"></script>
        <input type="submit" name="submit" value="submit">
      </form>
    </div>

  </body>
</html>

<!--
post on github
make a localhost version where login credentials are required
-->
