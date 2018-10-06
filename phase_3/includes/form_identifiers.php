<?php
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
