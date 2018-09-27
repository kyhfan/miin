<?
    include_once "../include/autoload.php";

    $mnv_f          = new mnv_function();
    $my_db          = $mnv_f->Connect_MySQL();

    $phone_device   = $_REQUEST["phone_device"];
    $phone_type     = $_REQUEST["phone_type"];
    $msg1           = $_REQUEST["msg1"];
    $msg2           = $_REQUEST["msg2"];
    $msg3           = $_REQUEST["msg3"];
    $msg4           = $_REQUEST["msg4"];
    $msg5           = $_REQUEST["msg5"];
    $to_msg         = $_REQUEST["to_msg"];
    $from_msg       = $_REQUEST["from_msg"];

    // $im = __DIR__."/images/back_".$phone_device.".png";
    $im = imagecreatefromjpeg(__DIR__."/images/".$phone_device."/".$phone_device."_".$phone_type.".jpg");

    include "./api/textBox/Box.php";
    include "./api/textBox/Color.php";

    use GDText\Box;
    use GDText\Color;
print_r($im);
    // $im = imagecreatetruecolor(500, 500);
    // $backgroundColor = imagecolorallocate($im, 0, 18, 64);
    // imagefill($im, 0, 0, $backgroundColor);
    // print_r(__DIR__.'/nanumBold.ttf');

    // To. 메세지
    // $box = new Box($im);
    // $box->setFontFace(__DIR__.'/asset/font/nanumBold.ttf'); // http://www.dafont.com/franchise.font
    // $box->setFontColor(new Color(250, 82, 102));
    // // $box->setTextShadow(new Color(0, 0, 0, 50), 2, 2);
    // $box->setFontSize(70);
    // // $box->setBox(20, 20, 460, 460);
    // $box->setBox(517, 916, 0, 0);
    // $box->setTextAlign('center', 'center');
    // $box->draw("To.");
    
    // // From. 메세지
    // $box = new Box($im);
    // $box->setFontFace(__DIR__.'/asset/font/nanumBold.ttf'); // http://www.dafont.com/franchise.font
    // $box->setFontColor(new Color(250, 82, 102));
    // // $box->setTextShadow(new Color(0, 0, 0, 50), 2, 2);
    // $box->setFontSize(70);
    // // $box->setBox(20, 20, 460, 460);
    // $box->setBox(517, 1895, 0, 0);
    // $box->setTextAlign('center', 'center');
    // $box->draw("From.");
    
    // 받는 사람
    $box = new Box($im);
    $box->setFontFace(__DIR__.'/asset/font/nanumBold.ttf');
    $box->setFontColor(new Color(62, 48, 29));
    $box->setFontSize(70);
    $box->setBox(428, 886, 700, 0);
    $box->setTextAlign('left', 'center');
    $box->draw($to_msg);
    
    // 보내는 사람
    $box = new Box($im);
    $box->setFontFace(__DIR__.'/asset/font/nanumBold.ttf');
    $box->setFontColor(new Color(62, 48, 29));
    $box->setFontSize(70);
    $box->setBox(546, 1825, 700, 0);
    $box->setTextAlign('left', 'center');
    $box->draw($from_msg);
    
    $box = new Box($im);
    $box->setFontFace(__DIR__.'/asset/font/nanumBold.ttf');
    $box->setFontSize(70);
    $box->setFontColor(new Color(62, 48, 29));
    $box->setBox(280, 1070, 860, 0);
    $box->setTextAlign('center', 'center');
    $box->draw($msg1);
    
    $box = new Box($im);
    $box->setFontFace(__DIR__.'/asset/font/nanumBold.ttf');
    $box->setFontSize(70);
    $box->setFontColor(new Color(62, 48, 29));
    $box->setBox(280, 1210, 860, 0);
    $box->setTextAlign('center', 'center');
    // $box->setBackgroundColor(new Color(255, 86, 77));
    $box->draw($msg2);
    
    $box = new Box($im);
    $box->setFontFace(__DIR__.'/asset/font/nanumBold.ttf');
    $box->setFontSize(70);
    $box->setFontColor(new Color(62, 48, 29));
    $box->setBox(280, 1350, 860, 0);
    $box->setTextAlign('center', 'center');
    $box->draw($msg3);
    
    $box = new Box($im);
    $box->setFontFace(__DIR__.'/asset/font/nanumBold.ttf');
    $box->setFontSize(70);
    $box->setFontColor(new Color(62, 48, 29));
    $box->setBox(280, 1490, 860, 0);
    $box->setTextAlign('center', 'center');
    $box->draw($msg4);
    
    $box = new Box($im);
    $box->setFontFace(__DIR__.'/asset/font/nanumBold.ttf'); // http://www.dafont.com/pacifico.font
    $box->setFontSize(70);
    $box->setFontColor(new Color(62, 48, 29));
    $box->setBox(280, 1630, 860, 0);
    $box->setTextAlign('center', 'center');
    $box->draw($msg5);
    
    // header("Content-type: image/png");
    imagepng($im,'test.png');
