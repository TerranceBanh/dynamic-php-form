<?php include 'ChromePhp.php'; ?> <!--PHP Console Log (Chrome Logger)-->
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <?php include 'form_identifiers.php'; ?>
    <link rel="stylesheet" href="./form.css">
    <title>Universal Form</title>
  </head>

  <body>
    <h2>Universal Form</h2>

    <nav><!--Navigation Buttons-->
      <button id="category1Btn">category1</button>
      <button id="category2Btn">category2</button>
      <button id="category3Btn">category3</button>
    </nav>



    <form class="#" action="#" method="post"><!--Form Input Fields-->

      <h3 class="display-none" id="category1Title">category1</h3>
      <fieldset class="display-none" id="subcategory1_1Fieldset">
        <h4 class="display-none" id="subcategory1_1Title">subcategory1_1</h4>
          <input type='text' class="display-none" id="input1_1_1" placeholder="placeholder1_1_1">
          <input type='text' class="display-none" id="input1_1_2" placeholder="placeholder1_1_2">
          <input type='text' class="display-none" id="input1_1_3" placeholder="placeholder1_1_3">
      </fieldset>

      <fieldset class="display-none" id="subcategory1_2Fieldset">
        <h4 class="display-none" id="subcategory1_2Title">subcategory1_2</h4>
          <input type='text' class="display-none" id="input1_2_1" placeholder="placeholder1_2_1">
          <input type='text' class="display-none" id="input1_2_2" placeholder="placeholder1_2_2">
          <input type='text' class="display-none" id="input1_2_3" placeholder="placeholder1_2_3">
      </fieldset>

      <fieldset class="display-none" id="subcategory1_3Fieldset">
        <h4 class="display-none" id="subcategory1_3Title">subcategory1_3</h4>
          <input type='text' class="display-none" id="input1_3_1" placeholder="placeholder1_3_1">
          <input type='text' class="display-none" id="input1_3_2" placeholder="placeholder1_3_2">
          <input type='text' class="display-none" id="input1_3_3" placeholder="placeholder1_3_3">
      </fieldset>




      <h3 class="display-none" id="category2Title">category2</h3>
      <fieldset class="display-none" id="subcategory2_1Fieldset">
        <h4 class="display-none" id="subcategory2_1Title">subcategory2_1</h4>
          <input type='text' class="display-none" id="input2_1_1" placeholder="placeholder2_1_1">
          <input type='text' class="display-none" id="input2_1_2" placeholder="placeholder2_1_2">
          <input type='text' class="display-none" id="input2_1_3" placeholder="placeholder2_1_3">
      </fieldset>

      <fieldset class="display-none" id="subcategory2_2Fieldset">
        <h4 class="display-none" id="subcategory2_2Title">subcategory2_2</h4>
          <input type='text' class="display-none" id="input2_2_1" placeholder="placeholder2_2_1">
          <input type='text' class="display-none" id="input2_2_2" placeholder="placeholder2_2_2">
          <input type='text' class="display-none" id="input2_2_3" placeholder="placeholder2_2_3">
      </fieldset>

      <fieldset class="display-none" id="subcategory2_3Fieldset">
        <h4 class="display-none" id="subcategory2_3Title">subcategory2_3</h4>
          <input type='text' class="display-none" id="input2_3_1" placeholder="placeholder2_3_1">
          <input type='text' class="display-none" id="input2_3_2" placeholder="placeholder2_3_2">
          <input type='text' class="display-none" id="input2_3_3" placeholder="placeholder2_3_3">
      </fieldset>




      <h3 class="display-none" id="category3Title">category3</h3>
      <fieldset class="display-none" id="subcategory3_1Fieldset">
        <h4 class="display-none" id="subcategory3_1Title">subcategory3_1</h4>
          <input type='text' class="display-none" id="input3_1_1" placeholder="placeholder3_1_1">
          <input type='text' class="display-none" id="input3_1_2" placeholder="placeholder3_1_2">
          <input type='text' class="display-none" id="input3_1_3" placeholder="placeholder3_1_3">
      </fieldset>

      <fieldset class="display-none" id="subcategory3_2Fieldset">
        <h4 class="display-none" id="subcategory3_2Title">subcategory3_2</h4>
          <input type='text' class="display-none" id="input3_2_1" placeholder="placeholder3_2_1">
          <input type='text' class="display-none" id="input3_2_2" placeholder="placeholder3_2_2">
          <input type='text' class="display-none" id="input3_2_3" placeholder="placeholder3_2_3">
      </fieldset>

      <fieldset class="display-none" id="subcategory3_3Fieldset">
        <h4 class="display-none" id="subcategory3_3Title">subcategory3_3</h4>
          <input type='text' class="display-none" id="input3_3_1" placeholder="placeholder3_3_1">
          <input type='text' class="display-none" id="input3_3_2" placeholder="placeholder3_3_2">
          <input type='text' class="display-none" id="input3_3_3" placeholder="placeholder3_3_3">
      </fieldset>

    </form>

    <script src="form_algorithms.js"></script>
  </body>
</html>
