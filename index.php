<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orphan Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Mother Theresa Nilayam</h1>
    </header>
    
    <nav>
        <a href="#home">Home</a>
        <a href="#login">Login</a>
        <a href="#register">Registration</a>
        <a href="#gallery">Photo Gallery</a>
        <a href="#sponsors">Sponsors</a>
        <a href="donate.html">Donations</a>
        <a href="#programs">Programs</a>
        <a href="#contact">Contact Us</a>
        <a href="admin_login.php">Admin Login</a>

    </nav>

    <section id="home">
   
        <head>

            <title>Mother Theresa Nilayam</title> 
            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    background-color: #f4f4f9;
                    color: #333;
                }
        
                header {
                    background-color: #1e1c2a;
                    color: #fff;
                    text-align: center;
                    padding: 2rem;
                }
        
                header h1 {
                    font-size: 2.5rem;
                }
        
                section {
                    max-width: 1200px;
                    margin: 2rem auto;
                    padding: 1rem;
                    background: #fff;
                    border-radius: 8px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }
        
                section h2 {
                    font-size: 2rem;
                    color: #6c63ff;
                    text-align: center;
                    margin-bottom: 1rem;
                }
        
                section p {
                    font-size: 1.1rem;
                    line-height: 1.6;
                    margin-bottom: 1.5rem;
                }
        
                .button-container {
                    text-align: center;
                    margin-top: 2rem;
                }
        
                .button-container a {
                    display: inline-block;
                    text-decoration: none;
                    padding: 1rem 2rem;
                    margin: 0.5rem;
                    font-size: 1rem;
                    border-radius: 5px;
                    background-color: #6c63ff;
                    color: #fff;
                    transition: background-color 0.3s ease;
                }
        
                .button-container a:hover {
                    background-color: #514cb0;
                }
        
                footer {
                    text-align: center;
                    padding: 1rem;
                    background-color: #6c63ff;
                    color: #fff;
                    position: relative;
                    bottom: 0;
                    width: 100%;
                    margin-top: 2rem;
                }
            </style>
        </head>
        <body>
        
        <header>
            <h1>Welcome to Mother Theresa Nilayam</h1>
            <p>A Ray of Hope for Orphaned Children</p>
        </header>
        
        <section>
            <h2>Who We Are</h2>
            <p>
                <style>
                    .image-gallery {
                        display: flex;
                        gap: 10px; /* Space between images */
                        justify-content: center; /* Centers the images horizontally */
                    }
        
                    .image-gallery img {
                        width: 150px; /* Set the desired width */
                        height: 150px; /* Set the desired height */
                        object-fit: cover; /* Ensures images are cropped proportionally */
                        border: 1px solid #ccc; /* Optional: Add a border around images */
                        border-radius: 5px; /* Optional: Add rounded corners */
                    }
                </style>
                <div class="image-gallery">
                    <img src="orphan-gallery-11.jpg" alt="Image 11">
                    <img src="orphan-gallery-12.jpg" alt="Image 12">
                    <img src="orphan-gallery-13.jpg" alt="Image 13">
                    <img src="orphan-gallery-19.jpg" alt="Image 19">
                    <img src="orphan-gallery-20.jpg" alt="Image 20">
                    <img src="orphan-gallery-21.jpg" alt="Image 21">
                    <img src="orphan-gallery-22.jpg" alt="Image 22">
                </div>
                At <strong>Mother Theresa Nilayam</strong>, we believe every child deserves love, care, and the opportunity to thrive. Founded with a deep sense of compassion and humanity, our non-profit organization is dedicated to supporting orphaned and underprivileged children.
            </p>
        
        
            <p>
                As a trusted <strong>NGO</strong>, our mission is to provide a safe, nurturing environment where children can grow, learn, and flourish. Guided by the values of empathy and service, we work tirelessly to ensure that every child under our care receives:
            </p>
            <ul>
                <li>Nutritious Meals: A balanced diet to promote healthy growth and development.</li>
                <li>Quality Education: Access to schools and resources to build a brighter future.</li>
                <li>Shelter and Security: A safe haven where they can feel at home.</li>
                <li>Medical Care: Regular health checkups and treatment for their well-being.</li>
                <li>Emotional Support: A family-like atmosphere filled with warmth, love, and guidance.</li>
            </ul>
        </section>
        
        <section>
            <h2>Our Vision and Mission</h2>
            <p><strong>Our Vision:</strong> To create a world where no child is left behind, ensuring they have the tools and opportunities to achieve their dreams.</p>
            <p><strong>Our Mission:</strong> We are committed to empowering orphaned children by meeting their physical, emotional, and educational needs while fostering their sense of belonging and self-worth.</p>
        </section>
        
        <section>
            <h2>Join Us in Making a Difference</h2>
            <p>
                Mother Theresa Nilayam operates solely on the generosity of kind-hearted individuals, corporate sponsorships, and community support. Your contributions – whether in the form of donations, time, or resources – can transform lives. Together, we can be the family these children need and help them realize their potential.
            </p>
            <div class="button-container">
                <a href="donate.html">Make a Donation</a>
                <a href="volunteer.html">Volunteer With Us</a>
                <a href="sponsor.html">Sponsor a Child</a>

            </div>
        </section>
        
        <section>
            <h2>Our Promise</h2>
            <p>
                Transparency and accountability are at the heart of everything we do. Every rupee you contribute goes directly to improving the lives of the children we care for.
            </p>
        </section>
        
        </body>
       
        
    </section>

    <section id="login">
        <h2>Login</h2>
        <div class="form-container">
            <form id="login-form">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </section>

    <section id="register">
        <h2>Registration</h2>
        <div class="form-container">
            <form id="register-form">
                <input type="text" name="username" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Register</button>
            </form>
        </div>
    </section>

    <section id="gallery">
        <h2>Photo Gallery</h2>
        <div class="gallery">
            <img src="orphan-gallery-1.jpg" alt="Image 1">
            <img src="orphan-gallery-2.png" alt="Image 2">
            <img src="orphan-gallery-3.jpg" alt="Image 3">
            <img src="orphan-gallery-4.jpg" alt="Image 4">
            <img src="orphan-gallery-5.jpg" alt="Image 5">
            <img src="orphan-gallery-6.jpg" alt="Image 6">
            <img src="orphan-gallery-7.jpg" alt="Image 7">
            <img src="orphan-gallery-8.jpg" alt="Image 8">
            <img src="orphan-gallery-9.jpg" alt="Image 9">
            <img src="orphan-gallery-10.jpg" alt="Image 10">





        </div>
    </section>




    <section id="sponsors">
        <h2>Sponsors</h2>
        <h3><strong>1.Sonu Sood</strong></h3>
        <style>
            .center-image {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0;
            }
    
            .center-image img {
                max-width: 300px; /* Adjust to medium size */
                height: auto;
                display: block;
                margin: 0; /* Remove any default margins */
            }
    
            #sponsors p {
                margin-top: 10px; /* Slight spacing between image and paragraph */
            }
        </style>
        <div class="center-image">
            <img src="sonu_sood.jpg" alt="Sonu Sood">
        </div>
        <p>
            <strong>Sonu Sood</strong>, renowned for his philanthropic spirit, has initiated a heartfelt sponsorship program for orphaned children. Through this initiative, he aims to provide them with a brighter future by covering essential needs like education, nutritious meals, clothing, and healthcare. The program seeks to empower these children with opportunities for holistic development, ensuring they grow up in a nurturing and supportive environment. By sponsoring an orphan, individuals can join Sonu Sood in transforming lives and creating a better tomorrow for these underprivileged children. Together, we can make a meaningful difference in their journey toward a hopeful future.
        </p>


        <h3><strong>2.Ratan Tata </strong></h3>
        <style>
            .center-image {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0;
            }
    
            .center-image img {
                max-width: 300px; /* Adjust to medium size */
                height: auto;
                display: block;
                margin: 0; /* Remove any default margins */
            }
    
            #sponsors p {
                margin-top: 10px; /* Slight spacing between image and paragraph */
            }
        </style>
        <div class="center-image">
            <img src="ratantata.jpg" alt="Ratan Tata">
        </div>
