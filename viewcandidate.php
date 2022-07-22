<?php
  

  
 
 $connect = mysqli_connect("localhost", "id17987094_jobportal", "]}Am89pea30L#Ko4", "id17987094_test");
if (isset($_POST['submit'])){
    if (isset($_POST['username2'])){
        
        
        $username2 = $_POST['username2'];
}
      
 else{
        echo '<script>alert("Enter valid username from following list")</script>';  
      }         
}
 else{
                 echo '<script>alert("Access without permission")</script>';  
      }
 ?> 
<html>
<div>
<br></br>
<h1 align="center" ><font color="white">Candidate Profile</h1>
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
<div  >
   <br></br>
<br></br>
<table align="center" style="background-color:#FFFFE0;" >
 
<?php
               
                $query = "SELECT * FROM tbl_image WHERE username='$username2'";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                { 
?> 
                    
                   <tr>
                      <th><font color="red"><font-size="20px">  <?php echo $row['username'];?></th>
                      </tr>
                      <tr>
                     
                          
                               <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="340" width="200" class="img-thumnail">';?></td> 
                               
                              
                       
                      </tr>
                     </table> 
                     
  
                      
<?php
                   }
?>
<br></br>
<table align="center" style="background-color:#FFFFE0;" >
 
<?php
               
                $query = "SELECT * FROM register WHERE username='$username2'";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                { 
?> 
                    <tr>
                     <th><font color="blue">Name Of Candidate:</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['name'];?></td>
                   </tr>
                     <tr>
                     <th><font color="blue">Contact (Email or Website) :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['email'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">Gender :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['gender'];?></td>
                   </tr>
                    
                    <tr>
                     <th><font color="blue">About :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['about'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">Qualifications :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['Qualification'];?></td>
                   </tr>
                     <tr>
                     <th><font color="blue">Education Stream :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['Stream'];?></td>
                   </tr>
                     <tr>
                     <th><font color="blue">Experience in years :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['Experience'];?></td>
                   </tr>
                   <tr>
                    </tr>
                     <tr>
                     <th><font color="blue">Skill Set </th>
                      
                   </tr>
                   <tr>
                     <th><font color="blue">Python :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['python'];?></td>
                   </tr>
                   <tr>
                     <th><font color="blue">C++ :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['cpp'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">Java :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['java'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">SQL :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['sqLd'];?></td>
                   </tr>
                   <tr>
                     <th><font color="blue">R :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['R'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">HTML :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['Html'];?></td>
                   </tr>
                      <tr>
                     <th><font color="blue">JS :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['js'];?></td>
                   </tr>
                     <tr>
                     <th><font color="blue">Servers :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['servers'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">Bigdata :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['bigdata'];?></td>
                   </tr>
                   <tr>
                     <th><font color="blue">Algorithms :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['Algorithms'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">SAS :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['SAS'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">Ruby :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['Ruby'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">Tableau :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['Tableau'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">Excel :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['Excel'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">Oracle :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['Oracle'];?></td>
                   </tr>
                    <tr>
                     <th><font color="blue">MongoDB :</th>
                      <td><font color="red"><font-size="10px">  <?php echo $row['MangoDB'];?></td>
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