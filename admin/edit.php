<?php
session_start();
require('../config/config.php');
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
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
          <a href="add.php" class="btn btn-success">Create new Post</a>
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
            <h3 class="card-title">Posts</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <?php
            $sql = $pdo->prepare("select * from posts");
            $sql->execute();
            $res = $sql->fetchAll();
            ?>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th style="width: 150px">Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                if ($res) {
                  foreach ($res as $value) {
                ?>
                    <tr>
                      <td><?php echo $value['id']; ?></td>
                      <td><?php echo $value['title']; ?></td>
                      <td><?php echo $value['content']; ?></td>
                      <td>
                        <a href="edit.php?id=<?php echo $value['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete.php?id=<?php echo $value['id']; ?>" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
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