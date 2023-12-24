<div class="d-flex justify-content-between m-2">
    <h3>Data Produk</h3>
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
                window.location.href = 'index.php?x=produk';
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
                window.location.href = 'index.php?x=produk';
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
                window.location.href = 'index.php?x=produk';
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
                        <th scope="col">ID Produk</th>
                        <th scope="col">ID Merk</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $kueri = mysqli_query($conn, "SELECT * FROM produk");
                    while ($row = mysqli_fetch_array($kueri)) {
                        ?>
                        <tr>
                            <th>
                                <?php echo $no++; ?>
                            </th>
                            <td>
                                <?php echo $row['id_produk'] ?>
                            </td>
                            <td>
                                <?php echo $row['id_merk'] ?>
                            </td>
                            <td>
                                <?php echo $row['nama'] ?>
                            </td>
                            <td>
                                <?php echo $row['deskripsi'] ?>
                            </td>
                            <td>
                                <?php echo $row['gambar'] ?>
                            </td>
                            <td class="d-flex">
                                <a href="#"
                                    onclick="edit(<?php echo $row['id_produk'] ?>,  <?php echo $row['id_merk'] ?>,  '<?php echo $row['nama'] ?>', '<?php echo $row['deskripsi'] ?>', ' <?php echo $row['gambar'] ?>')"
                                    data-bs-toggle="modal" data-bs-target="#ModalEdit"
                                    class="btn btn-sm btn-warning text-white m-1">Edit</a>
                                <a href="proses/hapus_produk.php?id=<?php echo $row['id_produk'] ?>"
                                    class="btn btn-sm btn-danger text-white m-1">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal TAMBAH -->
<div class="modal fade" id="Modall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form action="proses/tambah_produk.php" method="GET">

                    <label for="" class="m-2 text-dark">Merk</label>
                    <div class="input-group mb-3">
                        <select name="merk" id="" class="form-control">
                            <?php $merk = mysqli_query($conn, "SELECT * FROM merk");
                            while ($row = mysqli_fetch_array($merk)) { ?>
                                <option value="<?php echo $row['id_merk'] ?>">
                                    <?php echo $row['nama'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <label for="" class="m-2 text-dark">Nama Produk</label>
                    <div class="input-group mb-3">
                        <input type="text" required name="nama_produk" class="form-control" placeholder="Nama Porduk"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Deskripsi</label>
                    <div class="input-group mb-3">
                        <input type="text" required name="deskripsi" class="form-control" placeholder="Deskripsi Porduk"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Gambar</label>
                    <div class="input-group mb-3">
                        <input type="file" required name="gambar" class="form-control" placeholder="Gambar Porduk"
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
<!-- Modal TAMBAH -->

<script>
    function edit(idproduk, idmerk, nama, deskripsi, gambar) {

        let _idproduk = document.getElementById('idproduk');
        let _idmerk = document.getElementById('id_merk');
        let _nama = document.getElementById('nama_produk');
        let _deskripsi = document.getElementById('deskripsi');
        let _gambar = document.getElementById('gambar');

        _idproduk.value = idproduk;
        _idmerk.value = idmerk;
        _nama.value = nama;
        _deskripsi.value = deskripsi;
        _gambar.value = gambar;
    }
</script>

<!-- Modal Edit -->
<div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form action="proses/edit_produk.php" method="GET">
                    <input type="hidden" name="idproduk" id="idproduk">
                    <label for="" class="m-2 text-dark">Merk</label>
                    <div class="input-group mb-3">
                        <select name="id_merk" id="id_merk" class="form-control">
                            <?php $merk = mysqli_query($conn, "SELECT * FROM merk");
                            while ($row = mysqli_fetch_array($merk)) { ?>
                                <option value="<?php echo $row['id_merk'] ?>">
                                    <?php echo $row['nama'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <label for="" class="m-2 text-dark">Nama Produk</label>
                    <div class="input-group mb-3">
                        <input type="text" required name="nama_produk" class="form-control" id="nama_produk"
                            placeholder="Nama Porduk" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Deskripsi</label>
                    <div class="input-group mb-3">
                        <input type="text" required name="deskripsi" class="form-control" id="deskripsi"
                            placeholder="Deskripsi Porduk" aria-label="Username" aria-describedby="basic-addon1">
                    </div>


                    <input type="submit" value="Edit Data" class="btn btn-warning w-100">

                </form>
                <!-- FORM -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal TAMBAH -->