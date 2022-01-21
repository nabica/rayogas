// Selectors
let deleteRecord = document.querySelectorAll('.form-delete-record');

// Events
deleteRecord.forEach(element => {
    element.addEventListener('submit', clickDeleteRecord);
});

// Functions
function clickDeleteRecord() {
    event.preventDefault();
    let element = event.target;

    if(confirm('Este registro se eliminará. ¿Estas seguro de continuar?')) {
        element.submit();
    }
}

