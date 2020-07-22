<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo view("_Partials/Header.php") ?>
    </head>
    <body class="sb-nav-fixed">
        <?php echo view("_Partials/Navbar.php") ?>
        <div id="layoutSidenav">
            <?php echo view("_Partials/Sidebar.php") ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <?php echo view("_Partials/Breadcrumb.php") ?>                    
                        <!-- Place your page here -->
                </main>
                <footer class="py-4 bg-light mt-auto">                    
                    <?php echo view("_Partials/Footer.php") ?>
                </footer>
            </div>
        </div>
        <?php echo view("_Partials/Js.php") ?>
    </body>
</html>
