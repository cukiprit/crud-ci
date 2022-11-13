<?= $this->extend('layout/todo_layout') ?>

<?= $this->section('content') ?>

<main class="container">
    <?= session()->getFlashdata('error') ?>
    <?= service('validation')->listErrors() ?>

    <form class="my-5" action="/create" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <input type="text" name="title" id="todo" class="form-control" value="<?= $todo['title'] ?>" />
        </div>

        <div class="form-floating mb-3">
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" style="height: 100%">
                <?= $todo['content'] ?>
            </textarea>
            <label for="description" class="form-label">Keterangan</label>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Buat todo</button>
    </form>
</main>

<?= $this->endSection() ?>