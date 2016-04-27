
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
    
    .rectangle {
	width: 500px;
	height: 300px;
	background: gray;
    }
    
    .circleBase {
        border-radius: 50%;
        behavior: url(PIE.htc); /* remove if you don't care about IE8 */
    }

    .type1 {
         /*background: url("views/images/manon.jpg");*/
         margin-left: 40px;
         margin-top: -75px;
         border-radius: 50%/50%; 
         width: 150px;
         height: 150px;
         border: 3px solid #000;
    }
    
    .words {
        margin-left: 350px;
        margin-top: 20px;
    }
    
</style>
 

    <!--New profile-->
    <br><br><br><br><br><br><br><br><br><div class="row">
        <div class="col-md-9 col-md-offset-2  profile" text-align="center">
            <div class="col-md-4 col mid-offset-1"></div>
            <div><img class="circleBase type1" src="http://d34yn14tavczy0.cloudfront.net/images/no_photo.png"></div>
            
                <div class="col-lg-6">
                    <?php foreach ($selection as $row): ?>
                    <center><h3 class="words"><?php echo htmlentities($row['first'], ENT_QUOTES, 'utf-8'); ?></center></h3>
                    <center><h3 class="words"><?php echo htmlentities($row['last'], ENT_QUOTES, 'utf-8'); ?></center></h3>
                    <center><h4 class="words"><?php echo htmlentities($row['gender'], ENT_QUOTES, 'utf-8'); ?></center></h4>
                    <center><h4 class="words"><?php echo htmlentities($row['age'], ENT_QUOTES, 'utf-8'); ?></center></h4>
                    <center><label class="words">About me:</label></center>
                    <center><p class="words"><?php echo htmlentities($row['biography'], ENT_QUOTES, 'utf-8'); ?></p></center>
                    <?php endforeach; ?>
                </div>
        </div>
    </div>
    

    
    
<!--Old profile-->
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
        
        <!--Upload image-->     
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

<div class="container">
  <h2>Your Progress:</h2>
  <p><cite>Progress is impossible without change, and those who cannot change their minds cannot change anything.</cite> George Bernard Shaw </p> 
  
   <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
  </div>
</div>

    </div>

<div class="container page">
 <div class="row">
 
   <?php foreach ($comments as $row): ?>
        <div class="col-md-6 col-md-offset-2  comment" >
            <form action="activity.php" method="post" >
            <h4> <?php echo htmlentities($row['time'], ENT_QUOTES, 'utf-8'); ?></h4>
            <?php echo htmlentities($row['comment'], ENT_QUOTES, 'utf-8'); ?>
            
            
            
           <input type="hidden" name="comment_id" value="<?php echo $row['comment_id']; ?>">
           <input type="submit" name="delete" value="delete">
             </form>
        </div>
            <?php endforeach; ?>
            
 </div>
</div>
 

</div>
  
