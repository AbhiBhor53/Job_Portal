<?php
  

  
 
 $connect = mysqli_connect("localhost","id17987094_jobportal", "]}Am89pea30L#Ko4", "id17987094_test");
if (isset($_POST['submit'])){
    if (isset($_POST['username2'])){
        
        
        $username2 = $_POST['username2'];
}
      
 else{
        echo '<script>alert("Enter valid company from following list")</script>';  
      }         
}
 else{
                 echo '<script>alert("Access without permission")</script>';  
      }
 ?> 
<html>
<div align="center">
<br></br>
<br></br>
<h1><font color="white">Company Profile</h1> 
</div>
<body>
<style>
table, th, td {
  
  border-collapse: collapse;
}
th, td {
  padding: 35px;
}
</style>
<style>
    body{
            background-image:url('bg7.jfif');
             background-repeat:no-repeat;
             background-attachment:fixed;
             background-size:100% 100%;
            }
 </style>
<div style="width:1450px;" >
   
<br></br>
<table align="center" style="background-color:#FFFFE0;" >
 
<?php
               
                $query = "SELECT * FROM comtbl_image WHERE comname='$username2'";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                { 
?> 
                    
                   <tr>
                      <th><font color="red"><font-size="20px">  <?php echo $row['comname'];?></th>
                      </tr>
                      <tr>
                     
                          
                               <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="300" width="400" class="img-thumnail">';?></td> 
                               
                              
                       
                      </tr>
                     </table> 
                     
  
                      
<?php
                   }
?>
<br></br>
<table align="center" style="background-color:#FFFFE0;" >
 
<?php
               
                $query = "SELECT * FROM comregister WHERE companyname='$username2'";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                { 
?> 
                    <tr>
                     <th><font color="blue">Comapny location :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['location'];?></td>
                   </tr>
                     <tr>
                     <th><font color="blue">Comapny Contact(Email or Website) :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['email'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">Type of Industry :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['TOI'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">Number of Employees(approx.) :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['NOE'];?></td>
                   </tr>
                     <tr>
                     <th><font color="blue">Age of Company(in years) :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['age'];?></td>
                   </tr>
                     <tr>
                     <th><font color="blue">Must have Skill :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['firstskill'];?></td>
                   </tr>
                   <tr>
                     <th><font color="blue">Second skill :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['secondskill'];?></td>
                   </tr>
                   <tr>
                     <th><font color="blue">Third Skill :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['thirdskill'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">Forth skill :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['forthskill'];?></td>
                   </tr>
                   
                      
                     </table> 
                     
  
                      
<?php
                   }
?>
                
                </table> 
                 <br></br>
                  <br></br>
           </div>  
      </body>  
 </html>      