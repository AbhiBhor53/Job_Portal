<?php  
if(isset($_POST['submit2'])){
echo"done";
header("Location:start.php");}

// Start the session
session_start();
 
// Echo session variables that were set on previous page
@$username= $_SESSION['accountName'];
@$Qualification= $_SESSION['Qualification'];
@$Stream= $_SESSION['Stream'];
@$Experience= $_SESSION['Experience'];

//session_unset(); remove all session variables 
//session_destroy(); destroy the session 
//session_unset(); remove all session variables 
//session_destroy(); destroy the session 
 $connect = mysqli_connect("localhost", "id17987094_jobportal", "]}Am89pea30L#Ko4", "id17987094_test");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
     $query = "INSERT INTO tbl_image(name,username,Qualification,Stream,Experience) VALUES ('$file','$username','$Qualification','$Stream','$Experience')";  
     if(mysqli_query($connect, $query))  
     {  
          echo '<script>alert("congratulations for successful registration")</script>';  
    } 
    else{
      echo"error"; 
 }  
}
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head> 
       <style>
    body{
            background-image: url('bg7.jfif');
             background-repeat:no-repeat;
             background-attachment:fixed;
             background-size:100% 100%;
            }
          </style> 
           <title> Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:400px;">  
                <h3 align="center">Upload Profile Image Here(should not more than 64KB)</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data"> 
                   <input type="file" name="image" id="image" />  </table> 
                      
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Register" class="btn btn-info" />
                       <br></br>
                     <input type="submit" value="Go To Login Page" name="submit2">   
                </form>  
                <br />  
                <br />  
                <table class="border="1" align="center" style="background-image:url('bg5.jfif');background-repeat:no-repeat;
             background-attachment:fixed;
             background-size:100% 100%;"> 
                     <tr>  
                           
                     </tr>  
                
                </table> 
<style>
   input[type=submit]
{
    /* your styles here, You can just increase its font size below*/
    font-size: 20px; 
    color: #FFFFFF;
    margin-top: 2cm;
    font-weight: bold;
    font-family: ariel; 
     box-shadow: 3px 3px;
    background-color: #0000FF;
}
</style> 
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  