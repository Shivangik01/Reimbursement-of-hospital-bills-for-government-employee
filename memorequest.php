<?php

    $connection=mysqli_connect('localhost','root','');
    $db=mysqli_select_db($connection,'project');
    if(isset($_GET['email'])){
            $email=$_GET['email'];
            setcookie('email',$email,time()+86400);
        }
    if(isset($_POST['submit']))
    {   
        $email=$_COOKIE['email'];
        $fname=$_POST['_fname'];
        $lname=$_POST['_lname'];
        $card=$_POST['card_type'];
        $beneficiary=$_POST['b_id'];
        $relation=$_POST['_relation'];
        $age=$_POST['_age'];
        $gender=$_POST['_gender'];
        $symptoms=$_POST['_symptoms'];       
        $sql="INSERT INTO memo_table(firstname,lastname,cardtype,b_id,Relation,age,gender,symptoms,email) values('$fname' , '$lname' , '$card','$beneficiary','$relation','$age', '$gender','$symptoms', '$email')";
        $query=mysqli_query($connection,$sql) or die ('Unable to execute query. '. mysqli_error($connection));
        echo '<script type="text/javascript">alert("REGISTRATION DONE!");</script>';
        echo "<script>
setTimeout(function () {
   window.location.href= 'http://localhost/cghsWebsite/index.php';
}, 500);
</script>";
        #sleep(5);
        #header('Location:index.php');
    }
    mysqli_close($connection);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Memo Request Form</title>
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
                color: white;
            }
            .container
            {
                margin-left: 350px;
            }
            .btn 
              {
                  padding: 10px 20px;
                  background-color: #676767;
                  border-radius: 20px;
                  transition: .2s;
                  font-size: 20px;
                  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                  color: white;
              }
              .btn:hover, .btn:focus 
              {
                background-color: #BDBDBD;
                color: black;
              }

              footer{
                background-color: #BDBDBD;
                color: black;
                padding: 50px;

              }
              
              input[type=text]:focus {
                  border: 5px solid #555;
                }

        </style>
    </head>

    <body>
        <br>
        <h2 style="text-align: center;">MEMO REQUEST FORM</h2>
        <div class="container">
            <br><br>
            <p>*This memo is valid For 4 weeks*</p><br/>
                <form  method="post" action="memorequest.php">

                    <div class="row">

                        <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="_fname" class="form-control" placeholder="First Name" required="required">
                                </div>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                    <input type="text" name="_lname" class="form-control" placeholder="Last Name" required="required">
                            </div>					
                        </div>

                    </div>
                    <br/>
                    <div class="row">

                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                    <select class="form-control" name="card_type">
                                        <option class="hidden" selected disabled>Card Type</option>
                                            <option>Retired</option>
                                            <option>Working</option>
                                    </select>
                            </div>
                        </div>

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text"  name="b_id" maxlength="8" class="form-control"  placeholder="Beneficiary Id" required="required">
                                </div>
                            </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text" name="_relation" class="form-control" placeholder="Relation With Patient" required="required">
                                </div>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <input type="text" name="_age" maxlength="2" class="form-control" placeholder="Age of Patient"  required="required">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <input type="radio" id="male" name="_gender" value="male">
                                    <label for="male">Male</label>&nbsp;&nbsp;
                                    <input type="radio" id="female" name="_gender" value="female">
                                    <label for="female">Female</label><br>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <input type="text" style="width:400px; height:100px;" name="_symptoms"  class="form-control" maxlength="100" required="required" placeholder="Enter Sypmtoms Observed in Patient"></input>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                            <label class="checkbox-inline"><input type="checkbox" required="required">I accept the <a href="">terms</a>	
                            </label>
                    </div>

                    <br><br>
                    <div class="form-group">
                            <button type="submit" name="submit" class="btn"> Confirm Request</button>
                    </div>
                    <br>
                    <h4>* For 24x7 Service Please Call Toll Free number 1800-208-8900 *</h4><br/><br/>	
                </form>	
        </div>
        <footer>
            <h4>&copy; Content owned & Provided by Central Government Health Scheme, Ministry of Health & Family Welfare, Government of India</h4>
        </footer>
    </body>
</html>