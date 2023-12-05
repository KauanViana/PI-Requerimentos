// Trocar opção aluno/adm

const botoes = [document.getElementById('opcao1'), document.getElementById('opcao2')];

function trocar_botao(index, botao_anterior){
    botoes[index].style.color = 'Black';
    botoes[index].style.textDecoration = 'underline';
    
    botoes[botao_anterior].style.color = 'var(--cinza)';
    botoes[botao_anterior].style.textDecoration = 'none';
}

botoes[0].addEventListener('click', function(){trocar_botao(0,1)});
botoes[1].addEventListener('click', function(){trocar_botao(1,0)});
trocar_botao(0,1)


// Botão próxima etapa

function proxima_etapa(index){
    elementos_html = document.getElementsByClassName('form')
    for(i = 0; i < elementos_html.length; i++){
        elementos_html[i].remove();
    }

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
            break;
    }

}

function obterValoresCampos() {
    var elementosInput = document.querySelectorAll('.input');
    var valores = [];
    elementosInput.forEach(function(elemento) {
        var campo = elemento.querySelector('input, select');

        var nomeCampo = campo.name || campo.id;
        var valorCampo = campo.value;

        valores.push(valorCampo);
    });
    console.log(valores);
    return valores;
}

var etapa_index = 1;

const btn_proxima_etapa = document.getElementById('prox-etapa');
btn_proxima_etapa.addEventListener('click', function(){
    let campos = obterValoresCampos();
    let algum_vazio = 0;

    for (let i = 0; i < campos.length; i++){
        if(campos[i]){
            algum_vazio += 0;
        } else {
            algum_vazio += 1;
        }
    }

    if (algum_vazio == 0) {
        switch (etapa_index){
            case 1:
                proxima_etapa(2);
                break;
            case 2:
                proxima_etapa(3);
                break;
        }
    } else {
        alert('Por favor, preencha todos os campos.');
    }

});

// const btn_cadastrar = document.getElementById('cadastrar');
// btn_cadastrar.addEventListener('click', function(){
//     console.log('aoba zé');
// });

function cadastrar(){
    console.log('aoba zé');
}