//Dynamically Render Form Fields
for (let category in formIdentifiers) {//Render Categories
  if (formIdentifiers.hasOwnProperty(category)) {
    write(`<h3 class="display-none" id="${category}Title">${category}</h3>`)

    for (let subcategory in formIdentifiers[category]) {//Render Subcategories
      if (formIdentifiers[category].hasOwnProperty(subcategory)) {
        write(`<fieldset class="display-none" id="${subcategory}Fieldset">`)
        write(`<h4 class="display-none" id="${subcategory}Title">${subcategory}</h4>`)

        for (var input in formIdentifiers[category][subcategory]) {//Render Inputs
          if (formIdentifiers[category][subcategory].hasOwnProperty(input)) {
            write(`<input type='text' class="display-none" id="${input}" placeholder="${formIdentifiers[category][subcategory][input]}">`)
          }
        }

        write(`</fieldset>`)

      }
    }
  }
}
