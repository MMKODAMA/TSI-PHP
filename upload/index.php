<?php
include 'formUpload.php';

if ($_FILES){
    if(mime_content_type($_FILES['arquivo']['tmp_name'])=='image/jpeg'){

    move_uploaded_file($_FILES['arquivo']['tmp_name'],__DIR__.'/arquivosRecebidos/'.rand(1,999999999).'user.jpeg');

    echo"arquivo{$_FILES['arquivo']['name']} recebido com sucesso<br><br>";
    }else{
        echo "tipo de arquivo nao aceito";
    }

}