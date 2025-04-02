<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1>Daftar Mahasiswa</h1>


            <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>NIM</th>
                    <th>Major</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <?php $count = 0 ?>
                <?php foreach($data["mhs"] as $mhs) : ?>
                <tr>
                    <td><?= $count+=1 ?></td>
                    <td><?= $mhs["name"] ?></td>
                    <td><?= $mhs["nim"] ?></td>
                    <td><?= $mhs["major"] ?></td>
                    <td><?= $mhs["email"] ?></td>
                    <td><a href="<?= BASE_URL ?>/mahasiswa/detail/<?= $mhs["id"] ?>"
                            class="badge text-bg-primary">Detail</a></td>
                </tr>
                <?php endforeach ?>

            </table>
        </div>
    </div>
</div>