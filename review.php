<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Review</title>
    <link href="css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">


</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    if (isset($_GET['status']) && $_GET['status'] == 'berhasil') { ?>
        <script>
            Swal.fire({
                title: "Terkirim",
                text: "Review anda berhasil dikirim",
                icon: "success"
            }).then((result) => {
                window.location.href = 'review.php';
            });
        </script>
    <?php }
    ?>



    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>
    <!-- NAVBAR -->

    <main>
        <br>
        <div class="m-3">
            <div class="card m-5">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <form action="proses/beri_review.php" method="GET">
                        <div class="mb-3">
                            <label for="" class="m-3 form-label">Message</label>
                            <textarea class="form-control" placeholder="Tuliskan pesan" name="pesan" id="" cols="20"
                                rows="5"></textarea>
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="w-50">
                                <label for="" class="m-3 form-label">Name</label>
                                <input type="text" name="nama" required class="form-control">
                            </div>
                            <div class="mx-2"></div>
                            <div class="w-50">
                                <label for="" class="m-3 form-label">Email</label>
                                <input type="text" name="email" required class="form-control">
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary m-3 w-25">Kirim Review</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>


    </main>



    <!-- TOAST -->
    <div aria-live="polite" aria-atomic="true" class="position-relative">

        <div class="toast-container top-0 end-0 p-3">

            <!-- Then put toasts within -->
            <div id="myToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Bootstrap</strong>
                    <small class="text-body-secondary">just now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    See? Just like this.
                </div>
            </div>

            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="..." class="rounded me-2" alt="...">
                    <strong class="me-auto">Bootstrap</strong>
                    <small class="text-body-secondary">2 seconds ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Heads up, toasts will stack automatically
                </div>
            </div>
        </div>
    </div>

    <!-- TOAST -->


    <script>
        $(document).ready(function () {
            // Show the toast
            $('#myToast').toast('show');
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>






    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>