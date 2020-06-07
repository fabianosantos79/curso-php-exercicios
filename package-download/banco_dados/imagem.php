<?php
    $imagem = imagecreatetruecolor(300, 300);

    $cor = imagecolorallocate($imagem, 0, 255, 0);

    imagefill($imagem, 0, 0, $cor);

    //header("Content-type: image/jpeg"); - mostrar na tela

    //imagejpeg($imagem, 'nova_imagem.jpg', 100);
    
    imagepng($imagem, 'nova_imagem.png');

    ?>