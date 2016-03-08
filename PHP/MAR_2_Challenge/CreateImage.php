<?php

class MyClass {

    public $thumbnail;

    function thumbnailImage($imagePath) {
        $img = imagecreatefromjpeg($imagePath);
        $width = imagesx($img);
        $height = imagesy($img);

        for ($i=4; $i>1; $i--){
            $tmp_img = imagecreatetruecolor( $width/$i, $height/$i );

            $thumbnail = imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $width/$i, $height/$i, $width, $height );

            if ($i==4){
                imagejpeg( $tmp_img, "thumbnails/quarter.jpg" );
            }else if ($i==3){
                imagejpeg( $tmp_img, "thumbnails/third.jpg" );
            }else if ($i==2){
                imagejpeg( $tmp_img, "thumbnails/half.jpg" );
            }
        }
    }


}

// Create an object
$obj = new MyClass;

$obj -> thumbnailImage("images/download.jpg")



?>

<!DOCTYPE html>
<html>
    <head>
        <title>Thumbnail Challenge</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </head>

    <body class="col-xs-8 col-xs-offset-2">

        <div class="h3 col-xs-12">Original Image <br/>
        <img src= "images/download.jpg" alt="thumbnail1"/>
        </div>

        <div class="h3 col-sm-3 col-lg-2">Half <br/>
            <img src= "thumbnails/half.jpg" alt="thumbnail1"/>
        </div>

        <div class="h3 col-sm-2 col-lg-2">Third <br/>
            <img src= "thumbnails/third.jpg" alt="thumbnail1"/>
        </div>

        <div class="h3 col-sm-1 col-lg-1">Quarter <br/>
            <img src= "thumbnails/quarter.jpg" alt="thumbnail1"/>
        </div>

    </body>
<html>
