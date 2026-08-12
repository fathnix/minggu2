<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
</head>
<body>
    <h1><?= htmlspecialchars($title) ?></h1>
    <p>Halo, <?= htmlspecialchars($user['name']) ?>!</p>
    <p>Email: <?= htmlspecialchars($user['email']) ?></p>
    <p>Role: <?= htmlspecialchars($user['role']) ?></p>
    <p>Ini adalah contoh sederhana model, view, dan controller bekerja bersama.</p>
    <p><a href="<?= BASEURL ?>?url=about/page">Lihat halaman About</a></p>
</body>
</html>
