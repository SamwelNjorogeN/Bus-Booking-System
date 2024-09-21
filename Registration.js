
const form = document.getElementById('registrationForm');
const userType = document.getElementById('userType');
const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const userName = document.getElementById('userName');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirmPassword');

form.addEventListener('submit', function (event) {
    event.preventDefault();
    resetErrors();

    if (validateForm()) {
        // Form validation succeeded, you can perform further actions here

        //form.reset();
       // alert("submitted")
        this.submit()
    }
});

function resetPage() {
    history.go(-1); // Go back to the previous page
  }
  
  // Example usage
  resetPage();
  
function validateForm() {
    let isValid = true;

    if (userType.value === '') {
        displayError(userTypeError, 'Invalid' );
        isValid = false;
    }

    if (firstName.value === '') {
        displayError(firstNameError, 'Invalid');
        isValid = false;
    }

    if (lastName.value === '') {
        displayError(lastNameError, 'Invalid');
        isValid = false;
    }

    if (userName.value === '') {
        displayError(userNameError, 'Invalid');
        isValid = false;
    }


    if (email.value === '') {
        displayError(emailError, 'Invalid Email Address');
        isValid = false;
    } else if (!validateEmail(email.value)) {
        displayError(emailError, 'Enter Valid Email Address (e.g., example@gmail.com or example@yahoo.com)');
        isValid = false;
    }

    if (phone.value === '') {
        displayError(phoneError, 'Invalid');
        isValid = false;
    } else if (!validatePhone(phone.value)) {
        displayError(phoneError, 'Please enter a valid phone number (digits only)');
        isValid = false;
    }

    if (password.value === '') {
        displayError(passwordError, 'Please enter a password');
        isValid = false;
    }

    if (confirmPassword.value === '') {
        displayError(confirmPasswordError, 'Please confirm your password');
        isValid = false;
    } else if (password.value !== confirmPassword.value) {
        displayError(confirmPasswordError, 'Passwords do not match');
        isValid = false;
    }

    return isValid;
}

function validateEmail(email) {
    const emailPattern = /^[^\s@]+@(gmail|yahoo)\.com$/;
    return emailPattern.test(email);
}

function validatePhone(phone) {
    const phonePattern = /^\d+$/;
    return phonePattern.test(phone);
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
phone.addEventListener('input', function (event) {
    event.target.value = event.target.value.replace(/\D/g, '');
});