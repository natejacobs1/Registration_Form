$(document).ready(function() {
    $('#registrationForm').submit(function(event) {
        let isValid = true;

        // First Name validation
        if ($('#firstName').val().trim() === '') {
            alert('First Name is required.');
            isValid = false;
        }

        // Last Name validation
        if ($('#lastName').val().trim() === '') {
            alert('Last Name is required.');
            isValid = false;
        }

        // Email validation
        const email = $('#email').val().trim();
        if (email === '') {
            alert('Email is required.');
            isValid = false;
        } else {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert('Please enter a valid email address.');
                isValid = false;
            }
        }

        // Phone Number validation
        const phone = $('#phone').val().trim();
        if (phone === '') {
            alert('Phone Number is required.');
            isValid = false;
        } else {
            const phonePattern = /^\d{10}$/;
            if (!phonePattern.test(phone)) {
                alert('Please enter a valid 10-digit phone number.');
                isValid = false;
            }
        }

        // Address validation
        if ($('#address').val().trim() === '') {
            alert('Address is required.');
            isValid = false;
        }

        // Date of Birth validation
        if ($('#dob').val() === '') {
            alert('Date of Birth is required.');
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});
