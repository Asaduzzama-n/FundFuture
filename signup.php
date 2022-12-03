<?php
session_start();
include './includes/db_connection/connect.php';

$firstName = $lastName = $fullName = $userEmail = $userPhone = $userID = $address = $userDepartment = $userDesignation = $image = $password = $confirmPassword = '';
$firstNameErr = $lastNameErr = $fullNameErr = $userEmailErr = $userPhoneErr = $userIDErr = $addressErr = $userDepartmentErr = $userDesignationErr = $imageErr = $passwordErr = $confirmPasswordErr = '';
$regSuccess = $regError = '';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    if (empty($_POST['firstName'])) {
        $firstNameErr = 'First Name is required';
    } else {
        $firstName = validate($_POST['firstName']);
    }
    if (empty($_POST['lastName'])) {
        $lastNameErr = 'Last Name is required';
    } else {
        $lastName = validate($_POST['lastName']);
    }
    if (empty($_POST['fullName'])) {
        $fullNameErr = 'Full name is required';
    } else {
        $fullName = validate($_POST['fullName']);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fullName)) {
            $fullNameErr = "Only letters and white space allowed";
            exit();
        }
    }
    if (empty($_POST['userEmail'])) {
        $userEmailErr = 'Email is required';
    } else {
        $userEmail = validate($_POST['userEmail']);
        // check if e-mail address is well-formed
        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $userEmailErr = "Invalid email format";
        }
    }
    if(empty($_POST['userPhone'])){
        $userPhoneErr = 'Phone is required';
    }else{
        $userPhone = validate($_POST['userPhone']);
    }
    if(empty($_POST['userID'])){
        $userIDErr = 'University ID is required';
    }else{
        $userID = validate($_POST['userID']);
    }
    if(empty($_POST['address'])){
        $addressErr = 'Address is required';
    }else{
        $address = validate($_POST['address']);
        // echo $address;
    }
    if(empty($_POST['userDepartment'])){
        $userDepartmentErr = 'Department is required';
    }else{
        $userDepartment = validate($_POST['userDepartment']);
    }
    if(empty($_POST['userDesignation'])){
        $userDesignationErr = 'Designation is required';
    }else{
        $userDesignation = validate($_POST['userDesignation']);
    }

    



    if(empty($_POST['password'])){
        $passwordErr = 'Password is required';
    }else{
        $password = validate($_POST['password']);
    }

    if(empty($_POST['confirmPassword'])){
        $confirmPasswordErr = 'Confirm Password is required';
    }else{
        $confirmPassword = validate($_POST['confirmPassword']);
    }

    if($password !== $confirmPassword){
        $confirmPasswordErr = "Password doesn't match.";
    }else{

        $password = md5($password);


        // image validation part
		$photo_name = $_FILES["image"]["name"];
        $photo_tmp_name = $_FILES["image"]["tmp_name"];
        $photo_size = $_FILES["image"]["size"];
        $photo_new_name = rand().$photo_name;

		if ($photo_size > 5242880) {
            echo "<script>alert('Photo is very big. Maximum photo uploading size is 5MB.');</script>";
        } else{

            $sql = "SELECT * FROM user WHERE user_id = '$userID'";
            $result = mysqli_query($conn,$sql);
    
            if (mysqli_num_rows($result) > 0) {
                $userIDErr = 'ID already exist.';
                
            }else{
                $sql2 = "INSERT INTO user(user_id,f_name,l_name,full_name,u_department,u_phone,u_email,u_address,u_image,u_designation) VALUES ('$userID','$firstName','$lastName','$fullName','$userDepartment','$userPhone','$userEmail','$address','$photo_new_name','$userDesignation')";
    
                $result2 = mysqli_query($conn,$sql2);
                if($result2){
					
                    move_uploaded_file($photo_tmp_name, "./images/userImages/" . $photo_new_name);  

                    $regSuccess = 'Your account has been created successfully!';
                    $firstName = $lastName = $fullName = $userEmail = $userPhone = $userID = $address = $userDepartment = $userDesignation = $image = $password = $confirmPassword = $photo_tmp_name = $photo_new_name = '';
                }else{
                    $regError = 'Unknown error occurred!';
                }
            }

        }
    }



}

