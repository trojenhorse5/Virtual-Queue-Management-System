<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Queue Management System</title>
    <link rel="stylesheet" href="styles.css"> 
</head> 
<body>
<header>
    <h1>Welcome To The Virtual Queue Management System</h1>
    <nav>
        <ul>
            <li><a href="index.php">Queue</a></li>
            <li><a href="pages/live-queue-tracking.php">Live Queue Tracking</a></li>
        </ul>
    </nav>
</header>
<main>
    <h2>Patient Information</h2>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" id="FullName" name="FullName" required><br><br>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="Other" required>
        <label for="other">Other</label><br><br>

        <label for="contact">Phone Number / Email:</label>
        <input type="text" id="contact" name="contact" required><br><br>

        <label for="patientType">Patient Type:</label>
        <select id="text" name="patientType" required>
            <option value="New">New</option>
            <option value="Returning">Returning</option>
            <option value="Emergency">Emergency</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "user_dbVirtualQueueManagement";
        $password = "user_dbVirtualQueueManagement";
        $dbname = "db_VirtualQueueManagement";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $fullName = $_POST['FullName'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $patientType = $_POST['patientType'];

        $sql = "INSERT INTO patients (full_name, age, gender, contact, patient_type)
                VALUES ('$fullName', '$age', '$gender', '$contact', '$patientType')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
</main>
<footer>
    <p>&copy; 2025 Virtual Queue Management System</p>
</footer>
</body>
</html>