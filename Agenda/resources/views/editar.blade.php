<html>

 <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Criar Tarefa</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
            <style>
                

                body{
                    background-color:slategray;
                }
                .tamanho{
                    position: absolute;
                    width:80%;
                    left:10% ;
                    top:10%;
                }
                html {
    height:100%;
}
 
body {
    margin:0;
}
 
.bg {
    animation:slide 3s ease-in-out infinite alternate;
    background-image: linear-gradient(-60deg, rgb(61, 54, 54) 50%, rgb(85, 35, 35) 50%);
    bottom:0;
    left:-50%;
    opacity:.5;
    position:fixed;
    right:-50%;
    top:0;
    z-index:-1;
}
 
.bg2 {
    animation-direction:alternate-reverse;
    animation-duration:4s;
}
 
.bg3 {
    animation-duration:5s;
}
 
.content {
    background-color:rgba(255,255,255,.8);
    border-radius:.25em;
    box-shadow:0 0 .25em rgba(0,0,0,.25);
    box-sizing:border-box;
    left:50%;
    padding:10vmin;
    position:fixed;
    text-align:center;
    top:50%;
    transform:translate(-50%, -50%);
}
 
h1 {
    font-family:monospace;
}
 
@keyframes slide {
    0% {
        transform:translateX(-25%);
    }
 
    100% {
        transform:translateX(25%);
    }
}

.nome {
    position: absolute;
    left: 35%;
    top: 30%;
}

.data {
    position: absolute;
    left: 35%;
    top:38%
    
}
.botao {
    position: absolute;
    left: 35%;
    top: 47%
    
}

            </style>
    
</head> 
 
    <body>
       
       
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>


</div>
      

    
        <form method="post" action="{{route('update')}}">
        @csrf

                <label class='nome'> Nome da Tarefa
                <input name="nome" type="text" class="form-control" id="nome" value="{{$tarefas[0]->nome}}" size="60" maxlength="60"/></label><br />
                <label class='data'>Dia:
                <input name="data" type="date" class="form-control" value="{{$tarefas[0]->data}}" id="data" size="60" /></label><br />
                <label class='grau_de_prioridade'>Grau de Prioridade:
                <input name="grau_de_prioridade" type="text" class="form-control" value="{{$tarefas[0]->grau_de_prioridade}}" id="grau_de_prioridade" size="60" /></label><br />

    

            <!--butão pra salvar-->
            <label class='botao'>
                <button type="button" class="btn btn-light">Salvar</button>
            </label>
          </form>
        </div>
    </body>


</html>