const footerYear = document.querySelector('#footerYear')

const today = new Date()

const currentYear = today.getFullYear()


console.log(currentYear);

footerYear.innerHTML = currentYear