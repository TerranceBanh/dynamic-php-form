<?php //Dynamically declare Javascript variables & functions with PHP
  echo '<script>';
  foreach ($formIdentifiers as $category => $value) {//Dynamically declare Javascript variables
    echo 'let ' . $category . 'Btn' . ' = $("#' . $category . 'Btn");';
    echo 'let ' . $category . 'Title' . ' = $("#' . $category . 'Title");';
    foreach ($formIdentifiers[$category] as $subcategory => $value) {
      echo 'let ' . $subcategory  . 'Title = $("#' . $subcategory . 'Title");';
      echo 'let ' . $subcategory  . 'Fieldset = $("#' . $subcategory . 'Fieldset");';
      foreach ($formIdentifiers[$category][$subcategory] as $input => $value) {
        echo 'let ' . $input . ' = $("#' . $input . '");';
      }
    }
  }

  foreach ($formIdentifiers as $category => $value) {//When any navigation button is clicked all form fields set to "display: none"
    echo $category . 'Btn.on("click", () => {';
      foreach ($formIdentifiers as $category => $value) {
        echo $category . 'Title.css("display", "none");';
        foreach ($formIdentifiers[$category] as $subcategory => $value) {
          echo $subcategory . 'Title.css("display", "none");';
          echo $subcategory . 'Fieldset.css("display", "none");';
          foreach ($formIdentifiers[$category][$subcategory] as $input => $value) {
            echo $input . '.css("display", "none");';
          }
        }
      }
    echo '});';
  }

  foreach ($formIdentifiers as $category => $value) {//When a navigation button is clicked show intended form
    echo
    $category . 'Btn.on("click", () => {
      if (' . $category . 'Title.css("display") == "none") {'
        . $category . 'Title.css("display", "block");';
      foreach ($formIdentifiers[$category] as $subcategory => $value) {
        echo $subcategory . 'Title.css("display", "block");';
        echo $subcategory . 'Fieldset.css("display", "inline");';
        foreach ($formIdentifiers[$category][$subcategory] as $input => $value) {
          echo $input . '.css("display", "block");';
        }
      }
    echo '}});';
  }
  echo '</script>';
?>
