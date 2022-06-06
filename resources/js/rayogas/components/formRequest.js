window.addEventListener("DOMContentLoaded", (event) => {
    // Selectors
    const formRequest = document.querySelector("#form-request-service");
    if (!formRequest) {
        return;
    }
    const nameInput = formRequest.querySelector('[name="name"]');
    const telephoneInput = formRequest.querySelector('[name="telephone"]');
    const emailInput = formRequest.querySelector('[name="email"]');
    const personSelect = formRequest.querySelector('[name="person"]');
    const businessNameInput = formRequest.querySelector(
        '[name="business-name"]'
    );

    const containerBusinessName = formRequest.querySelector(
        ".container-business-name"
    );
    const btnNextStep = formRequest.querySelector("#btn-next-step");
    const containerFirstStep = formRequest.querySelector(
        ".steps .step:first-child"
    );
    const containerSecondStep = formRequest.querySelector(
        ".steps .step:last-child"
    );
    const requestTypeSelector = formRequest.querySelector(
        "#form-request-service__type"
    );

    requestTypeSelector.addEventListener("change", (event) => {
        const value = event.target.value;
        console.log(value);

        const cilinderInputs = document.querySelectorAll(
            ".form-request-service__inputs--cilinder"
        );
        const instalationInputs = document.querySelectorAll(
            ".form-request-service__inputs--installation"
        );
        const granelInputs = document.querySelectorAll(
            ".form-request-service__inputs--granel"
        );
        const showAndHideinputs = (showinputs, hideInputs) => {
            showinputs.forEach((input) => {
                input.classList.add("show");
            });
            hideInputs.forEach((query) => {
                query.forEach((input) => {
                    input.classList.remove("show");
                });
            });
        };
        const optionsFunctions = {
            cilindro: () =>
                showAndHideinputs(cilinderInputs, [
                    instalationInputs,
                    granelInputs,
                ]),
            granel: () =>
                showAndHideinputs(granelInputs, [
                    instalationInputs,
                    cilinderInputs,
                ]),
            instalaciones: () =>
                showAndHideinputs(instalationInputs, [
                    granelInputs,
                    cilinderInputs,
                ]),
        };
        optionsFunctions[value]();
    });

    // Events
    personSelect.addEventListener("change", (event) => {
        let element = event.target;
        let person = element.value;
        if (person == "jurídica") {
            containerBusinessName.classList.add(
                "container-business-name--show"
            );
        } else {
            containerBusinessName.classList.remove(
                "container-business-name--show"
            );
        }
    });

    btnNextStep.addEventListener("click", (event) => {
        event.preventDefault();
        console.log("click siguiente");

        let isFormValid = false;

        if (
            nameInput.value.trim() != "" &&
            telephoneInput.value.trim() != "" &&
            personSelect.value.trim() != ""
        ) {
            if (
                personSelect.value.trim() == "jurídica" &&
                businessNameInput.value.trim() != ""
            ) {
                isFormValid = true;
            } else if (personSelect.value.trim() == "natural") {
                isFormValid = true;
            }
        }

        if (isFormValid) {
            containerFirstStep.classList.remove("active");
            containerSecondStep.classList.add("active");
        }
    });
});
