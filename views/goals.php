        
<?php require('menu.php'); ?>

<style>
    
    .home {
        border: 1px solid grey;
    }
    
    .hometop {
     
    }
    
      .comment {
        border: 1px solid grey;
        margin-bottom: 20px;
        margin-top:150px;
    }
    .firstbutton {
        margin-left: 40px;
        margin-bottom: 10px;
    }
    
    .secondbutton {
        margin-left: 20px;
        margin-bottom: 10px;
    }
    
    .secondbutton: hover {
        border: #555555;
        background-color: #555555;
        color: white;
    }
    
    .page {
         padding-top: 100px; 
    }
    
    .delete {
        float: right;
        border: #DC143C;
        background-color: #DC143C;
        color: white;
    }
    
    .button {
        border: #DC143C;
        background-color: #DC143C;
    }
    
    .button: hover {
        border: #555555;
        background-color: #555555;
        color: white;
    }
    
</style>
    
    
    <!--Current Goal-->
<div class="container PageContainer" id="secondcontainer">
    <div class="row margintop" class="centertext">
        <div class="row">
            <div class="col-md-4 comment">
                <h4><span class="glyphicon glyphicon-road"></span> Current Goal:</h4>
                <button  class="btn btn-default secondbutton" data-toggle="modal" data-target="#modal3" >Edit Goal</button>
                
                <form action="goals.php" method="post">
                    <?php foreach ($current as $row): ?>
                    <h4> <?php echo htmlentities($row['current'], ENT_QUOTES, 'utf-8'); ?></h4>
                    <input type="hidden" name="current_id" value="<?php echo $row['current_id']; ?>">
                    <input type="submit" name="delete" class="delete" value="delete"><br>          
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
 

        <div class="modal" id="modal3">
    
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="goals.php" method="post" class="well">
                        <form class="form">
                            <label >Current</label>
                            <textarea class="form-control" rows="5" id="comment1"  name="current" autocomplete="off" autofocus></textarea>
                            <input type="hidden" name="task" value="current">
                            <button type="submit" class="btn btn-default button">Add</button>
                        </form>
                        </form>
                    </div>
                </div>
            </div>   
        </div>

     
     
     
    <!--Achieved Goals-->
        <div class="row">
            <div class="col-md-4 comment">
                <h4><span class="glyphicon glyphicon-thumbs-up"></span> Achieved Goals:</h4>
                    <button  class="btn btn-default secondbutton" data-toggle="modal" data-target="#modal1" >Edit List</button>
                    
                    <form action="goals.php" method="post">
                        <?php foreach ($achieved as $row): ?>
                        <h4> <?php echo htmlentities($row['achieved'], ENT_QUOTES, 'utf-8'); ?></h4>
                        <input type="hidden" name="achieved_id" value="<?php echo $row['achieved_id']; ?>">
                        <input type="submit" name="delete" class="delete" value="delete"><br>
                        <?php endforeach; ?>
                    </form>
            </div>
        </div>
 

        <div class="modal" id="modal1">
    
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="goals.php" method="post" class="well">
                        <form class="form">
                            <label >Achieved</label>
                            <textarea class="form-control" rows="5"  name="achieved" autocomplete="off" autofocus></textarea>
                            <input type="hidden" name="task" value="achieved">
                            <button type="submit" class="btn btn-default button">Add</button>
                        </form>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
      
      
    <!--Future Goals-->
        <div class="row">
            <div class="col-md-4 comment">
                <h4><span class="glyphicon glyphicon-pushpin"></span> Future Goals:</h4>
                <button  class="btn btn-default secondbutton" data-toggle="modal" data-target="#modal2" >Edit List</button>
                <form action="goals.php" method="post" >
                    <?php foreach ($future as $row): ?>
                    <h4> <?php echo htmlentities($row['future'], ENT_QUOTES, 'utf-8'); ?></h4>
                    <input type="hidden" name="future_id" value="<?php echo $row['future_id']; ?>">
                    <input type="submit" name="delete" class="delete" value="delete"><br>
                    <?php endforeach; ?>
                </form>
            </div>
        </div>
 

        <div class="modal" id="modal2">
    
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="goals.php" method="post" class="well">
                        <form class="form">
                            <label >Future</label>
                            <textarea class="form-control" rows="5"  name="future" autocomplete="off" autofocus></textarea>
                            <input type="hidden" name="task" value="future">
                            <button type="submit" class="btn btn-default button">Add</button>
                        </form>
                        </form>
                    </div> 
                </div>
            </div>  
        </div>
    </div>
</div>         
   