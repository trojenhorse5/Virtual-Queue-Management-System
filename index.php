<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Queue Management System</title>
</head>
<body>
    <header>
        <h1>Welcome To The Virtual Queue Management System</h1>
    </header>
    <main>
        <h2>Patient Information</h2>
        <form>
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

            <label for="patientType">patient type:</label>
            <select id="text" name="patientType" required>
                <option value="New">New</option>
                <option value="Returning">Returning</option>
                <option value="Emergency">Emergency</option>
            </select><br><br>

            <input type="submit" value="Submit">
        </form>
    </main>
    <footer>
        <p>&copy; 2020 Virtual Queue Management System</p>
    </footer
</body>
</html>