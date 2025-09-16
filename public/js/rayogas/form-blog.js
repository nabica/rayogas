class RayogasFormComponent {
    constructor(options = {}) {
        this.options = {
            Form_id: '',
            name: '',
            lastname: '',
            company: '',
            email: '',
            phonenumber: '',
            message: '',
            submitid: '',
            loadingText: 'Enviando cotización...',
            ...options
        };
        this.bindEvents();
    }

    bindEvents() {
        const {
            Form_id,
            email,
            phonenumber,
            message,
            submitid,
            loadingText
        } = this.options;

        const form = document.getElementById(Form_id);
        const emailInput = document.getElementById(email);
        const phoneInput = document.getElementById(phonenumber);
        const messageInput = document.getElementById(message);
        const submitButton = document.getElementById(submitid);

        if (!form) return;

        // Validación de email mejorada
        function validateEmail(email) {
            const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
            return emailRegex.test(email);
        }

        // Validación de teléfono
        phoneInput.addEventListener('input', () => {
            // Solo números, espacios, guiones y paréntesis, máximo 15 dígitos
            phoneInput.value = phoneInput.value.replace(/[^0-9\s\-\(\)\+]/g, '').slice(0, 20);
        });

        // Validación de mensaje más permisiva
        messageInput.addEventListener('input', () => {
            // Permite letras, números, espacios y signos de puntuación básicos
            const cleanValue = messageInput.value.replace(/[<>]/g, ''); // Solo elimina < y >
            messageInput.value = cleanValue;
        });

        // Función para mostrar errores
        function showError(input, message) {
            input.classList.add('is-invalid');
            
            // Remover mensaje de error previo
            const existingError = input.parentNode.querySelector('.error-message');
            if (existingError) {
                existingError.remove();
            }

            // Agregar nuevo mensaje de error
            const errorDiv = document.createElement('div');
            errorDiv.className = 'error-message text-danger small mt-1';
            errorDiv.textContent = message;
            input.parentNode.appendChild(errorDiv);
            
            input.focus();
        }

        // Función para limpiar errores
        function clearError(input) {
            input.classList.remove('is-invalid');
            const errorMessage = input.parentNode.querySelector('.error-message');
            if (errorMessage) {
                errorMessage.remove();
            }
        }

        form.addEventListener('submit', (event) => {
            let hasErrors = false;

            // Limpiar errores previos
            [emailInput, phoneInput, messageInput].forEach(clearError);

            // Validar email
            const emailVal = emailInput.value.trim();
            if (!emailVal) {
                showError(emailInput, 'El email es requerido');
                hasErrors = true;
            } else if (!validateEmail(emailVal)) {
                showError(emailInput, 'Por favor ingresa un email válido');
                hasErrors = true;
            }

            // Validar teléfono
            const phoneVal = phoneInput.value.trim();
            const phoneNumbers = phoneVal.replace(/[^0-9]/g, ''); // Solo números para validación
            
            if (!phoneVal) {
                showError(phoneInput, 'El teléfono es requerido');
                hasErrors = true;
            } else if (phoneNumbers.length < 7 || phoneNumbers.length > 15) {
                showError(phoneInput, 'El teléfono debe tener entre 7 y 15 dígitos');
                hasErrors = true;
            }

            // Validar mensaje
            const msgVal = messageInput.value.trim();
            if (!msgVal) {
                showError(messageInput, 'Por favor describe cómo podemos ayudarte');
                hasErrors = true;
            } else if (msgVal.length < 10) {
                showError(messageInput, 'Por favor proporciona más detalles (mínimo 10 caracteres)');
                hasErrors = true;
            }

            // Si hay errores, prevenir el envío
            if (hasErrors) {
                event.preventDefault();
                return;
            }

            // Si todas las validaciones pasan
            if (submitButton) {
                submitButton.disabled = true;
                submitButton.textContent = loadingText;
                
                // Agregar clase de loading
                submitButton.classList.add('loading');
                
                // Re-habilitar el botón después de 30 segundos por seguridad
                setTimeout(() => {
                    if (submitButton.disabled) {
                        submitButton.disabled = false;
                        submitButton.textContent = 'QUIERO MI ASESORIA';
                        submitButton.classList.remove('loading');
                    }
                }, 30000);
            }

            // Permitir el envío del formulario
        });

        // Limpiar errores cuando el usuario empiece a escribir
        [emailInput, phoneInput, messageInput].forEach(input => {
            if (input) {
                input.addEventListener('input', () => clearError(input));
            }
        });
    }
}

window.RayogasFormComponent = RayogasFormComponent;