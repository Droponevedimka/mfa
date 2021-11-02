<?

if( !session_id() )
{
    session_start();
}

$_SESSION['str'] = 'qr/index.php';

$view = 'qr';

if(@$_SESSION['logged_in'] == true){
    header("Location: home.php");
}
else
include($_SERVER['DOCUMENT_ROOT'].'/layouts/mfa.php');

?>

<link rel="stylesheet" type="text/css" href="style/qr/style.css">
<script type="text/javascript" src="./js/qr/qr.js"></script>
<script type="text/javascript" src="./js/qr/llqrcode.js"></script>
<script src="./js/qr/jquery-1.11.2.min.js"></script>
