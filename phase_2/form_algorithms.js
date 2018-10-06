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
