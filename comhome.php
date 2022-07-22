<?php  

 $connect = mysqli_connect("localhost", "id17987094_jobportal", "]}Am89pea30L#Ko4", "id17987094_test");  

?>  
 


<!DOCTYPE html>  
 <html>  
      <head > 
           
           <title>company recruiting employee</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style>
table, th, td {
  
  border-collapse: collapse;
}
th, td {
  padding: 25px;
}
</style>
      </head> 
           <br></br>  
           <div class="container" style="width:1400px;" align="center"> 
                 <br></br> 
                <h3 align="center"><font color="blue">CANDIDATES</h3>  
                
                

<style>
    body{
            background-image:url('bg7.jfif');
             background-repeat:no-repeat;
             background-attachment:fixed;
             background-size:100% 100%;
            }
 </style>
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
     background-color: #228B22;
}
</style>

<div align="center" >
          
    <form action="viewcandidate.php" method="POST">           
    <font color ="blue"><font size="4px">Enter The Username From Following List To View Details :
    <input type="text" name="username2" required>
    <input type="submit" value="View" name="submit">
    </form>
 
          <br></br>  
      
</div>
                
<table  style="background-color:#FFFFE0;" >
  <tr>
    <th><font color="blue">Candidate Profile Picture</th>
    <th><font color="blue">Username</th>
    <th><font color="blue">Qualifications</th>
    <th><font color="blue">Stream </th>
    <th><font color="blue">Experience</th>
  </tr>
                
<?php
               
                $query = "SELECT * FROM tbl_image ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                { 
?> 
                    
                   
                      <tr>
                     
                          
                               <td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="300" width="400" class="img-thumnail">';?></td> 
                               <td><font color="red">  <?php echo $row['username'];?></td>
                                <td><font color="red">  <?php echo $row['Qualification'];?></td>
                                  <td><font color="red">  <?php echo $row['Stream'];?></td>
                                   <td><font color="red">  <?php echo $row['Experience'];?></td>
                               
                      </tr>
<?php
                   }
?>
                
                </table>
               <br></br> 
               <br></br>  
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
