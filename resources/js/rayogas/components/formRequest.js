window.addEventListener("DOMContentLoaded", (event) => {
    // Selectors
    const formRequest = document.querySelector("#form-request-service");
    if (!formRequest) {
        return;
    }
    const data = {};
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
        personSelect.classList.remove("is-invalid");
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
        const inputs = [nameInput, telephoneInput, personSelect];
        if (inputs.some((input) => !input.value)) {
            inputs.forEach((input) => {
                if (!input.value) {
                    input.classList.add("is-invalid");
                } else {
                    input.classList.remove("is-invalid");
                }
            });
            return null;
        }
        if (personSelect.value == "jurídica" && !businessNameInput.value) {
            businessNameInput.classList.add("is-invalid");
            return null;
        }
        containerFirstStep.classList.remove("active");
        containerSecondStep.classList.add("active");
    });

    formRequest.addEventListener("submit", async (e) => {
        try {
            e.preventDefault();
            const type = requestTypeSelector.value;
            const cilinderInputs = document.querySelectorAll(
                ".form-request-service__inputs--cilinder"
            );
            const instalationInputs = document.querySelectorAll(
                ".form-request-service__inputs--installation"
            );
            const granelInputs = document.querySelectorAll(
                ".form-request-service__inputs--granel"
            );
            const validateOptions = {
                cilindro: () => validateInputs(cilinderInputs),
                granel: () => validateInputs(granelInputs),
                instalaciones: () => validateInputs(instalationInputs),
            };
            const validateInputs = (inputs) => {
                const selectedInputs = Array.from(inputs).map((input) => {
                    return input.querySelectorAll("input, select")[0];
                });
                console.log(selectedInputs);
                if (selectedInputs.some((input) => !input.value)) {
                    selectedInputs.forEach((input) => {
                        if (!input.value) {
                            businessNameInput.classList.add("is-invalid");
                        } else {
                            businessNameInput.classList.remove("is-invalid");
                        }
                    });
                    return false;
                }
                const data = {};
                data["type"] = type;
                selectedInputs.forEach(
                    (input) => (data[input.name] = input.value)
                );
                const otherInputs = [
                    nameInput,
                    telephoneInput,
                    personSelect,
                    businessNameInput,
                ];
                otherInputs.forEach((input) => {
                    if (input.value) {
                        data[input.name] = input.value;
                    }
                });
                return data;
            };
            const data = validateOptions[type]();

            if (data) {
                const token = formRequest.querySelector(
                    "#form-request-service__token"
                ).value;
                const formData = new FormData();
                formData.append("_token", token);
                const dataKeys = Object.keys(data);
                dataKeys.forEach((key) => {
                    formData.append(key, data[key]);
                });
                const response = await fetch("/solicitud-servicio", {
                    method: "POST",
                    body: formData,
                });
                if (response.status === 200) {
                    alert("Email enviado");
                }
            }
        } catch (e) {
            console.log(e);
            alert(
                "Tenemos algunos problemas ´por favor intente de nuevo mas tarde"
            );
        }
    });
});
