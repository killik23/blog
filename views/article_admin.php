<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF8">
        <title>Blog PHP</title>
        <link rel = "stylesheet" href = "../style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    </head>
    <body>
        <div class = "container">
            <h1>Blog PHP</h1>
            <div>
                <form method = "post" action = "index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <label>
                        Название
                        <input type = "text" name = "title" value = "<?=$article['title']?>" class = "form-item" autofocus required>
                    </label>
                    <label>
                        Дата
                        <input type = "date" name = "date" value = "<?=$article['date']?>" class = "form-item" autofocus required>
                    </label>
                    <label>
                        Содержимое
                        <textarea class = "form-item" name = "content" required><?=$article['content']?> </textarea>
                    </label>
                        <input type = "submit" value = "Сохранить" class = "btn" autofocus required>
                </form>
            </div>
                <footer>
                     <br><p>My first blog on PHP<br>Copyright &copy 2015</p>
                </footer>
             </div>
    </body>
    </html>