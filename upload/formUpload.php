<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <div>
        <form method="post" action="index.php" enctype="multipart/form-data">
            <label for="arquivo">Escolha seu arquivo</label>
            <br><br>
            <input type="file" id="arquivo" name="arquivo">
            <br><br>
            <input type="submit" value="Enviar Arquivo">
        </form>
    </div>
</body>
</html>