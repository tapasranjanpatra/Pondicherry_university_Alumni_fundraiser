<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Give to Pondicherry University</title>
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

        section {
            padding: 20px;
            text-align: center;
        }

        .welcome {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        h2 {
            color: #d32f2f; /* Dark Red */
        }

        p {
            line-height: 1.6;
            color: #555;
        }

        .highlight {
            color: #d32f2f; /* Dark Red */
        }

        .how-to-give {
            margin-top: 30px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .how-to-give h2 {
            color: #d32f2f; /* Dark Red */
        }

        .how-to-give p {
            color: #555;
            margin-bottom: 10px;
        }

        .how-to-give ul {
            list-style-type: none;
            padding: 0;
            margin-top: 10px;
        }

        .how-to-give li {
            margin-bottom: 10px;
        }

        .photo-gallery {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .gallery-item {
            flex: 1;
            margin: 10px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

        .contact-info {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .contact-info h2 {
            color: #d32f2f; /* Dark Red */
        }

        .contact-info p {
            color: #555;
            margin-bottom: 10px;
        }

        .footer {
            background-color: #d32f2f; /* Dark Red */
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
            color: #d32f2f; /* Dark Red */
            text-decoration: none;
            margin: 0 15px;
            font-size: 24px;
            transition: color 0.3s ease-in-out;
        }

        .social-icons a:hover {
            color: #870000; /* Darker Red */
        }
    </style>
</head>

<body>
    <?php
    include('header1.php');
    ?>

    <section>
        <div class="welcome">
            <h2>Welcome to Pondicherry Giving!</h2>
            <p>Thank you for considering a gift to Pondicherry University. If you have questions or need assistance, you can call 800-PONDIUNI (837-4827) or email ads@pondicherry.edu.</p>
        </div>

        <div id="giving-overview">
            <h2 class="highlight">Giving Overview</h2>
            <p>Explore the different ways you can contribute to Pondicherry's mission.There are several ways to make a gift. If you would like to make a gift today to the University, Schools, or affiliates, you may do so by credit card, stock transfer, or mutual fund transfer using our online giving forms.

If you would like to plan a gift for the future, give a gift other than cash or securities, or explore a gift that will pay you income, please contact <a href="https://www.pondiuni.edu.in/home/">Pondicherry_University</a>  planned giving professional. </p>
        </div>

        <div id="give-online" class="how-to-give">
            <h2 class="highlight">Give Online</h2>
            <p>Make a gift today by credit card, stock transfer, or mutual fund transfer using our secure online giving forms.</p>
            <ul>
                <li><a href="#online">Make a gift online</a></li>
                <li><a href="#matching-gifts">Matching Gifts Program</a></li>
                <li><a href="#stocks">Gifts of Stocks</a></li>
            </ul>
        </div>

        <div id="planned-giving" class="how-to-give">
            <h2 class="highlight">Planned Giving</h2>
            <p>Consider making a lasting impact through planned giving. Learn about bequests, life income plans, lead trusts, and more.</p>
            <ul>
                <li><a href="#bequest">Bequest</a></li>
                <li><a href="#gifts-pay-you-income">Gifts That Pay You Income</a></li>
                <li><a href="#lead-trusts">Lead Trusts</a></li>
                <li><a href="#other-assets">Other Assets You Can Give</a></li>
                <li><a href="#donor-advised-funds">Donor Advised Funds</a></li>
            </ul>
        </div>

        <div class="photo-gallery">
            <div class="gallery-item">
                <img src="giving1.jpg" alt="Gallery Image 1">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea architecto quae optio facere sed atque doloribus voluptates cumque, quod sapiente, magni corporis ratione minus similique. Ipsum odit perspiciatis aperiam debitis.</p>
            </div>
            <div class="gallery-item">
                <img src="giving2.jpg" alt="Gallery Image 2">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum enim id eveniet a non reiciendis amet. Exercitationem molestiae vero possimus?</p>
            </div>
            <div class="gallery-item">
                <img src="giving3.jpg" alt="Gallery Image 3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus harum illum, animi vel nostrum repellendus. Nisi culpa voluptatum explicabo vitae.</p>
            </div>
            <!-- Add more images as needed -->
        </div>

        <div id="contact-info" class="contact-info">
            <h2 class="highlight">Contact Information</h2>
            <p>If you have any questions or need assistance, feel free to reach out:</p>
            <h3>Pondicherry University Alumni Development Services</h3>
            <p>Email: ads@pondicherry.edu</p>
            <p>Phone: 800-PONDIUNI (837-4827)</p>
        </div>
    </section>

    <div class="social-icons">
        <a href="#" target="_blank">Twitter</a>
        <a href="#" target="_blank">Facebook</a>
        <a href="#" target="_blank">LinkedIn</a>
    </div>

    <footer class="footer">
        <p>&copy; 2023 The President and Fellows of Pondicherry College</p>
    </footer>

</body>

</html>
