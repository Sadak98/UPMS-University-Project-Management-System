<?php

include '../config.php';



    $file = 'CSE_4800_proposal_.pdf';

    $filename = $imageName;
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $filename . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    @readfile($file);
?>
