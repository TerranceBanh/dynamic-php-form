CREATE TABLE clients (
    client_id   int       not null AUTO_INCREMENT PRIMARY KEY,
    first_name  char(255) not null,
    middle_name char(255) not null,
    last_name   char(255) not null,
    main_email  char(255) not null,
    main_phone  char(255) not null
);
CREATE TABLE residential_information (
    client_id              int       not null,
    first_name             char(255) not null,
    last_name              char(255) not null,
    home_unit_number       char(6)   not null,
    home_address_number    char(6)   not null,
    home_street            char(255) not null,
    home_city              char(255) not null,
    home_province_or_state char(255) not null,
    home_country           char(255) not null,
    home_phone             char(255) not null,
    home_phone_extension   char(255) not null,
    home_cellphone         char(255) not null,
    home_voicemail         char(255) not null,
    home_email             char(255) not null,
    home_fax               char(255) not null
);
CREATE TABLE workplace_information (
    client_id                   int       not null,
    first_name                  char(255) not null,
    last_name                   char(255) not null,
    workplace_unit_number       char(255) not null,
    workplace_address_number    char(255) not null,
    workplace_street            char(255) not null,
    workplace_city              char(255) not null,
    workplace_province_or_state char(255) not null,
    workplace_country           char(255) not null,
    workplace_profession        char(255) not null,
    workplace_phone             char(255) not null,
    workplace_phone_extension   char(255) not null,
    workplace_cellphone         char(255) not null,
    workplace_voicemail         char(255) not null,
    workplace_email             char(255) not null,
    workplace_fax               char(255) not null,
);
CREATE TABLE business_information (
    client_id                  int       not null,
    first_name                 char(255) not null,
    last_name                  char(255) not null,
    business_unit_number       char(255) not null,
    business_address_number    char(255) not null,
    business_street            char(255) not null,
    business_city              char(255) not null,
    business_province_or_state char(255) not null,
    business_country           char(255) not null,
    business_profession        char(255) not null,
    business_phone             char(255) not null,
    business_phone_extension   char(255) not null,
    business_cellphone         char(255) not null,
    business_voicemail         char(255) not null,
    business_email             char(255) not null,
    business_fax               char(255) not null
);
CREATE TABLE security_information (
    client_id                     int       not null,
    first_name                    char(255) not null,
    last_name                     char(255) not null,
    social_insurance_number       char(9)   not null,
    driver_license_number         char(7)   not null,
    personal_health_number        char(10)  not null,
    birth_year                    char(4)   not null,
    birth_month                   char(2)   not null,
    birth_day                     char(2)   not null,
    birth_place_unit_number       char(10)  not null,
    birth_place_address_number    char(10)  not null,
    birth_place_street            char(255) not null,
    birth_place_city              char(255) not null,
    birth_place_province_or_state char(255) not null,
    birth_place_country           char(255) not null,
    birth_certificate_number      char(255) not null,
    languages                     char(255) not null,
    citizenship                   char(255) not null,
    martial_status                char(255) not null
);
CREATE TABLE health_information (
    client_id          int       not null,
    first_name         char(255) not null,
    last_name          char(255) not null,
    race               char(255) not null,
    ethnicity          char(255) not null,
    gender             char(15)  not null,
    blood_type         char(10)  not null,
    sexual_orientation char(255) not null,
    shoe_size          char(10)  not null,
    pant_size          char(10)  not null,
    shirt_size         char(10)  not null,
    height             char(10)  not null,
    weight             char(10)  not null
);
CREATE TABLE family_information (
    client_id            int       not null,
    first_name           char(255) not null,
    last_name            char(255) not null,
    relative_first_name  char(255) not null,
    relative_middle_name char(255) not null,
    relative_last_name   char(255) not null,
    relative_gender      char(255) not null,
    relation             char(255) not null
);
CREATE TABLE credit_card_information (
    client_id           int       not null,
    first_name          char(255) not null,
    last_name           char(255) not null,
    card_number         char(16)  not null,
    card_expiration     char(4)   not null,
    card_owner_name     char(255) not null,
    card_csc            char(3)   not null,
    credit_card_company char(255) not null
);

-- make sure all the table/column names match with placeholder/category names
-- make sure that login credentials are required when SQL database is being accessed
