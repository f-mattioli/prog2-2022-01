
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

/*
 * Exercício 01
 */
function dobro() {
    var n = parseInt(document.getElementById("numero").value);
    document.getElementById("saida").innerHTML = "Dobro = " + 2 * n;
}

function triplo() {
    var n = parseInt(document.getElementById("numero").value);
    document.getElementById("saida").innerHTML = "Triplo = " + 3 * n;
}

/*
 * Exercício 02
 */
function parimpar() {
    var n = parseInt(document.getElementById("numero").value);

    if (n % 2 == 0) {
        document.getElementById("saida").innerHTML = "O número " + n + " é par.";
    } else {
        document.getElementById("saida").innerHTML = "O número " + n + " é ímpar.";
    }
}

/*
 * Exercício 03
 */
function primo() {
    var n = parseInt(document.getElementById("numero").value);

    for (var i = 2; i <= (n - 1); i++) {
        if (n % i == 0) {
            document.getElementById("saida").innerHTML = "O número " + n + " não é primo.";
            return;
        }
    }

    document.getElementById("saida").innerHTML = "O número " + n + " é primo.";
}
