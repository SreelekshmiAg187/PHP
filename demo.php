<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #f4f7fb;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 400px;
            margin: 60px auto;
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 15px;
            color: #555;
            font-weight: 600;
        }
        .required {
            color: red;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }
        input[type="submit"] {
            margin-top: 20px;
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        .success {
            color: green;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Registration Form</h2>

    <?php
    // Initialize variables
    $name = $email = $password = $phone = "";
    $nameErr = $emailErr = $passErr = $phoneErr = "";
    $successMsg = "";

    // Function to sanitize input
    function clean_input($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    // When form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = clean_input($_POST["name"]);
        $email = clean_input($_POST["email"]);
        $password = clean_input($_POST["password"]);
        $phone = clean_input($_POST["phone"]);

        // Validate Name
        if (empty($name)) {
            $nameErr = "Name is required";
        } elseif (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and spaces allowed";
        }

        // Validate Email
        if (empty($email)) {
            $emailErr = "Email is required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }

        // Validate Password
        if (empty($password)) {
            $passErr = "Password is required";
        } elseif (strlen($password) < 6) {
            $passErr = "Password must be at least 6 characters long";
        } elseif (!preg_match("/[A-Z]/", $password) || 
                  !preg_match("/[a-z]/", $password) || 
                  !preg_match("/[0-9]/", $password)) {
            $passErr = "Password must include uppercase, lowercase, and number";
        }

        // Validate Phone
        if (empty($phone)) {
            $phoneErr = "Phone number is required";
        } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phoneErr = "Phone number must be exactly 10 digits";
        }

        // Success message
        if ($nameErr == "" && $emailErr == "" && $passErr == "" && $phoneErr == "") {
            $successMsg = "Registration Successful!";
        }
    }
    ?>

    <?php if ($successMsg): ?>
        <p class="success"><?php echo $successMsg; ?></p>
        <p><strong>Name:</strong> <?php echo $name; ?></p>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <?php else: ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
            <label for="name">Full Name <span class="required">*</span></label>
            <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
            <span class="error"><?php echo $nameErr; ?></span>

            <label for="email">Email Address <span class="required">*</span></label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
            <span class="error"><?php echo $emailErr; ?></span>

            <label for="password">Password <span class="required">*</span></label>
            <input type="password" id="password" name="password" required>
            <span class="error"><?php echo $passErr; ?></span>

            <label for="phone">Phone Number <span class="required">*</span></label>
            <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" required>
            <span class="error"><?php echo $phoneErr; ?></span>

            <input type="submit" value="Register">
        </form>
    <?php endif; ?>
</div>
</body>
</html>
