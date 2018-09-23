<?php

  include_once 'form_db_connect.php';

  foreach($_POST as $var => $val) {
    echo $var . '=>' . $val . '<br>';
  }

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      foreach($_POST as $var => $val) {
        $formVariables = security_filter($conn, $_POST[$var]);
        echo $var . '=>' . $val . '<br>';
      }
    }

  $insert = array(
    $clients                 = "INSERT INTO clients                 (first_name,              middle_name,              last_name,              main_email,          main_phone)
                                VALUES                              ('$_POST[fName]',         '$_POST[mName]',          '$_POST[lName]',        '$_POST[cEmail]',    '$_POST[cPhone]');",
    $residential_information = "INSERT INTO residential_information (home_unit_number,        home_address_number,      home_street,            home_city,           home_province_or_state,      home_country,         home_phone,              home_phone_extension,       home_cellphone,            home_voicemail,         home_email,                    home_fax)
                                VALUES                              ('$_POST[hUnit]',         '$_POST[hLocNum]',        '$_POST[hStreet]',      '$_POST[hCity]',     '$_POST[hProv]',             '$_POST[hCountry]',   '$_POST[hPhone]',        '$_POST[hPhoneExt]',        '$_POST[hCellphone]',      '$_POST[hVoicemail]',   '$_POST[hEmail]',              '$_POST[hFax]');",
    $workplace_information   = "INSERT INTO workplace_information   (workplace_unit_number,   workplace_address_number, workplace_street,       workplace_city,      workplace_province_or_state, workplace_country,    workplace_profession,    workplace_phone,            workplace_phone_extension, workplace_cellphone,    workplace_voicemail,           workplace_email,      workplace_fax)
                                VALUES                              ('$_POST[wUnit]',         '$_POST[hLocNum]',        '$_POST[wStreet]',      '$_POST[wCity]',     '$_POST[wProv]',             '$_POST[wCountry]',   '$_POST[wProfession]',   '$_POST[wPhone]',           '$_POST[wPhoneExt]',       '$_POST[wCellphone]',   '$_POST[wVoicemail]',          '$_POST[wEmail]',     '$_POST[wFax]');",
    $business_information    = "INSERT INTO business_information    (business_unit_number,    business_address_number,  business_street,        business_city,       business_province_or_state,  business_country,     business_profession,     business_phone,             business_phone_extension,  business_cellphone,     business_voicemail,            business_email,       business_fax)
                                VALUES                              ('$_POST[busUnit]',       '$_POST[busLocNum]',      '$_POST[busStreet]',    '$_POST[busCity]',   '$_POST[busProv]',           '$_POST[busCountry]', '$_POST[busProfession]', '$_POST[busPhone]',         '$_POST[busPhoneExt]',     '$_POST[busCellphone]', '$_POST[busVoicemail]',        '$_POST[busEmail]',   '$_POST[busFax]');",
    $security_information    = "INSERT INTO security_information    (social_insurance_number, driver_license_number,    personal_health_number, birth_year,          birth_month,                 birth_day,            birth_place_unit_number, birth_place_address_number, birth_place_street,        birth_place_city,       birth_place_province_or_state, birth_place_country,  birth_certificate_number, languages, citizenship,    martial_status)
                                VALUES                              ('$_POST[sin]',           '$_POST[dln]',            '$_POST[phn]',          '$_POST[birYear]',   '$_POST[birMonth]',          '$_POST[birDay]',     '$_POST[birUnit]',       '$_POST[birLocNum]',        '$_POST[birStreet]',       '$_POST[birCity]',      '$_POST[birProv]',             '$_POST[birCountry]', '$_POST[birNum]',                '$_POST[lang]',   '$_POST[citizenship]', '$_POST[mStat]');",
    $health_information      = "INSERT INTO health_information      (race,                    ethnicity,                gender,                 blood_type,          sexual_orientation,          shoe_size,            pant_size,               shirt_size,                 height,                    weight)
                                VALUES                              ('$_POST[race]',          '$_POST[ethnic]',         '$_POST[gender]',       '$_POST[blood]',     '$_POST[sexOrient]',         '$_POST[shoeSize]',   '$_POST[pantSize]',      '$_POST[shirtSize]',        '$_POST[height]',          '$_POST[weight]');",
    $family_information      = "INSERT INTO family_information      (relative_first_name,     relative_middle_name,     relative_last_name,     relative_gender,     relation)
                                VALUES                              ('$_POST[relFName]',      '$_POST[relMName]',       '$_POST[relLName]',     '$_POST[relGender]', '$_POST[relate]');",
    $credit_card_information = "INSERT INTO credit_card_information (card_number,             card_expiration,          card_owner_name,        card_csc,            credit_card_company)
                                VALUES                              ('$_POST[cardNum]',       '$_POST[cardExp]',        '$_POST[cardName]',     '$_POST[cardCSC]',   '$_POST[cardBrand]');",
  );


  mysqli_query($conn, $insert[0]);

  // foreach($insert as $var => $val) {
  //   mysqli_query($conn, $val);
  // }
  unset($_POST['submit']);

  function security_filter($conn, $data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return mysqli_real_escape_string($conn, $data);
  }
?>


<!--
Result an error message when incorrect input
research more about security
Implement prepared statements
double check what echo statments are displaying
If there is missing information in any fields do not send to database
When certain information exists notify the user and give the option to add/replace information
-->
