<header data-bs-theme="dark">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SERVICE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0  ">

                    <li class="nav-item">
                        <a class="nav-link <?php if (isset($_GET['x']) && $_GET['x'] == 'home') {
                            echo 'active';
                        } ?>" aria-current="page" href="index.php?x=home">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link <?php if (isset($_GET['x']) && $_GET['x'] == 'service') {
                            echo 'active';
                        } ?>" href="index.php?x=service">Service & Shop</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link <?php if (isset($_GET['x']) && $_GET['x'] == 'review') {
                            echo 'active';
                        } ?>" href="index.php?x=review">Reviews</a>
                    </li>


                </ul>
            </div>
            <?php if (isset($_SESSION['username'])) { ?>
                <a href="#" class="btn btn-primary btn-sm me-2"><i class="bi bi-person"></i> Lihat Profil</a>
                <span class="text-white me-3">
                    <?php echo $_SESSION['username'] ?>
                </span>
                <a href="proses/logout.php" class="btn btn-danger"><i class="bi-box-arrow-right"></i></a>
            <?php } else { ?>
                <a href="login.php" class="btn btn-primary"><i class="bi-box-arrow-right"></i> Login</a>
            <?php } ?>
        </div>
    </nav>
</header>