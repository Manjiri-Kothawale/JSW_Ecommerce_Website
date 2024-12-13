document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        const firstName = document.getElementById('first_name');
        const lastName = document.getElementById('last_name');
        const companyName = document.getElementById('company_name');
        const phoneNumber = document.getElementById('phone_number');
        const email = document.getElementById('email');
        const streetAddress = document.getElementById('street_address');
        const city = document.getElementById('city');
        const stateProvince = document.getElementById('state_province');
        const zipcode = document.getElementById('zipcode');
        const productOfInterest = document.getElementById('product_of_interest');
        const additionalComment = document.getElementById('additional_comment');
        const contactMethodEmail = document.getElementById('contact_method_email');
        const contactMethodPhone = document.getElementById('contact_method_phone');

        let isValid = true;

        // Clear previous error messages
        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(function (errorMessage) {
            errorMessage.textContent = '';
        });

        // Validation logic for each field
        if (firstName.value.trim() === '') {
            showError(firstName, 'First Name is required.');
            isValid = false;
        }

        if (lastName.value.trim() === '') {
            showError(lastName, 'Last Name is required.');
            isValid = false;
        }

        if (companyName.value.trim() === '') {
            showError(companyName, 'Company Name is required.');
            isValid = false;
        }

        if (phoneNumber.value.trim() === '' || !isValidPhoneNumber(phoneNumber.value.trim())) {
            showError(phoneNumber, 'Please enter a valid phone number.');
            isValid = false;
        }

        if (email.value.trim() === '' || !isValidEmail(email.value.trim())) {
            showError(email, 'Please enter a valid email address.');
            isValid = false;
        }

        // Other validations for remaining fields...

        // Submit the form if all validations pass
        if (isValid) {
            form.submit();
        }
    });

    // Function to display error message
    function showError(input, message) {
        const errorMessage = input.nextElementSibling; // Get the next sibling, which is the error message span
        errorMessage.textContent = message;
    }

    // Function to validate phone number format
    function isValidPhoneNumber(phoneNumber) {
        // You can implement your phone number validation logic here
        // For example, check if phoneNumber matches a specific format
        return true; // Placeholder for actual validation
    }

    // Function to validate email format
    function isValidEmail(email) {
        // You can implement your email validation logic here
        // For example, check if email matches a specific format
        return true; // Placeholder for actual validation
    }
});
