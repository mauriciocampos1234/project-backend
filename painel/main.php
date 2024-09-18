<?php
    if(isset($_GET['loggout'])){
        Painel::loggout();
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<title>Painel de controle</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css">
</head>
<body>

    <div class="menu">
        <div class="menu-wraper">
        <div class="box-usuario">
            <?php
                if($_SESSION['img'] == ''){
            ?>
            <div class="avatar-usuario">
                <i class="fa fa-user"></i>
            </div><!--avatar-usuario-->
            <?php }else{ ?>
                <div class="imagem-usuario">
                    <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
                </div><!--imagem-usuario-->
                <?php } ?>
            
            <div class="nome-usuario">
                <p><?php echo $_SESSION['nome']; ?></p>
                <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
            </div><!--nome-usuario-->
        </div><!--box-usuario-->

        <div class="items-menu">
            <h2>Cadastro</h2>
            <a href="">Cadastrar Depoimentos</a>
            <a href="">Cadastrar Serviço</a>
            <a href="">Cadastrar Slides</a>
            <h2>Gestão</h2>
            <a href="">Listar Depoimentos</a>
            <a href="">Listar Serviços</a>
            <a href="">Listar Slides</a>
            <h2>Administração do Painel</h2>
            <a href="">Editar Usuários</a>
            <a href="">Adicionar Usuários</a>
            <h2>Configuração Geral</h2>
            <a href="">Editar</a>
            
        </div><!--items-menu-->        
        </div><!--menu-wraper-->
    </div><!--menu-->
    
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div><!--menu-btn-->
            <div class="loggout">
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"> <i class="fa fa-window-close"></i> <span>Sair</span></a>
            </div><!--loggout-->
            <div class="clear"></div><!--Resetando a flutuação-->
        </div><!--center-->
    </header>
    
    <div class="content">
        <div class="box-content left w100">
            <!-- <h2><i class="fa fa-home"> Painel de controle - <?php echo $nomeEmpresa ?></i></h2> -->
            <div class="box-metricas">
                <div class="box-metrica-single">
                    <div class="box-metrica-wraper">
                        <h2>Usuários Online</h2>
                        <p>10</p>
                    </div><!--box-metrica-wraper-->
                </div><!--box-metrica-single-->

                <div class="box-metrica-single">
                    <div class="box-metrica-wraper">
                        <h2>Total de Visitas</h2>
                        <p>100</p>
                    </div><!--box-metrica-wraper-->
                </div><!--box-metrica-single-->

                <div class="box-metrica-single">
                    <div class="box-metrica-wraper">
                        <h2>Visitas Hoje</h2>
                        <p>3</p>
                    </div><!--box-metrica-wraper-->
                </div><!--box-metrica-single-->
                <div class="clear"></div><!--Resetando a flutuação-->
            </div><!--box-metricas-->
        
        </div><!--box-content (1)-->


        
    </div><!--content-->
    
    <script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
</body>
</html>