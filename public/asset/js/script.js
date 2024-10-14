document.getElementById('LoginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Mencegah pengiriman form secara default

    const correctUsername = 'SakarepMu';
    const correctPassword = 'bambang21';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === correctUsername && password === correctPassword) {
        alert("Login Berhasil");
        window.location.href = "index.html";
    } else {
        alert("Username atau password tidak sesuai");
    }
});
