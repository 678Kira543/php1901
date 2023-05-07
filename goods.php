<!doctype html>
<html lang="ru">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <?php
        $books = [
            [
                "Развитие сетей мобильной связи от 5G Advanced к 6G: проекты,технологии, архитектура",
                "https://cdn.img-gorod.ru/310x500/nomenclature/29/695/2969593.jpg",
                1960
            ],
            [
                "Разработка Android-приложений с нуля",
                "https://cdn.img-gorod.ru/310x500/nomenclature/29/694/2969450.jpg",
                1887
            ],
            [
                "Машинное обучение. Портфолио реальных проектов",
                "https://cdn.img-gorod.ru/310x500/nomenclature/29/688/2968898.jpg",
                2987
            ],
            [
                "Красивый C++: 30 главных правил чистого, безопасного и быстрого кода",
                "https://cdn.img-gorod.ru/310x500/nomenclature/29/688/2968899.jpg",
                2714
            ],
            [
                "Python. Великое программирование в Minecraft",
                "https://cdn.img-gorod.ru/310x500/nomenclature/29/686/2968695.jpg",
                1225
            ],
            [
                "Интерпретируемое машинное обучение на Python",
                "https://cdn.img-gorod.ru/310x500/nomenclature/29/683/2968341.jpg",
                2048
            ]
        ];
    ?>
    <div class="container">
        <div class="row">
            <?php
                for ($i = 0; $i<count($books); $i++){
                    echo "<div class='col-sm-3'><img width='100%' src='".$books[$i][1]."' alt=''><h6>".$books[$i][0]."</h6></div>";
                }
            ?>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>