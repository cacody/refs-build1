<?php

date_default_timezone_set('America/Detroit');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$docRoot = $_SERVER['DOCUMENT_ROOT'];

require_once '../classes/PHPMailer_5.2.1/class.phpmailer.php';
require_once '../classes/tcpdf/tcpdf.php';

//echo '<pre>'; print_r($_REQUEST); echo '</pre>';
foreach ($_POST as $var=>$val) $$var = $val;
//echo '<pre>'; print_r($_POST); exit();


switch ($submit) {
    case 'cbct':
        include_once 'process_cbct.php';
        break;
	case 'omfs':
		include_once 'process_TCPDF_SCRATCH.php';
		break;
    default:
        echo 'There is a broken link in the referral process, please contact the University of Michigan School of Dentistry Help Desk at 763-3318.';
} //end switch

echo $out_message;

?>

