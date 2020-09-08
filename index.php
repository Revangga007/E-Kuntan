<!DOCTYPE html>
<html lang="en">
<?php include 'config/baseUrl.php' ?>
<?php include 'config/connection.php' ?>
<?php include 'config/rupiahs.php' ?>

<!-- Head -->
<?php include 'layouts/head.php' ?>
<!-- End of Head -->

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'layouts/sidebar.php' ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'layouts/topbar.php' ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Content -->
          <?php include 'config/routes.php' ?>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include 'layouts/footer.php' ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <?php include 'layouts/scroll-top.php' ?>

  <!-- Logout Modal-->
  <?php include 'layouts/logout-modal.php' ?>

  <!-- script -->
  <?php include 'layouts/script.php' ?>
  <!-- End of Script -->



</body>

</html>