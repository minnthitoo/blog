<?php
session_start();
require('../config/config.php');
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  var_dump($_POST);
  echo "<br>";
  var_dump($_FILES);
}
?>
<?php include('header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <!--Main Body-->
            <div class="card-header">
              <h3 class="card-title">Add Post</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group mb-2">
                  <label for="">Title</label>
                  <input type="text" name="title" id="" class="form-control">
                </div>
                <div class="form-group mb-2">
                  <label for="">Content</label>
                  <textarea name="content" id="" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group mb-2">
                  <label for="">Image</label>
                  <input type="file" name="image" id="" class="form-control">
                </div>
                <div class="form-group mb-2">
                <input type="submit" value="   Post   " class="btn btn-primary">
                <a href="index.php" class="btn btn-success"> Back </a>
                </div>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
  <?php include('footer.php'); ?>