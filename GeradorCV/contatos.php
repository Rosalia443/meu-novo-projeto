
<?php 
include "layout/cabecalho.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<div class="formulario">
    <h4>Cadastre suas informações</h4> 
    <main class="container" style="margin-top:30px">
        <form action="gerarCV.php" method="post" target="_blank" enctype="multipart/form-data">
            <div class="form">
                <div class="form-body">
                    <h4 class="contato">Informações gerais</h4>

                    <div class="form-group">
                        <label for="nome">Nome Completo</label>
                        <input type="text"  name="nome" id="nome"
                        placeholder="Gabriela Rodrigues Souza" required>
                        <label for="idade">Idade</label>
                        <input type="num"  name="idade" id="idade"
                        placeholder="20 anos">


                    </div>

                    <div class="form-body">
                        

                        <div class="form-body">
                            <div class="col">
                                <div class="form-body">
                                    <label for="objetivo">Objetivo profissional</label>
                                    <input type="text" class="objetivo" name="objetivo" id="objetivo" placeholder="Descreva seus objetivos proffisionais">
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-body">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Rua Faculdade 316 Bairro Santa Cruz">
                            <label for="cidade_estado">Cidade-Estado</label>
                            <input type="text" name="cidade_estado" id=cidade placeholder="Cascavel-PR">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-body">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control" name="telefone" id="telefone"required>
                                </div>
                            </div> 
                            <div class="col">
                                <div class="form-body">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                            </div> 
                        </div>
                        
                    </div>


                    <div class="form-body" id="div-formacoes">
                        <h4 class="form-title">Formação académica</h4>
                        <button class="btn btn-sm right" id="btn-adicionar-formacao" title="Adicionar formação">Adicionar formação</button>
                    </div>

                    <div class="form-body" id="div-experiencias">
                        <h4 class="card-title">Experiência proffissional</h4>
                        <button class="btn btn-sm right" id="btn-adicionar-experiencia" title="Adicionar experiência">Adicionar experiência</button>
                    </div>
                    
                    <footer>
                       <button class="btn-gerar" type="submit">Gerar CV</button>
                       <button class="btn-restaurar" type="reset"></button>

                   </footer>
                   
                   
               </div>
           </form>
       </main>


       


       <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
       <script src="js/index.js"></script>
       
       <?php 






       include "layout/rodape.php"; 

   ?>