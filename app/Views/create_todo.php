<?= $this->extend('layout/todo_layout') ?>

<?= $this->section('content') ?>

<main class="container">
    <?= session()->getFlashdata('error') ?>
    <?= service('validation')->listErrors() ?>

    <form class="my-5" action="/create" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <input type="text" name="title" id="todo" class="form-control" placeholder="Apa yang sedang Anda pikirkan" />
        </div>

        <div class="form-floating mb-3">
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" style="height: 100%"></textarea>
            <label for="description" class="form-label">Keterangan</label>
        </div>

        <div class="mb-3">
            <div class="form-check form-switch">
                <input type="checkbox" name="checkbox" id="checkbox" class="form-check-input" value="selesai">
                <label for="checkBox" class="form-check-label">
                    Selesai
                </label>
            </div>

            <div class="form-check form-switch">
                <input type="checkbox" name="checkbox" id="checkbox" class="form-check-input" value="sedang berjalan">
                <label for="checkBox" class="form-check-label">
                    Sedang Berjalan
                </label>
            </div>

            <div class="form-check form-switch">
                <input type="checkbox" name="checkbox" id="checkbox" class="form-check-input" value="batal">
                <label for="checkBox" class="form-check-label">
                    Batal
                </label>
            </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Buat todo</button>
    </form>
</main>

<?= $this->endSection() ?>