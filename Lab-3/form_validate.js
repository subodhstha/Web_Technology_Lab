document.querySelector('form').addEventListener('submit', function(event) {
    var username = document.getElementById('username').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var password = document.getElementById('password').value;
    
    if(username === '') {
        alert('Username is required');
        event.preventDefault();
    }

    if(email === '' || !email.includes('@')) {
        alert('Valid email is required');
        event.preventDefault();
    }

    if(phone !== '' && isNaN(phone)) {
        alert('Phone number must be a number');
        event.preventDefault();
    }

    if(password === '' || password.length < 8) {
        alert('Password is required and must be at least 8 characters');
        event.preventDefault();
    }
});