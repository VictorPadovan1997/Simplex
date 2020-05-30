<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Simplex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    <script src="simplex.js"></script>
    <script src="./projeto.js"></script>
</head>

<!--MODAL FAZ CHAMADA QDO O USUARIO NÃO INSERI NENHUM VALOR NOS INPUT-->
<div class="modal" tabindex="-1" id="modal" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Assim você me complica, campos em Branco...</h5>
        </div>
        <div class="modal-body">
          <p>Sem nenhuma informação não consigo fazer o calculo.</p>
        </div>
        <div class="modal-footer">
            <a href="/" class="btn deleddte btn-success">OK</a>
        </div>
      </div>
    </div>
  </div>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container d-flex justify-content-between">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <strong>Simplex</strong>
        </a>
      </div>
    </div>
  </header>
<body>
    <div class="text-center">
        <br>
        <h2>Vamos começar...</h2>
        <div class="container">
            <span>Escolha uma Opção:&emsp;</span>
            <label class="radio-inline" id="objetivo">
                <input type="radio" id="max" checked name="tipo" value="max">
                <label for="max">Maximizar</label>
                <input type="radio" id="min" name="tipo" value="min">
                <label for="min">Minimizar</label>
                <br>
            </label>
        </div>
        <hr>
        <div class="container jumbotron">
            <div>
                <label>Total de Variáveis
                    <input class="form-control" placeholder="Digite um numero..." type="number" id="variaveis" name="variaveis">
                </label>
            </div>
            <hr>
            <div>
                <label>Total de Restrições
                    <input class="form-control"  placeholder="Digite um numero..." type="number" id="restricoes" name="restricoes">
                </label>
            </div>
            <hr>
            <div>
                <label>Total de Iterações
                    <input class="form-control"  placeholder="Digite um numero..." type="number" id="iteracoes" name="iteracoes">
                </label>
            </div>
            <hr>
        </div>
        <br>
        <button class="btn btn-success" type="button"  placeholder="Digite um numero..." onclick="tabelaGerada()">INICIAR</button>
    </div>
    <br>
    <br>

    <div class="text-center jumbotron" style="display: none;" id="parametros">
        <h3>Objetivos e as Restrições</h3>
        <div class="offset-md-3 col-md-6">
            <table class="table texto-centro">
                <thead id="linha_funcao">
                </thead>
                <tbody id="tabela_restricoes">
                </tbody>
            </table>
            <button class="btn btn-success" type="button" onclick="solucaoDoSimplex()">Calcular</button>
        </div>
        <hr/>
    </div>

    <!-- Passo a passo -->
    <div style="display: none;" id="passoapasso">
        <hr/>
        <div class="text-center jumbotron">
            <h3 id="passoapassotitle">Passo a Passo </h3>
            <div class="offset-md-3 col-md-6">
                <table class="table texto-centro">
                    <thead></thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-success" id="anterior" onclick="avancar(-1)">Anterior</button>
            <button class="btn btn-success" id="proximo" onclick="avancar(1)">Proximo</button>
        </div>
        <hr/>
    </div>

    <!-- Pagina 2 -->
    <div class="text-center jumbotron" style="display: none;" id="solucao">
        <h3>Solução
            <button class="btn btn btn-success" onclick="analise()">Análise de Sensibilidade</button>
            <button class="btn btn btn-primary" onclick="reiniciar()">Voltar</button>
        </h3>
        <div class="offset-md-3 col-md-6">
            <table class="table texto-centro">
                <thead id="resultado_header"></thead>
                <tbody id="resultado_simplex">
                </tbody>
            </table>
        </div>
    </div>
    <br>
    <div class="static-modal" id="analise" style="display: none;">
        <div tabindex="-1" role="dialog" class="modal" style="display: block;">
            <div class="modal-dialog">
                <div class="modal-content" role="document">
                    <div class="modal-header">
                        <button type="button" class="btn btn-primary pull-right" id="fechar">Voltar</button>
                    </div>
                    <div class="modal-body">
                        <table id="table-analise" border="1">
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>