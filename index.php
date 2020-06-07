
<!DOCTYPE html>
<html>
  <head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>

  	<div class="splash">

  		<div class="row text-center">
              <div class="col-sm-4" id="splash_img">
                  <img src="digi.png">
              </div>

              <div class="col-sm-4" id="splash_text">
                  <h1>Digital India</h1>
  					<h2 class="fade-in">Power To Empower</h2>
              </div>
        </div>

  		
  		
  	</div>

  	<script type="text/javascript">
  		const splash=document.querySelector('.splash');
  		document.addEventListener('DOMContentLoaded', (e)=>{
  			setTimeout(()=>{
  				splash.classList.add('display-none');
  			}, 4000);
  		})
  	</script>

        <div class="flag">
            <h1 align="center"> Government Health and Wellness Center</h1>
            <h2 align="center"> Ministry Of Health & Family Welfare </h2>
        </div>

        <div class="container">
        	        <marquee>
						Book Appointment Date & Time with your Doctor at CGHS Wellness Centre | 24X7 National CGHS Helpline Toll Free Number 1800-208-8900 | Book Appointment Date & Time with your Doctor at CGHS Wellness Centre | 24X7 National CGHS Helpline Toll Free Number 1800-208-8900 | 
					</marquee>
        </div>


        <div class="topnav">
                <a class="active" href="#home">Home  <i class='fas fa-home'></i></a>
                <a href="https://cghs.nic.in/dashboard/dashboardnew.jsp">Dashboard</a>
                <a href="https://cghs.nic.in/dashboard/dashboardchart.jsp">Charts</a>
                <a href="https://cghs.nic.in/cghsmap/map.html">Map</a>
                <a href="https://www.bankbazaarinsurance.com/central-government-health-insurance-scheme.html">About</a>
        </div>
  <!-- <div class="center" style="background-color: #f3e1e1;">
        <br/><br/>
        <router-outlet></router-outlet>
        <br/><br/>
        heyyy
  </div> -->
  
	<div id="requests" class="bg-1">
		<br><br><br>

		<div class="container">
			  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">
			      <div class="item active">
			      	<h3>Opening of new CGHS Wellness Centre at Agartala</h3>
			        <img src="agartala.jpg" alt="Opening of new CGHS Wellness Centre at Agartala" style="width:100%;">
			      </div>

			      <div class="item">
			      	<h3>Opening of new CGHS Wellness Centre at Imphal</h3>
			        <img src="imphal.jpg" alt="Opening of new CGHS Wellness Centre at Imphal" style="width:100%;">
			      </div>
			    
			      <div class="item">
			      	<h3>Felicitation of Best Workers at the CGHS Allahabad</h3>
			        <img src="allahabad.jpeg" alt="Felicitation of Best Workers at the CGHS Allahabad" style="width:100%;">
			      </div>
			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
			  </div>
			</div>

    <div class="container">
    	<br><br><br><br>
        <div class="row text-center">
              <div class="col-sm-4">
                  <div class="thumbnail">
                    <br/><br/><i class='fas fa-receipt fa-5x' ></i><br/><br/>
                        <p><strong>Request for Memo </strong></p><br/>
                        <button class="btn" data-toggle="modal" data-target="#myModal1">Request</button>
                  </div>
              </div>

              <div class="col-sm-4">
                  <div class="thumbnail">
                    <br/><br/><i class='fas fa-clipboard fa-5x'></i><br/><br/>
                        <p><strong>Reiumbursement Of Bill</strong></p><br/>
                        <button class="btn" data-toggle="modal" data-target="#myModal2">Request</button>
                  </div>
              </div>

              <div class="col-sm-4">
                    <div class="thumbnail">
                        <br/><br/><i class='fas fa-capsules fa-5x'></i><br/><br/>
                        <p><strong>Check Availability Of Medicines</strong></p><br/>
                        <button class="btn" data-toggle="modal" data-target="#myModal3">Check</button>
                  </div>
              </div>
        </div>
    </div>
    <br/><br/><br/>
</div>
<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                  <h3 style="text-align: center;">Login Form</h3>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                      <div class="card-body">
                  
                        <form class="form-signin" action="user_login.php">
                          <div class="form-label-group"><br/>
                            <input type="email" name="_email" class="form-control" placeholder="Email address" required autofocus>
                            <br/>
                          </div>
            
                          <div class="form-label-group">
                            <br/>
                            <input type="password" name="_password" class="form-control" placeholder="Password" required>
                            <br/>
                          </div>
            
                          <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1"><br/>
                            <label class="custom-control`-label" for="customCheck1">Remember password</label>
                          </div><br/>
                          <button class="btn btn-primary btn-lg" type="submit" name="submit1">Sign in</button>
                          
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </div>
  </div>
</div>
<div class="modal fade" id="myModal2" role="dialog">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                  <h3 style="text-align: center;">Login Form</h3>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                      <div class="card-body">
                  
                        <form class="form-signin" action="user_login.php">
                          <div class="form-label-group"><br/>
                            <input type="email" name="_email" class="form-control" placeholder="Email address" required autofocus>
                            <br/>
                          </div>
            
                          <div class="form-label-group">
                            <br/>
                            <input type="password" name="_password" class="form-control" placeholder="Password" required>
                            <br/>
                          </div>
            
                          <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1"><br/>
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                          </div><br/>
                          <button class="btn btn-primary btn-lg" type="submit" name="submit2" >Sign in</button>
                          
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </div>
  </div>
</div>
<div class="modal fade" id="myModal3" role="dialog">
  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                  <h3 style="text-align: center;">Login Form</h3>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                      <div class="card-body">
                  
                        <form class="form-signin" action="user_login.php">
                          <div class="form-label-group"><br/>
                            <input type="email"  name="_email" class="form-control" placeholder="Email address" required autofocus>
                            <br/>
                          </div>
            
                          <div class="form-label-group">
                            <br/>
                            <input type="password" name="_password" class="form-control" placeholder="Password" required>
                            <br/>
                          </div>
            
                          <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1"><br/>
                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                          </div><br/>
                          <button class="btn btn-primary btn-lg" type="submit" name="submit3" >Sign in</button>
                          
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
        </div>
  </div>
</div>
	<footer>
		<h4>&copy; Content owned & Provided by Central Government Health Scheme, Ministry of Health & Family Welfare, Government of India</h4>
	</footer>
  </body>
</html>