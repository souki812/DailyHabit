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
        
            <p><?php echo htmlentities($row['first'], ENT_QUOTES, 'utf-8'); ?></p><br>
            <p><?php echo htmlentities($row['last'], ENT_QUOTES, 'utf-8'); ?></p><br>
            <p><?php echo htmlentities($row['gender'], ENT_QUOTES, 'utf-8'); ?></p><br>
            <p><?php echo htmlentities($row['age'], ENT_QUOTES, 'utf-8'); ?></p>
            <label>About me:</label>
            <p><?php echo htmlentities($row['biography'], ENT_QUOTES, 'utf-8'); ?></p>
            <?php endforeach; ?>
            
        </div>
        </div>
 </div>
  
</div>
  
  