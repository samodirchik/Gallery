<?php

const PHOTO_MAX_SIZE = 5 * 1024 * 1024;
const PHOTO_AVAILABLE = array(
    'image/jpeg',
    'image/png',
    'image/gif',
);
const PHOTO_DIR = '../images';

global $msg;
if (!isset($_FILES['photo'])) {
    $msg = 'no file avatar for upload';
} else {
    $photo = $_FILES['photo'];
    if ($photo['error'] != 0) {
        switch ($photo['error']) {
            case UPLOAD_ERR_INI_SIZE:
                $msg = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $msg = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
                break;
            case UPLOAD_ERR_PARTIAL:
                $msg = "The uploaded file was only partially uploaded";
                break;
            case UPLOAD_ERR_NO_FILE:
                $msg = "No file was uploaded";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $msg = "Missing a temporary folder";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $msg = "Failed to write file to disk";
                break;
            case UPLOAD_ERR_EXTENSION:
                $msg = "File upload stopped by extension";
                break;
            default:
                $msg = "Unknown upload error";
                break;
        }
    } else if (!in_array($photo['type'], PHOTO_AVAILABLE)) {
        $msg = 'unavailable type of type';
    } else if ($photo['size'] > PHOTO_MAX_SIZE) {
        $msg = 'file too large';
    } else {
        $photo_path = PHOTO_DIR . DIRECTORY_SEPARATOR . $photo['name'];
        move_uploaded_file($photo['tmp_name'], $photo_path);
        header('location:photo_gallery.php');
    }
}
if (!empty($msg)) {
    $script = '<script>alert ("' . $msg . '");</script>';
    $close = '<br><a href="index.php">return to homepage</a>';
    echo $msg . $script . $close;
}

