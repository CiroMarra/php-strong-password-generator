<!DOCTYPE html>
<html>
<head>
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <h2>PHP Strong Password Generator</h2>
    <form action="index.php" method="POST">
        Lunghezza Password: <input type="number" name="length" min="1" max="50" value="<?php echo isset($_POST['length']) ? $_POST['length'] : ''; ?>">
        <input type="submit" value="Genera Password">
    </form>

    <?php
    if(isset($_POST['length'])) {
        $password_length = $_POST['length'];
        $password = generatePassword($password_length);
        echo "<h3>Password Generata:</h3>";
        echo "<p>$password</p>";
    }
    ?>

<?php
function generatePassword($length) {
    $text = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*';
    $text_length = strlen($text);
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $text[rand(0, $text_length - 1)];
    }
    return $password;
}
?>
</body>
</html>