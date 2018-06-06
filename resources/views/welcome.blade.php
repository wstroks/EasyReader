@extends('template.home') 
@section('title','Easy Reader') 
@section('container')
<footer class="page-footer aed581 light-green lighten-2">
    <div class="container">
        <div class="row">
            <div class="slider">
                <ul class="slides green">
                    <li>
                        <img class="responsive-img" src="img/slide1.jpg">
                        <!-- random image -->
                        <div class="caption left-align in-left">
                            <h3 style="font-size:3vmax" class="004d40 teal darken-4 green-text center"> A dislexia atinge 5% da população mundial </h3>
                            <h5 style="font-size:1.5vmax" class="green text-004d40 white-text center "> Visando essa preocupação o Easy Reader tem a solução de amenizar seu problemas de leitura. </h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/slide4.jpg">
                        <!-- random image -->
                        <div class="caption left-align in-left">
                            <h3 style="font-size:3vmax" class="004d40 teal darken-4 green-text center">Como é a solução do Easy Reader?</h3>
                            <h5 style="font-size:1.5vmax" class="green text-004d40 white-text center"> Um dislexico tem dificuldades em ler determinadas palavras o nosso programa troca essas palavras afim de amenizar sua leitura.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/slide3.jpg">
                        <!-- random image -->
                        <div class="caption right-align in-right">
                            <h3 style="font-size:3vmax" class="004d40 teal darken-4 green-text center">Niveis de atuação</h3>
                            <h5 style="font-size:1.5vmax" class="green text-004d40 white-text center"> O programa ainda conta com nivéis de atuação, podendo alterar o texto todo ou parte dele.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/slide2.jpg">
                        <!-- random image -->
                        <div class="caption right-align in-right">
                            <h3 style="font-size:3vmax" class="004d40 teal darken-4 green-text center">Trabalhando com você em busca de uma socidade melhor.</h3>
                            <h5 style="font-size:1.5vmax" class="green text-004d40 white-text center"> Venha conhecer no produto teste e avalie ele!</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
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
 
@section('script')
<div id="fb-root">
</div>

<script type="text/javascript">
    $('.carousel.carousel-slider').carousel({fullWidth: true});
</script>
<script>
    $(document).ready(function(){
          $('.slider').slider();
        });
</script>

@endsection