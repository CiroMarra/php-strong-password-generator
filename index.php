<?php include_once 'options.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container py-5">
        <div class="card text-center">
            <div class="card-header">
                <h2 class="text">PHP Strong Password Generator</h2>
            </div>
            <div class="card-body">
                <h2 class="text">Genera una password sicura</h2>
                    <form action="index.php" method="POST">
                       <span class=card-text>Lunghezza Password:</span> <input type="number" name="length" min="1" max="100" value="<?php echo isset($_POST['length']) ? $_POST['length'] : ''; ?>">
                        <input type="submit" value="Genera Password" class="btn btn-primary">
                    </form>
                    <?php
                        $password = text($_POST['length']);
                        echo "<h3 class='testo'>Password Generata:</h3>";
                        echo "<p class='testo'>$password</p>";
                    ?>
            </div>
        </div>
    </div>   


    
</body>
</html>
