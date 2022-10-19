<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
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
    <title>Zap Sem Add Sem Contato</title>
</head>
<body class="body">
<header class="cabecalho">
    <div class="cabecalho-titulo">
        <img src="images/whatsapp.png" alt="whats" class="img-whats">
        <div class="h1-cabecalho">
        <h1 class="h1-cabecalho">
            Zap Sem Adicionar Contato
        </h1>
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
                data-adtest="on" 
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
        </ul>
    </div>
    </div>
    
    <form method="post" id= "formulario" class="form">
        <div class="form_box">
            <div class="div_phone">
                <input type="text" name="phone_number" id="phone_number" placeholder="Número a ser enviado"><br>
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
        $cellphone =  $_POST["phone_number"];
        $ddd = $_POST["DDD"];
        $country_number =  $_POST["country_number"];

        if(empty($cellphone))
        {
            
        echo '<p class="err_text">o número de telefone não pode estar vazio!</p>';
        }
        
        elseif(empty($country_number))
        {
        echo '<p class="err_text">o número do país não pode estar vazio!</p>';
        }
        
        elseif(empty($ddd))
        {
        echo '<p class="err_text">o número do DDD não pode estar vazio!</p>';
        }

        else
        {   
            $message = "&text=Olá estou usando o Whatsapp";
            $link = "{$whats}+{$country_number}{$ddd}{$cellphone}{$message}";
            echo $link;
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
            data-adtest="on" 
            data-full-width-responsive="true"></ins>
    
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    </div>
    <footer>

        <div>
            <div class="image-git">
                <a href="github.com/vbsx" class="image-git">
                    <img src="images/github.png" alt="git" class="image-git">
                    More Projects >
                </a>
            </div>
        </div>
    </footer>
</body>
</html>