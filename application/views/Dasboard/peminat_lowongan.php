<div class="container-fluid">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Table V01</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="<?php echo base_url() ?>css3/images/icons/favicon.ico" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/vendor/perfect-scrollbar/perfect-scrollbar.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css3/css/main.css">
        <!--===============================================================================================-->
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>

        <div class="limiter">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100">
                        <table>
                            <thead>
                                <tr class="table100-head">
                                    <th class="column2" style="text-align: center;">id</th>
                                    <th class="column2" style="text-align: center;">NIM</th>
                                    <th class="column3" style="text-align: center;">Nama</th>
                                    <th class="column3" style="text-align: center;">Alasan</th>
                                    <th class="column2" style="text-align: center;">Prodi_id</th>
                                    <th class="column2" style="text-align: center;">Lowongan_id</th>
                                </tr>
                            </thead>

                            <!-- menampilkan data -->
                            <?php foreach ($peminat as $peminat_) : ?>
                                <tr>
                                    <td style="text-align: center;"><?php echo $peminat_->id ?> </td>
                                    <td style="text-align: center;"><?php echo $peminat_->nim ?> </td>
                                    <td style="text-align: center;"><?php echo $peminat_->nama ?> </td>
                                    <td style="text-align: center;"><?php echo $peminat_->alasan ?> </td>
                                    <td style="text-align: center;"><?php echo $peminat_->prodi_id ?> </td>
                                    <td style="text-align: center;"><?php echo $peminat_->lowongan_id ?> </td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary center-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        daftar
                    </button>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Daftar Lowongan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">NIM</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Alasan</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Prodi_id</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Lowongan_id</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>css3/vendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>css3/vendor/bootstrap/js/popper.js"></script>
        <script src="<?php echo base_url() ?>css3/vendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>css3/vendor/select2/select2.min.js"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() ?>css3/js/main.js"></script>
        <!--===============================================================================================-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

    </html>
</div>
</div>

<!-- /#page-content-wrapper -->