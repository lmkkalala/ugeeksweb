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
          <h3 class="box-title">Add New About</h3>
        </div>
        <?php
        $sql="SELECT * FROM about WHERE ID=$id";
        $query=mysqli_query($connect,$sql);
        While($row=mysqli_fetch_assoc($query)){
        ?>
        <!-- /.box-header -->
        <form  action="class/about_controller.php"  method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
            <div class="col-md-5">
              <label>Picture</label>
              <div class="form-group">
                
                <input type="file" id="ima" accept="image/*" onchange="loadFile(event)" class="form-control" style="height: 2%; width: 85%;" name="picture">
                <span id="img" style="width: 15%; float: right; padding-left: 1%;"><img id="preview" <?php echo "src=./". substr($row['Picture'], 3).""; ?> style="width: 50px; height: 40px;"> </span>
              </div>
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="margin-top: 2%;">Second Content</label>
                <textarea type="" class="form-control select2" name="second_content"><?php echo $row['S_Content'];?></textarea>
              </div>
              <!-- /.form-group -->
              <!-- /.form-group -->
              <div class="form-group">
                <label>Second Title</label>
                <input type="" class="form-control select2" name="second_title" value="<?php echo $row['S_Title'];?>">
              </div>
              <!-- /.form-group -->
            
              <div class="form-group" >
                <label style="margin-top: 2%;">Forth Content</label>
                <textarea type="" class="form-control select2" name="forth_content"><?php echo $row['Fo_Content'];?></textarea>
              </div>

            </div>
            <!-- /.col -->
            <div class="col-md-5">
              <div class="form-group">
                <label>First Title</label>
                <input type="" class="form-control select2" name="first_title" value="<?php echo $row['F_Title'];?>">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label style="margin-top: 4%; margin-bottom:-3%; ">First Content</label>
                <textarea type="" class="form-control select2" name="first_content"><?php echo $row['F_Content'];?></textarea>
              </div>
              
              <!-- /.form-group -->
              <!-- /.form-group -->
              <div class="form-group">
                <label>Third Title</label>
                <input type="" class="form-control select2" name="third_title" value="<?php echo $row['T_Title'];?>">
              </div>
              
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="margin-top: 2%;">Third Content</label>
                <textarea type="" class="form-control select2" name="third_content"><?php echo $row['T_Content'];?></textarea>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->


            <div class="col-md-2" style="margin-top: 2%; ">
             <div class="form-group">
              <input type="hidden" name="id" value="<?php echo $id ?>">
              <input type="submit" class="btn btn-info" style="width: 80%; " name="updateAbout" value="Update">
               <a href="dashboard.php?request=about&status=0" type="submit" class="btn btn-danger" style="width: 80%; margin-top: 6%;" name="cancel">Cancel</a>
             </div>
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </form>
  <?php }?>
    </div>
