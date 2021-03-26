<?php

include "layout/header.php";
include "koneksi/koneksi.php";

?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        include "layout/sidebar.php";
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include "layout/nav.php";
                ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">PESAN MASUK</h1>
                        <a href="../index" class="btn btn-primary " style="float:right;" target="_blank  ">VIEW WEB</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">List Pesan Masuk</h6>

                                </div>
                                <div class="card-body">

                                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No </th>
                                                <th>Nama</th>
                                                <th>Isi Pesan</th>
                                                <!-- <th>Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php


                                            $no = 1;
                                            $query = mysqli_query($konek, "SELECT * FROM pesan");
                                            while ($r = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $r['nama']; ?></td>
                                                    <td><?= $r['pesan']; ?></td>
                                                </tr>

                                            <?php
                                            }

                                            ?>
                                        </tbody>

                                    </table>

                                </div>
                            </div>

                            <!-- Color System -->


                        </div>

                    </div>

                    <!-- Content Row -->



                    <!-- Content Row -->


                </div>


                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->

            <!-- Button trigger modal -->


            <?php



            include "layout/footer.php";
            ?>