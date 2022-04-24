<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<form name="MyForm" enctype="multipart/form-data" method="post" action="upload.php">
    <p><b>C каким именем сохранить файл на сервере:</b><br>
        <input name="file_name" type="text" size="40">
    </p>
    <p><b>Выберите файл":</b><Br>
        <input name="content" type="file"/>
    </p>
    <input type="submit" value="Отправить файл"/>
    <input type="reset" value="Очистить"/>
</form>
</body>
</html>
