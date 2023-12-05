<html>

 <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>cursopphp</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Adicionando Javascript -->
    <script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
          
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
       
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
    background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
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

            </style>
    
</head> 
 
    <body>
       
       
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>


</div>
      

    
        <form method="post" action="{{route('criar' )}}">
        @csrf
                <div class="tamanho">
                <div class="form-group">
                <label for="exampleInputEmail1">NOME COMPLETO</label>
                <input class="form-control" name="nome"  placeholder="nome">
                </div>

                <div class="form-group">
                <label for="exampleInputEmail1">EMAIL</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" name="email">
                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">TELEFONE</label>
                <input class="form-control"  placeholder="telefone" name="telefone">
                </div> 

            
           
                <label>Cep:
                <input name="cep" type="text" class="form-control" id="cep" value="" size="60" maxlength="60"
                       onblur="pesquisacep(this.value);" /></label><br />
                <label>Rua:
                <input name="rua" type="text" class="form-control"  id="rua" size="60" /></label><br />
                <label>Bairro:
                <input name="bairro" type="text" class="form-control" id="bairro" size="60" /></label><br />
                <label>Cidade:
                <input name="cidade" type="text" class="form-control" id="cidade" size="60" /></label><br />
                <label>Estado:
                <input name="uf" type="text" class="form-control" id="uf" size="60" /></label><br />

         
          
            <!--butão pra salvar-->
            <button type="submit" class="btn btn-primary">Salvar</button>
          </form>
        </div>
    </body>


</html>