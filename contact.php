<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<?php include 'include/navbar.php'; ?>
    <h1>Contact Us</h1>
    <form action="">
        <label for="fname">First Name:</label>
        <input type="text" id="fname" name="fname"><br>

        <label for="lname">Last Name:</label>
        <input type="text" id="lname" name="lname"><br>

        <label for="email">Your Email</label>
        <input type="text" id="email" name="email"><br>

        <label for="number">Phone Number</label>
        <input type="number" id="phnumber" name="phnumber"><br>

        <label for="message">Your Message</label>
        <input type="text" id="message" name="message"><br>

        <p>By submitting this form you agree to our terms and conditions and our privacy policy which explains how we may collect, use and 
            disclose your personal information including to third parties.</p>
    </form>
    <?php include 'include/footer.php'; ?>

</body>
</html>