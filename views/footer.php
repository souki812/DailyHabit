        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                  
             <!-- script for the newsfeed -->
<script>
      $(document).ready(function() {
        var time = 0; // Will control what messages we get
        
        // Run some code repeatedly
        setInterval(function() {
          
          // Send a request for recent messages via AJAX
          $.post('./newsfeed.php', {update_time: time}, function(response) {
                  
            // Add a table row for each message object we get
            $.each(response, function() {
              var tr = '<tr>' +
                          '<td class="col-xs-1">' + this.time.substring(10) + '</td>' +
                          '<td class="col-xs-1">' + this.ip + '</td>' +
                          '<td>' + this.message + '</td>' +
                        '</tr>';
                        
                   
              $('#chat').prepend(tr);
              time = this.time; // Most recent message time
            });
          }, 'json'); // Response will be in JSON format
        }, 1000); // Repetition happens once per second
        
        // Send a new message via AJAX
        $('#message').on('keydown', function() {
          if (event.which == 13) { // Code for the Enter key
            event.preventDefault();
            var message = $(this).val().trim();
            
            if (message) { // Don't send blank messages
              $.post('./newsfeed.php', {new_message: message});
              $(this).val('');
            }
          }
        });
      });
    </script>

    </body>
</html>