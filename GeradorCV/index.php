
<head>
 <meta charset="UTF-8">
 <!-- <link rel="stylesheet" type="text/css" href="css/homepage.css">-->
 <style type="text/css">
    .tudo {
        min-height: 100%;
        background-image: url("img/fondoindex.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        background-position: center top;

    }


    .buttom{

        text-align: center;
        background-color:rgba(75, 90, 144, 1) ;
        font-size:18.28 px;
        width: 179.19 px;
        height: 44.11px;
        position: absolute;
        left: 691.99px;
        top: 390.35px;
        


    }

    .presentation{
        color: rgba(75, 90, 144, 1);
        text-align: center;
        font-size: 64px;
        font-family:Denk One ;
    }

    .conteudo{

      color: rgba(75, 90, 144, 1);
      text-align: center;
      font-size: 24.2px;
      font-family:Denk One ;



  }    


</style>
</head>


<section class="index">
    <?php 
    include "layout/cabecalho.php";
    ?>

    <body class= "tudo">

        <div class="corpo">
            <div class="presentation">Bem-vindo ao DrawCV</div>	
            <div class="conteudo">Crie seu curriculum de uma forma simples e profissional</div>
            <div class="buttom">	
                <button name="Criar CV"><a href="/GeradorCV/contatos.php">Criar CV</a></button>
            </div>

        </div>
        <?php 
        include "layout/rodape.php"; 

        ?>

    </section>
</body>