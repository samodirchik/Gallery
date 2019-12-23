<!doctype html>
<html lang="ru">
    <head>
        <title>adm_index.php</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script>
            window.onload = function () {
                ClassicEditor
                        .create(document.querySelector('#editor'))
                        .catch(error => {
                            console.error(error);
                        });
            }
        </script>
        <link href="../css/css.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="content">
            <?php include_once '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'adm_navs.php' ?>
            <main>
                <?php if (empty($_SESSION['name'])) : ?>
                    <H2>Login in site!</H2>
                <?php else: ?>
                    <form id="edit" action="saveEditNews.php" method="post" class="form-group">
                        <label>Text: <textarea name="content" id="editor"
                                               class="form-control"><?= $elementNews['content'] ?></textarea></label>
                        <label><input type="submit" value="Save edits news" class="btn btn-primary"/></label>
                    </form>
                    <?php foreach ($novelty as $itemNews): ?>
                        <div name="newsCard" class="news card">
                            <p><?= $itemNews['content'] ?></p>
                            <p name="date" class="card-footer text-muted"><?= $itemNews['date'] ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </main>
            <?php include_once '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'footer.php' ?>
        </div>
    </body>
</html>

