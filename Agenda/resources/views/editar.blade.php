<html>

 <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Criar Tarefa</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       
            <style>
                

                body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-x: hidden;
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
.login {

background-color: #212121;
width: 650px;
height: 545px;
padding: 35px;

border-radius: 10px;
}
header {
            background-color: #181920;
            padding: 20px;
            text-align: center;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
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


.gdp{
    position: absolute;
    left: 35%;
    top: 30%
}

.nome {
    position: absolute;
    left: 35%;
    top: 22%;
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

.arealogin {
display: flex;
height: 100vh;
justify-content: center;
align-items: center;
}

            </style>
    
</head> 
 
    <body>
       
       
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>


</div>
      

    
        <form method="post" action="{{route('update', $tarefa)}}">
        @csrf


        <section class="arealogin" >
            <div class="login">
                <label class='nome'> Nome da Tarefa
                <input name="nome" type="text" value="{{$tarefa->nome}}" class="form-control" id="nome" size="60" maxlength="60" /></label><br />
                <label class='data'>Dia:
                    <input name="data" type="date" value="{{$tarefa->grau_de_prioridade}}" class="form-control"  id="data" size="60" /></label><br />
                <label class='gdp'> Grau de Prioridade
                <input name="grau_de_prioridade" type="text" value="{{$tarefa->grau_de_prioridade}}" class="form-control" id="grau_de_prioridade" size="60" maxlength="60" /></label><br />
            
            </div>
        </section>

           
            <div class='botao'>
                
            <button type="submit" class="btn btn-light">Salvar</button>
            </div>
          </form>
        </div>
    </body>


</html>