<?= $this->extend('layout/todo_layout') ?>

<?= $this->section('content') ?>

<main class="container">
    <?php foreach ($todos as $todo) : ?>
        <div class="row">
            <div class="col-md-12 mb-2">
                <h5 class="h5"><?= $todo['title'] ?></h5>
                <p><?= substr($todo['content'], 0, 120) ?></p>
            </div>
        </div>
    <?php endforeach ?>
</main>

<?= $this->endSection() ?>