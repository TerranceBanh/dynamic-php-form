<?php
  $formStrings = array(//Variable Names
    array(//Basic Information
      array(//Name
        'fName', 'mName', 'lName'),
      array(//Main Contact
        'cPhone', 'cEmail')),
    array(//Residential Information
      array(//Home Address
        'hUnit', 'hLocNum', 'hStreet', 'hCity', 'hProv', 'hCountry'),
      array(//Home Contact
        'hPhone', 'hPhoneExt', 'hCellphone', 'hVoicemail', 'hEmail', 'hFax')),
    array(//Workplace Information
      array(//Workplace Address & Profession
        'wUnit', 'wLocNum', 'wStreet', 'wCity', 'wProv', 'wCountry', 'wProfession'),
      array(//Workplace Contact
        'wPhone', 'wPhoneExt', 'wCellphone', 'wVoicemail', 'wEmail', 'wFax')),
    array(//Business Information
      array(//Business Address & Profession
        'busUnit', 'busLocNum', 'busStreet', 'busCity', 'busProv', 'busCountry', 'busProfession'),
      array(//Business Contact
        'busPhone', 'busPhoneExt', 'busCellphone', 'busVoicemail', 'busEmail', 'busFax')),
    array(//Personal Security Information
      array(//Various Identifications
        'sin', 'dln', 'phn'),
      array(//Birth Informaiton
        'birYear', 'birMonth', 'birDay', 'birUnit', 'birLocNum', 'birStreet', 'birCity', 'birProv', 'birCountry', 'birNum'),
      array(//Other
        'lang', 'citizenship', 'mStat')),
    array(//Health Information
      array(//Genetic Traits/Identity
        'race', 'ethnic', 'gender', 'blood', 'sexOrient'),
      array(//Body Weight/Height
        'shoeSize', 'pantSize', 'shirtSize', 'height', 'weight')),
    array(//Family Member Information
      array(//Name
        'relFName', 'relMName', 'relLName'),
      array(//Other
        'relGender', 'relate')),
    array(//Credit & Debit & Membership Card Information
      array('cardNum', 'cardExp', 'cardName', 'cardCSC', 'cardBrand')),
    array(//Other
      array('url', 'notes'))
  );
  $formVariableIndex = 0;
  for($i = 0; $i < count($formStrings) - 2; $i++) {//Variable Declaration
    for($k = 0; $k < count($formStrings[$i]) - 2; $k++) {
      for($j = 0; $j < count($formStrings[$i][$j]) - 1; $j++) {
        ${'formVaribles'.$formVariableIndex} = "";
      }
    }
  }
?>
<!--  -->
<!-- The for loop condition seems to be inaccurate and was adjusted -->
<!-- May have to change the structuring of the database compared to the structure of the arrays -->
