<?php 

$paragraph = $_POST["paragraph"];
$password = $_POST["password"];

$criptedpassword = str_replace($password, "***", $paragraph )

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<h1 class="text-center">PHP - BADWORDS</h1>
    <div class="container mt-5">
        <h3>Paragraph: 
            <span style="font-size:1.3rem;font-weight:200" ><?php echo $paragraph ?></span> 
            <span style="font-size:1.4rem;font-weight:400" >Lunghezza Paragrafo: <?php echo strlen($paragraph)?> caratteri</span> 
        </h3>
        <h3>Password: <span style="font-size:1.3rem;font-weight:200" ><?php echo $criptedpassword;  ?></span> </h3>
    </div>
    
</body>
</html>