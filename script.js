document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (username === 'admin' && password === '1234') {
        document.getElementById('message').textContent = 'Login bem-sucedido!';
        document.getElementById('message').style.color = 'green';
    } else {
        document.getElementById('message').textContent = 'Usuário ou senha incorretos.';
        document.getElementById('message').style.color = 'red';
    }
});
 