const form = document.getElementById('vehicle_assign');
const kenya = document.getElementById('kenya');
const main = document.getElementById('main');
const kenya1 = document.getElementById('kenya1');
const kenya2 = document.getElementById('kenya2');
const kenya3 = document.getElementById('kenya3');
const kenya4 = document.getElementById('kenya4');


function validateForm() {
    let isValid = true;

    if (kenya.value === '') {
        displayError(kenyaError, 'Invalid');
        isValid = false;
    }

    if (main.value === '') {
        displayError(mainError, 'Invalid');
        isValid = false;
    }

    if (kenya1.value === '') {
        displayError(kenya1Error, 'Invalid');
        isValid = false;
    }


    if (kenya2.value === '') {
        displayError(kenya2Error, 'Invalid');
        isValid = false;
    } else if (!validatePhone(kenya2.value)) {
        displayError(kenya2Error, 'Please enter a valid phone number (digits only)');
        isValid = false;
    }

    if (kenya3.value === '') {
        displayError(kenya3Error, 'Enter Car Number');
        isValid = false;
    }


    if (kenya4.value === '') {
        displayError(kenya4Error, 'Invalid');
        isValid = false;
    } else if (!validatekenya4(kenya4.value)) {
        displayError(kenya4Error, 'Please enter a valid phone number (digits only)');
        isValid = false;
    }


    return isValid;
}


function validatekenya2(kenya2) {
    const kenya2Pattern = /^\d+$/;
    return kenya2Pattern.test(kenya2);
}

function displayError(element, message) {
    element.textContent = message;
    alert('message')
}


function validatekenya4(kenya4) {
    const kenya4Pattern = /^\d+$/;
    return kenya4Pattern.test(kenya4);
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
kenya2.addEventListener('input', function (event) {
    event.target.value = event.target.value.replace(/\D/g, '');
});

// Prevent entering non-digit characters in the phone field
kenya4.addEventListener('input', function (event) {
    event.target.value = event.target.value.replace(/\D/g, '');
});