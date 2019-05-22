<?php


//    $pageName = "page-content/{$_GET["page"]}.php";
    $folder = "page-content/";
    $fileName = "cat-family";
    if ($_GET["page"]) {
        $fileName = $_GET["page"];
    }
    $pageName = $folder . $fileName . ".php";


    if (! file_exists($pageName)) {
        header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
        $pageName = "/parts/404.php";
    }
    $pageInfo = require $pageName;
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <title><?= $pageInfo["title"];?>!</title>
        <meta name="keywords" content="<?=$pageInfo["key"];?>" />
        <meta name="description" content="<?=$pageInfo["descr"];?>" />

        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/jquery.fancybox.min.css" />
    </head>

    <body>
    <?php require  __DIR__ .'/parts/header.php'?>
    <?=$pageInfo["content"];?>
    <p></p>




    <?php require  __DIR__ .'/parts/footer.php'?>

    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.fancybox-gallery').fancybox();
        });
    </script>

    </body>

<?php
//            $name = isset($_GET["name"]) ? $_GET["name"] : "Анонимус";
//                echo $name;
?>


</html>