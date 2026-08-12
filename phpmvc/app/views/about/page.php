<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($title) ?></h1>
    <p><?= htmlspecialchars($content) ?></p>
    <p>Di MVC:</p>
    <ul>
        <li>Model: menyimpan data atau logika bisnis</li>
        <li>View: menampilkan data ke pengguna</li>
        <li>Controller: menghubungkan model dan view</li>
    </ul>
    <p><a href="<?= BASEURL ?>?url=home/index">Kembali ke Home</a></p>
</body>
</html>
