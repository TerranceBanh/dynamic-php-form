for (let category in formIdentifiers) {//Dynamically Render Navigation Buttons
  if (formIdentifiers.hasOwnProperty(category)) {
    write(`<button id="${category}Btn">${category}</button>`)
  }
}
