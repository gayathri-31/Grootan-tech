<html>
	<head>
    <meta http-equiv="Refresh" content="0.1;url=main.php">

  </head>
	<body>
    <?php
      // Create connection
      $conn =  mysqli_connect("localhost", "root", "", "use");
      // Check connection
      if ($conn === false)
      {
        die("Connection failed: " . mysqli_connect_error());
      }
      $fname =  $_REQUEST['fname'];
      $lname =  $_REQUEST['lname'];
      $phno = $_REQUEST['phno'];
      $dob = $_REQUEST['dob'];
      $email =  $_REQUEST['email'];
      $prof = $_REQUEST['prof'];
      $add = $_REQUEST['add'];

      // QUERY
      $sql = "INSERT INTO users_detail VALUES ('$fname','$lname','$phno','$dob','$email','$prof','$add')";

      if(mysqli_query($conn, $sql))
      {}      
      else
      {
 	      echo '<p id="demo"></p>;
              <script>
                function myFunction() 
                {
                  <p>not summited</p>
                }
                document.getElementById("demo").innerHTML = window.myFunction();
              </script>';
      }
  
      // Closing the connection.
      $conn->close();
    ?>




  </body>
</html>