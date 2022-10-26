<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Intake</title>
    <style>
label {
    font-size: 22px;
}
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Intake</a>
    </nav>
    <section class="text-center">
    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Please enter the following information:</h2>
          <form action = "process.php" method = "POST">
                    <div class = "row">
                        <div class = "col-md-6 mb-4">
                            <div class="form-group">
                                <!--<label for="firstname">First Name:</label>-->
                                <input type="text" class="form-control form-control-lg" placeholder="First Name" id="firstname" name = "firstname" required>
                            </div>
                        </div>
                        <div class = "col-md-6 mb-4">
                            <div class="form-group">
                                <!--<label for="lastname">Last Name:</label>-->
                                <input type="text" class="form-control form-control-lg" placeholder="Last Name" id="lastname" name = "lastname" required>
                            </div>
                        </div>
                    </div>
                    <div class = "row d-flex justify-content-left">                    
                        <p style = "font-size: 22px;">Home Address </p>
                    </div>
                    <div class = "row">
                        <div class = "col-md-6 mb-4">
                            <div class="form-group">
                                <!--<label for="street">Home Address:</label>-->
                                <input type="text" class="form-control form-control-lg" placeholder="Street number" id="street" name = "street" required>
                            </div>
                        </div>
                        <div class = "col-md-6 mb-4">
                            <div class="form-group">
                                <!--<label for="unit">Unit number, if any:</label>-->
                                <input type="text" class="form-control form-control-lg" placeholder="Unit number" id="unit" name = "unit">
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-md-6 mb-4">
                            <div class="form-group">
                                <!--<label for="city">City:</label>-->
                                <input type="text" class="form-control form-control-lg" placeholder="City" id="city" name = "city" required>
                            </div>
                        </div>
                        <div class = "col-md-4">
                            <div class="form-group">
                                <label for="states">State:</label>

                                <select name = "states" class = "form-control-lg" id = "states">
                                    <?php
                                    //dropdowns with php arrays
                                    $states = array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota','Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming');

                                    foreach($states as $state) {
                                       if($state == 'Florida') {
                                        echo '<option value = "'.$state.'" selected>'.$state.'</option><br>';
                                        } else {
                                        echo '<option value = "'.$state.'">'.$state.'</option><br>';
                                    }
                                }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class = "col-md-2">
                            <div class="form-group">
                                <!--<label for="zip">Zip Code:</label>-->
                                <input type="number" class="form-control form-control-lg" placeholder="Zip Code" id="zip" name = "zip" required>
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-md-6 mb-4">
                            <div class="form-group">
                                <!--<label for="email">Email:</label>-->
                                <input type="email" class="form-control form-control-lg" placeholder="Enter email" id="email" name = "email" required>
                            </div>
                        </div>
                        <div class = "col-md-6 mb-4">
                            <div class="form-group">
                                <!--<label for="phone">Phone Number:</label>-->
                                <input type="number" class="form-control form-control-lg" placeholder="Phone Number" id="phone" name = "phone" required>
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-md-6 mb-4">
                            <div class="form-group">
                                <label for="birthmonth">Birth Date:</label><br>

                                <select name = "birthmonth" class = "form-control-lg">
                                    <?php
                                    //dropdowns with php arrays
                                    $months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

                                    foreach($months as $month) {
                                        echo '<option value = "'.$month.'">'.$month.'</option><br>';
                                    }
                                    ?>
                                </select>
                                <select name = "dayofmonth" class = "form-control-lg">
                                    <?php
                                    $x = 1;
                                    while($x <= 31) {
                                        echo '<option value = "'.$x.'">'.$x.'</option>';
                                        $x++;
                                    }
                                    ?>
                                </select>
                                <select name = "birthyear" class = "form-control-lg">
                                    <?php
                                    $year = 1920;
                                    $currentyear = date('Y');

                                    while($year <= $currentyear) {
                                        echo '<option value = "'.$year.'">'.$year.'</option>'.'<br>';
                                        $year++;
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class = "col-md-6 mb-4">
                            <div class="form-group">
                                <label for="gender">Gender:</label><br>
                                <input type = "radio" id = "male" name = "gender" value = "male"><label for = "male">Male</label>&nbsp;&nbsp;&nbsp;
                                <input type = "radio" id = "female" name = "gender" value = "female"><label for = "female">Female</label>&nbsp;&nbsp;&nbsp;
                                <input type = "radio" id = "other" name = "gender" value = "other"><label for = "other">Other</label>
                                <!--<select name = "gender" class = "form-control-lg" required>
                                    <option value = "male">Male</option>
                                    <option value = "female">Female</option>
                                    <option value = "other">Other</option>
                                </select>-->
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-md-4 mb-4">
                            <div class="form-group">
                                <label for="ethnicity">Ethnicity:</label>
                                <select name = "ethnicity" class = "form-control-lg" required>
                                    <option value = "hispanic">Hispanic</option>
                                    <option value = "not hispanic">Not hispanic</option>
                                </select>
                            </div>
                        </div>
                        <div class = "col-md-4 mb-4">
                            <div class="form-group">
                                <label for="race">Race:</label>

                                <select name = "race" class = "form-control-lg">
                                    <?php
                                    //dropdowns with php arrays
                                    $races = array('African American', 'American Indian', 'Alaskan Native', 'Asian', 'Caucasian', 'Native Hawaiian', 'Pacific Islander');

                                    foreach($races as $race) {
                                        echo '<option value = "'.$race.'">'.$race.'</option><br>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class = "col-md-4 mb-4">
                            <div class="form-group">
                                <label for="maritalstatus">Marital Status:</label>
                                <select name = "maritalstatus" class = "form-control-lg" required>
                                    <option value = "married">Married</option>
                                    <option value = "single">Single</option>
                                    <option value = "divorced">Divorced</option>
                                    <option value = "separated">Separated</option>
                                    <option value = "widowed">Widowed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class = "row">
                        <div class = "col-md-4 mb-4">
                            <div class="form-group">
                                <!--<label for="children">Number of Children:</label>-->
                                <input type="number" min = "0" max = "10" class="form-control form-control-lg" placeholder="Number of Children" id="children" name = "children" required>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-primary btn-block mb-4" type = "submit" name = "newpatientintake">Submit</button>
                    <br><br><br>
                </form>
            </div>
        </div>
    </div>
    </div>
    </section>

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


