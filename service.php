<?php
include 'proses/koneksi.php';
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (light)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#sun-fill"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>


    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>
    <!-- NAVBAR -->

    <main>

       <!-- CAROUSEL -->
       <?php include 'carousel.php' ?>
       <!-- CAROUSEL -->



        <div class="m-3">
            <div class="d-flex">
                <i class="bi bi-search m-3"></i> <input type="text" placeholder="Search Product"
                    class="form-control w-25">
            </div>

            <div class="row" style="height:100vh">
                <div class="col-2">
                    <!-- SIDE -->
                    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary"
                        style="width: 100%; height: 100%;">
                        <a href="/"
                            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                            <svg class="bi pe-none me-2" width="40" height="32">
                                <use xlink:href="#bootstrap"></use>
                            </svg>
                            <span class="fs-4">Kategori</span>
                        </a>
                        <hr>
                        <ul class="nav nav-pills flex-column mb-auto">
                            <?php 
                            $kategori = mysqli_query($conn, "SELECT * FROM kategori");
                            while($row = mysqli_fetch_array($kategori)){
                            ?>
                            <li class="nav-item">
                                <a href="?kat=<?php echo $row['nama']; ?>" class="nav-link link-body-emphasis" aria-current="page">
                                    <svg class="bi pe-none me-2" width="16" height="16">
                                        <use xlink:href="#home"></use>
                                    </svg>
                                    <?php echo $row['nama']; ?>
                                </a>
                            </li>
                            <?php } ?>

                           
                        </ul>
                        <hr>
                        <div class="dropdown">
                            <a href="#"
                                class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                                    class="rounded-circle me-2">
                                <strong>mdo</strong>
                            </a>
                            <ul class="dropdown-menu text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- SIDE -->
                </div>
                <div class="col-10">
                    <div class="m-3">
                        <!--  LIST PRODUK -->
                        <div class="row">
                            <!-- ITEM PRODUK -->
                            <div class="col-3 mb-3">
                                <div class="card shadow-sm">
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="100%"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                            fill="#eceeef" dy=".3em">Thumbnail</text>
                                    </svg>
                                    <div class="card-body">
                                        <h6>Nama Produk</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam esse unde
                                            minus. Veniam quaerat culpa architecto eaque ullam vero alias maxime error
                                            est. A cum architecto iure dolorum autem similique!</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-primary">Pesan</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><i
                                                        class="bi bi-cart"></i></button>
                                            </div>
                                            <small class="text-body-secondary">9 mins</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM PRODUK -->
                            <!-- ITEM PRODUK -->
                            <div class="col-3 mb-3">
                                <div class="card shadow-sm">
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="100%"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                            fill="#eceeef" dy=".3em">Thumbnail</text>
                                    </svg>
                                    <div class="card-body">
                                        <h6>Nama Produk</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam esse unde
                                            minus. Veniam quaerat culpa architecto eaque ullam vero alias maxime error
                                            est. A cum architecto iure dolorum autem similique!</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-primary">Pesan</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><i
                                                        class="bi bi-cart"></i></button>
                                            </div>
                                            <small class="text-body-secondary">9 mins</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM PRODUK -->
                            <!-- ITEM PRODUK -->
                            <div class="col-3 mb-3">
                                <div class="card shadow-sm">
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="100%"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                            fill="#eceeef" dy=".3em">Thumbnail</text>
                                    </svg>
                                    <div class="card-body">
                                        <h6>Nama Produk</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam esse unde
                                            minus. Veniam quaerat culpa architecto eaque ullam vero alias maxime error
                                            est. A cum architecto iure dolorum autem similique!</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-primary">Pesan</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><i
                                                        class="bi bi-cart"></i></button>
                                            </div>
                                            <small class="text-body-secondary">9 mins</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM PRODUK -->
                            <!-- ITEM PRODUK -->
                            <div class="col-3 mb-3">
                                <div class="card shadow-sm">
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="100%"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                            fill="#eceeef" dy=".3em">Thumbnail</text>
                                    </svg>
                                    <div class="card-body">
                                        <h6>Nama Produk</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam esse unde
                                            minus. Veniam quaerat culpa architecto eaque ullam vero alias maxime error
                                            est. A cum architecto iure dolorum autem similique!</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-primary">Pesan</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><i
                                                        class="bi bi-cart"></i></button>
                                            </div>
                                            <small class="text-body-secondary">9 mins</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM PRODUK -->
                            <!-- ITEM PRODUK -->
                            <div class="col-3 mb-3">
                                <div class="card shadow-sm">
                                    <svg class="bd-placeholder-img card-img-top" width="100%" height="100%"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>Placeholder</title>
                                        <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                            fill="#eceeef" dy=".3em">Thumbnail</text>
                                    </svg>
                                    <div class="card-body">
                                        <h6>Nama Produk</h6>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam esse unde
                                            minus. Veniam quaerat culpa architecto eaque ullam vero alias maxime error
                                            est. A cum architecto iure dolorum autem similique!</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-primary">Pesan</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary"><i
                                                        class="bi bi-cart"></i></button>
                                            </div>
                                            <small class="text-body-secondary">9 mins</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ITEM PRODUK -->
                        </div>
                        <!--  LIST PRODUK -->
                    </div>
                </div>
            </div>

        </div>


    </main>




    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>