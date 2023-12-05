function requisicao(nome, curso, turma, matricula, email, telefone, senha){
    var dados = {
        nome: nome,
        curso: curso,
        turma: turma,
        matricula: matricula, 
        email: email, 
        telefone: telefone,
        senha: senha
        };

    var xmlhttp = new XMLHttpRequest();
    var url = "../CADASTRO/requisicao.php";

    xmlhttp.open("POST", url, true);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            console.log(xmlhttp.responseText);
        }
    };

    xmlhttp.send("dados=" + JSON.stringify(dados));
}