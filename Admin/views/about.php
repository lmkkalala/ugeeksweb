<style type="text/css">
  #ima, #img{
    display: inline-block;
  }
</style>
<?php
include 'include/db_connect.php';
?>
<section class="content-header">
      <h1>
        U-Geeks
        <small>Site About Section</small>
      </h1>
    </section>
    <!-- Message after operations -->
     <center><div class="" id="message">
          
        </div></center>
         <!-- End Message after operations -->
    <div id="new-btn" style="margin-left: 6%; margin-top: 2%;">
      <a id="new-about" style="width: 10%;" class="btn btn-default fa fa-plus" name="" value="New"> New</a>
    </div>
    <!-- New Intro form -->
    <div id="new_form">
      
    </div>
     <!-- End New Intro form -->   
     <div id="back">
       <center><a class="btn btn-default" style="width: 30%; display: none;" name="" ><i class="fa fa-undo"></i></a></center>
     </div>
<!-- .table start -->
 
  <!-- Main content Responsive Hover Table -->
  <section id="tab" class="content" style="width: 90%; margin-left: 5%; margin-top: 1%;">
      <div class="row">
        <div class="col-lg- 12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <?php 
              $sql="SELECT * FROM about";
              $query=mysqli_query($connect,$sql);
              $nrow=mysqli_num_rows($query);
              if($nrow>0){
              ?>
              <h3 class="box-title">Available Content</h3>
            <?php }?>
              <?php 
          
          if($status==1){
            echo '<span style="color: green; margin-left:28%; font-size: 120%;"> Operation Successfully Done!</span>';
           
          } else if($status<0 || $status>1){
            echo '<span style="color: red; margin-left:20%; font-size: 120%;"> Sorry, we\'re experiencing connection problems. </span>';
          } 
          ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Picture</th>
                  <th>First Title</th>
                  <th>Second Title</th>
                  <th>Third Title</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  <?php 
                  $sql=mysqli_query($connect,"SELECT * FROM about ORDER BY ID DESC");
                  $counter=1;
                  $nrow=mysqli_num_rows($sql);
                   if($nrow<1) 
                   {
                    echo"<span>No Available Data</span>";
                   }
                   else
                   {
                  while($row=mysqli_fetch_array($sql)){
                    
                    ?>
                <tr>
                  <td><?php echo "# ".$counter; ?></td>
                  <td><img <?php echo "src=". substr($row['Picture'], 3).""; ?> style="width: 60px;height: 40px;"></</td>
                  <td><?php echo $row['F_Title']; ?></td>
                  <td><?php echo $row['S_Title']; ?></td>
                  <td><?php echo $row['T_Title']; ?></td>
                  <td>
                    <?php
                    $pid=$row['ID'];
                      if($row['Status']=="Unactive"){ ?>
                        <span style="color: green;"><i class="fa fa-send" style="color: #3c8dbc;"></i><a href="./class/about_controller.php?request=post&amp;id=<?php echo $pid;?>" style="text-decoration: none!important">  Post </a><small style="float: right; color: grey;"><i>Not Posted <i></small></span>
                      <?php     
                      } else if($row['Status']=="Active"){ ?>
                        <span style=""><i class="fa fa-close" style="color: red;"></i><a href="./class/about_controller.php?request=unpost&amp;id=<?php echo $pid; ?>" style="text-decoration: none!important; color: red;">  Unpost</a><small style="float: right; color: grey;"><i>Posted <i></small></span>
                      <?php
                      }
                     ?>
                  </td>
                  <td>

                    <span><a href="dashboard.php?request=updateAbout&amp;id=<?php echo $row['ID']; ?>" style="text-decoration: none!important">Update</a></span>
                    <span id="delete"><a href="./class/about_controller.php?request=delete&amp;id=<?php echo $row['ID']; ?>"  style="text-decoration: none!important">Delete</a></span>
                  </td>
                </tr>
                <?php $counter++; }?>
                </tbody>
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
            </div>
            <!-- /.box-body -->
          </div>
          </section>
          <!-- /.box -->
        </div>
      <!-- /.row -->
    
    <!-- /.content -->

    <!--/table end -->
<?php 
 }

  ?>

      