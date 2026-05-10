<?php

include 'db.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $message = $_POST['message'];

    $sql = "INSERT INTO contacts
    (name,email,password,message)

    VALUES

    ('$name','$email',
    '$password','$message')";

    mysqli_query($conn,$sql);

    echo "<script>
    alert('Data Inserted Successfully');
    </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

    <title>Contact</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<header>

    <h1>My Personal Portfolio</h1>

</header>

<nav>

    <a href="index.html">Home</a>

    <a href="about.html">About</a>

    <a href="skills.html">Skills</a>

    <a href="projects.html">Projects</a>

    <a href="contact.php">Contact</a>

</nav>

<section class="contact-container">

    <h2>Contact Me</h2>

    <form
    class="contact-form"
    method="POST"
    action=""
    onsubmit="return validateForm()">

        <div class="input-group">

            <label>Full Name</label>

            <input
            type="text"
            name="name"
            id="name"
            placeholder="Enter Your Name">

        </div>

        <div class="input-group">

            <label>Email Address</label>

            <input
            type="email"
            name="email"
            id="email"
            placeholder="Enter Your Email">

        </div>

        <div class="input-group">

            <label>Password</label>

            <input
            type="password"
            name="password"
            id="password"
            placeholder="Enter Password">

        </div>

        <div class="input-group">

            <label>Gender</label>

            <div class="option-group">

                <label>
                    <input type="radio"
                    name="gender">
                    Male
                </label>

                <label>
                    <input type="radio"
                    name="gender">
                    Female
                </label>

            </div>

        </div>

        <div class="input-group">

            <label>Skills</label>

            <div class="option-group">

                <label>
                    <input type="checkbox">
                    HTML
                </label>

                <label>
                    <input type="checkbox">
                    CSS
                </label>

                <label>
                    <input type="checkbox">
                    JavaScript
                </label>

            </div>

        </div>

        <div class="input-group">

            <label>Select City</label>

            <select>

                <option>Choose City</option>

                <option>Hyderabad</option>

                <option>Bangalore</option>

                <option>Chennai</option>

            </select>

        </div>

        <div class="input-group">

            <label>Message</label>

            <textarea
            name="message"
            rows="5"
            placeholder="Enter Your Message">
            </textarea>

        </div>

        <button
        type="submit"
        name="submit">

            Submit

        </button>

    </form>

</section>

<script src="script.js"></script>

</body>

</html>