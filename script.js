// JavaScript for Orphan Management System Website

// Function to handle login
document.querySelector('#login-form').addEventListener('submit', async function (event) {
    event.preventDefault();

    const formData = new FormData(event.target);

    try {
        const response = await fetch('backend.php?action=login', {
            method: 'POST',
            body: formData,
        });

        const result = await response.json();

        if (result.status === 'success') {
            alert('Login successful!');
            // Redirect to the same page (index.php)
            window.location.href = 'http://localhost/orphan_management_system/index.php#home'; // Adjust the path as necessary
        } else {
            alert(result.message);
        }
    } catch (error) {
        console.error('Error logging in:', error);
        alert('An error occurred. Please try again.');
    }
});

// Function to handle registration
document.querySelector('#register-form').addEventListener('submit', async function (event) {
    event.preventDefault();

    const formData = new FormData(event.target);

    try {
        const response = await fetch('backend.php?action=register', {
            method: 'POST',
            body: formData,
        });

        const result = await response.json();

        if (result.status === 'success') {
            alert('Registration successful!');
            document.querySelector('#register-form').reset();
        } else {
            alert(result.message);
        }
    } catch (error) {
        console.error('Error registering:', error);
        alert('An error occurred. Please try again.');
    }
});

// Function to handle contact form submission
document.querySelector('#contact-form').addEventListener('submit', function (event) {
    event.preventDefault();
    alert('Thank you for your message! We will get back to you soon.');
    document.querySelector('#contact-form').reset();
});