<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Quản lí</title>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css" rel="stylesheet" type="text/css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>">Trang chủ</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" method="GET" action="<?php echo Yii::app()->createUrl("benhvien/search") ?>">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Tìm kiếm" aria-label="Search" name="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : '' ?>" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Chính</div>
                            <a class="nav-link" href="<?php echo Yii::app()->request->baseUrl; ?>"><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Bệnh viện</a>
                        </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <?php echo $content; ?>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script>
    $(document).on("click", "#delete", function(e) {
      e.preventDefault();
      var link = $(this).attr("href");
      swal({
          title: "Bạn chắc chắn muốn xóa chứ???",
          text: "Khi xóa thì dữ liệu sẽ mât vĩnh viễn :))",
          icon: "warning",
          buttons: true,    
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location.href = link;
          } else {
            swal("Không xóa");
          }
        });
    });
        </script>
    </body>
</html>