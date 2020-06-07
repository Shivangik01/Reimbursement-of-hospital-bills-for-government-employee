<!DOCTYPE html>
<html>
<head>
  <title>Form Status</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <link rel="stylesheet" type="text/css" href="frontpage.css">
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
        table{
          text-align: center;
          background-color: white;
          color: black;
        }
        th{
          text-align: center;
          background-color: #BDBDBD;
          color: black;
        }
        h2{
          color: white;
        }
      </style>
</head>
<body>

    <br>
   <h2> Remaining Forms to look over for validation: </h2>
   <br><br>
      <table id="dtBasicExample" class= "table" cellspacing="0" width="100%"> 
        <thead>
      <tr>
        <th>Applicant First Name</th>
        <th>Applicant Last Name</th>
        <th>Card Type</th>
        <th>Relation</th>
        <th>Submitted on</th>
        <th>Form Type</th>
        <th>Status</th>
      </tr>
    </thead>

    <?php
      session_start();
      $user=(isset($_GET['user'])?$_GET['user']:$_SESSION['user']);
      $connection = mysqli_connect('localhost','root','');
      $connect = mysqli_connect("localhost", "root", "", "project");  
      $db = mysqli_select_db($connection,'project');
      if($connection-> connect_error )
      {
        die("Connection with Database Failed!!".$connection-> connect_error);
      }

      if($user=='admin'){
        $sql = "SELECT firstname,lastname,cardtype,relation,submit_time,form_type,fstatus,id from memo_table where fstatus ='pending' order by submit_time ASC" ;
        $sql2 = "SELECT fname,lname,card_type,relation,submit_time,form_type,fstatus,id from reimbursement_table where fstatus ='pending' order by submit_time ASC" ;
      }
      else{
        $sql = "SELECT firstname,lastname,cardtype,relation,submit_time,form_type,fstatus,id from memo_table where fstatus ='higher_approval_required' order by submit_time ASC" ;
         $sql2= "SELECT fname,lname,card_type,relation,submit_time,form_type,fstatus,id from reimbursement_table where fstatus ='higher_approval_required' order by submit_time ASC" ;
      }
      $result = mysqli_query($connection,$sql);
      $result2 = mysqli_query($connect,$sql2);
      $rowcount = mysqli_num_rows($result);
      $rowcount2 = mysqli_num_rows($result2);
      if($rowcount> 0) 
      {
        while ($row = $result->fetch_assoc()) 
        {
          echo "</td><td>". $row["firstname"]."</td><td>". $row["lastname"]."</td><td>". $row["cardtype"]. "</td><td>".$row["relation"]."</td><td>".$row["submit_time"]."</td><td>".$row["form_type"].'</td><td>';
          echo '<a href="validate_form.php?id='.$row['id'].'&user='.$user.'">'.$row["fstatus"]."</a>";
          echo "</td></tr>";
        }
       } 
      if($rowcount2>0)
      {
        while ($row = $result2->fetch_assoc()) 
        {
          echo "</td><td>". $row["fname"]."</td><td>". $row["lname"]."</td><td>". $row["card_type"]. "</td><td>".$row["relation"]."</td><td>".$row["submit_time"]."</td><td>".$row["form_type"].'</td><td>';
          echo '<a href="validate_reimbursement.php?id='.$row['id'].'&user='.$user.'">'.$row["fstatus"]."</a>";
          echo "</td></tr>";
        }
        echo "</table>";
      }
      else if($rowcount==0 && $rowcount2==0)
      {
        echo "No result to display";
      }
      $connection-> close();
      $_SESSION['user']=$user;
    ?>


  </table>

  </body>
</html>