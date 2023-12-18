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
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.html">Service & Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="review.html">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profil</a>
                        </li>

                    </ul>
                </div>
                <a href="login.html" class="btn btn-primary"><i class="bi-box-arrow-right"></i> Login</a>
            </div>
        </nav>
    </header>
    <!-- NAVBAR -->
    <br>
    <br>
    <br>

    <main>

        <div class="mx-2">
            <div class="row">
                <!-- ITEM -->
                <div class="col-6 mb-2">
                    <div class="card">
                        <div class="row p-3">
                            <div class="col">
                                <img src="images/22342345.jpg" class="rounded" width="150" height="150" alt="">
                            </div>
                            <div class="col-8">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure soluta ullam suscipit
                                    possimus
                                    ab tempore inventore molestias. Cupiditate, tempore ea reprehenderit nostrum tenetur
                                    harum
                                    vitae sit veniam voluptatum quod nam.</p>
                                <div class="d-flex justify-content-between">
                                    <h6>Menunggu</h6>
                                    <a href="#" class="btn btn-danger">Batalkan</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="col-6 mb-2">
                    <div class="card">
                        <div class="row p-3">
                            <div class="col">
                                <img src="images/22342345.jpg" class="rounded" width="150" height="150" alt="">
                            </div>
                            <div class="col-8">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure soluta ullam suscipit
                                    possimus
                                    ab tempore inventore molestias. Cupiditate, tempore ea reprehenderit nostrum tenetur
                                    harum
                                    vitae sit veniam voluptatum quod nam.</p>
                                <div class="d-flex justify-content-between">
                                    <h6>Menunggu</h6>
                                    <a href="#" class="btn btn-danger">Batalkan</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="col-6 mb-2">
                    <div class="card">
                        <div class="row p-3">
                            <div class="col">
                                <img src="images/22342345.jpg" class="rounded" width="150" height="150" alt="">
                            </div>
                            <div class="col-8">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure soluta ullam suscipit
                                    possimus
                                    ab tempore inventore molestias. Cupiditate, tempore ea reprehenderit nostrum tenetur
                                    harum
                                    vitae sit veniam voluptatum quod nam.</p>
                                <div class="d-flex justify-content-between">
                                    <h6>Menunggu</h6>
                                    <a href="#" class="btn btn-danger">Batalkan</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="col-6 mb-2">
                    <div class="card">
                        <div class="row p-3">
                            <div class="col">
                                <img src="images/22342345.jpg" class="rounded" width="150" height="150" alt="">
                            </div>
                            <div class="col-8">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure soluta ullam suscipit
                                    possimus
                                    ab tempore inventore molestias. Cupiditate, tempore ea reprehenderit nostrum tenetur
                                    harum
                                    vitae sit veniam voluptatum quod nam.</p>
                                <div class="d-flex justify-content-between">
                                    <h6>Menunggu</h6>
                                    <a href="#" class="btn btn-danger">Batalkan</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="col-6 mb-2">
                    <div class="card">
                        <div class="row p-3">
                            <div class="col">
                                <img src="images/22342345.jpg" class="rounded" width="150" height="150" alt="">
                            </div>
                            <div class="col-8">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure soluta ullam suscipit
                                    possimus
                                    ab tempore inventore molestias. Cupiditate, tempore ea reprehenderit nostrum tenetur
                                    harum
                                    vitae sit veniam voluptatum quod nam.</p>
                                <div class="d-flex justify-content-between">
                                    <h6>Menunggu</h6>
                                    <a href="#" class="btn btn-danger">Batalkan</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <!-- ITEM -->
                <div class="col-6 mb-2">
                    <div class="card">
                        <div class="row p-3">
                            <div class="col">
                                <img src="images/22342345.jpg" class="rounded" width="150" height="150" alt="">
                            </div>
                            <div class="col-8">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure soluta ullam suscipit
                                    possimus
                                    ab tempore inventore molestias. Cupiditate, tempore ea reprehenderit nostrum tenetur
                                    harum
                                    vitae sit veniam voluptatum quod nam.</p>
                                <div class="d-flex justify-content-between">
                                    <h6>Menunggu</h6>
                                    <a href="#" class="btn btn-danger">Batalkan</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ITEM -->
            </div>
        </div>

        <br>


    </main>




    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>