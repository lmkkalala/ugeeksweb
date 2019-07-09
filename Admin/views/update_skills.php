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
        <small>Update Skill Section</small>
      </h1>
    </section>

<?php
$sql=mysqli_query($connect,"SELECT * FROM skills WHERE ID=$id");
while ($query=mysqli_fetch_assoc($sql)) {

 ?>
<div class="box box-default" style="width: 90%; margin-left: 5%; margin-top: 1%;">
        <div class="box-header with-border">
          <h3 class="box-title">Update Skills</h3>

          
        </div>
        <!-- /.box-header -->
        <form action="class/skill_controller.php" method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
            <div class="col-md-7">
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="">Name</label>
                <input type="" class="form-control " name="Skill_Name" value="<?php echo $query['Skill_Name'];?>">
              </div>
              
            </div>
            <!-- /.col -->
            <div class="col-md-7">
              <div class="form-group">
                <label>Level</label>
                <input type="" class="form-control select2" name="Level" value="<?php echo $query['Level'];?>">
              </div>

            <div class="col-md-4" style="margin-top: 2%; ">
             <div class="form-group">
               <input type="hidden" name="id" value="<?php echo $id ?>">
               <a href="dashboard.php?request=skills&amp;status=0" class="btn btn-danger" style="width: 80%;" name="" >Cancel</a>
               <input type="submit" class="btn btn-info" style="width: 80%; margin-top: 3%;" name="updates" value="Update">
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
  