<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pondicherry University Alumni Travels</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #a61c3c;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        section {
            padding: 2em;
        }

        h2 {
            color: #a61c3c;
            margin-bottom: 1em;
        }

        p {
            margin-bottom: 1.5em;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .featured-trips {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 2em 0;
        }

        .trip-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            margin: 0.5em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .trip-card:hover {
            transform: scale(1.05);
        }

        .trip-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .trip-details {
            padding: 1em;
        }

        .contact-info {
            font-size: 0.8em;
        }

        .social-media {
            margin: 2em 0;
            display: flex;
            justify-content: center;
            gap: 1em;
        }

        .social-icon {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #a61c3c;
            transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
        }

        .social-icon:hover {
            background-color: #a61c3c;
            color: #fff;
        }

        .image-section {
            margin: 2em 0;
            text-align: center;
        }

        .image-section img {
            width: 100%;
            max-width: 600px;
            height: auto;
            border-radius: 8px;
            margin-bottom: 1em;
            transition: transform 0.3s ease-in-out;
        }

        .image-section img:hover {
            transform: scale(1.05);
        }

        .video-section {
            margin: 2em 0;
            text-align: center;
        }

        .video-section iframe {
            width: 100%;
            max-width: 800px;
            height: 400px;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
        }

        .video-section iframe:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <header>
        <h1>Alumni Travels</h1>
    </header>
    <?php
    include('header1.php');
    ?>

    <section>
        <h2>Welcome to pondicherry Alumni Travels</h2>
        <p>From the turquoise glaciers of Antarctica to the breathtaking landscapes of Vietnam, travel with us to learn about and explore destinations across every continent.</p>
    </section>

    <section class="featured-trips">
        <div class="trip-card">
            <img src="travel1.jpg" alt="Sea Cloud II">
            <div class="trip-details">
                <h3>Sea Cloud II</h3>
                <p>Apr 30, 2024 - May 8, 2024</p>
                <p>Study Leader(s): James Salzman</p>
                <p>Activity Level: 3</p>
            </div>
        </div>
        <div class="trip-card">
            <img src="travel2.jpg" alt="Sea Cloud II">
            <div class="trip-details">
                <h3>Sea Cloud II</h3>
                <p>Apr 30, 2024 - May 8, 2024</p>
                <p>Study Leader(s): James Salzman</p>
                <p>Activity Level: 3</p>
            </div>
        </div>
        <div class="trip-card">
            <img src="travel3.jpg" alt="Sea Cloud II">
            <div class="trip-details">
                <h3>Sea Cloud II</h3>
                <p>Apr 30, 2024 - May 8, 2024</p>
                <p>Study Leader(s): James Salzman</p>
                <p>Activity Level: 3</p>
            </div>
        </div>
        <div class="trip-card">
            <img src="travel4.jpg" alt="Sea Cloud II">
            <div class="trip-details">
                <h3>Sea Cloud II</h3>
                <p>Apr 30, 2024 - May 8, 2024</p>
                <p>Study Leader(s): James Salzman</p>
                <p>Activity Level: 3</p>
            </div>
        </div>

        <!-- Add more trip cards as needed -->

    </section>

    <section>
        <h2>About the Travel Program</h2>
        <p>pondicherry Alumni Travels is your guide to discovering the world. Here are a few highlights of our educational travel programs:</p>
        <ul>
            <li>Expert pondicherry faculty members on every trip</li>
            <li>More than 80 destinations across all seven continents</li>
            <li>Options for all experience and activity levels</li>
            <li>Meet and travel with fellow pondicherry alumni from all over the world</li>
        </ul>
    </section>

    <section>
        <h2>Contact Us</h2>
        <p>To learn more about pondicherry Alumni Travels or any of our programs, contact us at <a href="mailto:travels@pondicherry.edu">travels@pondicherry.edu</a> or call (617) 496-080611.</p>
    </section>

    <section class="image-section">
        <h2>Explore Our Adventures</h2>
        <img src="expor.webp" alt="Destination 1">
        <img src="moving.jpg" alt="Destination 2">
        <!-- Add more images as needed -->
    </section>

    <section class="video-section">
        <h2>Discover More with pondicherry Alumni Travels</h2>
        <!-- <iframe width="560" height="315" src="https://youtu.be/XirV_SskATo" frameborder="0" allowfullscreen></iframe> -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/XirV_SskATo?si=AqJnYmxCePKAa6AK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <!-- Replace "your-video-id" with the actual YouTube video ID -->
    </section>

    <footer>
        &copy; 2023 The President and Fellows of pondicherry College
    </footer>

</body>
</html>
