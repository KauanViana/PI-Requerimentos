<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requerimentos - IFBA</title>
    <link rel="stylesheet" href="../_CSS/requerimento_discente.css">
</head>
<body>
    <div class="container">
        <div class="barra-lateral">
            <div class="side-top">
                <div class="side-top-items">
                    <img src="../../ESTILO/IMAGENS/Logo_IF.png" width="30px" draggable="false">
                    <hr>
                </div>
            </div>

            <div class="side-mid">
                <button>Meus Requerimentos</button>
                <button>Configurações</button>
            </div>

            <div class="side-bottom">
                <button id="novo-requerimento">Novo Requerimento</button>
            </div>
        </div>
        <div class="div2"></div>
    </div>

    
    <form action="" method="post" enctype="multipart/form-data">
    <div id="myModal" class="modal">
        <div class="modal-content">
                <div class="left">
                    <div class="row">
                        <div class="input">
                            <label for="nome-docente">Nome do(s) Docente(s) Envolvido(s):</label>
                            <input type="text" id="nome-docente" name="nome-docente">
                        </div>
                        <div class="input">
                            <label for="data-inicial">Data Inicial:</label>
                            <input type="date" id="data-inicial" name="data-inicial">
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input">
                            <label for="email-docente">E-mail do(s) Docente(s) Envolvido(s):</label>
                            <input type="text" id="email-docente" name="email-docente">
                        </div>
                        <div class="input">
                            <label for="data-final">Data Final:</label>
                            <input type="date" id="data-final" name="data-final">
                        </div>
                    </div>

                    <div class="row">
                        <div class="input">
                            <label for="motivo-requerimento">Motivo do Requerimento:</label>
                            <textarea id="motivo-requerimento" name="motivo-requerimento" cols="80" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="right">
                    <div class="input">                
                        <label for="anexos">Anexos:</label>
                        <input type="file" accept=".pdf" id="anexos" name="anexos">
                    </div>
                    <div class="input">
                        <label for="observacoes">Observações:</label>
                        <textarea id="observacoes" name="observacoes" cols="20" rows="5"></textarea>
                    </div>
                    <div class="row">
                        <button id="cancelar-btn" type="reset">Cancelar</button>
                        <button id="enviar-btn" type="submit" name="enviar-btn">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <footer>
    </footer>

    <script src="../_JS/modal_controle.js"></script>

</body>
</html>