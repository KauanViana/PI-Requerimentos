function etapa1() {
    // Cria o formulário
    var form = document.createElement("form");
    form.className = "form";
    form.action = "cadastro_discente.php";
    form.method = "post";
    form.id = "cadastro_form";

    // Cria a div com a classe "img-login"
    var imgLoginDiv = document.createElement("div");
    imgLoginDiv.className = "img-login";

    // Cria a imagem
    var img = document.createElement("img");
    img.src = "../../ESTILO/IMAGENS/Logo_IF.png";
    img.width = "40";
    img.className = "logo";
    img.draggable = false;

    // Adiciona a imagem à div
    imgLoginDiv.appendChild(img);

    // Cria o hr
    var hr = document.createElement("hr");
    imgLoginDiv.appendChild(hr);

    // Cria os botões
    var button1 = document.createElement("button");
    button1.id = "opcao1";
    button1.type = "button";
    button1.textContent = "ALUNO";
    imgLoginDiv.appendChild(button1);

    var button2 = document.createElement("button");
    button2.id = "opcao2";
    button2.type = "button";
    button2.textContent = "ADM";
    imgLoginDiv.appendChild(button2);

    // Adiciona a div à form
    form.appendChild(imgLoginDiv);

    // Cria a div com a classe "texx"
    var texxDiv = document.createElement("div");
    texxDiv.className = "texx";

    // Cria os elementos de input e select
    var labelNome = document.createElement("label");
    labelNome.textContent = "Nome:";
    labelNome.htmlFor = "name";

    var inputNome = document.createElement("input");
    inputNome.id = "name";
    inputNome.type = "text";
    inputNome.placeholder = "Nome";
    inputNome.name = "nome";
    inputNome.className = "inserir";

    var labelCurso = document.createElement("label");
    labelCurso.textContent = "Curso:";
    labelCurso.htmlFor = "curso";

    var selectCurso = document.createElement("select");
    selectCurso.id = "curso";
    selectCurso.name = "curso_usuario";
    selectCurso.className = "inserir";

    var cursos = ["Informática", "Meio Ambiente", "Edificações"];
    for (var i = 0; i < cursos.length; i++) {
        var option = document.createElement("option");
        option.value = cursos[i].toLowerCase().replace(/\s+/g, '-');
        option.textContent = cursos[i];
        selectCurso.appendChild(option);
    }

    var labelTurma = document.createElement("label");
    labelTurma.textContent = "Turma:";
    labelTurma.htmlFor = "turma";

    var selectTurma = document.createElement("select");
    selectTurma.id = "turma";
    selectTurma.name = "turma_usuario";
    selectTurma.className = "inserir";

    var turmas = ["11", "12", "21", "22", "31", "32", "41"];
    for (var i = 0; i < turmas.length; i++) {
        var option = document.createElement("option");
        option.value = turmas[i];
        option.textContent = turmas[i];
        selectTurma.appendChild(option);
    }

    // Adiciona os elementos à div "texx"
    texxDiv.appendChild(labelNome);
    texxDiv.appendChild(inputNome);
    texxDiv.appendChild(labelCurso);
    texxDiv.appendChild(selectCurso);
    texxDiv.appendChild(labelTurma);
    texxDiv.appendChild(selectTurma);

    // Adiciona a div "texx" à form
    form.appendChild(texxDiv);

    // Adiciona o formulário ao box-inner-box
    document.getElementsByClassName('box-inner-box')[0].appendChild(form);
}

function etapa2() {
    // Cria o formulário
    var form = document.createElement("form");
    form.className = "form";
    form.action = "cadastro_discente.php";
    form.method = "post";
    form.id = "cadastro_form2"; // Alterado para um ID único

    // Cria a div com a classe "img-login"
    var imgLoginDiv = document.createElement("div");
    imgLoginDiv.className = "img-login";

    // Cria a imagem
    var img = document.createElement("img");
    img.src = "../../ESTILO/IMAGENS/Voltar_Botao.png";
    img.width = "40";
    img.className = "logo";
    img.draggable = false;

    // Adiciona a imagem à div
    imgLoginDiv.appendChild(img);

    // Adiciona a div à form
    form.appendChild(imgLoginDiv);

    // Cria a div com a classe "texx"
    var texxDiv = document.createElement("div");
    texxDiv.className = "texx";

    // Cria as divs com a classe "input"
    var inputDiv1 = document.createElement("div");
    inputDiv1.className = "input";
    
    var inputDiv2 = document.createElement("div");
    inputDiv2.className = "input";
    
    var inputDiv3 = document.createElement("div");
    inputDiv3.className = "input";

    // Cria os elementos de input
    var labelMatricula = document.createElement("label");
    labelMatricula.textContent = "Matrícula:";
    labelMatricula.htmlFor = "matricula";

    var inputMatricula = document.createElement("input");
    inputMatricula.id = "matricula";
    inputMatricula.type = "text";
    inputMatricula.placeholder = "Matrícula";
    inputMatricula.name = "matricula";
    inputMatricula.className = "inserir";

    var labelEmail = document.createElement("label");
    labelEmail.textContent = "E-mail Institucional:";
    labelEmail.htmlFor = "email";

    var inputEmail = document.createElement("input");
    inputEmail.id = "email";
    inputEmail.type = "text";
    inputEmail.placeholder = "E-mail Institucional";
    inputEmail.name = "email";
    inputEmail.className = "inserir";
    
    var labelTelefone = document.createElement("label");
    labelTelefone.textContent = "Telefone:";
    labelTelefone.htmlFor = "telefone";

    var inputTelefone = document.createElement("input");
    inputTelefone.id = "telefone";
    inputTelefone.type = "text";
    inputTelefone.placeholder = "Telefone";
    inputTelefone.name = "telefone";
    inputTelefone.className = "inserir";

    // Adiciona os elementos à div "input"
    inputDiv1.appendChild(labelMatricula);
    inputDiv1.appendChild(inputMatricula);
    inputDiv2.appendChild(labelEmail);
    inputDiv2.appendChild(inputEmail);
    inputDiv3.appendChild(labelTelefone);
    inputDiv3.appendChild(inputTelefone);

    // Adiciona os elementos à div "input"
    texxDiv.appendChild(inputDiv1);
    texxDiv.appendChild(inputDiv2);
    texxDiv.appendChild(inputDiv3);

    // Adiciona a div "texx" à form
    form.appendChild(texxDiv);

    // Adiciona o formulário ao box-inner-box
    document.getElementsByClassName('box-inner-box')[0].appendChild(form);
}


