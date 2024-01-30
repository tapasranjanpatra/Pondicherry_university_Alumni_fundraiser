<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Community</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8; /* Light gray background */
            color: #333;
        }

        header {
            background-color: #42a5f5; /* Deep Orange */
            color: #fff;
            text-align: center;
            padding: 1em;
        }

      

        section {
            padding: 20px;
            text-align: center;
        }

        h2 {
            color: #2196f3; /* Blue */
        }

        .welcome {
            margin-bottom: 30px;
        }

        .highlight {
            color: #2196f3; /* Blue */
        }

        .event {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 30px;
        }

        .event-item {
            flex: 1;
            margin: 10px;
            padding: 20px;
            background-color: #b2ebf2;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .event-item:hover {
            transform: scale(1.05);
        }

        .testimonial {
            margin-top: 30px;
            background-color: #64b5f6; /* Light Blue background for testimonials */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .testimonial-item {
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .testimonial-item img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 30px;
        }

        .gallery-item {
            flex: 1;
            margin: 10px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .gallery-item:hover {
            transform: scale(1.05);
        }

        .contact-form {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .contact-form label,
        .contact-form textarea,
        .contact-form input {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .contact-form button {
            background-color: #2196f3; /* Blue */
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .contact-form button:hover {
            background-color: #1565c0; /* Darker Blue */
        }

        footer {
            background-color:#da638b; /* Blue */
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: #2196f3; /* Blue */
            text-decoration: none;
            margin: 0 15px;
            font-size: 24px;
            transition: color 0.3s ease-in-out;
        }

        .social-icons a:hover {
            color: #1565c0; /* Darker Blue */
        }
    </style>
</head>
<body>


<?php
include('header1.php');
?>

<section>
    <div class="welcome">
        <h2>Welcome to Our Alumni Community!</h2>
        <p>Connecting Pondicherry University graduates around the globe.</p>
    </div>

    <h2 class="highlight">Upcoming Events</h2>

    <div class="event">
        <div class="event-item">
            <h3>Alumni Meetup</h3>
            <p class="highlight">Date: March 15, 2023</p>
            <p>Join us for a casual meetup to reconnect with fellow alumni.</p>
        </div>

        <div class="event-item">
            <h3>Annual Gala</h3>
            <p class="highlight">Date: April 22, 2023</p>
            <p>Celebrate achievements and memories at our annual gala event.</p>
        </div>

        <div class="event-item">
            <h3>Professional Development Workshop</h3>
            <p class="highlight">Date: May 10, 2023</p>
            <p>Enhance your skills and knowledge with our career-focused workshop.</p>
        </div>
    </div>

    <h2 class="highlight">Latest News</h2>

    <p>Stay updated with the latest happenings in our alumni community.</p>

    <!-- Updated Design: Alumni Testimonials -->
    <div class="testimonial">
        <h2 class="highlight">Alumni Testimonials</h2>

        <div class="testimonial-item">
            <img src="alu4.png" alt="Testimonial 1">
            <p>"Pondicherry University has played a crucial role in shaping my future. Grateful to be part of this amazing community!Life in the University campus for a student is like living in a real heaven. Green Campus, friendly faculty, staffs and students from across the country makes one to feel so comfortable.""</p>
            <p class="highlight">- reek, batch of 2005</p>
        </div>
        <div class="testimonial-item">
            <img src="amrutha k.v-tcs.png" alt="Testimonial 1">
            <p>"Besides curriculum, I learned three additional languages just be interacting with other state students. Two year of my PG course went just like a dreamPondicherry University has played a crucial role in shaping my future. Grateful to be part of this amazing community!"</p>
            <p class="highlight">- amrutha k.v-tcs, batch of 2019</p>
        </div>

        <div class="testimonial-item">
            <img src="Athulya R-Congnizant.png" alt="Testimonial 2">
            <p>"The bonds formed at Pondicherry University are everlasting. Proud to be a part of such a vibrant alumni network."</p>
            <p class="highlight">-Athulya R-Congnizant , batch of 2019</p>
        </div>
    </div>

    <!-- New Content: Gallery Section -->
    <h2 class="highlight">Photo Gallery</h2>

    <div class="gallery">
        <div class="gallery-item">
            <img src="alu1.jpg" alt="Gallery Image 1">
        </div>
        <div class="gallery-item">
            <img src="alu2.jpg" alt="Gallery Image 2">
        </div>
        <div class="gallery-item">
            <img src="alu3.jpg" alt="Gallery Image 3">
        </div>
        <!-- Add more images as needed -->
    </div>

    <!-- New Content: Contact Form -->
   
</section>

<div class="social-icons">
    <a href="#" target="_blank">Twitter</a>
    <a href="#" target="_blank">Facebook</a>
    <a href="#" target="_blank">Instagram</a>
    <a href="#" target="_blank">LinkedIn</a>
</div>

<footer>
    <p>&copy; 2023 Pondicherry University Alumni Community</p>
</footer>

</body>
</html>
