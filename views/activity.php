
<?php require('menu.php'); ?>
             
 
<style>

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
    
    .profile{
        border: 1px solid grey;
    }
    
    .comment{
        border: 1px solid grey;
        margin-bottom: 20px;
    }
     .firstbutton{
        margin-left: 280px;
        margin-bottom: 20px;
    }
    .secondbutton{
        margin-right: 20px;
        margin-bottom: 20px;
    }
</style>
 

<div class="container page" id="firstContainer">
 <div class="row">
        
        <div class="col-md-6 col-md-offset-2  profile" >
            <div>
                 <h4>Profile</h4>
            </div>

        <!--left container-->
        <div class="col-sm-5">
             <aside>
            <figure>
                <img src="http://d34yn14tavczy0.cloudfront.net/images/no_photo.png">  
            </figure>
            </aside>
             
        <div class="upload-wrapper">
            <div class="upload-click">
            <button> Upload Image</button>   
            </div>
            <div class="upload-image" style="display:none">
            </div>
            <input type ="file" id="input-file-upload" style="display:none">
        </div>
        <div id="server-response"></div>
        
        
        
        
        
        
        
        </div>
        

        <!--right container-->
        <div class="col-lg-6">
            <?php foreach ($selection as $row): ?>
            <p><?php echo htmlentities($row['first'], ENT_QUOTES, 'utf-8'); ?></p><br>
            <p><?php echo htmlentities($row['last'], ENT_QUOTES, 'utf-8'); ?></p><br>
            <p><?php echo htmlentities($row['gender'], ENT_QUOTES, 'utf-8'); ?></p><br>
            <p><?php echo htmlentities($row['age'], ENT_QUOTES, 'utf-8'); ?></p>
            <label>About me:</label>
            <p><?php echo htmlentities($row['biography'], ENT_QUOTES, 'utf-8'); ?></p>
            <?php endforeach; ?>
        </div>
       


<div class="modal" id="modal2">
    
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body">
                <form action="activity.php" method="post" class="well">
                 <form class="form">
                    <label >Comment</label>
                    
                    <textarea class="form-control" rows="5" id="comment"   name="newsfeed" autocomplete="off" autofocus>
                       
                    </textarea>
                    <input type="hidden" name="task" value="newsfeed">
                     <button type="submit" class="btn btn-success">Add</button>
                </form>
                </form>
            </div>
            
        </div>
    </div>
    
</div>






<button  class="btn btn-success firstbutton"  data-toggle="modal" data-target="#modal1" >Add Biography</button>
<button  class="btn btn-success secondbutton" data-toggle="modal" data-target="#modal2" >Post a comment</button>

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
    
    
        

</div> 
</div>

<div class="container page" id="firstContainer">
 <div class="row">
         <?php foreach ($comments as $row): ?>
        <div class="col-md-6 col-md-offset-2  comment" >
            <h4> <?php echo htmlentities($row['time'], ENT_QUOTES, 'utf-8'); ?></h4>
            <?php echo htmlentities($row['comment'], ENT_QUOTES, 'utf-8'); ?>
        </div>
            <?php endforeach; ?>
       
        
  </div>
 </div>
</div>
  
  
