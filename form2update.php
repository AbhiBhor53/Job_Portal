<!DOCTYPE HTML>
<html>
<head>
  <style>
    body{
            background-image: url('bg9.jfif');
             background-repeat:no-repeat;
             background-attachment:fixed;
             background-size:100% 100%;
            }
          </style>
  <title>Register Form</title>
</head>
<style>
table, th, td {
  
  border-collapse: collapse;
}
th, td {
  padding: 35px;
}
</style>
<body>
 <div align="center">
               <h1><font color="red">Register as job seeker</h1>
      </div>
 <form action="insert2.php" method="POST">
<table align="center" style="background-color:#FFFFE0;">
 

   <tr>
    <td>Username :</td>
    <td><input type="text" name="username1" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
<tr>
    <td>confirm Password :</td>
    <td><input type="password" name="conpassword" required></td>
   </tr>
   <tr>
<tr>
    <td>Name :</td>
    <td><input type="text" name="name" required></td>
   </tr>
<tr>
    <td>Gender :</td>
    <td>
     <input type="radio" name="gender" value="Male" required>Male
     <input type="radio" name="gender" value="Female" required>Female
    </td>
   </tr>
   <tr>
    <td>Email :</td>
    <td><input type="email" name="email" required></td>
   </tr> 
    <tr>
    <td>About :</td>
    <td><input type="text" name="about" required></td>
   </tr>
   <tr>
    <td>Phone no :</td>
    <td>
     <select name="phoneCode" required>
      <option selected hidden value="">Select Code</option>
      <option value="91">91</option>
      
     </select>
     <input type="phone" name="phone" required>
    </td>
   </tr>
<tr>
    <td>Qualification :</td>
    <td>
     <select name="Quali" required>
      <option selected hidden value="">Select Educational Qualification</option>
      <option value="Primary School">Primary School</option>
      <option value="High School">High School</option>
      <option value="Secondary School">Secondary School</option>
       <option value="Higher Secondary">Higher Secondary</option>
       <option value="Under Graduate">Under Graduate</option>
        <option value="Post Graduate">Post Graduate</option>
       <option value="Doctorate">Doctorate</option>
  
     </select>
<tr>
    <td>Stream :</td>
    <td>
     <select name="Stream" required>
      <option selected hidden value="">Select Stream</option>
      <option value="Arts">Arts</option>
      <option value="Science">Science</option>
      <option value="Commerse">Commerse</option>
       <option value="Engineering">Engineering</option>
       <option value="Law">Law</option>
        <option value="Medical">Medical</option>
       <option value="Education">Education</option>
      <option value="Law">Law</option>
        <option value="Architecture">Architecture</option>
       <option value="Pharmacy">Pharmacy</option>
        <option value="Aviation">Aviation</option>
        <option value="Buisness Administration">Buisness Administration</option>
       <option value="Computer Application">Computer Application</option>
       <option value="Aviation">Aviation</option>
        <option value="Buisness Administration">Buisness Administration</option>
       <option value="Computer Application">Computer Application</option>
        <option value="sports and Fitness">sports and Fitness</option>
        <option value="Adventure sports">Post Graduate</option>
       <option value="Literature">Literature</option>
  
  
     </select>
<tr>
    <td>Experience :</td>
    <td>
     <input type="radio" name="Experience" value="0-2" required>0-2 yrs
     <input type="radio" name="Experience" value="2-5" required>2-5 yrs
     <input type="radio" name="Experience" value="5+" required>5+ yrs
    </td>
   </tr>
<!--<tr>
//<td>Skills :</td>
//<td>
// <input type="checkbox" id="1" name="python" value="yes">
 // <label for="1"> Python</label><td>-->
 <tr>
    <td>Skills :</td>
    <td>
     
  <!--   <input type="radio" name="gender" value="f" required>Female -->
    </td>
</tr>
 <tr>
    <td>Python :</td>
    <td>
     <input type="radio" name="python" value="Yes" required>Yes
     <input type="radio" name="python" value="NO" required>No
    </td>
   </tr>


 <tr>
    <td>C++ :</td>
    <td>
     <input type="radio" name="cpp" value="Yes" required>Yes
     <input type="radio" name="cpp" value="NO" required>No
    </td>
   </tr>

