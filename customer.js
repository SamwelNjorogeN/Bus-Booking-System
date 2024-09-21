
// Get the form element
const form = document.querySelector('form');

// Add an event listener for form submission
form.addEventListener('submit', function (event) {
    // Prevent the default form submission
    event.preventDefault();

    // Validate the form fields
    const id = form.querySelector('input[type="text"]').value;
    const firstName = form.querySelector('input[name="First Name"]').value;
    const middleName = form.querySelector('input[name="Middle Name"]').value;
    const lastName = form.querySelector('input[name="Last Name"]').value;
    const gender = form.querySelector('input[name="gender"]:checked');
    const dateOfBirth = form.querySelector('input[type="date"]').value;
    const placeOfBirth = form.querySelector('input[type="text"]').value;
    const emergencyFirstName = form.querySelectorAll('input[name="First Name"]')[1].value;
    const emergencyMiddleName = form.querySelectorAll('input[name="Middle Name"]')[1].value;
    const emergencyLastName = form.querySelectorAll('input[name="Last Name"]')[1].value;
    const emergencyRelation = form.querySelector('select').value;
    const emergencyContact = form.querySelector('input[name="Contact"]').value;

    // Perform validation
    if (!id || !firstName || !middleName || !lastName || !gender || !dateOfBirth || !placeOfBirth ||
        !emergencyFirstName || !emergencyMiddleName || !emergencyLastName || !emergencyRelation || !emergencyContact) {
        alert('Please fill in all required fields.');
        return;
    }

    // Validate ID/Passport Number and Emergency Contact fields
    const idPattern = /^\d+$/; // Only allows numbers
    if (!idPattern.test(id)) {
        alert('ID/Passport Number should only contain numbers.');
        return;
    }
    if (!idPattern.test(emergencyContact)) {
        alert('Emergency Contact should only contain numbers.');
        return;
    }

    // If all fields are valid, you can proceed with form submission or further processing
    alert('Form submitted successfully!');
    // Uncomment the line below to submit the form programmatically
    //form.submit();
});

