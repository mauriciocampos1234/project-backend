<?php include('config.php'); ?>
<?php Site::updateUsuarioOnline(); ?>
<?php Site::contador(); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Portfólio | Maurício Campos</title>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Desenvolvimento Web, TI, Tecnologia, Web Designer, Software, Criação de sites">
    <meta name="description" content="Portfólio de um Desenvolvedor FullStack">
    <link rel="shortcut icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
</head>
<body>


<base base="<?php echo INCLUDE_PATH; ?>" />
    
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'depoimentos';
                echo '<target target="depoimentos" />';
                break;

            case 'servicos':
                echo '<target target="servicos" />';
                break;
        }
    ?>

    <div class="sucesso">Formulário enviado com sucesso!</div>
	<div class="overlay-loading">
		<img src="<?php echo INCLUDE_PATH ?>images/ajax-loader.gif" />
	</div><!--overlay-loading-->

    <header>
        <div class="center">
            <div class="logo left"><a href="/">Maurício Campos</a></div><!--Logomarca-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="portfolio" href="<?php echo INCLUDE_PATH; ?>portfolio">Portfólio</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul><!--lista desktop-->
            </nav><!--Desktop-->

            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa-solid fa-bars"></i>
                </div>                
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a realtime="portfolio" href="<?php echo INCLUDE_PATH; ?>portfolio">Portfólio</a></li>
                    <li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul><!--lista mobile-->
            </nav><!--mobile-->
        <div class="clear"></div><!--Resentando Flutuação-->
        </div><!--Center-->
    </header><!--Header-->

    <div class="container-principal">
            
            <?php
                $url = isset($_GET['url']) ? $_GET['url'] : 'home';
                if(file_exists('pages/'.$url.'.php')) {
                    include('pages/'.$url.'.php');
                }else {
                    if($url != 'depoimentos' && $url != 'servicos'){
                        $pagina404 = true;
                        include('pages/404.php');
                    }else {
                        include('pages/home.php');
                    }
                }
            ?>
    </div><!--container-principal-->

    <footer <?php if (isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
        <div class="center">
            <p>&copy; 2024 Mauricio Campos - Todos os direitos reservados</p>
        </div>
    </footer><!--Footer-->

    <!--TRabalhando e importando JavaScript-->
    
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.mask.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/mask-form.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/constants.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
    
    <?php
        if($url == 'home' || $url == ''){
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
    <?php } ?>
    <?php
        if($url == 'contato'){
    ?>
    <?php } ?>
    <!-- <script src="<?php echo INCLUDE_PATH; ?>js/exemplo.js"></script> -->
    <script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>


    <!-- <script>
        $(function(){
            alert("Seja muito bem vindo(a) ao meu site!")
        })
    </script> -->
    <script>
    (g => {
    var h, a, k, p = "The Google Maps JavaScript API",
    c = "google",
    l = "importLibrary",
    q = "__ib__",
    m = document,
    b = window;
    b = b[c] || (b[c] = {});
    var d = b.maps || (b.maps = {}),
    r = new Set,
    e = new URLSearchParams,
    u = () => h || (h = new Promise(async (f, n) => {
    await (a = m.createElement("script"));
    e.set("libraries", [...r] + "");
    for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
    e.set("callback", c + ".maps." + q);
    a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
    d[q] = f;
    a.onerror = () => h = n(Error(p + " could not load."));
    a.nonce = m.querySelector("script[nonce]")?.nonce || "";
    m.head.append(a)
    }));
    d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() => d[l](f, ...n))
    })({
    key: "AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4",
    v: "weekly",
    });
    </script>


</body>
</html>