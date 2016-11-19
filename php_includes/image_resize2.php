<?php
function img_resize($target_file, $resized_file, $wmax, $hmax, $fileExt) {
    list($w_orig, $h_orig) = getimagesize($target_file);
    $scale_ratio = $w_orig / $h_orig;
    if (($wmax / $hmax) > $scale_ratio) {
           $wmax = $hmax * $scale_ratio;
    } else {
           $hmax = $wmax / $scale_ratio;
    }
    $img = "";
    $fileExt = strtolower($fileExt);
    if ($fileExt == "gif"){ 
      $img = imagecreatefromgif($target_file);
    } else if($fileExt =="png"){ 
      $img = imagecreatefrompng($target_file);
    } else { 
      $img = imagecreatefromjpeg($target_file);
    }
    $tci = imagecreatetruecolor($wmax, $hmax);
    // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $wmax, $hmax, $w_orig, $h_orig);
    imagejpeg($tci, $resized_file, 84);
}
?>