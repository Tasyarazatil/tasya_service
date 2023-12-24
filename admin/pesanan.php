<div class="d-flex justify-content-between m-2">
    <h3>Pesanan</h3>

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
                window.location.href = 'index.php?x=merk';
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
                window.location.href = 'index.php?x=merk';
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
                window.location.href = 'index.php?x=merk';
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
                        <th scope="col">ID Komponen</th>
                        <th scope="col">Produk</th>
                        <th scope="col">Komponen</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Total</th>
                        <th scope="col">Atas Nama</th>
                        <th scope="col">ID User</th>
                        <th scope="col">Kerusakan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $kueri = mysqli_query($conn, "SELECT * FROM pemesanan_komponen");
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
                                <?php echo $row['id_komponen'] ?>
                            </td>
                            <td>
                                <?php echo $row['produk'] ?>
                            </td>
                            <td>
                                <?php echo $row['komponen'] ?>
                            </td>
                            <td>
                                <?php echo $row['harga'] ?>
                            </td>
                            <td>
                                <?php echo $row['jumlah'] ?>
                            </td>
                            <td>
                                <?php echo $row['total'] ?>
                            </td>
                            <td>
                                <?php echo $row['atasnama'] ?>
                            </td>
                            <td>
                                <?php echo $row['id_user'] ?>
                            </td>
                            <td>
                                <?php echo $row['kerusakan'] ?>
                            </td>
                            <td>
                                <?php echo $row['status'] ?>
                            </td>
                            <td class="d-flex">
                                <a href="#" class="btn btn-sm btn-success text-white m-1">Terima</a>
                                <a href="#" class="btn btn-sm btn-danger text-white m-1">Tolak</a>
                                <a href="#" class="btn btn-sm btn-primary text-white m-1">Selesai</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>




<!-- Modal TAMBAH -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form action="proses/tambah_merk.php" method="GET">

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nama Merk</span>
                        <input type="text" required name="nama_merk" class="form-control" placeholder="Nama Merk"
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
    function edit(id, nama) {
        let idmerk = document.getElementById('id_merk');
        let namamerk = document.getElementById('nama_merk');

        idmerk.value = id;
        namamerk.value = nama;
    }
</script>

<!-- Modal EDIT -->
<div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- FORM -->
                <form action="proses/edit_merk.php" method="GET">
                    <input type="hidden" name="id_merk" id="id_merk">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nama Merk</span>
                        <input type="text" id="nama_merk" required name="nama_merk" class="form-control"
                            placeholder="Nama Merk" aria-label="Username" aria-describedby="basic-addon1">
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
<!-- Modal EDIT -->