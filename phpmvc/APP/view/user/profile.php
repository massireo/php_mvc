<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
</head>
<body>
    <div class="container text-center mt-4">
    <h1>About me</h1>
    <img src="<?= BASE_URL; ?>/img/012391293.jpg" class="my-4" style="border-radius: 50%; width: auto; height: 200px;" alt="" srcset="">
    <p>Halo, nama saya <?= $data['nama']; ?>, saya seorang <?= $data['pekerjaan'];?></p>

    
    </div>
</body>
</html>

