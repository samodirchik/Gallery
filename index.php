<?php
include_once 'includes' . DIRECTORY_SEPARATOR . 'boot.php';

$news = getNews();
?>

<!doctype html>
<html lang="ru">
    <head>
        <title>index.php</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="css/css.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="content">
            <?php include_once 'includes' . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'navs.php' ?>
            <main>
                <?php foreach ($news as $itemNews): ?>
                    <div name="newsCard" class="news card">
                        <p><?= $itemNews['content'] ?></p>
                        <p name="date" class="card-footer text-muted"><?= $itemNews['date'] ?></p>
                    </div>
                <?php endforeach; ?>
            </main>
            <?php include_once 'includes' . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'footer.php' ?>
        </div>
    </body>
</html>
<?php

include_once '../includes/boot.php';
$novelty = getAdmNews();
$elementNews = $novelty[0];
session_start();
checkEnter();
checkExit();
?>

