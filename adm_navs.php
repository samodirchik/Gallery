<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Name Site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="photo_gallery.php">Gallery</a>
            </li>
        </ul>
    </div>
    <div>
        <?php if (empty($_SESSION['name'])) : ?>
            <?php include_once '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'html' . DIRECTORY_SEPARATOR . 'html_auth.php' ?>
        <?php else: ?>
            <ul class="navbar-nav" id="user">
                <li class="nav-item">
                    Hello, <?= $_SESSION['name'] ?>!
                </li>
                <li class="nav-item">
                    <a href="index.php?exit" class="nav-link">Exit</a>
                </li>
            </ul>
        <?php endif; ?>
    </div>
</nav>

