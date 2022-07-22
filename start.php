 
<!DOCTYPE HTML>
<html>
<head>
    <meta name="google-site-verification" content="AMuEK9VszqGPc15ZKdcrdx31lqMfCXqUGWSgVRIXb6w" />
<style>
    body{
            background-image: url('bg8.jfif');
             background-repeat:no-repeat;
             background-attachment:fixed;
             background-size:100% 100%;
            }
          </style>
  <title>Register Form</title>
</head>
<body>
 <div align="center">
                <br></br>
                <br></br>
                
               <h1><font color="darkgreen">LOGIN HERE</h1>
                 <br></br>
                <br></br>
              
      </div>
<form action="" method="POST">
 
<table border="1" align="center"  style="background-color:#FFFFE0;","width:1400px;" >
 

   <tr>
    <td><font color="darkgreen"><font size="5px">Enter Username             :</td>
    <td><input type="text" name="username" ></td>
   </tr>
   <tr>
    <td><font color="darkgreen"><font size="5px">Enter Password            :</td>
    <td><input type="password" name="password" ></td>
   </tr>
</table>
 <div align="center">
      
             
       <input type="submit" value="Login as Job sekeer" name="submit">
 
       <input type="submit" value="Login as Job provider" name="submitcom">
       <td><input type="submit" value="Register as a candidate" name="RAC"></td>
<td><input type="submit" value="Register as company" name="RACO"></td>
   
      </div>


<style>
   input[type=submit]
{
    /* your styles here, You can just increase its font size below*/
    font-size: 20px; 
    color: #FFFFFF;
    margin-top: 2cm;
    margin-left: 2cm;
    font-weight: bold;
    font-family: ariel; 
     box-shadow: 3px 3px;
     background-color: #228B22;
}
</style>

    
  
 </form>
</body>
</html>



<?php
if(isset($_POST['RAC'])){
?>
<script>
    window.location.href ='form2update.php';
</script>
<?php
;}
if(isset($_POST['RACO'])){
    ?>
<script>
    window.location.href ='companyform.html';
</script>
<?php
 ;}

if(isset($_POST['submit'])||isset($_POST['submitcom'])){
    if (isset($_POST['username']) && isset($_POST['password']))
      {
        $username = $_POST['username'];
        $password = $_POST['password'];
         
        $host = "localhost";
        $dbUsername = "id17987094_jobportal";
        $dbPassword = "]}Am89pea30L#Ko4";
        $dbName = "id17987094_test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            if(isset($_POST['submit'])){
             $Select = "SELECT username FROM register WHERE username = ? LIMIT 1";
             $stmt = $conn->prepare($Select);
             $stmt->bind_param("s", $username);
             $stmt->execute();
             $stmt->bind_result($resultEmail);
             $stmt->store_result();
             $stmt->fetch();
             $rnum = $stmt->num_rows;
            if ($rnum == 1) {
               $stmt->close();
               $sql ="SELECT password FROM register WHERE username =  '$username' ";
               $result = mysqli_query($conn,$sql);
               $pass = mysqli_fetch_all($result,MYSQLI_ASSOC);
              // echo implode(" ",$pass[0]);// Use of implode function
               $pass=implode(" ",$pass[0]);
               if($pass==$password ){
                     
                   echo "New record inserted sucessfully.";
                    sleep(1);
                    ?>
<script>
    window.location.href ='homepage.php';
</script>
<?php
                  
                   echo '<script>alert("logged in successfully")</script>'; 
		   die;}
                  else{
                     echo "login failed";}

               
               
              }
             
            else{
                 echo '<script>alert("Do not have an account")</script>';  
            }
            }
            elseif(isset($_POST['submitcom'])){
             $Select = "SELECT comusername FROM comregister WHERE comusername = ? LIMIT 1";
             $stmt = $conn->prepare($Select);
             $stmt->bind_param("s", $username);
             $stmt->execute();
             $stmt->bind_result($resultEmail);
             $stmt->store_result();
             $stmt->fetch();
             $rnum = $stmt->num_rows;
            if ($rnum == 1) {
               $stmt->close();
               $sql ="SELECT compassword FROM comregister WHERE comusername =  '$username' ";
               $result = mysqli_query($conn,$sql);
               $pass = mysqli_fetch_all($result,MYSQLI_ASSOC);
              // echo implode(" ",$pass[0]);// Use of implode function
               $pass=implode(" ",$pass[0]);
               if($pass==$password ){
                     
                   echo "New record inserted sucessfully.";
                      ?>
<script>
    window.location.href ='comhome.php';
</script>
<?php
                  echo '<script>alert("logged in successfully")</script>'; 
		   die;}
                 else{
                    echo '<script>alert("log in failed")</script>'; }

               
               
              }
             
            else{
                 echo '<script>alert("Do not have an account")</script>'; 
            }
            }
            
           // $stmt->close();
            $conn->close();
        }
    }
    else {
       echo "All field are required.";
       die();
    }
}


?>
