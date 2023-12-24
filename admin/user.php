<div class="d-flex justify-content-between m-2">
    <h3>Data User</h3>
    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modall"> Tambah Data</a>
</div>

<!-- ALERT -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (isset($_GET['status']) && $_GET['status'] == 'ditambah') { ?>
    <script>
        Swal.fire({
            title: "Ditambah",
            text: "Data berhasil ditambah",
            icon: "success"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'index.php?x=user';
            }
        });
    </script>
<?php } ?>

<?php if (isset($_GET['status']) && $_GET['status'] == 'dihapus') { ?>
    <script>
        Swal.fire({
            title: "Dihapus",
            text: "Data berhasil dihapus",
            icon: "success"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'index.php?x=user';
            }
        });
    </script>
<?php } ?>

<?php if (isset($_GET['status']) && $_GET['status'] == 'diedit') { ?>
    <script>
        Swal.fire({
            title: "Diedit",
            text: "Data berhasil diedit",
            icon: "success"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'index.php?x=user';
            }
        });
    </script>
<?php } ?>
<!-- ALERT -->

<div class="m-3">
    <div class="card ">
        <div class="card-header">
            Table
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col-2">No</th>
                        <th scope="col">ID User</th>
                        <th scope="col">Nama User</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">level</th>
                        <th scope="col">nohp</th>
                        <th scope="col">alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $kueri = mysqli_query($conn, "SELECT * FROM tb_user");
                    while ($row = mysqli_fetch_array($kueri)) {
                        ?>
                        <tr>
                            <th>
                                <?php echo $no++; ?>
                            </th>
                            <td>
                                <?php echo $row['id'] ?>
                            </td>
                            <td>
                                <?php echo $row['nama'] ?>
                            </td>
                            <td>
                                <?php echo $row['username'] ?>
                            </td>
                            <td>
                                <?php echo $row['email'] ?>
                            </td>
                            <td>
                                <?php echo $row['level'] ?>
                            </td>
                            <td>
                                <?php echo $row['nohp'] ?>
                            </td>
                            <td>
                                <?php echo $row['alamat'] ?>
                            </td>
                            <td class="d-flex">
                                <a href="#"
                                    onclick="edit(<?php echo $row['id'] ?>, '<?php echo $row['nama'] ?>', '<?php echo $row['username'] ?>', '<?php echo $row['email'] ?>', '<?php echo $row['password'] ?>', '<?php echo $row['nohp'] ?>', '<?php echo $row['alamat'] ?>')"
                                    data-bs-toggle="modal" data-bs-target="#modalEdit"
                                    class="btn btn-sm btn-warning text-white m-1">Edit</a>
                                <a href="proses/hapus_user.php?id=<?php echo $row['id'] ?>"
                                    class="btn btn-sm btn-danger text-white m-1">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="Modall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form action="proses/tambah_user.php" method="GET">

                    <label for="" class="m-2 text-dark">Nama </label>
                    <div class="input-group mb-3">
                        <input type="text" required name="nama" class="form-control" placeholder="Nama "
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Username</label>
                    <div class="input-group mb-3">
                        <input type="text" required name="username" class="form-control" placeholder="Username"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Email</label>
                    <div class="input-group mb-3">
                        <input type="email" required name="email" class="form-control" placeholder="Email"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" required name="email" class="form-control" placeholder="Password"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">No Hp</label>
                    <div class="input-group mb-3">
                        <input type="number" required name="no_hp" class="form-control" placeholder="No Hp"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Alamat</label>
                    <div class="input-group mb-3">
                        <input type="text" required name="alamat" class="form-control" placeholder="Alamat"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <input type="submit" value="Tambah Data" class="btn btn-primary w-100">

                </form>
                <!-- FORM -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<script>
    function edit(id, nama, username, email, password, nohp, alamat) {

        let _idmerk = document.getElementById('id_merk');
        let _nama = document.getElementById('nama');
        let _username = document.getElementById('username');
        let _email = document.getElementById('email');
        let _password = document.getElementById('password');
        let _nohp = document.getElementById('no_hp');
        let _alamat = document.getElementById('alamat');

        _idmerk.value = id;
        _nama.value = nama;
        _username.value = username;
        _email.value = email;
        _password.value = password;
        _nohp.value = nohp;
        _alamat.value = alamat;
    }
</script>

<!-- Modal -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form action="proses/tambah_user.php" method="GET">

                    <label for="" class="m-2 text-dark">Nama </label>
                    <div class="input-group mb-3">
                        <input type="text" required name="nama" id="nama" class="form-control" placeholder="Nama "
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Username</label>
                    <div class="input-group mb-3">
                        <input type="text" required name="username" id="username" class="form-control"
                            placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Email</label>
                    <div class="input-group mb-3">
                        <input type="email" required name="email" id="email" class="form-control" placeholder="Email"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Password</label>
                    <div class="input-group mb-3">
                        <input type="password" required name="password" id="password" class="form-control"
                            placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">No Hp</label>
                    <div class="input-group mb-3">
                        <input type="number" required name="no_hp" id="no_hp" class="form-control" placeholder="No Hp"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Alamat</label>
                    <div class="input-group mb-3">
                        <input type="text" required name="alamat" id="alamat" class="form-control" placeholder="Alamat"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <input type="submit" value="Tambah Data" class="btn btn-primary w-100">

                </form>
                <!-- FORM -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->