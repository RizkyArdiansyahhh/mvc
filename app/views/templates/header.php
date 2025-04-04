<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data["title"] ?></title>
    <link rel="stylesheet" href="<?= BASE_URL?>/css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary ">
        <div class="container">
            <a class="navbar-brand text-light" href="<?= BASE_URL ?>">MVC App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active text-light" aria-current="page" href="<?= BASE_URL ?>">Home</a>
                    <a class="nav-link text-light" href="<?= BASE_URL ?>/about">About</a>
                    <a class="nav-link text-light" href="<?= BASE_URL ?>/mahasiswa">Mahasiswa</a>
                </div>
            </div>
        </div>
    </nav>