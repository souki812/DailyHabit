 
<?php require('menu.php'); ?>

<style>
    .acheived{
    background-color:#2E2D88;
    color:white;
}

  .future{
    background-color:#2E2D88;
    color:white;
}

   .page{
       
         padding-top: 100px; 
    }   
</style>

 

<div class="container page" id="firstContainer">
  

        <div class="col-md-6 margintop1 acheived">
            <h3 class="text-left"><span class="glyphicon glyphicon-ok"></span> Your Achieved Goals</h3>

        </div>
        



        <div class="col-md-6 margintop1 future">
            <h3 class="text-right"><span class="glyphicon glyphicon-road"></span> Your Future Goals</h3>
        </div> 
</div><br><br><br>




<div class="jumbotron">
 <div class="container PageContainer" id="secondcontainer">
    
    <div class="row margintop" class="centertext">
        
        <div class="col-md-12 margintop1">
            <h3><span class="glyphicon glyphicon-pushpin"></span> Your Current Goal</h3>
        </div>
        
    

        

<!-- update your current goal text box-->
<form action="" method="post" id="com">
    <label> Date: <br><input type="text" name="date" size="36"></label><br><br>
    <label> Description of Goal: <br><textarea cols="35" rows="5" name="mes"></textarea></label><br><br>
    
    <button type="submit" name="post"   class = "btn btn-info btn-md" >Add New Goal</button>
    <!--  <input type="submit" name="post" value="Post">  -->

</form>
</html>

<?php

$date = $_POST["date"];
$text = $_POST["mes"];
$post = $_POST["post"];

if($post) {
    
    # write down comments
    $write = fopen("com.text", "a+");
    fwrite($write, "<u><b> $date</b></u><br>$text</br>");
    fclose($write);
    
    #display comments
    $read = fopen("com.txt", "r+t");
    echo "All comments:<br>";
    
    while(!feof($read)) {
        echo fread($read, 1024);
    }
    
    fclose($read);
    
}

else {
    
    #display comments
    $read = fopen("com.txt", "r+t");
    echo "All comments:<br>";
    
    while(!feof($read)) {
        echo fread($read, 1024);
    }
    
    fclose($read);
    
}
?>


<!--
        <div class="text-right"><br><br>
            <button type="submit" class = "btn btn-info btn-lg" >Edit Goal</button>
            <button type="submit" name="addgoal"   class = "btn btn-info btn-lg" >Add New Goal</button>
        </div> 
-->

    </div>
    </div><br>
    
