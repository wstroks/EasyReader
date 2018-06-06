@extends('template.home')


@section('title','Fisco Consultoria')




@section('container')

<footer class="page-footer aed581 light-green lighten-2">
        <div class="container">
                
          <div class="row">
             
            <h5 class="center #4caf50 green light-text">Sistemas </h5>
            <h5 class="black-text" align="justify"> Desenvolvido com a tecnologia de ponta, 
             encontra-se instalado e funcionando em mais de cinquenta Municípios de nosso estado.</h5>
            <br> 
            <h5 class="center #4caf50 green light-text"> Nossos Sistemas </h5>
            <ul class="collection with-header">
                
                <li class="collection-item avatar green center">
                    
                    <a class="title black-text" >NFS-e Notas Fiscais</a>
                    <p> Operacionalizado via browser sem a necessidade de instalação de aplicativos adicionais.</p>
                    <p>Possui manuais via web dos usuários e dos contribuintes.</p>
                    <a href="/NFS-Notas" class="btn-floating btn-medium"><i class="material-icons green" title="Ver Sistema">send</i></a>
                </li>
                <li class="collection-item avatar green center">
                    
                    <a class="title black-text" >Módulo da Nota Fiscal Eletrônicas de Serviço</a>
                    <p>Gerar Notas Fiscais Eletrônicas de Serviços</p>
                    <p>Possibilitar a geração de Notas Fiscais Eletrônicas de Serviços manual e individualmente.</p>
                    <a href="/Nota-Fiscal-Eletrônica" class="btn-floating btn-medium "><i class="material-icons green" title="Ver Sistema">send</i></a>
                </li>
                <li class="collection-item avatar green center">
                    
                    <a class="title black-text" >Módulo da Declaração Fiscal</a>
                    <p>Gera Declarações de Serviços Prestados.</p>
                    <p>Calcula o valor do imposto devido.</p>
                    <a href="/Módulo-da-Declaração-Fiscal" class="btn-floating btn-medium "><i class="material-icons green" title="Ver Sistema">send</i></a>
                </li>

                <li class="collection-item avatar green center">
                    
                    <a class="title black-text" >Módulo de Procedimentos Administrativos</a>
                    <p>Efetua lançamento de tributos e preços públicos aos contribuintes da Prefeitura de forma manual e individual.</p>
                    <p>Gera, emite e imprime documentos de arrecadação dos tributos ou preços públicos lançados.</p>
                    <a href="/Módulo-de-Procedimentos-Administrativos" class="btn-floating btn-medium "><i class="material-icons green" title="Ver Sistema">send</i></a>
                </li>

                 <li class="collection-item avatar center green">
                        
                        <a class="title black-text" >Módulo de Cadastros Mobiliário e Imobiliário</a>
                        <p class="white-text">Possibilita os contribuintes efetuarem seus recadastramentos mobiliários e imobiliários.</p>
                        <a href="/Módulo-de-Cadastros-Mobiliário-e-Imobiliário" class="btn-floating btn-medium "><i class="material-icons green" title="Ver Sistema">send</i></a>
                    </li>
            </ul>
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