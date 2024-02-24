<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея изображений</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }

        nav {
            background-color: #555;
            padding: 1em;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1em;
        }

        #content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 1em;
        }

        #content img {
            width: 33%;
            height: 600px;
            padding-bottom: 5px;
        }

        footer {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <h1>Галерея изображений</h1>
</header>

<nav>
    <a href="#">Главная</a>
    <a href="#">О нас</a>
    <a href="#">Контакты</a>
</nav>

<div id="content">
    <?php
    // Задаем путь к папке с изображениями
$dir = 'image/';
// Сканируем содержимое директории
// scandir — Получает список файлов и каталогов, расположенных по 
// указанному пути.
// Возвращает array, содержащий имена файлов и каталогов, расположенных по 
// пути, переданному в параметре
$files = scandir($dir);
// Если нет ошибок при сканировании
if ($files === false) {
 return; }
    for ($i = 0; $i < count($files); $i++) {
        // Пропускаем текущий каталог и родительский
        if (($files[$i] != ".") && ($files[$i] != "..") && ($files[$i] != ".DS_Store")) {
            // Получаем путь к изображению
            $path = $dir . $files[$i];
            // Выводим изображение на экран
            echo '<img src="' . $path . '" alt="Изображение ' . $i . '">';

        }
    }
    ?>
</div>

<footer>
    <p>2024 Pictures. Все права защищены.</p>
</footer>

</body>
</html>
