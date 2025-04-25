<?php 
require 'server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">
    <h1 class="text-center mb-5">Albums</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach($album as $item): ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <img src="<?= $item['cover_url'] ?>" class="card-img-top" alt="<?= $item['title'] ?> Cover">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['title'] ?></h5>
                        <p class="card-text">
                            <strong>Artist:</strong> <?= $item['artist'] ?><br>
                            <strong>Year:</strong> <?= $item['year'] ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Card Form -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Add a New Album</h5>
                    <form action="server.php" method="POST">
                        <div class="mb-3">
                            <label for="title" class="form-label">Album Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="artist" class="form-label">Artist</label>
                            <input type="text" class="form-control" id="artist" name="artist" required>
                        </div>
                        <div class="mb-3">
                            <label for="year" class="form-label">Year</label>
                            <input type="number" class="form-control" id="year" name="year" required>
                        </div>
                        <div class="mb-3">
                            <label for="cover_url" class="form-label">Cover URL</label>
                            <input type="url" class="form-control" id="cover_url" name="cover_url" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Add Album</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
