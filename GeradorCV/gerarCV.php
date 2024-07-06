<?php 


//Gera um array com os dados a serem enviados para impressão no currículo
//Cada elemento do array recebe o valor de um campo do formulário
$dados = array(
    'nome' => $_POST['nome'],
    'idade'=>$_POST['idade'],
    'endereco' => $_POST['endereco'],
    'telefone' => $_POST['telefone'],
    'email' => $_POST['email'],
    'formacoes' => isset($_POST['formacao-curso']) ?
                   array(
                        'cursos' => $_POST['formacao-curso'],
                        'instituicoes' => $_POST['formacao-instituicao'],
                        'conclusoes' => $_POST['formacao-conclusao']
                    ) : null, //Se o usuário não adicionou nenhuma formação, esse elemento ficará nulo
    'experiencias' => isset($_POST['experiencia-cargo']) ? 
                      array(
                        'cargos' => $_POST['experiencia-cargo'],
                        'empresas' => $_POST['experiencia-empresa'],
                        'inicios' =>  $_POST['experiencia-inicio'],
                        'fins' =>  $_POST['experiencia-fim'],
                      ) : null //Se o usuário não adicionou nenhuma experiência, esse elemento ficará nulo
);

//Carrega o arquivo referente ao modelo de currículo selecionado
//Quando faz isso, poderemos imprimir o conteúdo da variável $dados no currículo
require("modelos/modelo.php");

 ?>
