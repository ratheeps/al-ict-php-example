<html>

<head>
    <title>Example</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="firstname" placeholder="Enter the first name" value="Hi"> <br /> <br />
        <input type="text" name="lastname" placeholder="Enter the last name"> <br /> <br />
        <input type="email" name="email" placeholder="Enter the email"> <br /> <br />
        <input type="submit" name="create-account" value="Create Account">
    </form>

    <?php

    $data = $_POST;
    if (isset($data['create-account']) && $data['create-account']) {
        $firstName = $data['firstname'];
        $lastName = $data['lastname'];
        $email = $data['email'];

        $conn = new mysqli('localhost', 'root', 'root', 'school');

        if ($conn->connect_error) {
            die('Connection error: ' . $conn->connect_error);
        }

        // INSER INTO students  (firstname, lastname, email) VALUE ('Ratheepan', 'Jeyakkumar', 'ratheepan93@gmail.com');
        $sql = "INSERT INTO students (firstname, lastname, email) VALUES ('" . $firstName . "' , '" . $lastName . "' , '" . $email . "')";

        $result = $conn->query($sql);

        if ($result === true) {
            echo "Account Created";
        } else {
            echo "Account creation failed: ", $conn->error;
        }
    }

    ?>
</body>

</html>