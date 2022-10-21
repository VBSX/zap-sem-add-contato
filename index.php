<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylemain.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php 
        header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
    ?>
    <link rel="icon" type="image/x-icon" href="images/whatsapp.png">
    <title>Zap Sem Add Sem Contato</title>
</head>
<body class="body">
<header class="cabecalho">
    <div class="cabecalho-titulo">
        <a href="index.php">
        <img src="images/whatsapp.png"  alt="whats" class="img-whats">
        </a>
        <div class="h1-cabecalho">
        <a href="index.php">
        <h1 class="h1-cabecalho">
            Zap Sem Adicionar Contato
        </h1>
        </a>
        </div>
        <div class="buttons-header" >
            <a href="about.php" class="header-about" id="about" >
                        <!-- Sobre -->
            </a>
            <a href="about.php" class="header-about" >
                        <!-- Contato -->
            </a> 
    </div>
    </div>
</header>
<div class="center_div">
    <div class="image-main-window">

    </div>
    <div class="main-title">
        <div class="lista_center">
            <h2 class="titulo">
                Quer enviar uma mensagem no whatsapp sem ter o contato salvo?
            </h2>
            <div class="adsense-in-article">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1319169190566423"
                crossorigin="anonymous">
            </script>
                <ins class="adsbygoogle"
                style="display:block; text-align:center; background-color: #f5f5f5"
                data-ad-layout="in-article"
                data-ad-format="fluid"
                data-ad-client="ca-pub-1319169190566423"
                data-ad-slot="8266209775"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

        </div class="lista">
        <ul class="lista">
            <li class="lista">
                Caso esteja querendo somente enviar uma mensagem pelo whatsapp sem ter que pegar o celular e salvar o contato
                e so depois disso enviar a mensagem.
            </li>
            <li class="lista">
                Só quer mandar a mesagem e não deseja salvar o numero em seus contatos no celular.
            </li>
            <h4 class="h4-title">
                <p class="h4-title">
                    Apenas coloque o DDD e o número do telefone e já pode começar a conversar!
                </p>
            </h4>
        </ul>
    </div>
    </div>
    
    <form method="post" id= "formulario" class="form">
        <div class="form_box">
            <div class="div_phone">
            <input type="tel" name="phone_number" id="phone_number" placeholder="(00) 0000-0000"><br>
            </div>
            <div class="div_submit">
                <input type="submit" id="submit">
            </div>
        </div>
        
    </form>
    <div class="div_error">
        <?php
        $whats = "https://web.whatsapp.com/send?phone=";
        
        if(array_key_exists("phone_number", $_POST)) 
        {
        $a =  $_POST["phone_number"];
        $arr = array('/\(|\)/','/\.|\-/');
        $cellphone = preg_replace($arr, "", $a);
        if(empty($cellphone))
        {
        echo '<p class="err_text">o número de telefone não pode estar vazio!</p>';
        }
      
        else
        {   
            $message = "&text=Olá estou usando o Whatsapp";
            $link = "{$whats}+55{$cellphone}{$message}";
            header("Location: $link");
            exit();
        }
    }
        ?>
    </div> 
    <div class="adsense-display">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1319169190566423"
            crossorigin="anonymous"></script>
        
            <ins class="adsbygoogle"
            style="display:block;background-color: #f5f5f5"
            data-ad-client="ca-pub-1319169190566423"
            data-ad-slot="4392212241"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <div class="container-news">
    <!-- <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta deserunt eius ipsa autem, nesciunt nam commodi enim esse, velit veniam pariatur dolorem natus possimus magni assumenda suscipit minima, unde molestiae?</p> -->
    </div>
    </div>
    <footer>
        <div>
            <div class="image-git">
                <img src="images/github.png" alt="git" class="image-git">
                    <a href="https://www.github.com/vbsx/" class="image-git" target="_blank">
                    More Projects >
                    </a>
            </div>
        </div>
    </footer>
</body>
</html>
