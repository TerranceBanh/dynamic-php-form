<?php
  $formIdentifiers = array(//Dynamically Adjust Form Here
    'category1' => array('subcategory11' => array('input111' => 'placeholder111',
                                                   'input112' => 'placeholder112',
                                                   'input113' => 'placeholder113'
                                                  ),
                         'subcategory12' => array('input121' => 'placeholder121',
                                                   'input122' => 'placeholder122',
                                                   'input123' => 'placeholder123'
                                                   ),
                         'subcategory13' => array('input131' => 'placeholder131',
                                                   'input132' => 'placeholder132',
                                                   'input133' => 'placeholder133'
                                                   )
                        ),
    'category2' => array('subcategory21' => array('input211' => 'placeholder211',
                                                   'input212' => 'placeholder212',
                                                   'input213' => 'placeholder213'
                                                   ),
                         'subcategory22' => array('input221' => 'placeholder221',
                                                   'input222' => 'placeholder222',
                                                   'input223' => 'placeholder223'
                                                   ),
                         'subcategory23' => array('input231' => 'placeholder231',
                                                   'input232' => 'placeholder232',
                                                   'input233' => 'placeholder233'
                                                  )
                        ),
    'category3' => array('subcategory31' => array('input311' => 'placeholder311',
                                                   'input312' => 'placeholder312',
                                                   'input313' => 'placeholder313'
                                                  ),
                         'subcategory32' => array('input321' => 'placeholder321',
                                                   'input322' => 'placeholder322',
                                                   'input323' => 'placeholder323'
                                                   ),
                         'subcategory33' => array('input331' => 'placeholder331',
                                                   'input332' => 'placeholder332',
                                                   'input333' => 'placeholder333'
                                                   )
                        )
  );
  //Translate form PHP to Javscript
  echo '<script> let formIdentifiers = ' . Json_encode($formIdentifiers) . '</script>';
?>
