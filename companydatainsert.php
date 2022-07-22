<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['comusername']) && isset($_POST['compassword']) && isset($_POST['comconpassword'])  &&
        isset($_POST['companyname']) && isset($_POST['comemail'])
        && isset($_POST['location']) && isset($_POST['comphonecode'])
        && isset($_POST['comphone']) && isset($_POST['TOI'])
        && isset($_POST['NOE']) && isset($_POST['age'])
        )
      {
         $comusername = $_POST['comusername'];
         $comemail = $_POST['comemail'];
         $compassword = $_POST['compassword'];
         $comconpassword=$_POST['comconpassword'];
         $companyname=$_POST['companyname'];
         $comphone=$_POST['comphone'];
         $TOI=$_POST['TOI'];
         $NOE=$_POST['NOE'];
         $age=$_POST['age'];
         $location=$_POST['location'];
         $comphonecode=$_POST['comphonecode'];
         $thirdskill=$_POST['thirdskill'];
         $secondskill=$_POST['secondskill'];
         $forthskill=$_POST['forthskill'];
         $skill1=$_POST['skill1'];
       
        
 

        $host = "localhost";
        $dbUsername = "id17987094_jobportal";
        $dbPassword = "]}Am89pea30L#Ko4";
        $dbName = "id17987094_test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM comregister WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO comregister(comusername,compassword,comconpassword,email,companyname,location,comphonecode,comphone,TOI,NOE,age,firstskill,secondskill,thirdskill,forthskill) values(?, ?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
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
                $stmt->bind_param("ssssssiisssssss",$comusername,$compassword,$comconpassword, $comemail,$companyname,$location,$comphonecode,$comphone,$TOI,$NOE,$age,$skill1,$secondskill,$thirdskill,$forthskill);
                if($compassword==$comconpassword)
                {

                if ($stmt->execute()) {
                    
                    echo "New record inserted sucessfully.";
                    session_start();
 
// Set variables
$accountName = $comusername;
$comname=  $companyname;
$location =  $location;
$firstskill=   $skill1;

 
// Set session variables
$_SESSION['accountName'] = $accountName;
$_SESSION['comname'] = $comname;
$_SESSION['location'] = $location;
$_SESSION['firstskill'] = $firstskill;




  
              
                     header("Location: updis2.php"); 
                    
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

