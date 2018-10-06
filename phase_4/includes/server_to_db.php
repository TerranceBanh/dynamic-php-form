<?php
  include './ChromePhp.php';
  include './db_connect.php';

  function securityFilter($conn, $data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($conn, $data);
    return $data;
  }


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    //Stored Booleans for checking $_POST values
    $category1Post =
    !empty($_POST['input111']) &&
    !empty($_POST['input112']) &&
    !empty($_POST['input113']) &&
    !empty($_POST['input121']) &&
    !empty($_POST['input122']) &&
    !empty($_POST['input123']) &&
    !empty($_POST['input131']) &&
    !empty($_POST['input132']) &&
    !empty($_POST['input133']);

    $category2Post =
    !empty($_POST['input211']) &&
    !empty($_POST['input212']) &&
    !empty($_POST['input213']) &&
    !empty($_POST['input221']) &&
    !empty($_POST['input222']) &&
    !empty($_POST['input223']) &&
    !empty($_POST['input231']) &&
    !empty($_POST['input232']) &&
    !empty($_POST['input233']);

    $category3Post =
    !empty($_POST['input311']) &&
    !empty($_POST['input312']) &&
    !empty($_POST['input313']) &&
    !empty($_POST['input321']) &&
    !empty($_POST['input322']) &&
    !empty($_POST['input323']) &&
    !empty($_POST['input331']) &&
    !empty($_POST['input332']) &&
    !empty($_POST['input333']);


    if ($category1Post || $category2Post || $category3Post) {

      if ($category1Post) {
        $input111 = securityFilter($conn, $_POST['input111']);
        $input112 = securityFilter($conn, $_POST['input112']);
        $input113 = securityFilter($conn, $_POST['input113']);
        $input121 = securityFilter($conn, $_POST['input121']);
        $input122 = securityFilter($conn, $_POST['input122']);
        $input123 = securityFilter($conn, $_POST['input123']);
        $input131 = securityFilter($conn, $_POST['input131']);
        $input132 = securityFilter($conn, $_POST['input132']);
        $input133 = securityFilter($conn, $_POST['input133']);

        $category1 = "INSERT INTO category1 (  input111,    input112,    input113,    input121,    input122,    input123,    input131,    input132,    input133)
        VALUES                ('$input111', '$input112', '$input113', '$input121', '$input122', '$input123', '$input131', '$input132', '$input133');";
        mysqli_query($conn, $category1);
      }


      if ($category2Post) {
        $input211 = securityFilter($conn, $_POST['input211']);
        $input212 = securityFilter($conn, $_POST['input212']);
        $input213 = securityFilter($conn, $_POST['input213']);
        $input221 = securityFilter($conn, $_POST['input221']);
        $input222 = securityFilter($conn, $_POST['input222']);
        $input223 = securityFilter($conn, $_POST['input223']);
        $input231 = securityFilter($conn, $_POST['input231']);
        $input232 = securityFilter($conn, $_POST['input232']);
        $input233 = securityFilter($conn, $_POST['input233']);

        $category2 = "INSERT INTO category2 (  input211,    input212,    input213,    input221,    input222,    input223,    input231,    input232,    input233)
        VALUES                ('$input211', '$input212', '$input213', '$input221', '$input222', '$input223', '$input231', '$input232', '$input233');";
        mysqli_query($conn, $category2);
      }


      if ($category3Post) {
        $input311 = securityFilter($conn, $_POST['input311']);
        $input312 = securityFilter($conn, $_POST['input312']);
        $input313 = securityFilter($conn, $_POST['input313']);
        $input321 = securityFilter($conn, $_POST['input321']);
        $input322 = securityFilter($conn, $_POST['input322']);
        $input323 = securityFilter($conn, $_POST['input323']);
        $input331 = securityFilter($conn, $_POST['input331']);
        $input332 = securityFilter($conn, $_POST['input332']);
        $input333 = securityFilter($conn, $_POST['input333']);
        $category3 = "INSERT INTO category3 (  input311,    input312,    input313,    input321,    input322,    input323,    input331,    input332,    input333)
        VALUES                ('$input311', '$input312', '$input313', '$input321', '$input322', '$input323', '$input331', '$input332', '$input333');";
        mysqli_query($conn, $category3);
      }

      header('Location: ../form_html.php?signup=success');

    } else {
      echo 'EMPTY FIELDS';
    }
  }


    // $stmtCategory1 = mysqli_stmt_init($conn);
    //
    // if(!myqli_stmt_prepare($stmtCategor1, $category1)) {
    //   echo 'SQL insert error @ category1'
    // } else {
    //   mysqli_stmt_bind_param($stmtCategory1, )
    // }

 ?>
