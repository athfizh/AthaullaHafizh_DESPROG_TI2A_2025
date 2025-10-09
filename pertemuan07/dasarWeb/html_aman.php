<!DOCTYPE html>
<html>
<head>
    <title>HTML Injection & Validation Test</title>
</head>
<body>
    <form method="post" action="">
        <label for="email">Input Email:</label>
        <input type="text" id="email" name="email" size="30">
        <input type="submit" value="Validate Email">
    </form>
    <hr>
    <h3>Hasil Validasi:</h3>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "Format email '$email' valid.";
        } else {
            // Tangani input yang tidak valid
            echo "Format email '$email' tidak valid.";
        }
    }
    ?>
</body>
</html>