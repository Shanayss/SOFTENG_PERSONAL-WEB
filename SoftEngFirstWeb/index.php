
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Personal Profile</title>

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME ICON LIBRARY -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>

    <!-- INTRODUCTION SECTION -->
    <section class="intro">
        <div class="intro-left">
            <p class="section-label">A LITTLE ABOUT ME</p>
            <h1>
                Hi, I'm
                <span class="highlight">Chanice Caboverde</span>
            </h1>
            <p class="subtitle">A girl that wants to explore the world.</p>
        </div>

        <div class="intro-right">
            <div class="intro-card">
                <p class="card-label">THE WAY I SEE LIFE</p>
                <p class="description">
                    I believe life is meant to be experienced. I love exploring new places, trying new things,
                    and making memories through every adventure. Whether it's hiking a mountain or discovering
                    something unexpected, I'm always excited for what's next. I enjoy stepping outside my comfort zone,
                    embracing new challenges, and finding beauty in places I've never been before.
                </p>
            </div>
        </div>
    </section>

    <!-- INTERESTS SECTION -->
    <section class="interests">
        <div class="interests-container">
            <div class="interests-heading">
                <p class="section-label">THINGS I LOVE</p>
                <h2>My kind of adventures.</h2>
                <p class="section-description">
                    A few of the things that make life exciting and memorable.
                </p>
            </div>

            <div class="interest-grid">

                <div class="interest-item">
                    <div class="interest-icon">
                        <i class="fa-solid fa-mountain-sun" aria-hidden="true"></i>
                    </div>
                    <h3>Hiking</h3>
                    <p>Exploring mountain trails, enjoying nature, and reaching beautiful viewpoints.</p>
                </div>

                <div class="interest-item">
                    <div class="interest-icon">
                        <i class="fa-solid fa-plane" aria-hidden="true"></i>
                    </div>
                    <h3>Traveling</h3>
                    <p>Visiting new places, discovering different cultures, and collecting unforgettable memories.</p>
                </div>

                <div class="interest-item">
                    <div class="interest-icon">
                        <i class="fa-solid fa-compass" aria-hidden="true"></i>
                    </div>
                    <h3>Trying New Things</h3>
                    <p>Saying yes to new experiences and stepping outside my comfort zone.</p>
                </div>

                <div class="interest-item">
                    <div class="interest-icon">
                        <i class="fa-solid fa-tree" aria-hidden="true"></i>
                    </div>
                    <h3>Outdoor Adventures</h3>
                    <p>Enjoying fresh air, beautiful scenery, spontaneous trips, and exciting activities.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ADVENTURE JOURNEY SECTION -->
    <section class="journey">
        <div class="journey-container">

            <div class="journey-heading">
                <p class="section-label">LIFE IS AN ADVENTURE</p>
                <h2>Things I want to experience.</h2>
            </div>

            <div class="journey-list">

                <div class="journey-item">
                    <span class="journey-number">01</span>
                    <div>
                        <h3>Explore More Mountains</h3>
                        <p>Discovering new hiking trails, beautiful peaks, and breathtaking views.</p>
                    </div>
                </div>

                <div class="journey-item">
                    <span class="journey-number">02</span>
                    <div>
                        <h3>Try Thrilling Activities</h3>
                        <p>Experiencing exciting adventures that challenge me to be more courageous.</p>
                    </div>
                </div>

                <div class="journey-item">
                    <span class="journey-number">03</span>
                    <div>
                        <h3>Discover New Destinations</h3>
                        <p>Traveling to unfamiliar places and finding hidden gems along the way.</p>
                    </div>
                </div>

                <div class="journey-item">
                    <span class="journey-number">04</span>
                    <div>
                        <h3>Make Unforgettable Memories</h3>
                        <p>Enjoying every moment and collecting stories that I can look back on someday.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- INSPIRATION SECTION -->
    <section class="inspiration">
        <div class="inspiration-container">

            <p class="section-label">WHAT MAKES LIFE EXCITING</p>
            <h2>What inspires me.</h2>

            <div class="inspiration-grid">

                <div class="inspiration-item">
                    <span>01</span>
                    <h3>The Beauty of Nature</h3>
                    <p>Finding peace and happiness in mountains, landscapes, sunsets, and the outdoors.</p>
                </div>

                <div class="inspiration-item">
                    <span>02</span>
                    <h3>New Experiences</h3>
                    <p>Learning through adventures, meeting new people, and experiencing unfamiliar things.</p>
                </div>

                <div class="inspiration-item">
                    <span>03</span>
                    <h3>Living in the Moment</h3>
                    <p>Appreciating the little moments and making every experience worth remembering.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- QUOTE SECTION -->
    <section class="quote-section">
        <div class="quote-container">
            <span class="quote-symbol">“</span>
            <h2>
                Life begins outside your comfort zone.
                <span>So go out there and explore.</span>
            </h2>
            <p>More places to see, more things to try, and more adventures waiting to happen.</p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-left">
            <h3>Chanice Caboverde</h3>
            <p>BSIT - 3R3</p>
        </div>
    </footer>

    <style>

        /* GENERAL STYLING */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #fff7fa;
            color: #39272a;
        }

        .section-label {
            color: #bd5872;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: 18px;
        }

        .section-description {
            color: #785f65;
            font-size: 14px;
            line-height: 1.9;
            margin-top: 12px;
        }


        /* INTRODUCTION SECTION */

        .intro {
            width: 82%;
            margin: auto;
            min-height: 480px;
            padding: 85px 35px;

            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 65px;
        }

        .intro h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(32px, 4.5vw, 54px);
            font-weight: 600;
            line-height: 1.3;
            margin-bottom: 20px;
        }

        .highlight {
            display: block;
            width: fit-content;
            color: #b95b75;
            text-decoration: underline;
            text-decoration-color: #edc4d1;
            text-decoration-thickness: 4px;
            text-underline-offset: 7px;
        }

        .subtitle {
            color: #785f65;
            font-size: 17px;
            margin-bottom: 12px;
        }

        .intro-card {
            background-color: #ffedf3;
            border: 1px solid #efd6df;
            border-radius: 5px;
            padding: 45px 35px;
            box-shadow: 0 12px 35px rgba(185, 91, 117, 0.07);
        }

        .card-label {
            color: #bd5872;
            font-size: 10px;
            letter-spacing: 1.5px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .description {
            color: #745c63;
            font-size: 14px;
            line-height: 2;
        }

        .interests-heading h2,
        .journey-heading h2,
        .inspiration-container h2 {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 600;
            line-height: 1.4;
        }


        /* INTERESTS SECTION */

        .interests {
            background-color: #fff7fa;
        }

        .interests-container {
            width: 82%;
            margin: auto;
            padding: 25px 25px 85px;
        }

        .interests-heading {
            margin-bottom: 35px;
        }

        .interest-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .interest-item {
            background-color: white;
            border: 1px solid #efd6df;
            border-radius: 5px;
            padding: 28px 22px;
            transition: 0.3s;
        }

        .interest-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(185, 91, 117, 0.09);
        }

        .interest-icon {
            color: #bd5872;
            font-size: 27px;
            margin-bottom: 20px;
        }

        .interest-item h3 {
            font-size: 14px;
            font-weight: 700;
            margin-bottom: 12px;
        }

        .interest-item p {
            color: #785f65;
            font-size: 13px;
            line-height: 1.9;
        }


        /* ADVENTURE JOURNEY SECTION */

        .journey {
            background-color: #ffedf3;
            border-top: 1px solid #efd6df;
            border-bottom: 1px solid #efd6df;
        }

        .journey-container {
            width: 82%;
            margin: auto;
            padding: 85px 35px;

            display: grid;
            grid-template-columns: 1fr 1.3fr;
            gap: 70px;
        }

        .journey-list {
            display: flex;
            flex-direction: column;
        }

        .journey-item {
            display: grid;
            grid-template-columns: 40px 1fr;
            align-items: center;
            gap: 15px;
            padding: 22px 0;
            border-bottom: 1px solid #eacbd5;
        }

        .journey-number {
            color: #bd5872;
            font-family: 'Playfair Display', serif;
            font-size: 17px;
        }

        .journey-item h3 {
            font-size: 14px;
            margin-bottom: 7px;
        }

        .journey-item p {
            color: #785f65;
            font-size: 12px;
            line-height: 1.8;
        }


        /* INSPIRATION SECTION */

        .inspiration {
            background-color: white;
        }

        .inspiration-container {
            width: 82%;
            margin: auto;
            padding: 85px 35px;
        }

        .inspiration-container > h2 {
            margin-bottom: 40px;
        }

        .inspiration-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .inspiration-item {
            padding: 25px 20px;
            border-left: 2px solid #efc4d2;
            background-color: #fff7fa;
        }

        .inspiration-item span {
            display: block;
            color: #bd5872;
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .inspiration-item h3 {
            font-family: 'Playfair Display', serif;
            font-size: 19px;
            margin-bottom: 12px;
        }

        .inspiration-item p {
            color: #785f65;
            font-size: 13px;
            line-height: 1.9;
        }


        /* QUOTE SECTION */

        .quote-section {
            background-color: #ffedf3;
            border-top: 1px solid #efd6df;
            border-bottom: 1px solid #efd6df;
            text-align: center;
        }

        .quote-container {
            width: 82%;
            margin: auto;
            padding: 75px 20px;
        }

        .quote-symbol {
            display: block;
            color: #bd5872;
            font-family: 'Playfair Display', serif;
            font-size: 65px;
            line-height: 1;
        }

        .quote-container h2 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(25px, 4vw, 38px);
            line-height: 1.5;
            font-weight: 500;
            margin: 15px 0;
        }

        .quote-container h2 span {
            display: block;
            color: #b95b75;
            font-style: italic;
        }

        .quote-container p {
            color: #785f65;
            font-size: 13px;
            margin-top: 18px;
        }


        /* FOOTER */

        footer {
            width: 82%;
            margin: auto;
            padding: 35px;

            display: flex;
            align-items: center;
            gap: 20px;

            color: #785f65;
        }

        .footer-left h3 {
            font-family: 'Playfair Display', serif;
            color: #b95b75;
            font-size: 19px;
            margin-bottom: 7px;
        }

        .footer-left p {
            font-size: 11px;
            line-height: 1.8;
        }


        /* TABLET RESPONSIVENESS */

        @media (max-width: 900px) {

            .intro,
            .journey-container {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .intro {
                min-height: auto;
                padding-top: 70px;
                padding-bottom: 70px;
            }

            .interest-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .inspiration-grid {
                grid-template-columns: repeat(2, 1fr);
            }

        }


        /* MOBILE RESPONSIVENESS */

        @media (max-width: 600px) {

            .intro,
            .interests-container,
            .journey-container,
            .inspiration-container {
                width: 90%;
                padding-left: 10px;
                padding-right: 10px;
            }

            .intro {
                grid-template-columns: 1fr;
                padding-top: 60px;
                padding-bottom: 60px;
            }

            .intro h1 {
                font-size: clamp(28px, 7vw, 38px);
            }

            .intro-card {
                padding: 30px 25px;
            }

            .interests-container,
            .journey-container,
            .inspiration-container {
                padding-top: 60px;
                padding-bottom: 75px;
            }

            .interest-grid,
            .inspiration-grid {
                grid-template-columns: 1fr;
            }

            .interests-heading h2,
            .journey-heading h2,
            .inspiration-container h2 {
                font-size: 28px;
            }

            .journey-container {
                grid-template-columns: 1fr;
            }

            .journey-item {
                grid-template-columns: 30px 1fr;
                gap: 10px;
            }

            .quote-container {
                width: 90%;
                padding: 60px 10px;
            }

            footer {
                width: 90%;
                padding: 30px 10px;
                flex-direction: column;
                align-items: flex-start;
            }

        }

    </style>

</body>
</html>
