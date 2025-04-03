<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1>Daftar Mahasiswa</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#formAddStudent">
                Add New Student
            </button>



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
<!-- Modal -->
<div class="modal fade" id="formAddStudent" tabindex="-1" aria-labelledby="formAddStudent" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= BASE_URL ?>/mahasiswa/insert" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>
                    <select class="form-select" aria-label="Default select example" name="major">
                        <option selected>Major</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Statistika">Statistika</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Biologi">Biologi</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>