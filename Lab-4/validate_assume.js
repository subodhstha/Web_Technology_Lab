document.querySelector('form').addEventListener('submit', function(event) {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var dbuser = "user";
    var dbpass = "user";
    if(username === '') {
        alert('Username is required');
        event.preventDefault();
    }
    if(password === '') {
        alert('Password is required');
        event.preventDefault();
    }
    if(username !== dbuser && password !== dbpass)
    {
        alert("Username or password is invalid");
        event.preventDefault();

    }
    if(username === dbuser && password === dbpass)
    {
        alert("login success full");
        event.preventDefault();
    }
});