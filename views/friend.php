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
    
    #profile-pic{
         width:150px; /* you can use % */
         height: 150px;
         border: 2px solid grey;
    }
    
    .col-xs-6 img[src=""] {
        display: none;
}
    

</style>
 

<div class="container page" id="firstContainer">
 <div class="row">
        
        <div class="col-md-6 col-md-offset-2  profile" >
           <div class="col-xs-6">
                 <h4>Profile</h4>
   
    <?php foreach ($selection as $row): ?>
             <aside>
            <figure>
               
                <img src="/views/uploads/<?php echo $row['picture'] ?>"  id="profile-pic"   onerror="if (this.src != 'views/images/no_photo.png') this.src = 'views/images/no_photo.png';">
             
            </figure>
            </aside>
             <?php endforeach; ?>
  
        </div>


        <!--right container-->
        <div class="col-xs-6">
            <?php foreach ($success as $row): ?>
        
            <h4><?php echo htmlentities($row['first'], ENT_QUOTES, 'utf-8'); ?> <?php echo htmlentities($row['last'], ENT_QUOTES, 'utf-8'); ?></h4><br>
            <h5><?php echo htmlentities($row['gender'], ENT_QUOTES, 'utf-8'); ?></h5><br>
            <h5><?php echo htmlentities($row['age'], ENT_QUOTES, 'utf-8'); ?></h5>
            <label>About me:</label>
            <h5><?php echo htmlentities($row['biography'], ENT_QUOTES, 'utf-8'); ?></h5>
            <?php endforeach; ?>
            
        </div>
        </div>
 </div>
  
</div>


<div class="container page">
 <div class="row">
 
   <?php foreach ($comments as $row): ?>
        <div class="col-md-6 col-md-offset-2  comment" >
           
            <h4> <?php echo htmlentities($row['time'], ENT_QUOTES, 'utf-8'); ?></h4>
            <?php echo htmlentities($row['comment'], ENT_QUOTES, 'utf-8'); ?>
          
            
            <div class="button2"><button  class="btn btn-success secondbutton" data-toggle="modal" data-target="#modal5" >Add a comment</button></div>   
        </div>
            <?php endforeach; ?>
            
 </div>
</div>


 

<div class="modal" id="modal5">
    
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body">
                <form action="friend.php" method="post" class="well">
                 <form class="form">
                    <label >Comment</label>
                    
                    <textarea class="form-control" rows="5" id="comment"   name="friendcomment" autocomplete="off" autofocus>
                       
                    </textarea>
                    <?php if(isset($_SESSION['friend'])): ?>
                    <input type="hidden" name="task" value="<?php echo $_SESSION['friend']; unset($_SESSION['friend']);?>">
                     <button type="submit" class="btn btn-success">Add</button>
                     <?php endif; ?>
                </form>
                 
                 
              
                </form>
                 
            </div>
            
        </div>
    </div>
    
</div>
  
  