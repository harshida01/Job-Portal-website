<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
    </header>
    <section id="contact-information">
        <h2>Contact Information:</h2>
        <p>Mailing Address: 123 Job Portal Avenue<br>City, State, ZIP Code</p>
        <p>Phone: (123) 456-7890</p>
        <p>Email: <a href="mailto:info@jobportal.com">info@jobportal.com</a></p>
    </section>
    <section id="contact-form">
        <h2>Contact Form:</h2>
        <form action="submit_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </section>
    <section id="location-map">
        <h2>Location on Map:</h2>
        <section id="location-map">
    <h2>Location on Map:</h2>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12345.67890!2d-73.98765432109876!3d40.12345678901234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjrCsDI0JzA2LjQiTiA3M8KwMDYnMTIuMCJX!5e0!3m2!1sen!2sus!4v1234567890123"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy">
    </iframe>
</section>

      
    </section>
    <section id="office-hours">
        <h2>Office Hours:</h2>
        <p>Monday-Friday: 9:00 AM - 5:00 PM</p>
        <p>Saturday: 10:00 AM - 2:00 PM</p>
        <p>Sunday: Closed</p>
    </section>
</body>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f7f7f7;
}

header {
    background-color: #007BFF;
    color: #FFF;
    text-align: center;
    padding: 20px;
}

h1 {
    margin: 0;
}

section {
    margin: 20px;
    background-color: #FFF;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #007BFF;
    color: #FFF;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

</style>
</html>
