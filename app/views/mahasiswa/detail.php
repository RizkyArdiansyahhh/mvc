<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data["mhs"]["name"] ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data["mhs"]["nim"] ?></h6>
            <p class="card-text"><?= $data["mhs"]["email"] ?></p>
            <p class="card-text"><?= $data["mhs"]["major"] ?></p>
            <a href="<?= BASE_URL ?>/mahasiswa" class="card-link">Back</a>
        </div>
    </div>
</div>