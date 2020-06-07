<!DOCTYPE html>
<html>
  <head>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  	<style type="text/css">
        body
        {
          background: linear-gradient(to right, #003B6D, #6699CC);
          font-family: "Lato", sans-serif;
          text-align: center;
          font-size: 16px;
        }
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
          text-align: center;
          background-color: white;
          color: black;
          margin: 20px;
        }
        th, td {
          padding: 10px;
          text-align: left;  

        }
        h2{
          color: white;
        }
      </style>

  </head>

  <body>
		<h2 style="text-align: center;">GOVERNMENT HEALTH SERVICE</h2>
        <h4 style="text-align: center; color: white;">Mumbai, Maharashtra</h4> <br> <h3 style="text-align: center; color: white;">Memo Form</h3>

  <?php

   

  	session_start();
  	$connection = mysqli_connect('localhost','root','');
    $db = mysqli_select_db($connection,'project');
    if($connection-> connect_error )
    {
       	die("Connection with Database Failed!!".$connection-> connect_error);
    }
    
  	if(isset($_GET['id']) or isset($_SESSION['id'])) {
  		$id=(isset($_GET['id'])?$_GET['id']:$_SESSION['id']);
		
      	$sql = "SELECT firstname,lastname,cardtype,relation,submit_time,form_type,fstatus,id,age,gender,symptoms,b_id from memo_table where id='$id' " ;

      	$result = mysqli_query($connection,$sql);
      	$rowcount = mysqli_num_rows($result);
      	if($rowcount> 0)
      	{
        	while ($row = $result->fetch_assoc()) 
        	{
    			echo "<table class='table'>
                  <tr>
                    <th colspan='8' style='background-color: #BDBDBD;'> Employee Details </th>
                  </tr>
                  <tr>
                    <th colspan='2'>First Name </th>
                    <th colspan='2'>".$row['firstname']."</th>
                    <th colspan='2'>Last Name </th>
                    <th colspan='2'>".$row['lastname']."</th>
                  </tr>
                  <tr>
                    <th> Card Type </th>
                    <th>".$row['cardtype']."</th>
                    <th>Beneficiary ID </th>
                    <th>".$row['b_id']."</th>
                  
                    <th> Relation with Employee </th>
                    <th>".$row['relation']."</th>
                    <th> Age </th>
                    <th>".$row['age']."</th>
                  </tr>
                  <tr>
                    <th>Gender </th>
                    <th>".$row['gender']."</th>
                    <th colspan='3'>Symptoms </th>
                    <th colspan='3'>".$row['symptoms']."</th>
                  </tr>

                  
                 </table>";
        	}
      	}
      	else
      	{
        	echo "No result to display";
      	}
    }

    require("PHPMailer/src/Exception.php");
    require 'PHPMailer/src/SMTP.php';
    require 'PHPMailer/src/PHPMailer.php';
    #$mail = new PHPMailer();
   #include_once(FCPATH.'PHPMailer/src/PHPMailer.php');

    $mail = new \PHPMailer\PHPMailer\PHPMailer();
   $mail->IsSMTP();
   $mail->SMTPDebug = 1;
   $mail->SMTPAuth = true;
   $mail->SMTPSecure='tls';
   $mail->Host ='smtp.gmail.com';
   $mail->Port ='587';
   $mail->isHTML(true);
   $mail->Username ='shivangikochrekar01@gmail.com';
   $mail->Password= 'letmehelpyou01';
   $mail->SetFrom('rishitamote@gmail.com');

	if (isset($_POST['validate_button'])  and isset($_SESSION['id'])) {
    	//validate action
			$id=$_SESSION['id'];       
	        $sqln="UPDATE memo_table SET fstatus ='approved' WHERE id= '$id' ";
	        $query=mysqli_query($connection,$sqln) or die ('Unable to execute query.'. mysqli_error($connection));
	        $id=$_SESSION['id'];
	        $sqle="SELECT email,symptoms FROM memo_table where id='$id'";
	        $result=mysqli_query($connection,$sqle);
	        while ($row = $result->fetch_assoc()) 
        	{
        	   $to=$row["email"];
        	 
        	}


			$mail->Subject='FORM APPROVED';
			$mail->Body="Your form has been approved";
			#$mail->Body=$body;
			$mail->AddAddress(strval($to));
			$mail->Send();
      echo '<script type="text/javascript">alert("VALIDATION DONE!");</script>';
      echo "<script>
            setTimeout(function () {
            window.location.href= 'http://localhost/cghsWebsite/adminside.php';
            }, 0);
            </script>";


		} else if (isset($_POST['pass_button'])) {
		    //pass action
		    $id=$_SESSION['id'];       
	        $sqln="UPDATE memo_table SET fstatus ='higher_approval_required'  WHERE id= '$id' ";
	        $query=mysqli_query($connection,$sqln) or die ('Unable to execute query.'. mysqli_error($connection));
	        $id=$_SESSION['id'];
	        $sqle="SELECT email,symptoms FROM memo_table where id='$id'";
	        $result=mysqli_query($connection,$sqle);
	        while ($row = $result->fetch_assoc()) 
        	{
        	   $to=$row["email"];
        	   $sym=$row["symptoms"];
        	   echo $to;
        	}

	        $mail->Subject='FORM PASSED OVER TO HIGHER AUTHORITY';
			$mail->Body="Your form has been passed on to higher authority members";
			#$mail->Body=$body;
			$mail->AddAddress(strval($to));
			$mail->Send();
      echo '<script type="text/javascript">alert("PASS OVER DONE!");</script>';
      echo "<script>
            setTimeout(function () {
            window.location.href= 'http://localhost/cghsWebsite/adminside.php';
           }, 0);
            </script>";


		} else if (isset($_POST['delete_button'])){
		    // delete pressed
		    $id=$_SESSION['id'];       
	        $sqln="UPDATE memo_table SET fstatus ='rejected' WHERE id= '$id' ";
	        $query=mysqli_query($connection,$sqln) or die ('Unable to execute query.'. mysqli_error($connection));
	        $id=$_SESSION['id'];
	        $sqle="SELECT email,symptoms FROM memo_table where id='$id'";
	        $result=mysqli_query($connection,$sqle);
	        while ($row = $result->fetch_assoc()) 
        	{
        	   $to=$row["email"];
        	   $sym=$row["symptoms"];
        	   echo $to;
        	}

	        $mail->Subject='FORM REJECTED';
			$mail->Body="Your form has been rejected";
			#$mail->Body=$body;
			$mail->AddAddress(strval($to));
			$mail->Send();
      $mail->Send();
      echo '<script type="text/javascript">alert("SUCCESSFULLY REJECTED!");</script>';
      echo "<script>
            setTimeout(function () {
            window.location.href= 'http://localhost/cghsWebsite/adminside.php';
            }, 0);
            </script>";

		}

	

	    $connection-> close();
    
    $user=(isset($_GET['user'])?$_GET['user']:$_SESSION['user']);
    $_SESSION['user']=$user;
    $_SESSION['id']=$id;

    
    ?>

	
	<form action="validate_form.php " method="POST">
 	 <div class="form-group">
    	<label >Remarks</label>
 		<input  placeholder="remark">
 	 </div>
 	 
    <button type="submit" style="background-color: grey " name="validate_button" class="btn btn-primary">Validate</button>
    <?php
    if($user=='admin')
		echo '<button type="submit" name="pass_button" style="background-color: grey" class="btn btn-primary">Pass Over</button>';
  	?>
    <button type="submit" style="background-color: grey "name="delete_button" class="btn btn-primary">Reject</button>

</form>

  </body>

 </html>