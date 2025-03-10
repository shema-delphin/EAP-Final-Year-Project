<?php 
session_start();
$username = $_SESSION['UserSession'];
if (!isset($username)) {
    header('location:login.php');
    exit();
}

if (isset($_POST['submit'])) {
    $conn = mysqli_connect("localhost", "root", "", "sms");

    $st_id = $_POST['st_id'];
    $fathername = $_POST['fathername'];
    $fatherphone = $_POST['fatherphone'];
    $fathernid = $_POST['fathernid'];
    $fatherdob = $_POST['fatherdob'];
    $mathername = $_POST['mathername'];
    $matherphone = $_POST['matherphone'];
    $mathernid = $_POST['mathernid'];
    $matherdob = $_POST['matherdob'];
    $emergency = $_POST['emergency'];

    // Server-side validation
    $errors = [];

    if (empty($st_id) || $st_id === "Select Student Id") {
        $errors[] = 'Please select a valid student ID.';
    }
    if (!preg_match("/^[0-9]{10}$/", $fatherphone)) {
        $errors[] = 'Father\'s phone number must be exactly 10 digits long.';
    }
    if (!preg_match("/^[0-9]{10}$/", $matherphone)) {
        $errors[] = 'Mother\'s phone number must be exactly 10 digits long.';
    }
    if (!preg_match("/^\+?[0-9]{12}$/", $emergency)) {
        $errors[] = 'Emergency phone number must be exactly 13 digits long and can start with a +.';
    }
    if (!preg_match("/^[0-9]{16}$/", $fathernid)) {
        $errors[] = 'Father\'s National ID must be exactly 16 digits long.';
    }
    if (!preg_match("/^[0-9]{16}$/", $mathernid)) {
        $errors[] = 'Mother\'s National ID must be exactly 16 digits long.';
    }
    if (!preg_match("/^[a-zA-Z\s]+$/", $fathername)) {
        $errors[] = 'Father\'s name must contain only letters and spaces.';
    }
    if (!preg_match("/^[a-zA-Z\s]+$/", $mathername)) {
        $errors[] = 'Mother\'s name must contain only letters and spaces.';
    }
    if ($fatherdob > date('Y-m-d')) {
        $errors[] = 'Father\'s date of birth cannot be a future date.';
    }
    if ($matherdob > date('Y-m-d')) {
        $errors[] = 'Mother\'s date of birth cannot be a future date.';
    }

    if (empty($errors)) {
        $insert = mysqli_query($conn, "INSERT INTO parents VALUES('', '$st_id', '$fathername', '$fatherphone', '$fathernid', '$fatherdob', '$mathername', '$matherphone', '$mathernid', '$matherdob', '$emergency')");
        if ($insert) {
            echo "<script>alert('Parent Inserted');</script>";
        } else {
            echo "<script>alert('Parent Not Inserted');</script>";
        }
    } else {
        echo "<script>alert('" . implode("\\n", $errors) . "');</script>";
    }
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #b7b6b7;
        }
    </style>
    <script>
        function validateForm() {
            var stId = document.forms[0]["st_id"].value;
            var fatherPhone = document.forms[0]["fatherphone"].value;
            var matherPhone = document.forms[0]["matherphone"].value;
            var emergency = document.forms[0]["emergency"].value;
            var fatherName = document.forms[0]["fathername"].value;
            var matherName = document.forms[0]["mathername"].value;
            var fatherDOB = new Date(document.forms[0]["fatherdob"].value);
            var matherDOB = new Date(document.forms[0]["matherdob"].value);
            var today = new Date();

            if (stId === "" || stId === "Select Student Id") {
                alert("Please select a valid student ID.");
                return false;
            }
            if (fatherPhone.length != 10 || !/^[0-9]{10}$/.test(fatherPhone)) {
                alert("Father's phone number must be exactly 10 digits long.");
                return false;
            }
            if (matherPhone.length != 10 || !/^[0-9]{10}$/.test(matherPhone)) {
                alert("Mother's phone number must be exactly 10 digits long.");
                return false;
            }
            if (emergency.length != 13 || !/^\+?[0-9]{12}$/.test(emergency)) {
                alert("Emergency phone number must be exactly 13 digits long and can start with a +.");
                return false;
            }
            if (!/^[a-zA-Z\s]+$/.test(fatherName)) {
                alert("Father's name must contain only letters and spaces.");
                return false;
            }
            if (!/^[a-zA-Z\s]+$/.test(matherName)) {
                alert("Mother's name must contain only letters and spaces.");
                return false;
            }
            if (fatherDOB > today) {
                alert("Father's date of birth cannot be a future date.");
                return false;
            }
            if (matherDOB > today) {
                alert("Mother's date of birth cannot be a future date.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <?php include('includes/header.php'); ?>
    <div class="ts-main-content">
        <?php include('includes/register_dashboard.php'); ?>
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <center><h3 class="text text-primary">Parents Registration Form</h3></center>
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <form action="" method="POST" onsubmit="return validateForm()">
                            <br>
                            <div class="card">
                                <div class="card-header"></div>
                                <div class="card-body">
                                    Student Id
                                    <select name="st_id" class="form-control" required>
                                        <option value="">Select Student Id</option>
                                        <?php 
                                        $conn = mysqli_connect("localhost", "root", "", "sms");
                                        $select = "SELECT st_id, student_code, firstname, lastname FROM student";
                                        $query = mysqli_query($conn, $select);
                                        while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <option value="<?php echo htmlspecialchars($data['st_id']); ?>">
                                                <?php echo htmlspecialchars($data['st_id']); ?>&nbsp;||&nbsp;<?php echo htmlspecialchars($data['student_code']); ?>&nbsp;||&nbsp;<?php echo htmlspecialchars($data['firstname']); ?>&nbsp;&nbsp;<?php echo htmlspecialchars($data['lastname']); ?>
                                            </option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            Father's Names
                                            <input type="text" name="fathername" placeholder="Add Parent Father's Names" required class="form-control">
                                            
                                            Father's Phonenumber
                                            <input type="tel" name="fatherphone" placeholder="Add Parent Phonenumber" required pattern="[0-9]{10}" class="form-control">
                                            
                                            National Id Number
                                            <input type="text" name="fathernid" placeholder="Add Parent National Id" required pattern="[0-9]{16}" class="form-control">
                                            
                                            Date Of Birth
                                            <input type="date" name="fatherdob" placeholder="Add Date Of Birth" required class="form-control">
                                        </div>

                                        <div class="col-md-6">
                                            Mother's Names
                                            <input type="text" name="mathername" placeholder="Add Parent Mother's Names" required class="form-control">
                                            
                                            Mother's Phonenumber
                                            <input type="tel" name="matherphone" placeholder="Add Parent Phonenumber" pattern="[0-9]{10}" class="form-control">
                                            
                                            National Id Number
                                            <input type="text" name="mathernid" placeholder="Add Parent National Id" required pattern="[0-9]{16}" class="form-control">
                                            
                                            Date Of Birth
                                            <input type="date" name="matherdob" placeholder="Add Date Of Birth" required class="form-control">
                                        </div>
                                    </div>
                                    Emergency Phonenumber
                                    <input type="tel" name="emergency" placeholder="Emergency Phonenumber" pattern="^\+?[0-9]{12}$" class="form-control" required>
                                </div>
                                <br>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-3">
                                            <center><button class="btn btn-block btn-primary" type="submit" name="submit">Add Parent</button></center>
                                        </div>
                                        <div class="col-md-3">
                                            <center><button class="btn btn-block btn-danger" type="reset">Cancel</button></center>
                                        </div>
                                        <div class="col-md-3"></div>
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
