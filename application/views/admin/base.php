    <!doctype html>
    <html class="no-js" lang="">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('include/css.php');?>

    <style>
    .actProtate { animation: spin 0.5s linear infinite;}
    @keyframes spin {from { transform: rotate(0deg); } to { transform: rotate(360deg); }}
    </style>

    </head>
    <body>
    <?php include('include/header.php');?>
    <?php include('include/left.php');?>

    <?php
    if (!empty($layout) && trim($layout) !== "") {
    require_once($layout);
    } else {
    echo '<h1>Radhe Kumar</h1>';
    }
    ?>

    <?php include('include/footer.php');?>
    <?php include('include/js.php');?>
    </body>
    </html>