function validate($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>










<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FundFuture</title>


    <link rel="stylesheet" href="./css/signup.css">
    <!-- bootstrap link file -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- font awesome link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/744d788fd4.js" crossorigin="anonymous"></script>
</head>



<body>

    <section class="signUpFormContainer">
        <h1>SIGN UP</h1>

        <span class="success"> <?php echo $regSuccess;?></span>
        <!-- first and last name container -->
        <form method="post" enctype="multipart/form-data">
            <div class="row ">
                <div class="col-sm-6">
                    <input class="inputStyle" type="text" id="fName" name="firstName" placeholder="First Name" required>
                    
                </div>
                <div class="col-sm-6">
                    <input class="inputStyle" type="text" id="lName" name="lastName" placeholder="Last Name" required>
                    
                </div>
            </div>
            <!-- full Name Container -->
            <div class="row ">
                <div class="col-sm-12">
                    <input class="inputStyle" type="text" id="fullName" name="fullName" placeholder="Full Name" required>
                    <span class="error"> <?php echo $fullNameErr;?></span>
                </div>
            </div>
            <!-- email and phone container -->
            <div class="row">
                <div class="col-sm-6">
                    <input class="inputStyle" type="email" id="uEmail" name="userEmail" placeholder="Email" required>
                    <span class="error"> <?php echo $userEmailErr;?></span>
                </div>
                <div class="col-sm-6">
                    <input class="inputStyle" type="text" id="uPhone" name="userPhone" placeholder="Phone Number" required>
                </div>
            </div>
            <!-- varsity ID container -->
            <div class="row">
                <div class="col-sm-12">
                    <input class="inputStyle" type="text" id="uID" name="userID" placeholder="Your University ID" required>
                    <span class="error"> <?php echo $userIDErr;?></span>
                </div>
            </div>
            <!-- address container        -->
            <div class="row mt-5">
                <div class="col-md-6">
                    <textarea  cols="25" rows="5"  name="address" placeholder="Address" required></textarea>
                </div>

                <div class="col-sm-6">
                    <div class="row mt-4">
                        <select class="selectCustomStyle" name="userDepartment" id="uDept" required>
                            <option selected>Chose Your Department</option>
                            <option value="1">CSE</option>
                            <option value="2">BBA</option>
                            <option value="3">EEE</option>
                            <option value="4">CIVIL</option>
                            <option value="5">MJ</option>
                        </select>
                        <span class="error"> <?php echo $userDepartmentErr;?></span>
                    </div>
                    <!-- designation Container -->
                    <div class="row mt-5">
                        <select class="selectCustomStyle" name="userDesignation" id="uDept" required>
                            <option selected>Select Your Designation</option>
                            <option value="1">Student</option>
                            <option value="2">Faculty</option>
                            <option value="3">Staff</option>
                            <span class="error">* <?php echo $userDesignationErr;?></span>
                        </select>
                    </div>
                </div>
                
            </div>

            </div>

            <!-- file upload section -->
            <div class="row mt-5">
                <div class="col-sm-12 fileStyle  d-flex justify-start">
                    <input type="file" name="image" accept="image/*" required>
                </div>
            </div>

            <!-- password field -->
            <div class="row">
                <div class="col-sm-6">
                    <input class="inputStyle" type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="col-sm-6">
                    <input class="inputStyle" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                </div>
                <span class="error"> <?php echo $confirmPasswordErr;?></span>
            </div>

            <div class="row mt-5">
                <div class="col-sm-12">
                    <input type="submit" value="Upload" id="signup" name="signup">
                </div>
            </div>
        </form>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>