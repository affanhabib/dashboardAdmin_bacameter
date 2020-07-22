<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $this->load->view("_Partials/Header.php") ?>
    </head>
    <body class="sb-nav-fixed">
        <?php $this->load->view("_Partials/Navbar.php") ?>        
        <div id="layoutSidenav">        
            <?php $this->load->view("_Partials/Sidebar.php") ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">                        
                        <?php $this->load->view("_Partials/Breadcrumb.php") ?>
                        <!-- Place your page here -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Tabel Konfirmasi
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
												<th>No Sambungan</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Tanggal</th>
                                                <th>Stand</th>
                                                <th>Foto</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">                    
                    <?php $this->load->view("_Partials/Footer.php") ?>
                </footer>
            </div>
        </div>
        <?php $this->load->view("_Partials/Js.php") ?>
    </body>
</html>
