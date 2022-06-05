<?php include("index.php");
?>
<!DOCTYPE html>
<HTMl>
    <HEAD>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="t.css" type="text/css">
    </HEAD>
    <body class="text-center" ><form action="TARUN.php" method="post">
    <div class="container-fluid bg-warning margin-0px">
        <marquee class="bg-primary"><h3>Welcome To Technical Website</h3></marquee>
        <H3 class="py-2 text-center">FILL THIS FORM</H3>
        <div class="row py-5 text-center">
            <div class="col-md-3 text-center">
                <div class="form-group text-center">
                    <label>
                        NAME:
                    </label>
                    <input type="text" class="form-control form-control-ML " placeholder="Enter Your Name..." name="jname">
                </div>
                <div class="form-group">
                    <label>
                        FATHER NAME:
                    </label>
                    <input type="text" class="form-control form-control-ML" placeholder="Enter Your Father Name..." name="fname">
                </div>
                <div class="form-group">
                    <label>
                        MOB NO:
                    </label>
                    <input type="" class="form-control form-control-ML  " placeholder="Enter Your Mob No..." name="fmob">
                </div>
                <div class="form-group">
                    <label>
                        EMIAL:
                    </label>
                    <input type="email" class="form-control " placeholder="Enter Your Email..." name="femail">
                </div>
                <div class="form-group">
                    <label>
                        PASSWORD:
                    </label>
                    <input type="password" class="form-control " placeholder="Enter Your PASSWORD..." name="fpass">
                </div>
                <div class="form-group">
                    <label>
                        Date Of Birth
                    </label>
                    <input type="date" class="form-control " placeholder="Enter Your Date of birth..." name="fbirth">
                </div>
                <div class="form-group">
                    <label>
                        choose your country
                    </label>
                <select name="fselect">
                    <option>INDIA</option>
                    <option>AUSTRALIA</option>
                    <option>U.S.A</option>
                    <option>JAPAN</option>
                    
                </select>
                </div>
                <!-- <div class="form-group">
                    <input type="FILE" class="form-control form-control-ML">
                </div> -->
                <div class="form-group text-center">
                  <input type="submit"  class="text-dark " name="submit">
                </div>
            </div>
        </div>
    </div>
</form>
    <div class="row">
        <div class="col bg-dark text-center text-primary">tarun.sngl16@gmail.com
        
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <a href="http://localhost/chotu/TARUN.php">
                <button class="bg-primary">BACK</button>
            </a>
        </div>
    </div>
    

    </body>
</HTMl>
<?php
if ($_POST['submit'])
 {
    $name =$_POST['jname'];
    $fname=$_POST['fname'];
    $fmob=$_POST['fmob'];
    $femail=$_POST['femail'];
    $fpass=$_POST['fpass'];
    $fbirth=$_POST['fbirth'];
    $fselect=$_POST['fselect'];
    $query= "INSERT INTO reg VALUES('','$name','$fname',$fmob,'$femail','$fpass','$fbirth','$fselect')";
    $result= mysqli_query($conn,$query);
    }
?>