<p>
    <strong>Ratan Tata </strong>, a visionary industrialist and philanthropist, has extended his unwavering support to orphanages, embodying his commitment to building a brighter future for underprivileged children. Through his sponsorship, he ensures access to quality education, healthcare, and a nurturing environment for these young lives. His dedication to empowering the next generation reflects his belief in creating opportunities and fostering hope for those who need it the most.
</p>



        <p>We are grateful to our generous sponsors who make our work possible.</p>
    </section>





    <title>Orphanage Programs</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        #programs {
            padding: 20px;
            max-width: 1200px;
            margin: auto;
        }
        .program {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .program img {
            width: 100%;
            max-width: 400px;
            height: auto;
        }
        .program-content {
            padding: 15px;
            flex: 1;
        }
        .program h3 {
            margin: 0 0 10px;
            color: #333;
        }
        .program p {
            margin: 0;
            color: #666;
            line-height: 1.6;
        }
        @media (max-width: 768px) {
            .program {
                flex-direction: column;
            }
            .program img {
                max-width: 100%;
            }
        }
    </style>
</head>
<body>

<section id="programs">
    <h2>Our Programs</h2>

    <div class="program">
        <img src="blooddonation.jpg" alt="Blood Donation Camp">
        <div class="program-content">
            <h3>Blood Donation Camps</h3>
            <p>We regularly organize blood donation camps in collaboration with hospitals and medical organizations to support the health needs of our community.</p>
        </div>
    </div>

    <div class="program">
        <img src="https://ayaasprayas.org/wp-content/uploads/2021/03/birthday-celebration-of-orphanage-children-1.jpeg" alt="Birthday Celebrations">
        <div class="program-content">
            <h3>Birthday Celebrations</h3>
            <p>Celebrate your special day with the children by organizing fun activities, cutting cakes, and spreading joy.</p>
        </div>
    </div>

    <div class="program">
        <img src="anniversary.jpg" alt="Anniversary Celebrations">
        <div class="program-content">
            <h3>Anniversary Celebrations</h3>
            <p>Mark your milestones by sharing the happiness with the orphanage residents through memorable celebrations.</p>
        </div>
    </div>

    <div class="program">
        <img src="anniversary1.jpg" alt="Special Occasions">
        <div class="program-content">
            <h3>Special Occasions</h3>
            <p>Celebrate festivals, cultural events, and other special occasions with us to create lasting memories for the children.</p>
        </div>
    </div>

    <div class="program">
        <img src="children-2.jpg" alt="Educational Programs">
        <div class="program-content">
            <h3>Educational Programs</h3>
            <p>We run various workshops, classes, and tutoring sessions to ensure the holistic development of our children.</p>
        </div>
    </div>

    <div class="program">
        <img src="healthcheckup.jpg" alt="Health Check-up Camps">
        <div class="program-content">
            <h3>Health Check-up Camps</h3>
            <p>Regular health check-up camps are organized to monitor and maintain the well-being of all our residents.</p>
        </div>
    </div>

</section>

</body>

<section id="contact">
    <h2>Contact Us</h2>
    <div class="form-container">
        <form id="contact-form" method="POST" action="contact_process.php">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
</section>

    <footer>
        <p>&copy; 2025 Mother Theresa Nilayam. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>

    <script>
    const toggleButton = document.createElement('button');
    toggleButton.innerText = 'Toggle Dark Mode';
    toggleButton.classList.add('dark-mode-toggle');
    document.body.appendChild(toggleButton);

    toggleButton.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        toggleButton.innerText = document.body.classList.contains('dark-mode') ? 'Toggle Light Mode' : 'Toggle Dark Mode';
    });
</script>
</body>
</html>
