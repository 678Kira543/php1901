<?php session_start();?>
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Авторизация</title>
        <script src="https://kit.fontawesome.com/f68bde411c.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WOW vlog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="addArticles.php">Добавить статью</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="articles.php">Статьи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ссылка</a>
                    </li>
                </ul>
                <?php if(array_key_exists("id", $_SESSION)):?>
                    <a href="/exit.php" class="btn btn-success">Выход</a>
                <?php else: ?>
                <a href="login.php" class="btn btn-primary me-1">Вход</a>
                <a href="reg.html" class="btn btn-primary">Регистрация</a>
                <?php endif;?>
            </div>
        </div>
    </nav>

    <div class="container my-3">
        <div class="row">
            <div class="col-2">
                <img width="100%" src="<?= $_SESSION['img'] ?>" alt="Аватар пользователя">
                <form action="/php/handlerUserAvatar.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="userfile"> <input type="submit" value="Загрузить">
                </form>
            </div>
            <div class="col-10">
                <?= "Имя: ".$_SESSION['name']."<br>"?>
                <?= "Фамилия: ".$_SESSION['lastname']."<br>"?>
                <?= "E-mail: ".$_SESSION['email']."<br>"?>
                <?= "ID: ".$_SESSION['id']."<br>"?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>