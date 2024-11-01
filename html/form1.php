
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - Projeto de HAE</title>
    <link rel="stylesheet" href="../css/style_form1.css">
    <link rel="shortcut icon" href="../images/favicon/favicon.ico" type="image/x-icon">
</head>

<body>

<?php 
include_once("components/header.php")
?>


    
    <div class="container form1">

        <h1>Projeto de Hora Atividade Específica - H.A.E.</h1>

        <form name="haeForm" onsubmit="return validateForm()">
            <label for="professor">Professor(a):</label>
            <input type="text" id="professor" name="professor" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="rg">R.G.:</label>
            <input type="text" id="rg" name="rg" required>

            <label for="matricula">Matrícula:</label>
            <input type="text" id="matricula" name="matricula" required>

            <div class="section-title">Horário na Fatec de Itapira</div>

            <label for="hora-aula">Hora-aula semanal na Fatec:</label>
            <input type="number" id="hora-aula" name="hora-aula" required>

            <label for="outras-fatecs">Tem aula atribuída em outra(s) Fatec(s)?</label>
            <select id="outras-fatecs" name="outras-fatecs" required>
                <option value="">Selecione</option>
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select>

            <label for="tipo-hae">Tipo de HAE que está solicitando:</label>
            <select id="tipo-hae" name="tipo-hae" required>
                <option value="Estágio Supervisionado">Estágio Supervisionado</option>
                <option value="Trabalho de Graduação">Trabalho de Graduação</option>
            </select>

            <label for="quantidade-hae">Quantidade de H.A.E.S solicitadas (Inciso I a IV):</label>
            <input type="number" id="quantidade-hae" name="quantidade-hae" required>

            <div class="section-title">Quantidade de H.A.E. para Estágio Supervisionado</div>

            <label for="cst-gti">CST em GTI:</label>
            <input type="number" id="cst-gti" name="cst-gti" required>

            <label for="cst-gpi">CST em GPI:</label>
            <input type="number" id="cst-gpi" name="cst-gpi" required>

            <label for="cst-ge">CST em GE:</label>
            <input type="number" id="cst-ge" name="cst-ge" required>

            <label for="cst-dsm">CST em DSM:</label>
            <input type="number" id="cst-dsm" name="cst-dsm" required>

            <div class="section-title">Período do Projeto</div>

            <label for="inicio">Início do Projeto:</label>
            <input type="date" id="inicio" name="inicio" required>

            <label for="termino">Término do Projeto:</label>
            <input type="date" id="termino" name="termino" required>

            <button type="submit" class="submit-btn">Enviar Formulário</button>
        </form>
    </div>
    <?php 
    include_once("components/footer.php")
    ?>
    
    <script>
        function validateForm() {
            const email = document.forms["haeForm"]["email"].value;




            if (email == "") {
                alert("Por favor, preencha o campo");
                return false;
            }
            return true;
        }
    </script>

</body>

</html>