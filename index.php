<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            body{
                background-color: #B2C2C8;
                font-family:sans-serif;
            }
            h1{
                color: #999;
                text-align: center;
            }
            form{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Algoritmo de dijkstra</h1>
        <form action="script.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            Envie seu arquivo CSV: <input type="file" name="file" id="file" />
            <input type="submit" name="submit" value="Enviar CSV!" />
        </form>
    </body>
</html>
