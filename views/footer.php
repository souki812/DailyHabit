        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        
        
        <script>
            
            $("#textarea").keyup(function(){
                
                 $.post("update.php", {goal:$("#textarea").val()});
            });
        </script>
    </body>
</html>