<html>
<head>
<style>
body {
  background-color: rgb(212, 227, 231);
}

.btn {
  border: none;
  background-color: inherit;
  padding: 10px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  width: 100px;
}


.container {
  position: relative;
  width: 50%;
}


.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 100%;
  height: 400%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.container:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.button {
  background-color: #008C;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <BR>
  <h2>USERS</h2>
  <BR>
  <BR>
  <BR>
  <BR>
  <BR>
  <BR>
  <BR>
  

<?php
      $username = "root"; 
      $password = ""; 
      $database = "use"; 
      $mysqli = new mysqli("localhost", $username, $password, $database); 
      $query = "SELECT * FROM users_detail";


      if ($result = $mysqli->query($query)) 
      {
        while ($row = $result->fetch_assoc()) 
        {
          $field1name = $row["fname"];
          $field2name = $row["lname"];
          $field3name = $row["phno"];
          $field4name = $row["dob"];
          $field5name = $row["email"];
          $field6name = $row["prof"];
          $field7name = $row["add"];
          echo '
          <div class="container">
          <button class="button">'.$field1name.'</button>
          <div class="overlay">
          <div class="text">NAME:'.$field1name.'  '.$field2name.'<BR>PHONE NO:'.$field3name.'<BR>DOB:'.$field4name.'<BR>AGE:'.$field5name.'<BR>ROLE:'.$field6name.'<BR>ADDRESS:'.$field7name.'</div>
          </div>
          </div>
          <br>';
        }
       
      } 
    ?>
    <script>
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
    </div>
    </div>
</body>
</html>