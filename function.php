<?php

function checkExit() {
    if (isset($_GET['exit'])) {
        session_destroy();
        header('Location:index.php');
    }
}

function checkEnter() {
    if (isset($_POST['name']) && isset($_POST['passw'])) {
        $name = $_POST['name'];
        $pass = $_POST['passw'];
        if (!$name && !$pass) {
            $msg = 'empty value';
        } else if (iconv_strlen($name) < 4) {
            $msg = 'value min 4 symbol';
        } else if (!empty($msg)) {
            echo $msg;
            exit();
        }
    }
}

function getAdmNews() {
    if (!file_exists('..' . DIRECTORY_SEPARATOR . NEWS_DATA_FILE)) {
        return false;
    } else {
        $content = file_get_contents('..' . DIRECTORY_SEPARATOR . NEWS_DATA_FILE);
        if (!$content) {
            return false;
        } else {
            $novelty = json_decode($content, true);
            return $novelty;
        }
    }
}

function getNews() {
    if (!file_exists(NEWS_DATA_FILE)) {
        return false;
    } else {
        $content = file_get_contents(NEWS_DATA_FILE);
        if (!$content) {
            return false;
        } else {
            $novelty = json_decode($content, true);
            return $novelty;
        }
    }
}

function saveNews($novelty) {
    $content = json_encode($novelty);
    $res = file_put_contents('..' . DIRECTORY_SEPARATOR . NEWS_DATA_FILE, $content);
    return (bool) $res;
}

function editNews($news) {
    $novelty = getAdmNews();
    array_splice($novelty, 0, 1, $news);
    saveNews($novelty);
}


