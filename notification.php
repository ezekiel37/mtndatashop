<!DOCTYPE html>
<html>
<head>
    <title>Sales Monitoring</title>
</head>
<body>

    <div id="main">
        <div id="activity"></div>
        <div id="notification"></div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>    

    // seconds * milliSeconds
      var minuteMS = 60 * 1000;

    // Make sure that the page is already loaded
    $(document).ready(function() {
        // Set the interval to 1 minute
        window.setInterval(function() {
            getInfo();
        }, minuteMS);

        function getInfo() {
        //make the ajax call
        $.ajax({
            url: './getnotification.php',
            type: 'POST',
            data: {},
            success: function(data) {
                document.getElementById("notification").innerHTML = data;    
                console.log(data);
            },
            error: function (request, status, error) {
                alert(request.responseText);
            }
        });
    }

    });

   
    
</script>
</body>
</html>