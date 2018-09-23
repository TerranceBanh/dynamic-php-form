let formPlaceholders = [//Variables
  [//Basic Information
    [//Name
      'First Name', 'Middle Name', 'Last Name'],
    [//Main Contact
      'Main Phone #', 'Main E-mail @']],
  [//Residential Information
    [//Home Address
      'Unit #', 'Address #', 'Street', 'City', 'Province/State', 'Country'],
    [//Home Contact
      'Phone #', 'Phone Extention', 'Cellphone #', 'Voicemail #', 'E-mail @', 'Fax #']],
  [//Workplace Information
    [//Workplace Address & Profession
      'Unit #', 'Address #', 'Street', 'City', 'Province/State', 'Country', 'Profession'],
    [//Workplace Contact
      'Phone #', 'Phone Extention', 'Cellphone #', 'Voicemail #', 'E-mail @', 'Fax #']],
  [//Business Information
    [//Business Address & Profession
      'Unit #', 'Address #', 'Street', 'City', 'Province/State', 'Country', 'Profession'],
    [//Business Contact
      'Phone #', 'Phone Extention', 'Cellphone #', 'Voicemail #', 'E-mail @', 'Fax #']],
  [//Personal Security Information
    [//Various Identifications
      'Social Insurance #', 'Driver License #', 'Personal Health #', 'BC Services Card'],
    [//Birth Information
      'Birth Year','Birth Month', 'Birth Day',
      'Birth Place Unit #', 'Birth Place Address #', 'Birth Place Street',
      'Birth Place City', 'Birth Place Province/State', 'Birth Place Country',
      'Birth Certificate #'],
    [//Other
      'Languages', 'Citizenship', 'Martial Status']],
  [//Health Information
    [//Genetic Traits/Identity
      'Race', 'Ethnicity', 'Gender', 'Blood Type', 'Sexual Orientation'],
    [//Body Weight/Size
      'Shoe Size', 'Pant Size', 'Shirt Size', 'Height', 'Weight']],
  [//Family Member Information
    [//Name
      'First Name', 'Middle Name', 'Last Name'],
    [//Other
        'Gender', 'Relation']],
  [//Debit & Credit Card Information
    ['Card #', 'Expiration Date', 'Name On Card', 'CSC/CSV', 'Credit Card Company']],
  [//Other
    ['Website', 'notes']]
]
let formCategories = [//From Labels
  ['Basic Information',['Name', 'Main Contact']],
  ['Residential Information', ['Home Address', 'Home Contact']],
  ['Work Information', ['Work Address & Profession', 'Work Contact']],
  ['Business Information', ['Business Address & Profession', 'Business Contact']],
  ['Personal Security Information', ['Various Identifications', 'Birth Information', 'Other']],
  ['Health Information', ['Genetic Traits/Identity', 'Body Weight/Size']],
  ['Family Member Information', ['Name', 'Other']],
  [['Debit & Credit Card Information'], ['']],
  [['Other'], ['']]
]

//Form Algorithm
let tabindex = 0 //Stored iterated tabindex #
let inputValue = (id) => {
  document.getElementById(id)
}
let formVariableIndex = 0;
let write = (html) => {document.write(html)}//Shortened for more optimal code
for (var i = 0; i < formStrings.length; i++) {//Render Categories
  write(//Category Header
    `<h3>${formCategories[i][0]}</h3>`);
  for (let j = 0; j < formStrings[i].length; j++) {//Render Fieldsets
    if (formCategories[i][1][j] != '') {//Writes with Fieldset Headers //To avoid errors of undefined
      write(`<fieldset>`);
      write(//Fieldset Header
        `<h4>${formCategories[i][1][j]}</h4>`);
    }
    else {//Writes without Fieldset Headers
      write(`<fieldset>`)
    }
    for (let k = 0; k < formStrings[i][j].length; k++) {//Render Inputs
      tabindex++
      write(//
        `<input
        id="${formStrings[i][j][k]}"
        placeholder="${formPlaceholders[i][j][k]}"
        type="text"
        tabindex="${tabindex}"
        name="${formStrings[i][j][k]}"
        onsubmit="formVariables${formVariableIndex} = ${inputValue(formStrings[i][j][k])}.value">`);
        formVariableIndex++
    }
      write(`</fieldset>`)
  }
}

//document.write with for loop was the best method to generate a HTML Form Structure

//Limit characters of certain inputs
//Limit inputs to drop down lists
//Create drop down menu while typing in input
