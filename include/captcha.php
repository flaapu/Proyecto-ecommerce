<?php

//codigo de fede, gracias fede

if(!isset($_SESSION)){
  session_start();
}

    if ( !empty($_SESSION['rand_code']) )
    {
        unset($_SESSION['rand_code']);
    }   

    if (empty($_SESSION['rand_code']))
    {
        $captcha = "";
      $char_permitidos = "123456789abcdefghijklmnpqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ";
        for ($i = 0; $i <= 5; $i++)
        {
            $captcha .= $char_permitidos{rand(0, 58)};
        }
    
    $_SESSION['rand_code'] = $captcha;
}

header ('Content-Type: image/png');
$image = imagecreatetruecolor(80, 30);
$color_texto = imagecolorallocate($image, 235, 99, 107);
imagestring($image, 10, 10, 5,$captcha, $color_texto);
imagepng($image);
imagedestroy($image);


################################################################################################################################################
?>

