<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php 
    require_once "head.php";
    $titulo_da_pagina = "Zap Sem Add Sem Contato";
    new Head($titulo_da_pagina);
    ?>
</head>
<body class="body">
    <header class="cabecalho">
        <?php new Header();
        
        ?>
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
                <input type="submit" class="submit">
            </div>
        </div>
        
    </form>
    <div class="div_error">
        <?php
        $whatsweb = "https://web.whatsapp.com/send?phone=+55";
        $whats ="https://api.whatsapp.com/send?1=pt_BR&phone=+55";
        
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
            $link = "{$whats}{$cellphone}{$message}";
            $linkweb = "{$whatsweb}{$cellphone}{$message}";
            
            echo"
            <div>
                <p>
                    Abrir no    
                    <a href='$link' class='buttonswhats' target='_blank'> Aplicativo do Whatsapp</a>
                </p>
                <p>
                    Abrir no navegador 
                    <a href='$linkweb' class='buttonswhats' target='_blank'>Whatsapp web</a>
                </p>
            </div>
            <div class='popup'>
 
                <div class='popup'>
                    <p>Caso o Whatsapp não abra automaticamente desative o seu pop up ou clique neste </p>
                        <a href='$linkweb' target='_blank' id='link'> Link</a>
                    </p>
                </div>
            </div>
            ";
            
            echo "<script>
            window.open('$link',' _blank')
            
            // </script>";

            // window.open('$link', '_blank')
            // exit(header("Location: $link"));
        }
    }?>
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
        <div style="margin-bottom:50px;">
            <div class="image-git">
                <img src="images/github.png" alt="git" class="image-git">
                    <a href="https://www.github.com/vbsx/" class="image-git" target="_blank">
                    More Projects >
                    </a>
                
                    <p class="image-git">Copyright ©<?php echo date("Y"); ?> zapsemadd.com.br - Todos os direitos reservados</p>
            </div>
        </div>
    </footer>
</body>
</html>
