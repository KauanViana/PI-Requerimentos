// Trocar opção aluno/adm

const botoes = [document.getElementById('opcao1'), document.getElementById('opcao2')];

function trocar_botao(index, botao_anterior){
    botoes[index].style.color = 'Black';
    botoes[index].style.textDecoration = 'underline';
    
    botoes[botao_anterior].style.color = 'var(--cinza)';
    botoes[botao_anterior].style.textDecoration = 'none';
}

botoes[0].addEventListener('click', () => trocar_botao(0, 1));
botoes[1].addEventListener('click', () => trocar_botao(1, 0));
trocar_botao(0, 1);

function proxima_etapa(index){
    const elementos_html = document.getElementsByClassName('form');
    Array.from(elementos_html).forEach(elemento => elemento.remove());

    switch(index){
        case 1:
            etapa_index = 1;
            etapa1();
            break;
            
        case 2:
            etapa_index = 2;
            etapa2();
            break;

        case 3:
            etapa_index = 3;

            
            etapa3();
            // const btn_cadastrar = document.getElementById('cadastrar');
            // console.log(btn_cadastrar);
            // btn_cadastrar.addEventListener('click', () => {
            //     console.log('aoba zé');
            // });
            break;
    }
}

var campos_todos_valores = [];

function obterValoresCampos() {
    const elementosInput = document.querySelectorAll('.input');
    const valores = Array.from(elementosInput).map(elemento => {
        const campo = elemento.querySelector('input, select');
        return campo.value;
    });
    console.log(valores);
    return valores;
}

let etapa_index = 1;

const btn_proxima_etapa = document.getElementById('prox-etapa');

btn_proxima_etapa.addEventListener('click', () => {
    const campos = obterValoresCampos();
    const algum_vazio = campos.some(campo => !campo);

    if (algum_vazio) {
        alert('Por favor, preencha todos os campos.');
    } else {
        switch (etapa_index){
            case 1:
                let nome = document.getElementById('name').value;
                let curso = document.getElementById('curso').value;
                let turma = document.getElementById('turma').value;
                console.log(nome, curso, turma);
                campos_todos_valores.push(nome, curso, turma);
                proxima_etapa(2);
                break;
            case 2:
                let matricula = document.getElementById('matricula').value;
                let email = document.getElementById('email').value;
                let telefone = document.getElementById('telefone').value;
                campos_todos_valores.push(matricula, email, telefone);
                proxima_etapa(3);
                break;
        }
        console.log(etapa_index)
    }
});


function realizar_cadastro(){
    let senha = document.getElementById('senha').value;
    campos_todos_valores.push(senha);


    requisicao(campos_todos_valores[0], campos_todos_valores[1], campos_todos_valores[2], campos_todos_valores[3], campos_todos_valores[4], campos_todos_valores[5], campos_todos_valores[6]);
}