function etapa3(){
    // Cria o formulário
    var form = document.createElement("form");
    form.className = "form";
    form.action = "cadastro_discente.php";
    form.method = "post";
    form.id = "cadastro_form3"; // Alterado para um ID único

    // Cria a div com a classe "img-login"
    var imgLoginDiv = document.createElement("div");
    imgLoginDiv.className = "img-login";

    // Cria a imagem
    var img = document.createElement("img");
    img.src = "../../ESTILO/IMAGENS/Voltar_Botao.png";
    img.width = "40";
    img.className = "logo";
    img.draggable = false;

    // Adiciona a imagem à div
    imgLoginDiv.appendChild(img);

    // Adiciona a div à form
    form.appendChild(imgLoginDiv);

    // Cria a div com a classe "texx"
    var texxDiv = document.createElement("div");
    texxDiv.className = "texx";

    // Cria as divs com a classe "input"
    var inputDiv1 = document.createElement("div");
    inputDiv1.className = "input";
    
    var inputDiv2 = document.createElement("div");
    inputDiv2.className = "input";

    // Cria os inputs e labels
    var labelSenha = document.createElement('label');
    labelSenha.textContent = "Senha:";
    labelSenha.htmlFor = "senha";

    var inputSenha = document.createElement("input");
    inputSenha.id = "senha";
    inputSenha.type = "password";
    inputSenha.placeholder = "Senha";
    inputSenha.name = "senha";
    inputSenha.className = "inserir";
    
    var labelRepetirSenha = document.createElement('label');
    labelRepetirSenha.textContent = "Repetir Senha:";
    labelRepetirSenha.htmlFor = "repetirSenha";

    var inputRepetirSenha = document.createElement("input");
    inputRepetirSenha.id = "repetirSenha";
    inputRepetirSenha.type = "password";
    inputRepetirSenha.placeholder = "Repetir Senha";
    inputRepetirSenha.name = "repetirSenha";
    inputRepetirSenha.className = "inserir";
    
    inputDiv1.appendChild(labelSenha);
    inputDiv1.appendChild(inputSenha);
    inputDiv2.appendChild(labelRepetirSenha);
    inputDiv2.appendChild(inputRepetirSenha);
    
    // Cria o texto sobre a senha

    var texto_div = document.createElement('div');
    
    var info_uteis = document.createElement('h2');
    info_uteis.textContent = "Informações úteis:";
    info_uteis.style.color = "var(--vermelho-ifba)";

    var p_senha = document.createElement('p');
    p_senha.innerText = "A senha deve ter no mínimo 8 caracteres";
    p_senha.innerText += "\n\nRecomenda-se utilizar a mesma senha para acessar outros serviços do IFBA (SUAP ou Ava Moodle)";

    texto_div.appendChild(info_uteis);
    texto_div.appendChild(p_senha);

    texxDiv.appendChild(inputDiv1);
    texxDiv.appendChild(inputDiv2);
    texxDiv.appendChild(texto_div);

    // Adiciona a div "texx" à form
    form.appendChild(texxDiv);

    // Adiciona o formulário ao box-inner-box
    document.getElementsByClassName('box-inner-box')[0].appendChild(form);

    // troca botao proxima etapa para cadastrar
    document.getElementById('prox-etapa').remove();

    var cadastrar = document.createElement('button');
    cadastrar.textContent = "CADASTRAR";
    cadastrar.id = "cadastrar";
    cadastrar.type = "button";
    cadastrar.className = "botao";
    cadastrar.onclick = cadastrar;

    document.getElementsByClassName('box2')[0].appendChild(cadastrar);
}