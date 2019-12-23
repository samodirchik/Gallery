<?php
$dir = 'images';
$allImages = scandir($dir);
?>

<!doctype html>
<html lang="ru">
    <head>
        <title>photo_gallery.php</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="css/css.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="content">
            <?php include_once 'includes' . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'navs.php' ?>
            <div id="gallery">
                <?php foreach ($allImages as $pic): ?>
                    <?php if (exif_imagetype($dir . DIRECTORY_SEPARATOR . $pic)): ?>
                        <img src="<?= $dir . DIRECTORY_SEPARATOR . $pic; ?>" alt="photo">
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <?php include_once 'includes' . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'footer.php' ?>
        </div>
    </body>
</html>