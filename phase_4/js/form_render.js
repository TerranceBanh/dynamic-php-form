let tabindex = 1;
let tagAttr = (id) => { //Common Tag Attributes
  tabindex++
  if (id.includes('input') == true) {
    return `class="display-none" id="${id}" tabindex="${tabindex}" name="${id}"`
  } else {
    return `class="display-none" id="${id}"`
  }
}
//Dynamically Render Form Fields
for (let category in formIdentifiers) {//Render Categories
  if (formIdentifiers.hasOwnProperty(category)) {
    write(`<h3 ${tagAttr(category + 'Title')}>${category}</h3>`)

    for (let subcategory in formIdentifiers[category]) {//Render Subcategories
      if (formIdentifiers[category].hasOwnProperty(subcategory)) {
        write(`<fieldset ${tagAttr(subcategory + 'Fieldset')}>`)
        write(`<h4 ${tagAttr(subcategory + 'Title')}>${subcategory}</h4>`)

        for (var input in formIdentifiers[category][subcategory]) {//Render Inputs
          if (formIdentifiers[category][subcategory].hasOwnProperty(input)) {
            write(`<input type='text' ${tagAttr(input)} placeholder="${formIdentifiers[category][subcategory][input]}">`)
          }
        }

        write(`</fieldset>`)

      }
    }
  }
}



write('<div><input type="submit" name="submit" value="submit"></div>')
