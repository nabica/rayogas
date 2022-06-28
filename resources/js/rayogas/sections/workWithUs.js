document.addEventListener("DOMContentLoaded", function () {
    // Selectors
    let workWithUsSection = document.querySelector(".work-with-us");

    if (!workWithUsSection) {
        return;
    }

    let workWithUsForm = workWithUsSection.querySelector("form");
    let inputFile = workWithUsForm.querySelector("#file");
    let labelFile = workWithUsForm.querySelector("#file-label");
    let helpMessage = workWithUsForm.querySelector(".help-message");

    inputFile.addEventListener("change", (e) => {
        labelFile.textContent = e.currentTarget.files[0].name;
    });
    // Events
    workWithUsForm.addEventListener("submit", async (event) => {
        try {
            event.preventDefault();
            let formData = new FormData(workWithUsForm);

            if (workWithUsForm.checkValidity()) {
                let fileType = inputFile.files[0].type;
                let fileSize = inputFile.files[0].size / 1048576;

                if (fileType == "application/pdf" && fileSize <= 5) {
                    helpMessage.classList.remove("text-danger");
                    const response = await axios.post(
                        "/trabaja-con-nosotros",
                        formData
                    );
                    if (response.status === 200) {
                        const popupModal = new bootstrap.Modal(
                            document.getElementById("popup"),
                            {}
                        );
                        popupModal.show();
                        workWithUsForm.classList.remove("was-validated");
                        labelFile.textContent = "";
                        workWithUsForm.reset();
                    }
                } else {
                    helpMessage.classList.add("text-danger");
                }
            }
        } catch {
            alert("El mensaje no pudo ser enviado, intente de nuevo mas tarde");
        }
    });
});
