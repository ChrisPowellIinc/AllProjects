<?php
function img3_resize($target_file3, $resized_file3, $wmax3, $hmax3, $fileExt3) {
    list($w_orig3, $h_orig3) = getimagesize($target_file3);
    $scale_ratio3 = $w_orig3 / $h_orig3;
    if (($wmax3 / $hmax3) > $scale_ratio3) {
           $wmax3 = $hmax3 * $scale_ratio3;
    } else {
           $hmax3 = $wmax3 / $scale_ratio3;
    }
    $img3 = "";
    $fileExt3 = strtolower($fileExt3);
    if ($fileExt3 == "gif"){ 
      $img3 = imagecreatefromgif($target_file3);
    } else if($fileExt3 =="png"){ 
      $img3 = imagecreatefrompng($target_file3);
    } else { 
      $img3 = imagecreatefromjpeg($target_file3);
    }
    $tci3 = imagecreatetruecolor($wmax3, $hmax3);
    // imagecopyresampled(dst_img3, src_img3, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci3, $img3, 0, 0, 0, 0, $wmax3, $hmax3, $w_orig3, $h_orig3);
    imagejpeg($tci3, $resized_file3, 84);
}
?>