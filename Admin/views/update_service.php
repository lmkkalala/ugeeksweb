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
        Web Pages
        <small>Intro Section</small>
      </h1>
    </section>

    <div id="new_about" class="box box-default" style="width: 90%; margin-left: 5%; margin-top: 1%;">
        <div class="box-header with-border">
          <h3 class="box-title">Update Service</h3>
        </div>
        <?php
        $sql="SELECT * FROM services WHERE ID=$id";
        $query=mysqli_query($connect,$sql);
        While($row=mysqli_fetch_assoc($query)){
        ?>
        <!-- /.box-header -->
        <form  action="class/service_controller.php"  method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <label>Service</label>
                <input type="text" class="form-control select2" value="<?php echo $row['Service'];?>" name="service">
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-5">
              
              <!-- /.form-group -->
              <div class="form-group">
                <label style="margin-bottom:-3%; ">Caption</label>
                <textarea type="text" class="form-control select2" name="service_caption"><?php echo $row['Caption'];?></textarea>
              </div>
              
            </div>
            <!-- /.col -->


            <div class="col-md-2" style="margin-top: 2%; ">
             <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $row['ID'];?>">
               <input type="submit" class="btn btn-info" style="width: 80%; margin-top: 3%;" name="updateService" value="Save">
               <a href="dashboard.php?request=services&status=0" type="submit" class="btn btn-danger" style="width: 80%; margin-top: 6%;" name="cancel">Cancel</a>
             </div>
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </form>
  <?php }?>
    </div>
