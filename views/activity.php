
<?php require('menu.php'); ?>
             
 
<style>
.jumbotron{
    background-color:#2E2D88;
    color:white;
}
/* Adds borders for tabs */
.tab-content {
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
    border-bottom: 1px solid #ddd;
    padding: 10px;
}
.nav-tabs {
    margin-bottom: 0;
}

  .page{
       
         padding-top: 100px; 
    }
</style>
 

<div class="container page" id="firstContainer">
 


 
 
<div class="jumbotron">

<p>Your Profile</p>
 <div class="container-fluid">
    <div class="row">
        <!--left container-->
        <div class="col-sm-5">
             <aside>
            <figure>
                <img src="http://d34yn14tavczy0.cloudfront.net/images/no_photo.png">  
            </figure>
            </aside>
            
        </div>

        <!--right container-->
        <div class="col-lg-6">
            <?php foreach ($selection as $row): ?>
            <p>Username:   <?php echo htmlentities($row['username'], ENT_QUOTES, 'utf-8'); ?></p><br>
            <p>Gender:  <?php echo htmlentities($row['gender'], ENT_QUOTES, 'utf-8'); ?></p><br>
            <p>Age:  <?php echo htmlentities($row['age'], ENT_QUOTES, 'utf-8'); ?></p>
            <?php endforeach; ?>
        </div>

        
    </div>
    <div class="text-right"><br><br>
    <form action="upload.php" method="post" enctype="multipart/form-data">
     
     Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    
    
   <!-- <button type="submit" class = "btn btn-warning btn-lg" >Edit Profile</button>
    <button type="submit" class = "btn btn-warning btn-lg" >Edit Photo</button> -->
        
    </form>
</div> 
</div>
 
 
</div>
</div>

<!-- input -->
 <div class="container">
  <div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h3 class="text-center">Your Daily Summary</h3>
    <hr>
    <form action="#" method="post" role="form" enctype="multipart/form-data" class="facebook-share-box">
      
      <div class="share">
        <div class="arrow"></div>
        <div class="panel panel-default">
                      <div class="panel-heading"><i class="fa fa-file"></i> Today's Habit</div>
                      <div class="panel-body">
                        <div class="">
                            <textarea name="message" cols="40" rows="10" id="status_message" class="form-control message" style="height: 62px; overflow: hidden;" placeholder="What's on your mind ?"></textarea> 
                        </div>
                      </div>
            <div class="panel-footer">
                <div class="row">
                  <div class="col-md-7"></div>
                  <div class="col-md-5">
                    <div class="form-group">                                   
                      <input type="submit" name="submit" value="Post" class="btn btn-primary">                                  
                    </div>
                  </div>
                </div>
            </div>
            </div>
      </div>
      </div>
    </form>
  </div>
  </div>
  </div> 
 
<div class="container">
    
<!-- delete account -->
<a href="#" class="list-group-item">
  <h4 class="list-group-item-heading">Delete Account</h4>
  <p class="list-group-item-text">The account will be permanently deleted</p>
</div>


  