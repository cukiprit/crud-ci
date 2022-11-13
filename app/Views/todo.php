<?= $this->extend('layout/todo_layout') ?>

<?= $this->section('content') ?>

<main class="container">
    <div class="container text-center">
        <h2 class="h2">Sedang Berjalan</h2>
        <?php foreach ($sedang_berjalan as $todo) : ?>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 mt-3">
                    <div class="border rounded border-dark px-2">
                        <h1 class="h1"><a href="<?= base_url('/todo/' . $todo['id'] . '') ?>"><?= $todo['title'] ?></a></h1>
                        <p class="lead"><?= $todo['content'] ?></p>

                        <div class="d-grid gap-2 d-md-flex mb-2 justify-content-md-end">
                            <button type="button" class="btn btn-outline-success">
                                Selesai
                            </button>

                            <button type="button" class="btn btn-outline-danger">
                                Batalkan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="container text-center">
        <h2 class="h2">Selesai</h2>
        <?php foreach ($selesai as $todo) : ?>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 mt-3">
                    <div class="border rounded border-dark px-2">
                        <h1 class="h1"><a href="<?= base_url('todo/' . $todo['id'] . '') ?>"><?= $todo['title'] ?></a></h1>
                        <p class="lead"><?= $todo['content'] ?></p>

                        <div class="d-grid gap-2 d-md-flex mb-2 justify-content-md-end">
                            <button type="button" class="btn btn-outline-success">
                                Selesai
                            </button>

                            <button type="button" class="btn btn-outline-danger">
                                Batalkan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>

    <div class="container text-center">
        <h2 class="h2">Batal</h2>
        <?php foreach ($batal as $todo) : ?>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 mt-3">
                    <div class="border rounded border-dark px-2">
                        <h1 class="h1"><a href="<?= base_url('todo/' . $todo['id'] . '') ?>"><?= $todo['title'] ?></a></h1>
                        <p class="lead"><?= $todo['content'] ?></p>

                        <div class="d-grid gap-2 d-md-flex mb-2 justify-content-md-end">
                            <button type="button" class="btn btn-outline-success">
                                Selesai
                            </button>

                            <button type="button" class="btn btn-outline-danger">
                                Batalkan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</main>
<?= $this->endSection() ?>