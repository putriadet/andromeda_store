<head>
    <style>
        /* Mengatur warna background */
        .bg-gradient-success {
            background-color: #179B2D !important;
        }

        .bg-login {
            background-color: #179B2D !important;
        }
    </style>
</head>


<body class="bg-login">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block">
                                <!-- Menampilkan logo toko -->
                                <img src="<?php echo base_url() ?>assets/img/logo1a.png" class="col-lg-12 d-none d-lg-block" width="100" height="400px">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Log In</h1>
                                    </div>
                                    <!-- Form login -->
                                    <?php echo form_open('user/authenticate') ?>
                                    <form method="post">
                                        <div class="form-group">
                                            <!-- Form username -->
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan Username Anda" name="username">
                                        </div>
                                        <div class="form-group">
                                            <!-- Form password -->
                                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan Password Anda" name="password">
                                        </div>
                                        <!-- Button submit untuk login -->
                                        <button type="submit" class="btn btn-success form-control">Login</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <!-- Button untuk pergi ke halaman register -->
                                        <a class="small" href="<?php echo site_url('user/daftar') ?>">Belum Punya Akun? Daftar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

</body>