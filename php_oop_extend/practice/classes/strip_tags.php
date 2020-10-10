<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP strinf tags</title>
</head>
<body>
    <?php
        $str="<p>Deskription tags yang boleh ditamilkan</p><h2>ferdiansyah</h2>";
        $text=strip_tags($str,'<p>');
        var_dump($text);
        echo $text;
    ?>
</body>
</html>

<?php
    $data=getdate();
    var_dump($data);
?>