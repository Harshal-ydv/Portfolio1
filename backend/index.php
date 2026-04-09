<!DOCTYPE html>
<html>
<head>
    <title>My Portfolio </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <h1>Harshal y</h1>
    <p>Full Stack Developer</p>
</header>

<section>
    <h2>About Me</h2>
    <p>I build web applications using PHP, MySQL, JS.</p>
</section>

<section>
    <h2>Skills</h2>
    <ul>
        <li>HTML, CSS, JS</li>
        <li>PHP & MySQL</li>
        <li>CRUD Applications</li>
    </ul>
</section>

<section>
    <h2>Projects</h2>
    <ul>
        <li>CRUD App (Student Management)</li>
        <li>To-Do List</li>
    </ul>
</section>

<section>
    <h2>Contact Me</h2>

    <form action="submit.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required><br><br>
        <input type="email" name="email" placeholder="Your Email" required><br><br>
        <textarea name="message" placeholder="Your Message"></textarea><br><br>
        <button type="submit">Send</button>
    </form>

</section>

<script src="script.js"></script>

</body>
</html>