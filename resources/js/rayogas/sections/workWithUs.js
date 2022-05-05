document.addEventListener("DOMContentLoaded", function () {
    // Selectors
    let workWithUsSection = document.querySelector('.work-with-us');

    if (!workWithUsSection) {
        return;
    }

    let workWithUsForm = workWithUsSection.querySelector('form');
    let inputFile = workWithUsForm.querySelector('#file');
    let helpMessage = workWithUsForm.querySelector('.help-message');

    // Events
    workWithUsForm.addEventListener('submit', (event) => {
        event.preventDefault();

        let formData = new FormData(workWithUsForm);
        console.log(formData.entries());
        axios
        .post('/trabaja-con-nosotros', formData)
        .then((response) => {
            console.log(response);
        });

        if(workWithUsForm.checkValidity()) {
            let fileType =  inputFile.files[0].type;
            let fileSize = inputFile.files[0].size / 1048576;

            if (fileType == 'application/pdf' && fileSize <= 5) {
                helpMessage.classList.remove('text-danger');
            } else {
                helpMessage.classList.add('text-danger');
            }
        }
    });
});
