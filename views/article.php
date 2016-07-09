<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Мой первый блог</title>
    </head>
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <div>
                <div class="article">
                    <h3><?=$a["title"]?></h3>
                    <em>Опубликовано: <?=$a['date']?></em>
                    <p><?=$a['content']?>
                </div>
            </div>
        <footer>
            <p>Мой первый блог<br>Copyright &copy;2016</p>
        </footer>
        
        </div>
    </body>
</html>