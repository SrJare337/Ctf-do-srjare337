document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Criptografando senha usando MD5
    const encryptedPassword = CryptoJS.MD5(password).toString();

    // Verificando login (usuário: 'admin', senha: '1a1dc91c907325c69271ddf0c944bc72' que é 'pass' em MD5)
    if (username === 'admin' && encryptedPassword === '1a1dc91c907325c69271ddf0c944bc72') {
        document.getElementById('message').textContent = 'Login bem-sucedido!';
        document.getElementById('message').style.color = 'green';

        // Disparar confetes
        confetti({
            particleCount: 100,
            spread: 70,
            origin: { y: 0.6 }
        });
    } else {
        document.getElementById('message').textContent = 'Usuário ou senha incorretos.';
        document.getElementById('message').style.color = 'red';
    }
});
