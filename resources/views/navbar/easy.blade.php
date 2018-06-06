<!DOCTYPE html>
<html>

<head>
    <title>Easy Reader</title>
    <link rel="icon" href="img/logo_2.png" type="image/x-icon" />
    <script src="js/pegar.js"></script>
    <meta charset="UTF-8">
    <link href="js/estilizacao.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <script src="http://code.responsivevoice.org/responsivevoice.js"></script>
    
</head>

<body>
    <ul class="nav justify-content-center">
        <a class="nav-link active" href="/"><img src="img/logo_1.png" /></a>
            
       
    </ul>
    <div class="container">

        <h1>Insira seu texto aqui</h1>
        <textarea class="areadetexto" name="comments" rows="8" cols="75" id="textantes"></textarea>
        <textarea style="margin-left:5px" class="areadetexto" name="comments" rows="8" cols="75" id="textdepois"></textarea>
        <input id="palavralvo" style="margin-top:20px" type="text" class="form-control" placeholder="Insira uma palavra alvo">
        <div id="divbotoes">
            <button type="button" onclick="capturar()" id="btnsubstituir" class="btn btn-outline-primary">Substituir!</button>
            <button type="button" onclick="sintetizarAntes()" id="btnsubstituir" class="btn btn-outline-primary botoes">Ouvir texto original</button>
            <button type="button" onclick="sintetizarDepois()" id="btnsubstituir" class="btn btn-outline-primary botoes">Ouvir texto modificado</button>
        </div>
    </div>
</body>

</html>