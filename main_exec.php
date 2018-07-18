<?
    include_once "./include/autoload.php";

    $mnv_f          = new mnv_function();
    $my_db          = $mnv_f->Connect_MySQL();

    $mb_link    = $_REQUEST["mb_link"];
    $mb_phone   = $_REQUEST["mb_phone"];
    $mb_email   = $_REQUEST["mb_email"];

    $query    = "INSERT INTO member_info(mb_link, mb_phone, mb_email, mb_regdate, mb_ipaddr) values('".$mb_link."','".$mb_phone."','".$mb_email."','".date("Y-m-d H:i:s")."','".$_SERVER['REMOTE_ADDR']."');";
    $result   = mysqli_query($my_db, $query);

    if ($result)
        $flag = "Y";
    else
        $flag = "N";

    echo $flag;