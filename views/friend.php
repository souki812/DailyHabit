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
        border-top: 30px solid #000;
        border-bottom: 30px solid #000;
        /*border: 1px solid grey;*/
    }
    
    .comment{
         border: 1px solid grey;
        margin-bottom: 20px;
        margin: left;
    }
    
     .firstbutton{
        margin-left: 280px;
        margin-bottom: 20px;
        border: #DC143C;
        background-color: #DC143C;
    }
    
    .secondbutton{
        margin-right: 20px;
        margin-bottom: 20px;
        display: inline-block;
        float: right;
        border: #DC143C;
        background-color: #DC143C;
        color: white;
    }
    
    .secondbutton:hover {
        border: #555555;
        background-color: #555555;
        color: white;
    }
    
    #profile-pic{
         width:150px; /* you can use % */
         height: 150px;
         border: 2px solid grey;
    }
    
    .col-xs-6 img[src=""] {
        display: none;
    }
    
    .circleBase {
        border-radius: 50%;
        behavior: url(PIE.htc); /* remove if you don't care about IE8 */
        }

    .type1 {
        /*background: url("views/images/manon.jpg");*/
        margin-left: 310px;
        margin-top: -100px;
        border-radius: 50%/50%; 
        width: 150px;
        height: 150px;
        border: 3px solid #000;
    }
    
    .words {
        margin:auto;
        margin-left: 25px;
        margin-top: 30px;
        text-align: 50%;
    }
    
    .bio {
        border-top: solid 1px;
        border-bottom: solid 1px; 
    }
    
    .add {
        border: #DC143C;
        background-color: #DC143C;
        color: white;
    }
    
    .add: hover {
        border: #555555;
        background-color: #555555;
        color: white;
    }
    

</style>
 

<br><br><br><br><br><div class="container page" id="firstContainer">
 <div class="row">
        
        <div class="col-md-8 col-md-offset-2  profile" >

   
            <?php foreach ($selection as $row): ?>
                <img src="/views/uploads/<?php echo $row['picture'] ?>"  class="circleBase type1" id="profile-pic"   onerror="if (this.src != 'views/images/no_photo.png') this.src = 'views/images/no_photo.png';">
             <?php endforeach; ?>
  

            <center>
            <?php foreach ($success as $row): ?>
            <h2 class="words"><?php echo htmlentities($row['first'], ENT_QUOTES, 'utf-8'); ?>     <?php echo htmlentities($row['last'], ENT_QUOTES, 'utf-8'); ?></h2>
            <h3 class="words"><?php echo htmlentities($row['gender'], ENT_QUOTES, 'utf-8'); ?>   |   <?php echo htmlentities($row['age'], ENT_QUOTES, 'utf-8'); ?></h3>  
            <label class="words">About me:</label>
            <div class="bio"><h5><?php echo htmlentities($row['biography'], ENT_QUOTES, 'utf-8'); ?></h5></div><br>
            <?php endforeach; ?>
            </center>
        </div>
 </div>
  
</div>


<div class="container page">
 <div class="row">
  
   <?php foreach ($comments as $row): ?>
        <div class="col-md-9 col-md-offset-2  comment" >
            <img src="/views/uploads/<?php echo $row['picture'] ?>"  width="50" height="50"  onerror="if (this.src != 'views/images/no_photo.png') this.src = 'views/images/no_photo.png';">
                 <h4> <?php echo htmlentities($row['first'], ENT_QUOTES, 'utf-8'); ?>  <?php echo htmlentities($row['last'], ENT_QUOTES, 'utf-8'); ?></h4>
                
            <h4> <?php echo htmlentities($row['time'], ENT_QUOTES, 'utf-8'); ?></h4>
            <?php echo htmlentities($row['comment'], ENT_QUOTES, 'utf-8'); ?>
           
            
            <div class="button2"><button  class="btn btn-default secondbutton add" data-toggle="modal" data-target="#modal5" >Add a comment</button></div>   
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
                     <button type="submit" class="btn btn-default add">Add</button>
                     <?php endif; ?>
                </form>
                 
                 
              
                </form>
                 
            </div>
            
        </div>
    </div>
    
</div>
  
  