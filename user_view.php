<?php
  include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="style.css">
</head>
<body>
  
  <?php include 'navbar.php'; ?>
	<table style="width:60%; box-sizing:border-box;">
  <caption>User database</caption>
    <tr>
      <th>Id</th>
      <th>Account Number</th>
      <th>Name</th>
      <th>Email</th>
      <th>Salary</th>
    </tr>
      <?php
      $sql="SELECT * from users_data ";
      $rs=mysqli_query($conn,$sql) or die(mysqli_error());
     while($result=mysqli_fetch_array($rs)): ?>
   <tr>
         <td><?php echo $result['S.no'] ?></td>
         <td><?php echo $result['Account_Number']?></td>
         <td><?php echo $result['Name'] ?></td>
         <td><?php echo $result['Email'] ?></td>
         <td><?php echo $result['Amount'] ?></td>

     </tr>
     <?php endwhile; ?>
 </table>
</body>
</html>