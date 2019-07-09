
<!-- Div to be loaded in the intro section when new button is clicked -->
<div id="new_intro" class="box box-default" style="width: 90%; margin-left: 5%; margin-top: 1%;">
        <div class="box-header with-border">
          <h3 class="box-title">Add New</h3>

          <div class="box-tools pull-right">
            <button type="button" id="test" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <form  action="class/intro_controller.php"  method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
            <div class="col-md-5">
              <label>Picture</label>
              <div class="form-group">
                
                <input type="file" id="ima" accept="image/*" onchange="loadFile(event)" class="form-control" style="height: 2%; width: 85%;" name="picture">
                <span id="img" style="width: 15%; float: right; padding-left: 1%;"><img id="preview" alt="..."   style="width: 50px; height: 40px;"> </span>
              </div>
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="">Intro Text</label>
                <input type="" class="form-control " name="intro_text">
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-5">
              <div class="form-group">
                <label>Title</label>
                <input type="" class="form-control select2" name="title">
              </div>
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="margin-top: 2%;">Caption</label>
                <textarea type="" class="form-control select2" name="caption"></textarea>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-2" style="margin-top: 10%; ">
             <div class="form-group">

               <input type="reset" class="btn btn-default" style="width: 80%;" name="" value="Reset">
               <input type="submit" class="btn btn-info" style="width: 80%; margin-top: 3%;" name="submit" value="Save">
             </div>
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </form>
    </div>
    <!-- End Div to be loaded in the intro section when new button is clicked -->

    <!-- Div to be loaded in the About section when new button is clicked -->
<div id="new_about" class="box box-default" style="width: 90%; margin-left: 5%; margin-top: 1%;">
        <div class="box-header with-border">
          <h3 class="box-title">Add New About</h3>

          <div class="box-tools pull-right">
            <button type="button" id="test" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <form  action="class/about_controller.php"  method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
            <div class="col-md-5">
              <label>Picture</label>
              <div class="form-group">
                
                <input type="file" id="ima" accept="image/*" onchange="loadFile(event)" class="form-control" style="height: 2%; width: 85%;" name="picture">
                <span id="img" style="width: 15%; float: right; padding-left: 1%;"><img id="preview" alt="..."   style="width: 50px; height: 40px;"> </span>
              </div>
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="margin-top: 2%;">Second Content</label>
                <textarea type="" class="form-control select2" name="second_content"></textarea>
              </div>
              <!-- /.form-group -->
              <!-- /.form-group -->
              <div class="form-group">
                <label>Second Title</label>
                <input type="" class="form-control select2" name="second_title">
              </div>
              <!-- /.form-group -->
            
              <div class="form-group" >
                <label style="margin-top: 2%;">Forth Content</label>
                <textarea type="" class="form-control select2" name="forth_content"></textarea>
              </div>

            </div>
            <!-- /.col -->
            <div class="col-md-5">
              <div class="form-group">
                <label>First Title</label>
                <input type="" class="form-control select2" name="first_title">
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label style="margin-top: 4%; margin-bottom:-3%; ">First Content</label>
                <textarea type="" class="form-control select2" name="first_content"></textarea>
              </div>
              
              <!-- /.form-group -->
              <!-- /.form-group -->
              <div class="form-group">
                <label>Third Title</label>
                <input type="" class="form-control select2" name="third_title">
              </div>
              
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="margin-top: 2%;">Third Content</label>
                <textarea type="" class="form-control select2" name="third_content"></textarea>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->


            <div class="col-md-2" style="margin-top: 10%; ">
             <div class="form-group">
               <input type="reset" class="btn btn-default" style="width: 80%;" name="" value="Reset">
               <input type="submit" class="btn btn-info" style="width: 80%; margin-top: 3%;" name="submitAbout" value="Save">
             </div>
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </form>
    </div>
    <!-- End Div to be loaded in the About section when new button is clicked -->

 <!-- Div to be loaded in the service section when new button is clicked -->
<div id="new_service" class="box box-default" style="width: 90%; margin-left: 5%; margin-top: 1%;">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Service</h3>

          <div class="box-tools pull-right">
            <button type="button" id="test" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <form  action="class/service_controller.php"  method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
            <div class="col-md-5">
              
              <!-- /.form-group -->
              
              <div class="form-group">
                <label>Service</label>
                <input type="text" class="form-control select2" name="service">
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-5">
              
              <!-- /.form-group -->
              <div class="form-group">
                <label style="margin-bottom:-3%; ">Caption</label>
                <textarea type="text" class="form-control select2" name="service_caption"></textarea>
              </div>
              
            </div>
            <!-- /.col -->


            <div class="col-md-2" style="margin-top: 2%; ">
             <div class="form-group">
               <input type="reset" class="btn btn-default" style="width: 80%;" name="" value="Reset">
               <input type="submit" class="btn btn-info" style="width: 80%; margin-top: 3%;" name="submitService" value="Save">
             </div>
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </form>
    </div>
    <!-- End Div to be loaded in the service section when new button is clicked -->

    <!-- Div to be loaded in the works section when new button is clicked -->
