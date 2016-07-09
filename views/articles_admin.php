<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css">
        <title>Мой первый блог</title>
    </head>
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <a href="index.php?action=add">Добавить статью</a>
            <div>
                <table class="admin_table">
                    <tr>
                        <th>Дата</th>
                        <th>Заголовок</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php foreach($article as $a){?>
                    <tr>
                        <td><?=$a['date']?></td>
                        <td><?=$a['title']?></td>
                        <td>
                            <a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
                        </td>
                        <td>
                            <a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
                        </td>
                    </tr>
                    <?php }?>
                </table>
                

            </div>
        <footer>
            <p>Мой первый блог<br>Copyright &copy;2016</p>
        </footer>
        
        </div>
    </body>
</html>