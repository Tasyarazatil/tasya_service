<div class="d-flex justify-content-between m-2">
    <h3>Data Komponen</h3>
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
                window.location.href = 'index.php?x=komponen';
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
                window.location.href = 'index.php?x=komponen';
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
                window.location.href = 'index.php?x=komponen';
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
                        <th scope="col">ID Komponen</th>
                        <th scope="col">ID Produk</th>
                        <th scope="col">Nama Komponen</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $kueri = mysqli_query($conn, "SELECT * FROM komponen");
                    while ($row = mysqli_fetch_array($kueri)) {
                        ?>
                        <tr>
                            <th>
                                <?php echo $no++; ?>
                            </th>
                            <td>
                                <?php echo $row['id_komponen'] ?>
                            </td>
                            <td>
                                <?php echo $row['id_produk'] ?>
                            </td>
                            <td>
                                <?php echo $row['nama'] ?>
                            </td>
                            <td>
                                <?php echo $row['deskripsi'] ?>
                            </td>
                            <td>
                                <?php echo $row['harga'] ?>
                            </td>
                            <td>
                                <?php echo $row['gambar'] ?>
                            </td>
                            <td class="d-flex">
                                <a href="#" onclick="edit(1,2,3,4,5)" data-bs-toggle="modal" data-bs-target="#ModalEdit"
                                    class="btn btn-sm btn-warning text-white m-1">Edit</a>
                                <a href="proses/hapus_komponen.php?id=<?php echo $row['id_komponen'] ?>"
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
                <form action="proses/tambah_komponen.php" method="GET">

                    <label for="" class="m-2 text-dark">Produk</label>
                    <div class="input-group mb-3">
                        <select name="produk" id="" class="form-control">
                            <?php $produk = mysqli_query($conn, "SELECT * FROM produk");
                            while ($row = mysqli_fetch_array($produk)) { ?>
                                <option value="<?php echo $row['id_produk'] ?>">
                                    <?php echo $row['nama'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <label for="" class="m-2 text-dark">Nama Komponen</label>
                    <div class="input-group mb-3">
                        <input type="text" required name="nama_produk" class="form-control" placeholder="Nama Komponen"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Deskripsi</label>
                    <div class="input-group mb-3">
                        <input type="text" required name="deskripsi" class="form-control"
                            placeholder="Deskripsi Komponen" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Harga</label>
                    <div class="input-group mb-3">
                        <input type="number" required name="harga" class="form-control" placeholder="Harga"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Gambar</label>
                    <div class="input-group mb-3">
                        <input type="file" required name="gambar" class="form-control" placeholder="Gambar Komponen"
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
    function edit(idkomponen, idproduk, nama_komponen, deskripsi, harga) {

        let _idkomponen = document.getElementById('idkomponen');
        let _idproduk = document.getElementById('idproduk');
        let _nama_komponen = document.getElementById('nama_komponen');
        let _deskripsi = document.getElementById('deskripsi');
        let _harga = document.getElementById('harga');

        _idkomponen.value = idkomponen;
        _idproduk.value = idproduk;
        _nama_komponen.value = nama_komponen;
        _deskripsi.value = deskripsi;
        _harga.value = harga;

    }
</script>

<!-- Modal -->
<div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form action="proses/tambah_komponen.php" method="GET">
                    <input type="hidden" name="idkomponen">
                    <label for="" class="m-2 text-dark">Produk</label>
                    <div class="input-group mb-3">
                        <select name="produk" id="idproduk" class="form-control">
                            <?php $produk = mysqli_query($conn, "SELECT * FROM produk");
                            while ($row = mysqli_fetch_array($produk)) { ?>
                                <option value="<?php echo $row['id_produk'] ?>">
                                    <?php echo $row['nama'] ?>
                                </option>
                            <?php } ?>
                        </select>
                    </div>
                    <label for="" class="m-2 text-dark">Nama Komponen</label>
                    <div class="input-group mb-3">
                        <input type="text" required name="nama_komponen" id="nama_komponen" class="form-control"
                            placeholder="Nama Komponen" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Deskripsi</label>
                    <div class="input-group mb-3">
                        <input type="text" required name="deskripsi" id="deskripsi" class="form-control"
                            placeholder="Deskripsi Komponen" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="" class="m-2 text-dark">Harga</label>
                    <div class="input-group mb-3">
                        <input type="number" required name="harga" id="harga" class="form-control" placeholder="Harga"
                            aria-label="Username" aria-describedby="basic-addon1">
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
<!-- Modal -->