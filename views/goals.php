        
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
    

        
    
    
    

     <div class="container page" >
 <div class="row">
   <div class="col-md-6 col-md-offset-3  comment" >
    <h4>Current Goal:</h4>
  <button  class="btn btn-success secondbutton" data-toggle="modal" data-target="#modal3" >Edit Goal</button>
 <?php foreach ($current as $row): ?>
  <h4> <?php echo htmlentities($row['current'], ENT_QUOTES, 'utf-8'); ?></h4>
   <?php endforeach; ?>
    </div>
   </div>
 

<div class="modal" id="modal3">
    
    <div class="modal-dialog">
        <div class="modal-content">
           
            <div class="modal-body">
                <form action="goals.php" method="post" class="well">
                 <form class="form">
                    <label >Current</label>
                    
                    <textarea class="form-control" rows="5" id="comment1"  name="current" autocomplete="off" autofocus>
                       
                    </textarea>
                    <input type="hidden" name="task" value="current">
                     <button type="submit" class="btn btn-success">Add</button>
                </form>
                </form>
            </div>
            
        </div>
    </div>
    
</div>
   

</div>
             
   