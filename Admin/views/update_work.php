<?php
include 'include/db_connect.php';
?>

<style type="text/css">
  #ima, #img{
    display: inline-block;
  }
</style>

    <section class="content-header">
      <h1>
        U-Geeks
        <small>Update Intro Section</small>
      </h1>
    </section>

<?php
$sql=mysqli_query($connect,"SELECT * FROM works WHERE ID=$id");
while ($query=mysqli_fetch_assoc($sql)) {

 ?>
<div class="box box-default" style="width: 90%; margin-left: 5%; margin-top: 1%;">
        <div class="box-header with-border">
          <h3 class="box-title">Update Intro</h3>

          
        </div>
        <!-- /.box-header -->
        <form action="class/work_controller.php" method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
            <div class="col-md-5">
              <label>Picture</label>
              <div class="form-group">
                
                <input type="file" id="ima" accept="image/*" onchange="loadFile(event)" class="form-control" style="height: 2%; width: 85%;" name="picture">
                <span id="img" style="width: 15%; float: right; padding-left: 1%;"><img id="preview" <?php echo "src=./". substr($query['Picture'], 3).""; ?>  style="width: 60px;height: 40px;"> </span>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-5">
              <div class="form-group">
                <label>Title</label>
                <input type="" class="form-control select2" name="title" value="<?php echo $query['Title'];?>">
              </div>
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="margin-top: 2%;">Caption</label>
                <textarea type="" class="form-control select2" name="caption"><?php echo $query['Description'];?></textarea>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-2" style="margin-top: 10%; ">
             <div class="form-group">
               <input type="hidden" name="id" value="<?php echo $id ?>">
               <a href="dashboard.php?request=works&amp;status=0" class="btn btn-danger" style="width: 80%;" name="" >Cancel</a>
               <input type="submit" class="btn btn-info" style="width: 80%; margin-top: 3%;" name="updatework" value="Update">
             </div>
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </form>
    <?php }?>


    <!-- .table start -->
    <!--/table end -->
      <script type="text/javascript">
        $(function(){

        });
      </script>
  