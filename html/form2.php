<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Fatec CPS Carreira</title>
    <link rel="stylesheet" href="../css/style_form2.css">
    <link rel="shortcut icon" href="../images/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
<?php 
include_once("components/header.php")
?>


<div class="container form2">
    <h2>Fatec de Itapira "Ogari de Castro Pacheco"</h2>
    <p>ANEXO II</p>

    <div class="section-title">1 - Metas Relacionadas ao Projeto</div>
    <div class="form-group">
        <label for="metas">Descreva as metas do projeto:</label>
        <textarea id="metas" rows="4"></textarea>
    </div>

    <div class="section-title">2 - Objetivos do Projeto - Detalhamento</div>
    <div class="form-group">
        <label for="objetivos">Descreva os objetivos do projeto:</label>
        <textarea id="objetivos" rows="3"></textarea>
    </div>

    <div class="section-title">3 - Justificativas do Projeto - Detalhamento</div>
    <div class="form-group">
        <label for="justificativas">Descreva as justificativas do projeto:</label>
        <textarea id="justificativas" rows="3"></textarea>
    </div>

    <div class="section-title">4 - Recursos Materiais e Humanos - Detalhamento</div>
    <div class="form-group">
        <label for="recursos">Liste os recursos necessários:</label>
        <textarea id="recursos" rows="3"></textarea>
    </div>

    <div class="section-title">5 - Resultado Esperado - Previsão</div>
    <div class="form-group">
        <label for="resultado">Descreva o resultado esperado:</label>
        <textarea id="resultado" rows="2"></textarea>
    </div>

    <div class="section-title">6 - Metodologia</div>
    <div class="form-group">
        <label for="metodologia">Descreva a metodologia a ser utilizada:</label>
        <textarea id="metodologia" rows="2"></textarea>
    </div>

    <div class="section-title">7 - Cronograma de Execução das Atividades</div>
    <div class="form-group">
        <label>Atividades:</label>
        <ul>
            <li>Apresentação do Projeto CPS Carreira - Agosto</li>
            <li>Divulgação e apresentação aos alunos - Setembro</li>
            <li>Busca de parceria junto à comunidade - Outubro</li>
            <li>Busca de parceria junto à comunidade - Novembro</li>
            <li>Entrega das documentações e finalizar as documentações - Dezembro</li>
        </ul>
    </div>

    <div class="button-group">
        <button onclick="enviarFormulario()">Enviar Formulário</button>
    </div>
</div>
<?php 
    include_once("components/footer.php")
    ?>
    

<script>
    function enviarFormulario() {
        alert("Formulário enviado com sucesso!");
    }
</script>

</body>
</html>
