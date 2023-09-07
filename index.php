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
        <form action="seconda_pagina.php" method="POST">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="paragraph"></textarea>
                <label for="floatingTextarea2">Paragraph</label>
            </div>
            <div class="mb-3 mt-3">
                <label class="form-label">Password</label>
                <input type="" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
    
</body>
</html>