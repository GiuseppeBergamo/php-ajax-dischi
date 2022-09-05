<?php
include 'discs/data.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Dischi</title>
</head>
<body>
    <header class="container-fluid py-1 d-flex justify-content-between">
        <img src="https://th.bing.com/th/id/R.2ebc6c77ba84d7194d4a8f6a7334571e?rik=2ffoY4RHjXWJ2w&pid=ImgRaw&r=0" alt="spotify-logo" class="img-fluid">
        
    </header>

    <main>
        <div class="container py-4">
            <section id="album-section">
                <div id="album-list" class="row row-cols-5 gy-4">
                    <?php foreach($discs as $disc) : ?>
                        <div class="col">
                            <div id="album-card" class="text-center p-2 text-white">
                                <img src="<?= $disc['poster'] ?>" alt="" class="img-fluid mb-2">
                                <h3 id="title" class="fw-bold text-uppercase"><?= $disc['title'] ?></h3>
                                <div id="author" class="text-muted">
                                    <p class="m-0"><?= $disc['author'] ?></p>
                                    <p class="m-0"><?= $disc['year'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
