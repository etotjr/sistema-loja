
function abrirJanela() {
    const largura = 1000;
    const altura = 500;
    const left = (screen.width / 2) - (largura / 2);
    const top = (screen.height / 2) - (altura / 2);
    window.open('pessoas.html', 'janelaSeparada', `width=${largura},height=${altura},top=${top},left=${left}`);
}

function incluir2() {
    const largura = 900;
    const altura = 500;
    const left = (screen.width / 2) - (largura / 2);
    const top = (screen.height / 2) - (altura / 2);
    window.open('formulario1.html', 'janelaSeparada', `width=${largura},height=${altura},top=${top},left=${left}`);

}

        window.onload = function() {
            const botaoIncluir = document.getElementById('incluir');
            botaoIncluir.addEventListener('click', incluir2);
        }