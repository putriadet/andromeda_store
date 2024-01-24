<head>
    <style>
        /* Mengatur warna background */
        .bg-gradient-success {
            background-color: #179B2D !important;
        }

        .bg-daftar {
            background-color: #179B2D !important;
        }
    </style>
</head>

<body class="bg-daftar">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <!-- Menampilkan logo toko -->
                        <img src="<?php echo base_url() ?>assets/img/logo1a.png" class="col-lg-12 d-none d-lg-block" width="150" height="490px">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Daftar Akun!</h1>
                            </div>
                            <?php echo form_open('user/savedaftar') ?>
                            <!-- Form daftar customer -->
                            <form method="post">
                                <div class="form-group">
                                    <!-- Form username -->
                                    <input type="text" class="form-control form-control-user" placeholder="Username" name="username">
                                </div>
                                <div class="form-group">
                                    <!-- Form password -->
                                    <input type="password" class="form-control form-control-user" placeholder="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <!-- Form nama lengkap -->
                                    <input type="text" class="form-control form-control-user" placeholder="Nama Lengkap" name="nama">
                                </div>
                                <div class="form-group">
                                    <!-- Form email -->
                                    <input type="text" class="form-control form-control-user" placeholder="Email" name="email">
                                </div>
                                <!-- Form submit untuk menyimpan data ke dalam database -->
                                <button type="submit" class="btn btn-success btn-user btn-block">Daftar</button>
                            </form>
                            <!-- Akhir form -->
                            <?php echo form_close() ?>
                            <div class="text-center">
                                <!-- Form untuk direct ke halaman login -->
                                <a class="small" href="<?php echo base_url('index.php/user/login') ?>">Sudah Punya Akun? Silahkan Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
