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
        <small>Site Message-Section</small>
      </h1>
    </section>
    <!-- Message after operations -->
     <center><div class="" id="message">
          
        </div></center>
         <!-- End Message after operations -->
    
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
              <h3 class="box-title">Available Content</h3>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Answer</th>
                  <th>Action</th>
                </tr>
                </thead>
                
                <tbody>
                  <?php 
                  $sql=mysqli_query($connect,"SELECT * FROM messages ORDER BY ID DESC");
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
                  <td><?php echo $row['Name']; ?></td>
                  <td><?php echo $row['Email']; ?></td>
                  <td><?php echo $row['Subject']; ?></td>
                  <td><?php echo $row['Message']; ?></td>
                  <td>
                    <?php
                    $pid=$row['ID'];
                      if($row['status']=="Unactive"){ ?>
                        <span style="color: green;"><i class="fa fa-send" style="color: #3c8dbc;"></i><a href="./class/sendMail.php?request=post&amp;id=<?php echo $pid;?>" style="text-decoration: none!important">  Answered </a><small style="float: right; color: grey;"><i>Not Posted <i></small></span>
                      <?php     
                      } else if($row['status']=="Active"){ ?>
                        <span style=""><i class="fa fa-close" style="color: red;"></i><a href="./class/sendMail.php?request=unpost&amp;id=<?php echo $pid; ?>" style="text-decoration: none!important; color: red;"> Not Answered</a><small style="float: right; color: grey;"><i>Posted <i></small></span>
                      <?php
                      }
                     ?>
                  </td>
                  <td>
                    <span id="delete"><a href="./class/sendMail.php?request=delete&amp;id=<?php echo $row['ID']; ?>"  style="text-decoration: none!important">Delete</a></span>
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

      