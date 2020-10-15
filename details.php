<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location:login.php');
    }

    $con = mysqli_connect('localhost' , 'root' , 'root');

    mysqli_select_db($con , 'tourist');
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link href='https://fonts.googleapis.com/css?family=Cinzel Decorative' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="details.css">
</head>
<body>


    <div class="card">
        <img src="images/left1.jpg" alt="photo" style="width:100%">
        <div class="dropdown">

            <a class="dropdown" data-toggle="dropdown">
                <p style="font-weight: 900; font-family: 'Cinzel Decorative'">
                    <?php echo $_SESSION['username']; ?>
                    <i class="fas fa-angle-down ml-2"></i>
                </p>
            </a>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="logout.php"> Logout </a>
            </div>

        </div>
        
    </div>

    <div class="container">
        <div class="row">
            <h1 class="px-6 py-3">Add Your Personal Information here</h1>

            <div class="bottom mx-5 my-4 p-5">

                <div id='progress'><div id='progress-complete'></div></div>
                <br>

                <form action="" method="post" id="SignupForm">
                    <fieldset>
                        <h2 style="text-align: center;"><b> General Information </b></h2>
                        <hr><br>
                        <div class="row pl-5 pr-5">
                            <div class="col-6">
                              <div class="md-form mt-0">
                                <input type="text" id="form1" class="form-control" name="name" required>
                                <label for="form1"><b><i class="fa fa-user" aria-hidden="true"></i> Name </b></label>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="md-form mt-0">
                                <input type="email" id="form2" class="form-control" name="email" required>
                                <label for="form2"><b><i class="fa fa-envelope" aria-hidden="true"></i> Email </b></label>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="md-form mt-0">
                                <input type="text" id="form3" class="form-control" name="phone" required>
                                <label for="form3"><b><i class="fa fa-phone" aria-hidden="true"></i> Phone Number </b></label>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="md-form mt-0">
                                <input type="password" id="form4" class="form-control" name="password" required>
                                <label for="form4"><b><i class="fa fa-key" aria-hidden="true"></i> Password </b></label>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="md-form mt-0">
                                <input type="text" id="form5" class="form-control" name="addr" required>
                                <label for="form5"><b><i class="fa fa-home" aria-hidden="true"></i> Address </b></label>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="md-form ml-4 mt-0">
                                <input type="text" id="form6" class="form-control" name="city" >
                                <label for="form6"><b><i class="far fa-loca"></i> City </b></label>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="md-form mr-4 mt-0">
                                <input type="text" id="form7" class="form-control" name="state" >
                                <label for="form7"><b> State </b></label>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="md-form ml-4 mt-0">
                                <input type="text" id="form8" class="form-control" name="zip">
                                <label for="form8"><b> Pin / Zip Code </b></label>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="md-form mr-4 mt-0">
                                <input type="text" id="form9" class="form-control" name="Country" >
                                <label for="form9"><b> Country </b></label>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="md-form mt-0">
                                <input type="text" id="form10" class="form-control" name="aadhar" required>
                                <label for="form10"><b><i class="fas fa-fingerprint"></i> Aadhar Number </b></label>
                              </div>
                            </div>
                            
                            
                        </div>

                    </fieldset>

                    <fieldset>
                        <h2 style="text-align: center;"><b> Booking Information </b></h2>
                        <hr><br>
                        <div class="row pl-5 pr-5">
                            <div class="col-6">
                              <div class="md-form mt-0">
                                <p><b> Room Type </b>
                                <select class="custom-select" required>
                                  <option selected> Please Select </option>
                                  <option value="1"> Standard Room (1 or 2 People) </option>
                                  <option value="2"> Family Room (1 or 4 People) </option>
                                  <option value="3"> Private Room (1 or 3 People) </option>
                                  <option value="4"> Mix Dorm Room (6 People) </option>
                                  <option value="5"> Female Dorm Room (6 People) </option>
                                  <option value="6"> Male Dorm Room (6 People </option>
                                </select>
                                </p>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="md-form mt-0">
                                <p></p>
                                <input type="number" id="form11" class="form-control" name="number" required>
                                <label for="form11"><b> Number of Guests </b></label>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="md-form mt-0">
                                <p><b> Arrival Date & Time </b>
                                <input type="datetime-local" id="form13" name="datetime1" class="ml-5 pl-5" required></p>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="md-form mt-0">
                                <p><b> Departure Date & Time </b>
                                <input type="datetime-local" id="form14" name="datetime2" class="ml-5 pl-5" required></p>
                              </div>
                            </div>
                            <div class="col-12">
                                <p><b> Free PickUp? </b>
                                <div class="custom-control custom-radio ml-3">
                                  <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios" checked required>
                                  <label class="custom-control-label" for="defaultGroupExample1"> Yes Please! - Pick me up on arrival </label>
                                </div>
                                <div class="custom-control custom-radio ml-3">
                                  <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" required>
                                  <label class="custom-control-label" for="defaultGroupExample2"> No Thanks! - I'll make my own way there </label>
                                </div>
                                </p>
                            </div>
                            <div class="col-12">
                              <div class="md-form mt-0">
                                <input type="number" id="form15" class="form-control" name="flight" required>
                                <label for="form15"><b> Flight Number </b></label>
                              </div>
                            </div>
                            <div class="col-12">
                              <div class="md-form mt-1">
                                <textarea id="form16" class="md-textarea form-control" rows="4" required></textarea>
                                <label for="form16"><b> Special Message </b></label>
                            </div>
                            </div>
                            
                            
                        </div>

                    </fieldset>

                    <fieldset>
                        <h2 style="text-align: center;"><b> Thank You </b></h2>
                        <hr><br>
                        <div class="row pl-5 pr-5">
                            
                        </div>

                    </fieldset>

                    <button type="submit" class="btn btn-primary btn-md active mr-5" id="SaveAccount" style="float: right;"> Submit Form <i class="fas fa-angle-double-right ml-2"></i></button>

                </form>

                
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://cdn.rawgit.com/artoodetoo/formToWizard/v0.0.4/jquery.formtowizard.js"></script>

    <script>
        $( function() {
          var $signupForm = $( '#SignupForm' );

          $signupForm.validate({errorElement: 'em'});

          $signupForm.formToWizard({
            submitButton: 'SaveAccount',
            nextBtnClass: 'btn btn-primary btn-md active mr-5 next',
            prevBtnClass: 'btn btn-primary btn-md active mr-5 prev',
            buttonTag:    'button',
            validateBeforeNext: function(form, step) {
              var stepIsValid = true;
              var validator = form.validate();
              $(':input', step).each( function(index) {
                var xy = validator.element(this);
                stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
              });
              return stepIsValid;
            },
            progress: function (i, count) {
              $('#progress-complete').width(''+(i/count*100)+'%');
            }
          });
        });

    </script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
    

   

</body>
</html>
