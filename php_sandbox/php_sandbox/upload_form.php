<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <form action='upload.php' method='POST' enctype="multipart/form-data">
        <input type='hidden' name='MAX_FILE_SIZE' value='1000000' />
        <input type='file' name='file_upload' />
        <br />
        <input type='submit' name='submit' value='Upload' />
    </form>
</body>

</html>