        
<?php require('menu.php'); ?>

<style>
    
    
    
    .home{
        border: 1px solid grey;
        
       
    }
    
    .hometop{
     
    }
    
      .comment{
        border: 1px solid grey;
        margin-bottom: 20px;
    }
    .firstbutton{
        margin-left: 40px;
        margin-bottom: 10px;
    }
    .secondbutton{
        margin-left: 20px;
        margin-bottom: 10px;
    }
    
    .page{
       
         padding-top: 100px; 
    }
</style>
    
 <div class="container page">
    <div class="row">
        
        <div class="col-md-6 col-md-offset-3  home" >
            <div>
                 <h4>Your Daily Summary</h4>
            </div>
           
            
           
                <div class="form-group">
                   
                    <label >Have you achieved today's Habit?</label>
  
                     <button class="btn btn-success firstbutton" id="target" type="button">Achieved</button>
                    

                
                
                </div>
         
        </div>
    </div><br>
    
    

   
   <div class="container">
  <h2>Your Progress:</h2>
  <p><cite>Progress is impossible without change, and those who cannot change their minds cannot change anything.</cite> George Bernard Shaw </p> 
  
   <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar"
  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
    40%
  </div>
</div>

    </div>
    

   
   
   
     <div class="container page" >
 <div class="row">
   <div class="col-md-6 col-md-offset-3  comment" >
    <h4>Newsfeed</h4>
  <button  class="btn btn-success secondbutton" data-toggle="modal" data-target="#modal3" >Post a comment</button>
 
    </div>
   </div>
 
 
 
 
<div class="container page">
 <div class="row">
 
   <?php foreach ($comments as $row): ?>
        <div class="col-md-6 col-md-offset-3  comment" >
            <h4> <?php echo htmlentities($row['time'], ENT_QUOTES, 'utf-8'); ?></h4>
            <?php echo htmlentities($row['comment'], ENT_QUOTES, 'utf-8'); ?>
        </div>
            <?php endforeach; ?>
 
 </div>
</div>
 
 
<div class="modal" id="modal3">
    
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body">
                <form action="home.php" method="post" class="well">
                 <form class="form">
                    <label >Comment</label>
                    
                    <textarea class="form-control" rows="5" id="comment1"  name="newsfeed" autocomplete="off" autofocus>
                       
                    </textarea>
                    <input type="hidden" name="task" value="newsfeed">
                     <button type="submit" class="btn btn-success">Add</button>
                </form>
                </form>
            </div>
            
        </div>
    </div>
    
</div>
   

</div>
             
   