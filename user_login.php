<?php

  $connection=mysqli_connect('localhost','root','');
  $db=mysqli_select_db($connection,'user');
  if(isset($_REQUEST['submit1']))
  {
    $user=$_REQUEST['_email'];
    $pass=$_REQUEST['_password'];
    $sql="SELECT email,password from user_login where email='$user' && password='$pass'";
    $query=mysqli_query($connection,$sql) or die ('Unable to execute query. '. mysqli_error($connection));
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {
      if($_REQUEST['_email']=='admin@gmail.com'){
        header("location: adminside.php?user=admin");
      }
      elseif($_REQUEST['_email']=='higherauth@gmail.com'){
        header("location: adminside.php?user=higherauth");
      }
      else{
        header("location: memorequest.php?email=".$user);
        exit;
      }
    }
    else
    {
      echo "Inavalid email or password";
    }
  }
  else if(isset($_REQUEST['submit2']))
  {
    $user=$_REQUEST['_email'];
    $pass=$_REQUEST['_password'];
    $sql="SELECT email,password from user_login where email='$user' && password='$pass'";
    $query=mysqli_query($connection,$sql) or die ('Unable to execute query. '. mysqli_error($connection));
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {
      if($_REQUEST['_email']=='admin@gmail.com'){
        header("location: adminside.php?user=admin");
      }
      elseif($_REQUEST['_email']=='higherauth@gmail.com'){
        header("location: adminside.php?user=higherauth");
      }
      else{
        header("location: reimbursement.php?email=".$user);
        exit;
      }
    }
    else
    {
      echo "Inavalid email or password";
    }
  }
  else
  {
    $user=$_REQUEST['_email'];
    $pass=$_REQUEST['_password'];
    $sql="SELECT email,password from user_login where email='$user' && password='$pass'";
    $query=mysqli_query($connection,$sql) or die ('Unable to execute query. '. mysqli_error($connection));
    $rowcount=mysqli_num_rows($query);
    if($rowcount==true)
    {
      header("location: medicines.php");
      exit;
    }
    else
    {
      echo "Inavalid email or password";
    }
  }
    
?>