<?php
 

if (isset($_POST['submit'])) {
    if (isset($_POST['username1']) && isset($_POST['password']) &&isset($_POST['conpassword']) &&
        isset($_POST['gender']) && isset($_POST['email']) &&
        isset($_POST['phoneCode']) && isset($_POST['phone'])) {
        
        
        $username1 = $_POST['username1'];
        $about = $_POST['about'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $conpassword=$_POST['conpassword'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phoneCode = $_POST['phoneCode'];
        $phone = $_POST['phone'];
        $python=$_POST['python'];
        $cpp=$_POST['cpp'];
        $java=$_POST['java'];
        $sql=$_POST['sql'];
        $R=$_POST['R'];
        $Html=$_POST['Html'];
        $js=$_POST['js'];
        $servers=$_POST['servers'];
        $bd=$_POST['bd'];
        $Algorithms=$_POST['Algorithms'];
        $SAS=$_POST['SAS'];
        $Excel=$_POST['Excel'];
        $Oracle=$_POST['Oracle'];
        $md=$_POST['md'];
        $Ruby=$_POST['Ruby'];
        $Tableau=$_POST['Tableau'];
        $Quali=$_POST['Quali'];
        $Stream=$_POST['Stream'];
        $Experience=$_POST['Experience'];
       
        $host = "localhost";
        $dbUsername = "id17987094_jobportal";
        $dbPassword = "]}Am89pea30L#Ko4";
        $dbName = "id17987094_test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(username,name, password,conpassword, gender, email, phoneCode, phone,python,cpp,java,sqLd,R,Html,js,servers,bigdata,Algorithms,SAS,Ruby,Tableau,Excel,Oracle,MangoDB,username1,Qualification,Stream,Experience,about) values(?, ?,?, ?,?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssssiisssssssssssssssssssss",$username1,$name, $password,$conpassword, $gender, $email, $phoneCode, $phone ,$python,$cpp,$java,$sql,$R,$Html,$js,$servers,$bd,$Algorithms,$SAS,$Ruby,$Tableau,$Excel,$Oracle,$md,$username1,$Quali,$Stream,$Experience,$about);
                if($password==$conpassword)
                {

                if ($stmt->execute()) {
                        
  
  
     
               echo '<script>alert("Data Inserted into Database")</script>';
                     // Start the session
session_start();
 
// Set variables
$accountName = $username1; 
$Qualification =$Quali; 
$Stream = $Stream; 
$Experience = $Experience; 

 
// Set session variables
$_SESSION['accountName'] = $accountName;
$_SESSION['Qualification'] = $Qualification ;
$_SESSION['Stream'] = $Stream;
$_SESSION['Experience'] = $Experience;

  
              
                     
                     ?>
<script>
    window.location.href ='updis.php';
</script>
<?php
                    
                    
                    
                }
                else {
                    echo $stmt->error;
                }
               }
               else{
                    echo "Confirm password did not match";}
            }
            else{
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>