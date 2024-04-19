<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
</head>
<body>
    <body>
        <div>
           <div class="wave"></div>
           <div class="wave"></div>
           <div class="wave"></div>
        </div>
      </body>
    <nav id="desktop-nav">
        <div class="logo"> <img src="./assets/logo.png" alt="Raven logo"></div>
        <div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#projects">Project</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <nav id="hamburger-nav">
        <div class="logo">Raven Kyle J. Porras</div>
        <div class="hamburger-menu">
            <div class="hamburger-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="menu-links">
            <li><a href="#about" onclick="toggleMenu()">About</a></li>
            <li><a href="#experience" onclick="toggleMenu()">Experience</a></li>
            <li><a href="#projects" onclick="toggleMenu()">Project</a></li>
            <li><a href="#contact" onclick="toggleMenu()">Contact</a></li>
        </div>
        </div>
    </nav>
    <section id="profile">
        <div class="section__pic-container">
            <img src="./assets/profile-pic.png" alt="Raven profile picture">
        </div>
        <div class="section__text">
            <p class="section__text__p1">Hello, I'm</p>
            <h1 class="Title"> Raven Kyle Janea Porras</h1>
            <p>
    <a href="" class="typewrite" data-period="2000" data-type='[ "Frontend Developer.", "Photographer.", "Designer.", "Analyst." ]'>
      <span class="wrap"></span>
    </a>
  </p>
            <div class="btn-container">
                <button 
                class="btn btn-color-2" 
                onclick="window.open('./assets/resume-example.pdf')">Download CV</button>
                <button 
                class="btn btn-color-1" 
                onclick="location.href='./#contact'">Contact Info</button>
            </div>
            <div id="socials-container">
                <img src="./assets/github.png" alt="My GitHub profile"
                class="icon" onclick="location.href='https://Github.com/'">
                <img src="./assets/linkedin.png" alt="My LinkedIn profile"
                class="icon" onclick="location.href='https://linkedin.com/'">
            </div>
        </div>
    </section>
    <section id="about">
        <p class="section__text__p1">Get To Know More</p>
        <h1 class="title">About Me</h1>
        <div class="section-container">
            <div class="section__pic-container">
                <img 
                src="./assets/about-pic.png" 
                alt="Profile picture"
                class="about-pic"/>
            </div>
            <div class="about-details-container">
                <div class="about-container">
                    <div class="details-container">
                        <img 
                        src="./assets/experience.png" 
                        alt="Experience icon"
                        class="icon"
                        />
                        <h3>Experience</h3>
                        <p>2+ years <br />Frontend Development</p>
                    </div>
                    <div class="details-container">
                        <img 
                        src="./assets/education.png" 
                        alt="Education icon"
                        class="icon"
                        />
                        <h3>Education</h3>
                        <p>BS Information Technology <br />HS: Claret High School Of Zamboanga City<br />ES: Lunzuran Elementary School</p>
                    </div>
                </div>
                <div class="text-container">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt voluptatem laboriosam eos nam ut doloremque recusandae! Quod enim iure provident, quae rem corporis voluptatibus, labore ipsam obcaecati harum itaque incidunt velit similique sit fugit? Consequuntur deserunt commodi voluptates repellendus natus molestiae dolorum, facilis culpa quis dolore atque unde cumque. Repudiandae!</p>
                </div>
            </div>
        </div>
        <img 
        src="./assets/arrow.png" 
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#experience'"
        />
    </section>
    <section id="experience">
        <p class="section__text__p1">Explore My</p>
        <h1 class="title">Experience</h1>
        <div class="experience-details-container">
            <div class="about-container">
                <div class="details-container">
                    <h2 class="experience-sub-title">Frontend Development</h2>
                    <div class="article-container">
                        <article>
                            <img 
                            src="./assets/checkmark.png"
                            alt="Experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>HTML</h3>
                                <p>Experienced</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="./assets/checkmark.png"
                            alt="Experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>CSS</h3>
                                <p>Experienced</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="./assets/checkmark.png"
                            alt="Experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>SASS</h3>
                                <p>Intermediate</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="./assets/checkmark.png"
                            alt="Experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>JavaScript</h3>
                                <p>Basic</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="./assets/checkmark.png"
                            alt="Experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>TypeScript</h3>
                                <p>Basic</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="./assets/checkmark.png"
                            alt="Experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>HTML</h3>
                                <p>Experienced</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="details-container">
                    <h2 class="experience-sub-title">Frontend Development</h2>
                    <div class="article-container">
                        <article>
                            <img 
                            src="./assets/checkmark.png"
                            alt="Experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>PostgreSQL</h3>
                                <p>Experienced</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="./assets/checkmark.png"
                            alt="Experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>NodeJS</h3>
                                <p>Experienced</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="./assets/checkmark.png"
                            alt="Experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>Express JS</h3>
                                <p>Intermediate</p>
                            </div>
                        </article>
                        <article>
                            <img 
                            src="./assets/checkmark.png"
                            alt="Experience icon"
                            class="icon"
                            />
                            <div>
                                <h3>Git</h3>
                                <p>Basic</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <img 
        src="./assets/arrow.png" 
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
        />
    </section>
    <section id="projects">
        <p class="section__text__p1">Browse My Recent</p>
        <h1 class="title">Projects</h1>
        <div class="experience-details-container">
            <div class="about-container">
            <div class="details-container color-container">
                <div class="article-container">
                    <img 
                    src="./assets/project-1.png" 
                    alt="Project 1"
                    class="project-img"
                    />
                </div>
                <h2 class="experience-sub-title project-title">Deepwell Monitoring System</h2>
                <div class="btn-container">
                    <button class="btn btn-color-2 project-btn" onclick="location.href='http://deepwell.wuaze.com/homepage.php'">
                        Go to site
                    </button>
                </div>
            </div>
            <div class="details-container color-container">
                <div class="article-container">
                    <img 
                    src="./assets/project-2.png" 
                    alt="Project 2"
                    class="project-img"
                    />
                </div>
                <h2 class="experience-sub-title project-title">Photoshoots</h2>
                <div class="btn-container">
                    <button class="btn btn-color-2 project-btn" onclick="location.href='https://www.instagram.com/ravendubu/'">
                        Go to site
                    </button>
                </div>
            </div>
            <div class="details-container color-container">
                <div class="article-container">
                    <img 
                    src="./assets/project-3.png" 
                    alt="Project 3"
                    class="project-img"
                    />
                </div>
                <h2 class="experience-sub-title project-title">PMO Information System</h2>
                <div class="btn-container">
                    <button class="btn btn-color-2 project-btn" onclick="location.href='http://wmsupmo.epizy.com/?fbclid=IwZXh0bgNhZW0CMTAAAR1O3acU4Zq2BWjQqUUMvse0Rvj1gqISNVw54GljYeTjOhoz6l-7R-5C3Cs_aem_AdkB3qGfK389-yqow5D70O_jJirTgOG8SLX35tgO20u1L4xysEzxcRDlbtDlbsv-BmyYVMKkn_53o1ncn3PqFgT2&i=1'">
                        Go to site
                    </button>
                </div>
            </div>
        </div>
        </div>
        <img 
        src="./assets/arrow.png" 
        alt="Arrow icon"
        class="icon arrow"
        onclick="location.href='./#projects'"
        />
    </section>
    <section id="contact">
        <p class="section__text__p1">Get in Touch</p>
        <h1 class="title">Contact Me</h1>
        <div class="contact-info-upper-container">
            <div class="contact-info-container">
                <img 
                src="./assets/email.png" 
                alt="Email icon" 
                class="icon contact-icon email.icon"
                />
                <p><a href="mailto:ravendubu@gmail.com">ravendubu@gmail.com</a></p>
            </div>
                <div class="contact-info-container">
                    <img 
                    src="./assets/facebook.png" 
                    alt="Facebook icon" 
                    class="icon contact-icon"
                    />
                    <p><a href="https://www.facebook.com/ravendubu48">Facebook</a></p>
                </div>
                <div class="contact-info-container">
                    <img 
                    src="./assets/instagram.png" 
                    alt="Instagram icon" 
                    class="icon contact-icon email.icon"
                    />
                    <p><a href="https://www.instagram.com/ravendubu">Instagram</a></p>
                </div>
        </div>
    </section>
    <footer>
        <nav>
            <div class="nav-links-container">
                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#experience">Experience</a></li>
                    <li><a href="#projects">Project</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
        <p>Copyright &#169; 2024 Raven Kyle Janea Porras. All Rights Reserved.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>