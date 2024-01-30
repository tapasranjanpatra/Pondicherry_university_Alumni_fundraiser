<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
            display: flex; /* Added flex display to arrange header, long-image-section, and sections in a row */
            flex-direction: column; /* Stack the sections vertically on small screens */
        }

        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        .long-image-section {
            height: 400px;
            min-width: 768px;
            background-size: cover;
            animation: moveRightToLeft 20s linear infinite; /* Move from right to left every 20 seconds */
        }

        @keyframes moveRightToLeft {
            0%, 100% { background-position: 100% 0; }
            25%, 75% { background-position: 0 0; }
            50% { background-position: 100% 0; }
        }

        .main-content {
            display: flex; /* Added flex display to arrange main content and right-side section in a row */
            justify-content: space-between; /* Separate main content and right-side section */
        }

        section {
            max-width: 800px;
            margin: 20px 0;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex: 1; /* Allow the main content to take remaining space */
        }

        h2 {
            color: #007BFF;
        }

        .event {
            margin-bottom: 20px;
            padding: 15px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .event-date {
            font-size: 18px;
            color: #007BFF;
        }

        .event-type {
            font-weight: bold;
        }

        .event-location {
            color: #555;
        }

        .event-description {
            color: #777;
        }

        .event-image {
            border-radius: 50%;
            height: 50px;
            width: 50px;
            object-fit: cover;
            margin-left: 20px;
        }

        .right-section {
            width: 200px; /* Set the width of the right-side section */
            height: 200px;
            margin: 10px;
            background-color: #f9f9f9;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
    <title>Alumni Programs & Events</title>
</head>
<body>
    <header>
        <h1>Programs & Events</h1>
    </header>
    <?php
    include('header1.php');
    ?>

    <div class="long-image-section"></div>

    <div class="main-content">
        <section>
            <h2>Upcoming Events</h2>

            <div class="event">
                <div>
                    <div class="event-date">DEC 28</div>
                    <div class="event-type">Virtual</div>
                    <div class="event-description">
                        <strong>Pongal - Dec 28th</strong><br>
                        pondicherry Club event.
                    </div>
                </div>
                <img src="alu1.jpg" alt="Event Image" class="event-image">
            </div>
            <div class="event">
                <div>
                    <div class="event-date">DEC 12</div>
                    <div class="event-type">Virtual</div>
                    <div class="event-description">
                        <strong>shivaratri - Nov 12th</strong><br>
                        pondicherry Club event.
                    </div>
                </div>
                <img src="alu1.jpg" alt="Event Image" class="event-image">
            </div>
            <div class="event">
                <div>
                    <div class="event-date">DEC 2</div>
                    <div class="event-type">Virtual</div>
                    <div class="event-description">
                        <strong>international yoga  - Dec 2th</strong><br>
                        pondicherry Club event.
                    </div>
                </div>
                <img src="alu1.jpg" alt="Event Image" class="event-image">
            </div>
            <div class="event">
                <div>
                    <div class="event-date">JAN 8</div>
                    <div class="event-type">Virtual</div>
                    <div class="event-description">
                        <strong>Onam - jan 8th</strong><br>
                        pondicherry Club event.
                    </div>
                </div>
                <img src="alu1.jpg" alt="Event Image" class="event-image">
            </div>

            <!-- Repeat the above structure for each event -->

            <!-- Example Event -->
            <div class="event">
                <div>
                    <div class="event-date">JAN 07</div>
                    <div class="event-type">Virtual</div>
                    <div class="event-description">
                        <strong>Newly Admitted Students Reception Hosted by Current College Students - Virtual</strong><br>
                        pondicherry Club of Seattle
                    </div>
                </div>
                <img src="https://via.placeholder.com/50" alt="Event Image" class="event-image">
            </div>

            <!-- Continue adding more events as needed -->

        </section>

        <!-- New section for "Event Information" -->
        <section>
            <h2>Event Information</h2>
            <p>
                pondicherry university Clubs will have the option to determine if their event will be held virtually or in-person based on their local community health and safety guidelines and club preference. pondicherry urges all members of the pondi alumni community to follow applicable WHO, CDC, and local health department guidance regarding in-person gatherings.
            </p>
        </section>

        <!-- Right-side section with additional links -->
        <div class="right-section">
            <h2>All Events</h2>
            <ul>
                <a href="">Featured Programs</a>
                <a href="">Online Learning</a>
            </ul>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 pondicherry Alumni Association</p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const longImageSection = document.querySelector(".long-image-section");
            const imageUrls = [
                "pongal.jpeg",
                "onam.jpeg",
                "alu3.jpg",
                "alu2.jpg",
                "alu1.jpg",
                "alu3.jpg",
                // Add more image URLs as needed
            ];

            let currentImageIndex = 0;

            function changeImage() {
                longImageSection.style.backgroundImage = `url('${imageUrls[currentImageIndex]}')`;
                currentImageIndex = (currentImageIndex + 1) % imageUrls.length;
            }

            // Set the initial image
            changeImage();

            // Change image every 20 seconds
            setInterval(changeImage, 2000);
        });
    </script>
</body>
</html>
