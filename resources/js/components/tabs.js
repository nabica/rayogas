// Selectors
let tabItems = document.querySelectorAll('.tabs .tabs-menu a');

// Events
tabItems.forEach(element => {
    element.addEventListener('click', clickOnTab);
});

// Functions
function clickOnTab() {
    event.preventDefault();
    let currentTabItem = event.target;
    let tabContainer = currentTabItem.closest('.tabs');
    let tabContent = tabContainer.querySelector('.tabs-content');
    tabContent.innerHTML = `
        <p>1. Este contenido es administrable?</p>
        <p>2. Se va a generar dinamicamente ...</p>
    `;
}
