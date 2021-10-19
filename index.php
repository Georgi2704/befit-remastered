<!DOCTYPE html>
<html lang="en">

<head>
    <title>BeFit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body class="signup-body">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 style="color: white;">Sign Up</h1>
            </div>
        </div>
        <!-- form starts -->
        <form action="includes/signup.php" method="POST">
            <!-- row username -->
            <div class="row">
                <div class="col-xs-12 text-center">
                    <?php
                    if (isset($_GET['username'])) {
                        $username = $_GET['username'];
                        echo '<input type="text" name="username" placeholder="Username" value="' . $username . '">';
                    } else {
                        echo '<input type="text" name="username" placeholder="Username">';
                    }
                    ?>
                </div>
            </div>
            <!-- row pass -->
            <div class="row">
                <div class="col text-center">
                    <input type="password" name="password" placeholder="Password">
                </div>
            </div>
            <!-- row email -->
            <div class="row">
                <div class="col text-center">
                    <input type="email" name="email" placeholder="E-mail">
                </div>
            </div>
            <!-- row for name -->
            <div class="row">
                <div class="col text-center">
                    <?php
                    if (isset($_GET['name'])) {
                        $name = $_GET['name'];
                        echo '<input type="text" name="name" placeholder="Name" value="' . $name . '">';
                    } else {
                        echo '<input type="text" class="form-control" name="name" placeholder="Name">';
                    }
                    ?>
                </div>
            </div>
            <!-- row for age -->
            <div class="row">
                <div class="col text-center">
                    <?php
                    if (isset($_GET['age'])) {
                        $age = $_GET['age'];
                        echo '<input type="number" name="age" placeholder="Age" value="' . $age . '">';
                    } else {
                        echo '<input type="number" name="age" placeholder="Age">';
                    }
                    ?>
                </div>
            </div>
            <!-- row gender -->
            <div class="row">
                <div class="col text-center">
                    <?php
                    if (isset($_GET['gender'])) {
                        $gender = $_GET['gender'];
                        echo '<input type="text" name="gender" placeholder="Gender" value="' . $gender . '">';
                    } else {
                        echo '<input type="text" name="gender" placeholder="Gender">';
                    }
                    ?>
                </div>
            </div>
            <!-- row date -->
            <div class="row">
                <div class="col text-center">
                    <?php
                    if (isset($_GET['dateOfBirth'])) {
                        $dateOfBirth = $_GET['dateOfBirth'];
                        echo '<input type="date" name="dateOfBirth" placeholder="Date Of Birth" value="' . $dateOfBirth . '">';
                    } else {
                        echo '<input type="date" name="dateOfBirth" placeholder="Date Of Birth">';
                    }
                    ?>
                </div>
            </div>
            <!-- row button -->
            <div class="row">
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary btn-lg" name="registerButton">Sign Up</button>
                </div>
            </div>
            <!-- form ends -->
        </form>
        <?php
        if (!isset($_GET['signup'])) {
            exit();
        } else {
            $signupCheck = $_GET['signup'];

            if ($signupCheck == "empty") {
                echo "<p class='error'>You did not fill all fields</p>";
                exit();
            } else if ($signupCheck == "invalidemail") {
                echo "<p class='error'>Invalid E-mail</p>";
                exit();
            } else if ($signupCheck == "error") {
                echo "<p class='error'>You did not press the button.</p>";
                exit();
            } else if ($signupCheck == "success") {
                echo "<p class='success'>You have been signed up.</p>";
                exit();
            }
        }
        ?>
    </div>
</body>

</html>