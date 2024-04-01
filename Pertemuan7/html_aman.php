<?php
$input = '';
$email = '';
$result = '';

if(isset($_POST['input'])){
    $input = $_POST['input'];
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = "Nama: " . $input . "<br>Email yang valid: " . $email;
    }else{
        $result = "Nama: " . $input . "<br>Email tidak valid.";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Form PHP</title>
</head>
<body>
    <h1>Form PHP</h1>
    <form method="post" action="">
        <label for="input">Masukkan nama:</label>
        <input type="text" name="input" id="input" value="<?php echo $input; ?>"><br><br>
        
        <label for="email">Masukkan email:</label>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>"><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    // Tampilkan hasil di bawah formulir jika ada hasil
    if(!empty($result)){
        echo "<p>" . $result . "</p>";
    }
    ?>
</body>
</html>