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
            <a href="admin">Панель администратора</a>
            <div>
                <?php foreach($article as $a):?>
                <div class="article">
                    <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                    <em>Опубликовано: <?=$a['date']?></em>
                    <p><?=articles_intro($a['content'])?>
                </div>
                <?php endforeach ?>
            </div>
        <footer>
            <p>Мой первый блог<br>Copyright &copy;2016</p>
        </footer>
        
        </div>
    </body>
</html>