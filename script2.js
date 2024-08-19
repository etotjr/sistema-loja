function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Exemplo de validação (substitua por lógica de validação real)
    if (username === "admin" && password === "admin") {
        // Redirecionar para a página desejada após o login bem-sucedido
        window.location.href = "menu.html";
        return false; // Evita o envio do formulário após o redirecionamento
    } else {
        document.getElementById("errorMessage").style.display = "block";
        return false; // Login falhou
    }
}
