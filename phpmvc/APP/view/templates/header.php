<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="http:localhost/phpmvc/public/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
    <a class="navbar-brand" href="<?= BASE_URL; ?>/home"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expended="false" aria-label="Toggle navigation"></button>

    <div class=" collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
        <a class="nav-item nav-link active" href="<?=BASE_URL; ?>/home/">Tobetune<span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="<?=BASE_URL; ?>/home/">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link active" href="<?=BASE_URL; ?>/guru/">Data Guru</a>
        <a class="nav-item nav-link active" href="<?=BASE_URL; ?>/siswa/">Data Siswa</a>
        <a class="nav-item nav-link active" href="<?=BASE_URL; ?>/user/profile">About</a>
    </div>
    </div>
    </div>
    </nav>
</body>
</html>