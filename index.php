<?php
    $photos = [
        [ 'style' => '_1977', 'image' => 'image1.jpg', ],
        [ 'style' => 'aden', 'image' => 'image1.jpg', ],
        [ 'style' => 'brannan', 'image' => 'image1.jpg', ],
        [ 'style' => 'brooklyn', 'image' => 'image1.jpg', ],
        [ 'style' => 'clarendon', 'image' => 'image1.jpg', ],
        [ 'style' => 'earlybird', 'image' => 'image1.jpg', ],
        [ 'style' => 'gingham', 'image' => 'image1.jpg', ],
        [ 'style' => 'hudson', 'image' => 'image1.jpg', ],
        [ 'style' => 'inkwell', 'image' => 'image1.jpg', ],
        [ 'style' => 'kelvin', 'image' => 'image1.jpg', ],
        [ 'style' => 'lark', 'image' => 'image1.jpg', ],
        [ 'style' => 'lofi', 'image' => 'image1.jpg', ],
        [ 'style' => 'maven', 'image' => 'image1.jpg', ],
        [ 'style' => 'mayfair', 'image' => 'image1.jpg', ],
        [ 'style' => 'moon', 'image' => 'image1.jpg', ],
        [ 'style' => 'nashville', 'image' => 'image1.jpg', ],
        [ 'style' => 'perpetua', 'image' => 'image1.jpg', ],
        [ 'style' => 'reyes', 'image' => 'image1.jpg', ],
        [ 'style' => 'rise', 'image' => 'image1.jpg', ],
        [ 'style' => 'slumber', 'image' => 'image1.jpg', ],
        [ 'style' => 'stinson', 'image' => 'image1.jpg', ],
        [ 'style' => 'toaster', 'image' => 'image1.jpg', ],
        [ 'style' => 'valencia', 'image' => 'image1.jpg', ],
        [ 'style' => 'walden', 'image' => 'image1.jpg', ],
        [ 'style' => 'willow', 'image' => 'image1.jpg', ],
        [ 'style' => 'xpro2', 'image' => 'image1.jpg', ],
    ];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/cssgram.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        .cssgram {
            display: flex;
            flex-wrap: wrap;
        }
        .cssgramImage {
            width: 300px; 
            height: auto; 
        }
        .cssgramImage img { 
            vertical-align: bottom; 
        }
    </style>
</head>
<body>
    <div class="cssgram">
        <?php foreach ($photos as $photo): ?>
            <figure class="<?=$photo['style']?> cssgramImage">
                <img src="./img/<?=$photo['image']?>" alt="" />
            </figure>
        <?php endforeach; ?>
    </div>
</body>
</html>