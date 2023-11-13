<?php
// our rand function

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';


echo '<h1>Random Pictures that will be changed Soon!</h1>';

    function random_images($photos) {
    $my_return = '';
    $i = rand(0, 4);
    $selected_image = ''.$photos [$i].'.jpg';
    $my_return =  '<img src="./images/'.$selected_image.'" alt"'.$photos [$i].'">';
    return $my_return;
    }  // end function

    echo random_images($photos);





