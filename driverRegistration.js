
const form = document.getElementById('driverRegistration');
const firstName = document.getElementById('firstName');
const middleName = document.getElementById('middlName');
const lastName = document.getElementById('lastName');
const nationalID = document.getElementById('nationalID');
const licence = document.getElementById('licence');
const clasp = document.getElementById('clasp');
const image = document.getElementById('image');


function validateForm() {
    let isValid = true;

    if (firstName.value === '') {
        displayError(firstNameError, 'Invalid');
        isValid = false;
    }

    if (middleName.value === '') {
        displayError(middleNameError, 'Invalid');
        isValid = false;
    }

    if (lastName.value === '') {
        displayError(lastNameError, 'Invalid');
        isValid = false;
    }


    if (nationalID.value === '') {
        displayError(nationalID, 'Invalid');
        isValid = false;
    } else if (!validatenationalID(nationalID.value)) {
        displayError(nationalIDError, 'Enter your ID (digits only)');
        isValid = false;
    }

    if (licence.value === '') {
        displayError(licenceError, 'Enter Licence');
        isValid = false;
    }

    if (clasp.value === '') {
        displayError(claspError, 'Indicate your class');
        isValid = false;
    }

    if (image.value === '') {
        displayError(imageError, 'Enter your image');
        isValid = false;
    }

    return isValid;
}


function validatenationalID(nationalID) {
    const nationalIDPattern = /^\d+$/;
    return nationalIDPattern.test(nationalID);
}

function displayError(element, message) {
    element.textContent = message;
}

function resetErrors() {
    const errorElements = form.getElementsByClassName('error');
    for (let i = 0; i < errorElements.length; i++) {
        errorElements[i].textContent = '';
    }
}

// Prevent entering non-digit characters in the phone field
nationalID.addEventListener('input', function (event) {
    event.target.value = event.target.value.replace(/\D/g, '');
});