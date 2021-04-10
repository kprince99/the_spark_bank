<?php
  include 'connection.php';

   
   session_start();
   mysqli_autocommit($conn, FALSE);
   $flag = true;

  if(isset($_POST['submit']) && is_numeric($_POST['amount']))
  {
  	$sender = $_POST['s_acc'];
  	$receiver = $_POST['r_acc'];
  	$remark = $_POST['remark'];
  	$amount = $_POST['amount'];

  	$query = "SELECT Account_Number from users_data WHERE Account_Number = $receiver AND Account_Number = $sender" ;

  	$result = mysqli_query($conn, $query);

  	      $sql =  "UPDATE users_data Set Amount = Amount + '$amount' WHERE Account_Number = '$receiver'";
  	                $result = mysqli_query($conn, $sql);

  	     if (!$result) {
  	 	 $flag = false;
  	 	 echo "Error details: ".mysqli_error($conn);
         }


        $sql =  "UPDATE users_data Set Amount = Amount - '$amount' WHERE Account_Number = '$sender'";
          	                $result = mysqli_query($conn, $sql);

         if (!$result) {
  	 	$flag = false;
  	 	echo "Error details: ".mysqli_error($conn);
         }


         date_default_timezone_set('Asia/Kolkata');
       $date = date('Y-m-d H:i:s');

 		$sql = "INSERT INTO `history` (`SNo`, `sender`, `receiver`, `Amount`, `Time`) VALUES(' ', '$sender', '$receiver', '$amount', '$date')";
              	       $result =  mysqli_query($conn, $sql	);

               if (!$result) {
		  	 	$flag = false;
		  	 	echo "Error details: ".mysqli_error($conn);
         }


  	   if($flag)
  	   {
  	   	function_alert("Transfer Finished");
  	   	mysqli_commit($conn);
  	   	   header('Location: recent_trans.php');
  	   }

  	   else{
  	    function_alert("Transfer cannot be completed! Now");
  	   	mysqli_rollback($conn);
  	      header('Location: recent_trans.php');
  	   }
  }

   function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
 	



//    if(isset($_POST['rrverify']))
//  {
//  		$account = $_POST['r_acc'];

//  	$query = "SELECT Account_Number, Name FROM users_data WHERE Account_Number = '$account' ";

//  	$result = mysqli_query($conn, $query);

//  	$row = mysqli_fetch_assoc($result);

//  	if($row)
//  	{
//  		 $_SESSION['Holder_namerr'] = True;
//  		 $_SESSION['Holder_namerr'] =  $row['Name'];
//      }
//     else
//     	 {
//     	 	$error = "No User with this Account";
//     	   $_SESSION['Holder_namerr'] = $error;
//          }
//          header('Location: transfer_money.php');

// }


 


?>