<div id="new_work" class="box box-default" style="width: 90%; margin-left: 5%; margin-top: 1%;">
        <div class="box-header with-border">
          <h3 class="box-title">Add New Works</h3>

          <div class="box-tools pull-right">
            <button type="button" id="test" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <form  action="class/work_controller.php"  method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
            <div class="col-md-5">
              <label>Picture</label>
              <div class="form-group">
                
                <input type="file" id="ima" accept="image/*" onchange="loadFile(event)" class="form-control" style="height: 2%; width: 85%;" name="picture">
                <span id="img" style="width: 15%; float: right; padding-left: 1%;"><img id="preview" alt="..."   style="width: 50px; height: 40px;"> </span>
              </div>
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="margin-top: %;">Caption</label>
                <textarea type="" class="form-control select2" name="caption"></textarea>
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-5">
              <div class="form-group">
                <label>Title</label>
                <input type="" class="form-control select2" name="title">
              </div>
              <!-- /.form-group -->
              
              <!-- /.form-group -->
            </div>

            <div class="col-md-2" style="margin-top: 2%; ">
             <div class="form-group">

               <input type="reset" class="btn btn-default" style="width: 80%;" name="" value="Reset">
               <input type="submit" class="btn btn-info" style="width: 80%; margin-top: 3%;" name="submitWork" value="Save">
             </div>
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </form>
    </div>
    <!-- End Div to be loaded in the works section when new button is clicked -->

    <!-- Div to be loaded in the Team section when new button is clicked -->
<div id="new_team" class="box box-default" style="width: 90%; margin-left: 5%; margin-top: 1%;">
        <div class="box-header with-border">
          <h3 class="box-title">Add New</h3>

          <div class="box-tools pull-right">
            <button type="button" id="test" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <form  action="class/team_controller.php"  method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
            <div class="col-md-5">
              <label>Picture</label>
              <div class="form-group">
                
                <input type="file" id="ima" accept="image/*" onchange="loadFile(event)" class="form-control" style="height: 2%; width: 85%;" name="picture">
                <span id="img" style="width: 15%; float: right; padding-left: 1%;"><img id="preview" alt="..."   style="width: 50px; height: 40px;"> </span>
              </div>
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="">First Name</label>
                <input type="" class="form-control " name="fname">
              </div>
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="">Skills</label>
                <input type="" class="form-control " name="skills">
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-5">
              <div class="form-group">
                <label>Title</label>
                <input type="" class="form-control select2" name="title">
              </div>
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="">Last Name</label>
                <input type="" class="form-control " name="lname">
              </div>
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="margin-top: 2%;">Bio</label>
                <textarea type="" class="form-control select2" name="caption"></textarea>
              </div>
              
            </div>

            <div class="col-md-2" style="margin-top: 2%; ">
             <div class="form-group">

               <input type="reset" class="btn btn-default" style="width: 80%;" name="" value="Reset">
               <input type="submit" class="btn btn-info" style="width: 80%; margin-top: 3%;" name="submitteam" value="Save">
             </div>
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </form>
    </div>
    <!-- End Div to be loaded in the Team section when new button is clicked -->


     <!-- Div to be loaded in the Skills section when new button is clicked -->
<div id="new_name" class="box box-default" style="width: 90%; margin-left: 5%; margin-top: 1%;">
        <div class="box-header with-border">
          <h3 class="box-title">Add New</h3>
          <div class="box-tools pull-right">
            <button type="button" id="test" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <form  action="class/skill_controller.php" id="new_form" method="POST" enctype="multipart/form-data">
         <div class="box-body">
          <div class="row">
            <div class="col-md-5">
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="">Name</label>
                <input type="" class="form-control " value="U-Geeks" name="Skill_Name">
              </div>
              
            </div>
            <!-- /.col -->
            <div class="col-md-5">
              <div class="form-group">
                <label>Level</label>
                <input type="" class="form-control select2" name="Level">
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-2" style="margin-top: 2%; ">
             <div class="form-group">

               <input type="reset" class="btn btn-default" style="width: 80%;" name="" value="Reset">
               <input type="submit" class="btn btn-info" style="width: 80%; margin-top: 3%;" name="submitskill" value="Save">
             </div>
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </form>
    </div>
    <!-- End Div to be loaded in the Skills section when new button is clicked -->

    <!-- Div to be loaded in the Team section when new button is clicked -->
<div id="new_story" class="box box-default" style="width: 90%; margin-left: 5%; margin-top: 1%;">
        <div class="box-header with-border">
          <h3 class="box-title">Add New</h3>

          <div class="box-tools pull-right">
            <button type="button" id="test" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <form  action="class/story_controller.php"  method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
            <div class="col-md-5">
              <label>Picture</label>
              <div class="form-group">
                
                <input type="file" id="ima" accept="image/*" onchange="loadFile(event)" class="form-control" style="height: 2%; width: 85%;" name="picture">
                <span id="img" style="width: 15%; float: right; padding-left: 1%;"><img id="preview" alt="..."   style="width: 50px; height: 40px;"> </span>
              </div>
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="">Author Name</label>
                <input type="" class="form-control " value="U-Geeks" name="author">
              </div>
              
            </div>
            <!-- /.col -->
            <div class="col-md-5">
              <div class="form-group">
                <label>Title</label>
                <input type="" class="form-control select2" name="title">
              </div>
              <!-- /.form-group -->
              <div class="form-group" >
                <label style="margin-top: 2%;">Content</label>
                <textarea type="" class="form-control select2" name="caption"></textarea>
              </div>
              
            </div>

            <div class="col-md-2" style="margin-top: 2%; ">
             <div class="form-group">

               <input type="reset" class="btn btn-default" style="width: 80%;" name="" value="Reset">
               <input type="submit" class="btn btn-info" style="width: 80%; margin-top: 3%;" name="submitstory" value="Save">
             </div>
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </form>
    </div>
    <!-- End Div to be loaded in the Team section when new button is clicked -->