@extends('template.home') 
@section('title','Fisco Consultoria') 
@section('container')
<footer class="page-footer e0e0e0 grey lighten-2 lighten-2">
    <div class="container">
        <div class="row">
            <h5 class="center #4caf50 green light-text">Teste no Produto </h5>
            <h5 class="black-text"> Digite seu texto e clique no botão. </h5>
            <br>
            
          <div class="container">
        
           
            <textarea class="areadetexto black-text" name="comments" rows="8" cols="75" id="textantes"></textarea>
            <textarea class="black-text" style="margin-left:5px" class="areadetexto" name="comments" rows="8" cols="75" id="textdepois"></textarea>
            <input class="black-text" id="palavralvo" style="margin-top:20px" type="text" class="form-control" placeholder="Insira uma palavra alvo">
            <div id="divbotoes">
                <button class="green" type="button" onclick="capturar()" id="btnsubstituir" class="btn btn-outline-primary">Substituir!</button>
                <button  class="green"type="button" onclick="sintetizarAntes()" id="btnsubstituir" class="btn btn-outline-primary botoes">Ouvir texto original</button>
                <button class="green" type="button" onclick="sintetizarDepois()" id="btnsubstituir" class="btn btn-outline-primary botoes">Ouvir texto modificado</button>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</footer>
@endsection
 
@section('mapa')
<div class="row">
    <div class="col l6 s12">
        <h5 class="white-text green center" align="justify ">Easy Reader</h5>
        <p class="black-text" align="justify ">Trabalhando com você em busca do seu bem estar.</p>
    </div>
    <div class="col l4 offset-l2 s12">
        <h5 class="white-text green center" align="justify ">Rede Social</h5>
        <ul>
            <li><a class="black-text text-lighten-3" href="" target="_blank"><img src="img/sites/if_facebook.png" class="responsive-img imagem"></a></li>
        </ul>
    </div>
</div>
@endsection