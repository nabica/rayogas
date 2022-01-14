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
    let currentLiTabItem = currentTabItem.closest('li');
    let tabContainer = currentTabItem.closest('.tabs');
    let tabContent = tabContainer.querySelector('.tabs-content');

    // Set current tab
    let tabLiItems = tabContainer.querySelectorAll('.tabs-menu ul li');
    console.log('tabLiItems ' , tabLiItems);

    tabLiItems.forEach(element => {
        element.classList.remove('active');
    });

    currentLiTabItem.classList.add('active');

    // Modify tab content
    tabContent.innerHTML = `
        <p>1. Este contenido es administrable?</p>
        <p>2. Se va a generar dinamicamente ...</p>
    `;
}
