
function saudacoes() {
    var nome = document.getElementById("nome").value;

    document.getElementById("saida").innerHTML = 'Olá ' + nome + '!';
}

function testeSoma() {
    var n1 = parseInt(document.getElementById("n1").value);
    var n2 = parseInt(document.getElementById("n2").value);

    document.getElementById("saida").innerHTML = n1 + n2;
}

function alteraTexto() {
    document.getElementById("saida").innerHTML = "Mensagem de teste!";
}
