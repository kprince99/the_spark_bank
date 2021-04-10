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
  <caption>Recent Transaction</caption>
    <tr>
      <th>Id</th>
      <th>Sender's Number</th>
      <th>Receiver's Account</th>
      <th>Total Amount</th>
      <th>Date/Time</th>
    </tr>
      <?php
      $sql="SELECT * FROM `history` ORDER BY SNo DESC";
      $rs=mysqli_query($conn,$sql) or die(mysqli_error());
     while($result=mysqli_fetch_array($rs)): ?>
   <tr>
         <td><?php echo $result['SNo'] ?></td>
         <td><?php echo $result['sender']?></td>
         <td><?php echo $result['receiver'] ?></td>
         <td><?php echo $result['Amount'] ?></td>
         <td><?php echo $result['Time'] ?></td>

     </tr>
     <?php endwhile; ?>
 </table>
</body>
</html>