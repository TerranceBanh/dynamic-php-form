<?php
  $formVariables = array(//Variable Names
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
        'busPhone', 'wPhoneExt', 'busCellphone', 'busVoicemail', 'busEmail', 'busFax')),
    array(//Various Identifications
      array(//Social Insurance Number
        'fname', 'lname', 'sin'
      )
      array(//Driver License Number
        'fname','lname','dln','dateIss','dateExp', 'restrictEndorse','Class','weight','height' 'sex' 'eye', 'hair'
      )
      array(//Care Card
        'fname', 'lname', 'cardNum'
      )
      array(//Passport

      )
      array(//Birth Certificate

      )
      array(//Permanent Resident Card

      )
      array(//Provincial Health Card

      )
      array(//Government Identification Card

      )
      array(//Record of Landing Form/Confirmation of Permanent Residence (IM5292)

      )
      array(//Work Permit

      )
      array(//Study Permit

      )
      array(//Vistor Record

      )
      array(//Temporary Resident Permit

      )
      array(//Refugee Approved Status

      )
      array(//Canadian Military Identification

      )
      array(//Federal Police Identification

      )
      array(//Federal/Provincial/Municipal Government Identification

      )
      array(//Old Age Security Identification

      )
      array(//Indian & Northern Affairs Card

      )
      array(//Canada Border Services Agency NEXUS Card

      )
      array(//Firearms License

      )
          'sin', 'dln', 'phn', 'passport', 'birNum', 'permRes'),
    array(//Personal Security Information
      array(//Birth Informaiton
        'birYear', 'birMonth', 'birDay', 'birUnit', 'birLocNum', 'birStreet', 'birCity', 'birProv', 'birCountry', 'birNum'),
      array(//Other
        'lang', 'citizenship', 'mStat')),
    array(//Health Information
      array(//Genetic Traits/Identity
        'race', 'ethnic', 'gender', 'blood', 'sexOrient'),
      array(//Body Weight/Height
        'shoeSize', 'pantSize', 'shirtSize', 'height', 'weight'),
      array(//Existing Teeth
        'ur1', 'ur2', 'ur3', 'ur4', 'ur5', 'ur6', 'ur7', 'ur8',
        'ul1', 'ul2', 'ul3', 'ul4', 'ul5', 'ul6', 'ul7', 'ul8',
        'll1', 'll2', 'll3', 'll4', 'll5', 'll6', 'll7', 'll8',
        'lr1', 'lr2', 'lr3', 'lr4', 'lr5', 'lr6', 'lr7', 'lr8'),
      array(//Medications & Suppliments
        'meds', 'sups'),
      array(//Medical Conditions

      )
      array(//Diet

      )
      array(//Physical & Mental Exercises

      )
    array(//Insurance Policies

    )
    array(//Family Member Information
      array(//Name
        'relFName', 'relMName', 'relLName'),
      array(//Other
        'relGender', 'relate')),
    array(//Credit & Debit & Membership Card Information
      array('cardName', 'cardNum', 'cardExp', 'cardName', 'cardCSC', 'cardBrand')
      array('cardName', 'cardNum')),
    array(//Other
      array('url', 'notes'))
  );
  for($i = 0; $i < count($formVariables) - 2; $i++) {//Variable Declaration
    for($k = 0; $k < count($formVariables[$i]) - 2; $k++) {
      for($j = 0; $j < count($formVariables[$i][$j]) - 1; $j++) {
        ${$formVariables[$i][$j][$k]} = "";
      }
    }
  }
?>
<!-- When attempting to build a better dynamically manageable coding system in terms scalability many technical issues arises -->
<!-- While entering new credentials if crossed referenced data blocks input let the user input information and remind the user to have the sourced information changed-->
<!-- The for loop condition seems to be inaccurate and was adjusted -->
<!-- May have to change the structuring of the database compared to the structure of the arrays -->
<!-- Give option to ignore unmatched cross referenced data -->
<!-- Cross reference with all data and check to make sure everything matches
if anything is not matching ask user to make sure that all of his information with all other companies
then have user confirm that task is complete
otherwise it will be logged for later-->
<!--NEW CATEGORIES
Medications & Suppliments
Medical Conditions
Existing Teeth
Diet
Physical & Mental Exercises
Insurance Policies
Various Identifications
-->
<!--
age output
Account Numbers all services
Portfolio Picture
Library Card
-->
