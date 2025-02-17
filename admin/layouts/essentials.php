<?php


function adminLogin() {
    session_start();
    if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']== true)) {
        header('Location: index.php');
    }
    session_regenerate_id(true);
    
}

function alert($type, $msg)
{
    $class_warna = ($type == "success") ? "alert-success" : "alert-danger";

    echo <<<alert
    <div class=" alert $class_warna alert-dismissible fade show custom-alert" role="alert">
        <strong class="me-3">$msg</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    alert;  
}


?>
