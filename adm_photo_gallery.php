<?php
$dir = '../images';
$allImages = scandir($dir);
session_start();
?>

<!doctype html>
<html lang="ru">
    <head>
        <title>adm_photo_gallery.php</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link href="../css/css.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="content">
            <?php include_once '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'adm_navs.php' ?>
            <main>
                <?php if (empty($_SESSION['name'])) : ?>
                    <H2>Login in site!</H2>
                <?php else: ?>
                    <form action="upload.php" method="post" enctype="multipart/form-data" name="gallery">
                        <label>Add photo: <input type="file" name="photo" accept="image/*" class="form-control-file"></label>
                        <input type="submit" value="Upload" class="btn btn-primary">
                    </form>
                    <div id="gallery">
                        <?php foreach ($allImages as $pic): ?>
                            <?php if (exif_imagetype($dir . DIRECTORY_SEPARATOR . $pic)): ?>
                                <img src="<?= '../' . images . DIRECTORY_SEPARATOR . $pic; ?>" alt="photo">
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </main>
            <?php include_once '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'footer.php' ?>
        </div>
    </body>
</html>


