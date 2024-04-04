<?php
if(isset($_FILES['file'])){
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    $file_ext_temp = explode('.', $_FILES['file']['name']);
    $file_ext = strtolower(end($file_ext_temp));
    $extensions = array("png", "jpg", "jpeg"); // Pastikan ekstensi dalam huruf kecil

    if(in_array($file_ext, $extensions) === false){
        $errors[] = "Ekstensi file yang diizinkan adalah PNG, JPG, dan JPEG.";
        // $errors[] = "Ekstensi file yang diizinkan adalah PDF, DOC, dan DOCX, atau TXT.";
    }
    if($file_size > 2097152){
        $errors[] = "Ukuran file tidak boleh lebih dari 2 MB.";
    }
    if(empty($errors)){
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}
?>