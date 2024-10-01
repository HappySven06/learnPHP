<?php view('partials/header'); ?>

<main class="container">
    <ul class="list-group">
        <li class="list-group-item">id: <?= $_GET['id'] ?></li>
        <li class="list-group-item">title: <?= $_GET['title'] ?></li>
    </ul>
</main>

<?php view('partials/footer'); ?>