<?php
    ob_start();

    $dir = 'page-content/images/';
    $img = scandir($dir);
    $skipFolderPointers = 2;
    for ($i = $skipFolderPointers; $i < count($img); $i++) {
        $url = $dir.$img[$i];
        include __DIR__ . '/image-template.php';
    }
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