<tr>
    <td>Java :</td>
    <td>
     <input type="radio" name="java" value="Yes" required>Yes
     <input type="radio" name="java" value="NO" required>No
    </td>
   </tr>

<tr>
    <td>Sql :</td>
    <td>
     <input type="radio" name="sql" value="Yes" required>Yes
     <input type="radio" name="sql" value="NO" required>No
    </td>
   </tr>

<tr>
    <td>R :</td>
    <td>
     <input type="radio" name="R" value="Yes" required>Yes
     <input type="radio" name="R" value="NO" required>No
    </td>
   </tr>
<tr>
    <td>HTML :</td>
    <td>
     <input type="radio" name="Html" value="Yes" required>Yes
     <input type="radio" name="Html" value="NO" required>No
    </td>
   </tr>
<tr>
    <td>JavaScript :</td>
    <td>
     <input type="radio" name="js" value="Yes" required>Yes
     <input type="radio" name="js" value="NO" required>No
    </td>
   </tr>
<tr>
    <td>Servers :</td>
    <td>
     <input type="radio" name="servers" value="Yes" required>Yes
     <input type="radio" name="servers" value="NO" required>No
    </td>
   </tr>
<tr>
    <td>Network Security :</td>
    <td>
     <input type="radio" name="ns" value="Yes" required>Yes
     <input type="radio" name="ns" value="NO" required>No
    </td>
   </tr>
<tr>
    <td>Big Data :</td>
    <td>
     <input type="radio" name="bd" value="Yes" required>Yes
     <input type="radio" name="bd" value="NO" required>No
    </td>
   </tr>
<tr>
    <td>Algorithms :</td>
    <td>
     <input type="radio" name="Algorithms" value="Yes" required>Yes
     <input type="radio" name="Algorithms" value="NO" required>No
    </td>
   </tr>

<tr>
    <td>SAS :</td>
    <td>
     <input type="radio" name="SAS" value="Yes" required>Yes
     <input type="radio" name="SAS" value="NO" required>No
    </td>
   </tr>
<tr>
    <td>Ruby :</td>
    <td>
     <input type="radio" name="Ruby" value="Yes" required>Yes
     <input type="radio" name="Ruby" value="NO" required>No
    </td>
   </tr>
<tr>
    <td>Tableau :</td>
    <td>
     <input type="radio" name="Tableau" value="Yes" required>Yes
     <input type="radio" name="Tableau" value="NO" required>No
    </td>
   </tr>
<tr>
    <td>Excel :</td>
    <td>
     <input type="radio" name="Excel" value="Yes" required>Yes
     <input type="radio" name="Excel" value="NO" required>No
    </td>
   </tr>
<tr>
    <td>Orale :</td>
    <td>
     <input type="radio" name="Oracle" value="Yes" required>Yes
     <input type="radio" name="Oracle" value="NO" required>No
    </td>
   </tr>
<tr>
    <td>MONGO DB :</td>
    <td>
     <input type="radio" name="md" value="Yes" required>Yes
     <input type="radio" name="md" value="NO" required>No
    </td>
<!--<tr>
 <td></td>
     <td>
     <input type="radio" name="python" value="yes" required>Python
  
    </td>
</tr>
<tr>
 <td></td>
     <td>
     <input type="radio" name="python" value="yes" required>Python
  
    </td>
</tr>
<tr>
 <td></td>
     <td>
     <input type="radio" name="python" value="yes" required>Python
  
    </td>
</tr>
<tr>
 <td></td>
     <td>
     <input type="radio" name="python" value="yes" required>Python
  
    </td>
</tr>
<tr>
 <td></td>
     <td>
     <input type="radio" name="python" value="yes" required>Python
  
    </td>
</tr>
<tr>
 <td></td>
     <td>
     <input type="radio" name="python" value="yes" required>Python
  
    </td>-->
</tr>
   </tr>

            

  </table>
 </div>
   <div align="center" >
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
    <font color="blue",fon ><input type="submit" value="Next" name="submit">
     <br></br>
 <br></br>
   </div>
 </form>
</body>
</html>