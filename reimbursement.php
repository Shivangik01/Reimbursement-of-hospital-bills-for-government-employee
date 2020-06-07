 <?php

    $connect = mysqli_connect("localhost", "root", "", "project");  
    if(isset($_GET['email'])){
            $email=$_GET['email'];
            setcookie('email',$email,time()+86400);
        }
    if(isset($_POST['submit']))
    {   
        $email=$_COOKIE['email'];
        $fname=$_POST['_fname'];
        $lname=$_POST['_lname'];
        $card_type=$_POST['card_type'];
        $b_id=$_POST['b_id'];
        $issue=$_POST['issue'];
        $validity=$_POST['date'];
        $bank_name=$_POST['bank_name'];
        $account=$_POST['account'];
        $branch=$_POST['branch'];
        $card_holder=$_POST['card_holder'];
        $p_name=$_POST['p_name'];
        $relation=$_POST['relation'];
        $addmission=$_POST['addmission'];
        $discharge=$_POST['discharge'];
        $hospital_name=$_POST['hospital_name'];
        $file_attach1=addslashes(file_get_contents($_FILES["file_attach1"]["tmp_name"])); 
        $file_attach2=addslashes(file_get_contents($_FILES["file_attach2"]["tmp_name"])); 
        $file_attach3=addslashes(file_get_contents($_FILES["file_attach3"]["tmp_name"])); 
        $sql = "INSERT INTO reimbursement_table(fname,lname,email,card_type,b_id,issue,validity,bank_name,account,branch,card_holder,p_name,relation,admission,discharge,hospital_name,permission_form,bill,opd) VALUES ('$fname','$lname','$email','$card_type','$b_id','$issue','$validity','$bank_name','$account','$branch','$card_holder','$p_name','$relation','$addmission','$discharge','$hospital_name','$file_attach1','$file_attach2','$file_attach3')";  
        $query=mysqli_query($connect,$sql) or die ('Unable to execute query. '. mysqli_error($connect));
        
           echo '<script type="text/javascript">alert("SUBMISSION DONE!");</script>';
           echo "<script> setTimeout(function () { window.location.href= 'http://localhost/cghsWebsite/index.php';}, 500); </script>"; 
       
        
       
        #sleep(5);
        #header('Location:index.php');
    }
    mysqli_close($connect);
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Reimbursement Form</title>
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

                input[type=number]:focus {
                  border: 5px solid #555;
                }

                input[type=date]:focus {
                  border: 5px solid #555;
                  align-content: center;
                }

                input[type=file]:focus {
                  border: 5px solid #555;
                }
                select:focus {
                  border: 5px solid #555;
                }
                small{
                    color: black;
                }

        </style>
    </head>

    <body>
        <br/>
        <h2 style="text-align: center;">Reimbursment Form</h2><br/><br/>
        <div class="container">
            <p style="font-size: 20px;">Employee Details</p><br/>
                <form  method="post" enctype="multipart/form-data" action="reimbursement.php">

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
                  
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                    <select class="form-control" name="card_type">
                                        <option class="hidden" selected disabled>Status</option>
                                            <option>Govt. Servant</option>
                                            <option>Pensioner</option>
                                            <option>Others</option>
                                    </select>
                            </div>
                        </div>

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="number"  name="b_id" class="form-control"  placeholder="Beneficiary Id" required="required">
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="text"  name="issue" class="form-control"  placeholder="Place of issue" required="required">
                                </div>
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <input type="date" name="date" class="form-control" placeholder="Validity of Card" required="required">
                                </div>
                            </div>
                    </div>
                    <br/>
                       <p style="font-size: 20px;">Employee Account Details </p><br/>

                       <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text"  name="bank_name" class="form-control"  placeholder="Name of the bank" required="required">
                                    </div>
                            </div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="branch" class="form-control" placeholder="Branch Name" required="required">
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="number" maxlength="10" name="account" class="form-control"  placeholder="Account Number" required="required">
                                    </div>
                            </div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="card_holder" class="form-control" placeholder="Full Name of Card Holder" required="required">
                                    </div>
                                </div>
                        </div>
                        <br/>
                        <p style="font-size: 20px;">Patient's Details </p><br/>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text"  name="p_name" class="form-control"  placeholder="Full Name of Patient" required="required">
                                    </div>
                            </div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="relation" class="form-control" placeholder="Employee's Relation with Patient" required="required">
                                    </div>
                                </div>
                        </div>
                        <br/>
                        <p>*Incase of Indoor Treatment please mention the dates*</p><br/>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="date"  name="addmission" class="form-control"  placeholder="Date of addmission" required="required">
                                    </div>
                            </div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <input type="date" name="discharge" class="form-control" placeholder="Date of discharge" required="required">
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <small>Attach the permission form</small>
                                        <input type="file"  name="file_attach1" id="file_attach1" class="form-control"  placeholder="Attach the permission form" required="required">
                                    </div>
                            </div> 
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <small>Attach the bill</small>
                                        <input type="file"  name="file_attach2" id="file_attach2" class="form-control"  placeholder="Attach the bill" required="required">
                                    </div>
                            </div>      
                        </div><br/>
                        *Incase of OPD Treatment 
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <br>
                                        <input type="text"  name="hospital_name" class="form-control"  placeholder="Name of the hospital" required="required">
                                    </div>
                            </div> 
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <small>Attach the bill of the OPD Treatment</small>
                                        <input type="file"  name="file_attach3" id="file_attach3" class="form-control"  placeholder="Attach the bill of the OPD Treatment" required="required">
                                    </div>
                            </div>
                                
                        </div>
                        <br><br>
                        <p>*Please check by inserting before submitting the form, otherwise form will be rejected.<p>
                         <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                        <button class="btn btn-primary btn-lg" type="submit" name="submit" id='submit' >Submit</button>
                </form>	


        </div>
        <br><br><br>

        <footer>
            <h4>&copy; Content owned & Provided by Central Government Health Scheme, Ministry of Health & Family Welfare, Government of India</h4>
        </footer>

    </body>
</html>


<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name1 = $('#file_attach1').val();  
           var image_name2 = $('#file_attach2').val();  
           var image_name3 = $('#file_attach3').val();  

           if(image_name1 == '' || image_name2 == '' ||image_name3 == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#file_attach1').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#file_attach1').val('');  
                     return false;  
                }
                var extension2 = $('#file_attach2').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension2, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#file_attach2').val('');  
                     return false;  
                }  
                var extension3 = $('#file_attach3').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension3, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#file_attach3').val('');  
                     return false;  
                }    
           }  
      });  
 });  
 </script>  