<?php//Identifiers for Algorithm
  include 'ChromePhp.php'; //PHP Console Log (Chrome Logger)
  $formIdentifiers = array(//Dynamically Adjust Form Here
    'category1' => array('subcategory1_1' => array('input1_1_1' => 'placeholder1_1_1',
                                                   'input1_1_2' => 'placeholder1_1_2',
                                                   'input1_1_3' => 'placeholder1_1_3'
                                                  ),
                         'subcategory1_2' => array('input1_2_1' => 'placeholder1_2_1',
                                                   'input1_2_2' => 'placeholder1_2_2',
                                                   'input1_2_3' => 'placeholder1_2_3'
                                                   ),
                         'subcategory1_3' => array('input1_3_1' => 'placeholder1_3_1',
                                                   'input1_3_2' => 'placeholder1_3_2',
                                                   'input1_3_3' => 'placeholder1_3_3'
                                                   )
                        ),
    'category2' => array('subcategory2_1' => array('input2_1_1' => 'placeholder2_1_1',
                                                   'input2_1_2' => 'placeholder2_1_2',
                                                   'input2_1_3' => 'placeholder2_1_3'
                                                   ),
                         'subcategory2_2' => array('input2_2_1' => 'placeholder2_2_1',
                                                   'input2_2_2' => 'placeholder2_2_2',
                                                   'input2_2_3' => 'placeholder2_2_3'
                                                   ),
                         'subcategory2_3' => array('input2_3_1' => 'placeholder2_3_1',
                                                   'input2_3_2' => 'placeholder2_3_2',
                                                   'input2_3_3' => 'placeholder2_3_3'
                                                  )
                        ),
    'category3' => array('subcategory3_1' => array('input3_1_1' => 'placeholder3_1_1',
                                                   'input3_1_2' => 'placeholder3_1_2',
                                                   'input3_1_3' => 'placeholder3_1_3'
                                                  ),
                         'subcategory3_2' => array('input3_2_1' => 'placeholder3_2_1',
                                                   'input3_2_2' => 'placeholder3_2_2',
                                                   'input3_2_3' => 'placeholder3_2_3'
                                                   ),
                         'subcategory3_3' => array('input3_3_1' => 'placeholder3_3_1',
                                                   'input3_3_2' => 'placeholder3_3_2',
                                                   'input3_3_3' => 'placeholder3_3_3'
                                                   )
                        )
  );
  //Translate form PHP to Javscript
  echo '<script> let formIdentifiers = ' . Json_encode($formIdentifiers) . '</script>';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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



    <script>
      //Navigation Button Declarations
      let category1Btn = $('#category1Btn')
      let category2Btn = $('#category2Btn')
      let category3Btn = $('#category3Btn')



      //Form Fields Declarations
      let category1Title = $('#category1Title')
        let subcategory1_1Fieldset = $('#subcategory1_1Fieldset')
        let subcategory1_1Title = $('#subcategory1_1Title')
          let input1_1_1 = $('#input1_1_1')
          let input1_1_2 = $('#input1_1_2')
          let input1_1_3 = $('#input1_1_3')

        let subcategory1_2Fieldset = $('#subcategory1_2Fieldset')
        let subcategory1_2Title = $('#subcategory1_2Title')
          let input1_2_1 = $('#input1_2_1')
          let input1_2_2 = $('#input1_2_2')
          let input1_2_3 = $('#input1_2_3')

        let subcategory1_3Fieldset = $('#subcategory1_3Fieldset')
        let subcategory1_3Title = $('#subcategory1_3Title')
          let input1_3_1 = $('#input1_3_1')
          let input1_3_2 = $('#input1_3_2')
          let input1_3_3 = $('#input1_3_3')




      let category2Title = $('#category2Title')
        let subcategory2_1Fieldset = $('#subcategory2_1Fieldset')
        let subcategory2_1Title = $('#subcategory2_1Title')
          let input2_1_1 = $('#input2_1_1')
          let input2_1_2 = $('#input2_1_2')
          let input2_1_3 = $('#input2_1_3')

        let subcategory2_2Fieldset = $('#subcategory2_2Fieldset')
        let subcategory2_2Title = $('#subcategory2_2Title')
          let input2_2_1 = $('#input2_2_1')
          let input2_2_2 = $('#input2_2_2')
          let input2_2_3 = $('#input2_2_3')

        let subcategory2_3Fieldset = $('#subcategory2_3Fieldset')
        let subcategory2_3Title = $('#subcategory2_3Title')
          let input2_3_1 = $('#input2_3_1')
          let input2_3_2 = $('#input2_3_2')
          let input2_3_3 = $('#input2_3_3')




      let category3Title = $('#category3Title')
        let subcategory3_1Fieldset = $('#subcategory3_1Fieldset')
        let subcategory3_1Title = $('#subcategory3_1Title')
          let input3_1_1 = $('#input3_1_1')
          let input3_1_2 = $('#input3_1_2')
          let input3_1_3 = $('#input3_1_3')

        let subcategory3_2Fieldset = $('#subcategory3_2Fieldset')
        let subcategory3_2Title = $('#subcategory3_2Title')
          let input3_2_1 = $('#input3_2_1')
          let input3_2_2 = $('#input3_2_2')
          let input3_2_3 = $('#input3_2_3')

        let subcategory3_3Fieldset = $('#subcategory3_3Fieldset')
        let subcategory3_3Title = $('#subcategory3_3Title')
          let input3_3_1 = $('#input3_3_1')
          let input3_3_2 = $('#input3_3_2')
          let input3_3_3 = $('#input3_3_3')




      //Navigation Button Click Functions
      category1Btn.on('click', () => {//Change to 1st form
        if (category1Title.css('display') == 'none') {


          category1Title.css('display', 'block')
            subcategory1_1Fieldset.css('display', 'inline')
            subcategory1_1Title.css('display', 'block')
              input1_1_1.css('display', 'block')
              input1_1_2.css('display', 'block')
              input1_1_3.css('display', 'block')

            subcategory1_2Fieldset.css('display', 'inline')
            subcategory1_2Title.css('display', 'block')
              input1_2_1.css('display', 'block')
              input1_2_2.css('display', 'block')
              input1_2_3.css('display', 'block')

            subcategory1_3Fieldset.css('display', 'inline')
            subcategory1_3Title.css('display', 'block')
              input1_3_1.css('display', 'block')
              input1_3_2.css('display', 'block')
              input1_3_3.css('display', 'block')



          category2Title.css('display', 'none')
            subcategory2_1Fieldset.css('display', 'none')
            subcategory2_1Title.css('display', 'none')
              input2_1_1.css('display', 'none')
              input2_1_2.css('display', 'none')
              input2_1_3.css('display', 'none')

            subcategory2_2Fieldset.css('display', 'none')
            subcategory2_2Title.css('display', 'none')
              input2_2_1.css('display', 'none')
              input2_2_2.css('display', 'none')
              input2_2_3.css('display', 'none')

            subcategory2_3Fieldset.css('display', 'none')
            subcategory2_3Title.css('display', 'none')
              input2_3_1.css('display', 'none')
              input2_3_2.css('display', 'none')
              input2_3_3.css('display', 'none')



          category3Title.css('display', 'none')
            subcategory3_1Fieldset.css('display', 'none')
            subcategory3_1Title.css('display', 'none')
              input3_1_1.css('display', 'none')
              input3_1_2.css('display', 'none')
              input3_1_3.css('display', 'none')

            subcategory3_2Fieldset.css('display', 'none')
            subcategory3_2Title.css('display', 'none')
              input3_2_1.css('display', 'none')
              input3_2_2.css('display', 'none')
              input3_2_3.css('display', 'none')

            subcategory3_3Fieldset.css('display', 'none')
            subcategory3_3Title.css('display', 'none')
              input3_3_1.css('display', 'none')
              input3_3_2.css('display', 'none')
              input3_3_3.css('display', 'none')
        }
      })




      category2Btn.on('click', () => {//Change to 2nd form
        if (category2Title.css('display') == 'none') {


          category1Title.css('display', 'none')
            subcategory1_1Fieldset.css('display', 'none')
            subcategory1_1Title.css('display', 'none')
              input1_1_1.css('display', 'none')
              input1_1_2.css('display', 'none')
              input1_1_3.css('display', 'none')

            subcategory1_2Fieldset.css('display', 'none')
            subcategory1_2Title.css('display', 'none')
              input1_2_1.css('display', 'none')
              input1_2_2.css('display', 'none')
              input1_2_3.css('display', 'none')

            subcategory1_3Fieldset.css('display', 'none')
            subcategory1_3Title.css('display', 'none')
              input1_3_1.css('display', 'none')
              input1_3_2.css('display', 'none')
              input1_3_3.css('display', 'none')



          category2Title.css('display', 'block')
            subcategory2_1Fieldset.css('display', 'inline')
            subcategory2_1Title.css('display', 'block')
              input2_1_1.css('display', 'block')
              input2_1_2.css('display', 'block')
              input2_1_3.css('display', 'block')

            subcategory2_2Fieldset.css('display', 'inline')
            subcategory2_2Title.css('display', 'block')
              input2_2_1.css('display', 'block')
              input2_2_2.css('display', 'block')
              input2_2_3.css('display', 'block')

            subcategory2_3Fieldset.css('display', 'inline')
            subcategory2_3Title.css('display', 'block')
              input2_3_1.css('display', 'block')
              input2_3_2.css('display', 'block')
              input2_3_3.css('display', 'block')



          category3Title.css('display', 'none')
            subcategory3_1Fieldset.css('display', 'none')
            subcategory3_1Title.css('display', 'none')
              input3_1_1.css('display', 'none')
              input3_1_2.css('display', 'none')
              input3_1_3.css('display', 'none')

            subcategory3_2Fieldset.css('display', 'none')
            subcategory3_2Title.css('display', 'none')
              input3_2_1.css('display', 'none')
              input3_2_2.css('display', 'none')
              input3_2_3.css('display', 'none')

            subcategory3_3Fieldset.css('display', 'none')
            subcategory3_3Title.css('display', 'none')
              input3_3_1.css('display', 'none')
              input3_3_2.css('display', 'none')
              input3_3_3.css('display', 'none')
        }
      })




        category3Btn.on('click', () => {//Change to 3rd form
          if (category3Title.css('display') == 'none') {


          category1Title.css('display', 'none')
            subcategory1_1Fieldset.css('display', 'none')
            subcategory1_1Title.css('display', 'none')
              input1_1_1.css('display', 'none')
              input1_1_2.css('display', 'none')
              input1_1_3.css('display', 'none')

            subcategory1_2Fieldset.css('display', 'none')
            subcategory1_2Title.css('display', 'none')
              input1_2_1.css('display', 'none')
              input1_2_2.css('display', 'none')
              input1_2_3.css('display', 'none')

            subcategory1_3Fieldset.css('display', 'none')
            subcategory1_3Title.css('display', 'none')
              input1_3_1.css('display', 'none')
              input1_3_2.css('display', 'none')
              input1_3_3.css('display', 'none')



          category2Title.css('display', 'none')
            subcategory2_1Fieldset.css('display', 'none')
            subcategory2_1Title.css('display', 'none')
              input2_1_1.css('display', 'none')
              input2_1_2.css('display', 'none')
              input2_1_3.css('display', 'none')

            subcategory2_2Fieldset.css('display', 'none')
            subcategory2_2Title.css('display', 'none')
              input2_2_1.css('display', 'none')
              input2_2_2.css('display', 'none')
              input2_2_3.css('display', 'none')

            subcategory2_3Fieldset.css('display', 'none')
            subcategory2_3Title.css('display', 'none')
              input2_3_1.css('display', 'none')
              input2_3_2.css('display', 'none')
              input2_3_3.css('display', 'none')



          category3Title.css('display', 'block')
            subcategory3_1Fieldset.css('display', 'inline')
            subcategory3_1Title.css('display', 'block')
              input3_1_1.css('display', 'block')
              input3_1_2.css('display', 'block')
              input3_1_3.css('display', 'block')

            subcategory3_2Fieldset.css('display', 'inline')
            subcategory3_2Title.css('display', 'block')
              input3_2_1.css('display', 'block')
              input3_2_2.css('display', 'block')
              input3_2_3.css('display', 'block')

            subcategory3_3Fieldset.css('display', 'inline')
            subcategory3_3Title.css('display', 'block')
              input3_3_1.css('display', 'block')
              input3_3_2.css('display', 'block')
              input3_3_3.css('display', 'block')
        }
      })
    </script>
  </body>
</html>
