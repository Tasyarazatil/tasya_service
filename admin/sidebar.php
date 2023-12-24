<div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 100%; height: 100%;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Admin Page</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">

        <li class="nav-item ">
            <a href="index.php?x=home" class="nav-link <?php if (isset($_GET['x']) && $_GET['x'] == 'home') {
                echo 'active text-white';
            } ?> link-body-emphasis" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Home
            </a>
        </li>
        <li class="nav-item ">
            <a href="index.php?x=pesanan" class="nav-link <?php if (isset($_GET['x']) && $_GET['x'] == 'pesanan') {
                echo 'active text-white';
            } ?> link-body-emphasis" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#pesanan"></use>
                </svg>
                Pesanan
            </a>
        </li>
        <li class="nav-item ">
            <a href="index.php?x=merk" class="nav-link <?php if (isset($_GET['x']) && $_GET['x'] == 'merk') {
                echo 'active text-white';
            } ?> link-body-emphasis" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Data Merk
            </a>
        </li>
        <li class="nav-item ">
            <a href="index.php?x=produk" class="nav-link <?php if (isset($_GET['x']) && $_GET['x'] == 'produk') {
                echo 'active text-white';
            } ?> link-body-emphasis" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Data Produk
            </a>
        </li>
        <li class="nav-item ">
            <a href="index.php?x=komponen" class="nav-link <?php if (isset($_GET['x']) && $_GET['x'] == 'komponen') {
                echo 'active text-white';
            } ?> link-body-emphasis" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Data Komponen
            </a>
        </li>
        <li class="nav-item ">
            <a href="index.php?x=user" class="nav-link <?php if (isset($_GET['x']) && $_GET['x'] == 'user') {
                echo 'active text-white';
            } ?> link-body-emphasis" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Data User
            </a>
        </li>
        <li class="nav-item ">
            <a href="index.php?x=review" class="nav-link <?php if (isset($_GET['x']) && $_GET['x'] == 'review') {
                echo 'active text-white';
            } ?> link-body-emphasis" aria-current="page">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                </svg>
                Review User
            </a>
        </li>

    </ul>
    <a href="../proses/logout.php" class="btn btn-sm btn-danger"><i class="bi-box-arrow-left"></i>
        Logout</a>
    <hr>

</div>