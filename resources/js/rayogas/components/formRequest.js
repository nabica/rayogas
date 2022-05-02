window.addEventListener('DOMContentLoaded', (event) => {
    // Selectors
    const formRequest = document.querySelector('#form-request-service');
    if (!formRequest) {
        return;
    }
    const nameInput = formRequest.querySelector('[name="name"]');
    const telephoneInput = formRequest.querySelector('[name="telephone"]');
    const emailInput = formRequest.querySelector('[name="email"]');
    const personSelect = formRequest.querySelector('[name="person"]');
    const businessNameInput = formRequest.querySelector('[name="business-name"]');

    const containerBusinessName = formRequest.querySelector('.container-business-name');
    const btnNextStep = formRequest.querySelector('#btn-next-step');
    const containerFirstStep = formRequest.querySelector('.steps .step:first-child');
    const containerSecondStep = formRequest.querySelector('.steps .step:last-child');

    console.log(nameInput, ' - ', telephoneInput, ' - ', emailInput, ' - ', personSelect, ' - ', businessNameInput);


    // Events
    personSelect.addEventListener('change', (event) => {
        let element = event.target;
        let person = element.value;
        console.log('cambio persona ', person);
        if (person == 'jurídica') {
            containerBusinessName.classList.add('container-business-name--show');
        } else {
            containerBusinessName.classList.remove('container-business-name--show');
        }
    });

    btnNextStep.addEventListener('click', (event) => {
        event.preventDefault();
        console.log('click siguiente');

        let isFormValid  = false;

        if (nameInput.value.trim() != '' && telephoneInput.value.trim() != '' && personSelect.value.trim() != '') {

            if (personSelect.value.trim() == 'jurídica' && businessNameInput.value.trim() != '') {
                isFormValid = true;
            }
            else if(personSelect.value.trim() == 'natural') {
                isFormValid = true;
            }
        }

        if (isFormValid) {
            console.log('pasa');
            containerFirstStep.classList.remove('active');
            containerSecondStep.classList.add('active');
        }


    });

});
