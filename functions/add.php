<?php
include "db.php";
$stamp = imagecreatefrompng('../images/tsbh3.png');
$watermark_info = getimagesize('../images/tsbh3.png');
$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);
$title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
$params = filter_var(trim($_POST['params']), FILTER_SANITIZE_STRING);
$description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
$price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);
$user_id = $userinfo["id"];
$phoneUser = $userinfo["phone"];
if (isset($_POST['upload'])){
	$img_type = substr($_FILES['img_upload']['type'], 0, 5);
	$img_size = 2*1024*1024;
	if (!empty($_FILES['img_upload']['tmp_name']) and $img_type === 'image' and $_FILES['img_upload']['size'] <= $img_size){ 
		$image_info = getimagesize($_FILES['img_upload']['tmp_name']);
		$format = strtolower(substr($image_info['mime'], strpos($image_info['mime'], '/') + 1));
		$im_cr_func = "imagecreatefrom" . $format;
		$im = $im_cr_func($_FILES['img_upload']['tmp_name']);
		$w = imagesx($im) - 20;
		$koe=$sx/$w;
		$h=ceil($sy/$koe);
		$sim = imagecreatetruecolor($w, $h);
		$transparent = imagecolorallocatealpha($sim, 0, 0, 0, 127);
		imagefill($sim, 0, 0, $transparent);
		imagesavealpha($sim, true);
		imagecopyresampled($sim,$stamp,0,0,0,0,$w,$h,$sx,$sy);
		$cn = ceil((imagesy($im) - $h));
		imagecopy($im, $sim, imagesx($im) - $w - 10,  $cn, 0, 0, imagesx($sim), imagesy($sim));
		ob_start();
		imagepng($im);
		$img = ob_get_contents();
		ob_end_clean();
		$img = addslashes($img);
		$db->query("INSERT INTO `products` (`user_id`, `img`,`title`,`params`,`description`,`price`,`phoneUser`) VALUES ('$user_id' ,'$img','$title','$params','$description','$price','$phoneUser')");
		if ($db->error) {
			printf("Errormessage: %s\n", $db->error);
		} 
	} 
}
header("Location: ../profile.php"); ?>