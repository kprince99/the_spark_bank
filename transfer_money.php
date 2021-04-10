<?php
include 'navbar.php';
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>

<style>
	    input[type=number], input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 2px solid #ccc;
        box-sizing: border-box;
    }
    /* set a style for all buttons*/
    button {
        background-color: green;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        cursor: pointer;
        width: 100px;
        border-radius: 5px;
        outline: none;
        border: none;
    }

    .section
    {
    	display:flex;
    	width: 100%;
    }
    /*set styles for the cancel button*/
    .cancelbtn {
        padding: 14px 20px;
        background-color: #FF2E00;
    }
    /*float cancel and signup buttons and add an equal width*/
    .cancelbtn,
    .signupbtn {
        float: left;
        width: 50%
    }
    /*add padding to container elements*/
    .container {
        padding: 16px;
        width: 50%;
        border: 1px solid black;
        border-radius: 7px;
        background: #ddd;
        transform: translate(40%, 10%);
    }

     
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
     
    @media screen and (max-width: 300px) {
        .cancelbtn,
        .signupbtn {
            width: 100%;
        }
    }
</style>
	</style>
<body>

 <form name = "Form" action="core.php" method="POST" onsubmit="return validateForm()">
        <div class="container">

        	
            <label><b>Sender's Account Number</b></label>

        <div class="section">
            <input type="number" placeholder="Enter Sender's Account Number" name="s_acc" id="s_acc" required>
        </div>
  
	            <label><b>Receiver's Account Number</b></label>

 			<div class="section">
		            <input type="number" placeholder="Enter Receiver's Account Number" name="r_acc" id="r_acc" required>
            </div>

            <div id="result" style = "color:red;"></div>
        

            <label><b>Remark</b></label> 
            <input type="text" name="remark" required>  
         
            <label><b>Amount </b></label> 
            <input type="number" name="amount" >

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" name="submit" class="signupbtn"> Transfer Now</button>
            </div>
        </div>

           </form>

</body>

<script>
	
	function validateForm() {
    var a = document.forms["Form"]["amount"].value;
     if (a == null || a == "") {
      alert("Input Amount Field");
      return false;
    }
    else if (a < 1 ) {
      alert(" Amount Should not be 0");
      return false;
    }
    };

    // Ajax code for live searching in database
    

$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"searvh.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#r_acc').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
</html>
