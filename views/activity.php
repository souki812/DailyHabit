
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
            <p>First Name:   <?php echo htmlentities($row['first'], ENT_QUOTES, 'utf-8'); ?></p><br>
            <p>Last Name:   <?php echo htmlentities($row['last'], ENT_QUOTES, 'utf-8'); ?></p><br>
            <p>Gender:  <?php echo htmlentities($row['gender'], ENT_QUOTES, 'utf-8'); ?></p><br>
            <p>Age:  <?php echo htmlentities($row['age'], ENT_QUOTES, 'utf-8'); ?></p>
            <p>Biography:  <?php echo htmlentities($row['biography'], ENT_QUOTES, 'utf-8'); ?></p>
            <?php endforeach; ?>
        </div>
        
        
        <div class="col-lg-6">
            <?php foreach ($comments as $row): ?>
            <p><?php echo htmlentities($row['comment'], ENT_QUOTES, 'utf-8'); ?></p><br>
    
            <?php endforeach; ?>
        </div>
        
        
        <button class="btn btn-success" data-toggle="modal" data-target="#modal2">
    Post a comment
</button>


<div class="modal" id="modal2">
    
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body">
                <form action="activity.php" method="post" class="well">
                 <form class="form">
                    <label >Comment</label>
                    
                    <textarea class="form-control" rows="5" id="comment" placeholder="Write Your Biography!"  name="newsfeed" autocomplete="off" autofocus>
                       
                    </textarea>
                    <input type="hidden" name="task" value="newsfeed">
                     <button type="submit" class="btn btn-success">Add</button>
                </form>
                </form>
            </div>
            
        </div>
    </div>
    
</div>


<button class="btn btn-success" data-toggle="modal" data-target="#modal1">
    Add Your Biography
</button>


<div class="modal" id="modal1">
    
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body">
                <form action="activity.php" method="post" class="well">
                 <form class="form">
                    <label >Biography</label>
                    
                    <textarea class="form-control" rows="5" id="biography" placeholder="Write Your Biography!"  name="biography" autocomplete="off" autofocus>
                       
                    </textarea>
                    <input type="hidden" name="task" value="biography">
                     <button type="submit" class="btn btn-success">Add</button>
                </form>
                </form>
            </div>
            
        </div>
    </div>
    
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



  