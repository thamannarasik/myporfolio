<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My portfolio</title>
    <link rel = "stylesheet" href="style.css"/>
    <link rel ="stylesheet" href="mediaqueries.css"/>
    <link rel="stylesheet" href="sweetalert/css/sweetalert2.min.css">
</head>
<body>
  <div id="preloader">
    <div class="spinner"></div>
  </div>
<nav id="desktop-nav">
    <div class="logo">Thamanna Rasik</div>
    <div>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>
</nav>
<section id="profile">
    <div class="section__pic-container">
        <img src="./assets/PicsArt_08-04-10.46.45.png" alt="Thamanna Profile picture"/>
    </div>
    <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Thamanna Rasik</h1>
        <p class="section__text__p2">Developer</p>
<div class="btn-container">
   <a href="./assets/Thamanna_Jabeen_rasik.pdf" download="Thamanna_Jabeen_rasik.pdf" class="btn btn-color-2">Download CV</a>

    </button>
    <button class="btn btn-color-1" onclick="location.href='./#contact'">Contact</button
</div>
<div id="socials-container">
  <a href="https://linkedin.com/in/thamanna-jabeen-rasik-130213190/" target="_blank" rel="noopener noreferrer">
    <img src="./assets/linkedin.png" alt="My LinkedIn Profile" class="icon" />
  </a>
  <a href="https://github.com/thamannarasik" target="_blank" rel="noopener noreferrer">
    <img src="./assets/github.png" alt="My GitHub Profile" class="icon" />
  </a>
</div>

</div>


</section>
  <section id="about">
    <p class="section__text__p1">Get To Know More</p>
    <h1 class="title">About Me</h1>
    <div class="section-container">
      <div class="about-details-container">
        <div class="about-containers">
          <div class="details-container">
            <img
              src="./assets/experience.png"
              alt="Experience icon"
              class="icon"
            />
            <h3>Experience</h3>
            <p>2 years <br />Assistant System Engineer</p>
          </div>
          <div class="details-container">
            <img
              src="./assets/education.png"
              alt="Education icon"
              class="icon"
            />
            <h3>Education</h3>
            <p>Master of Computer Applications<br />Bachelor of Computer Applications</p>
          </div>
        </div>
        <div class="text-container">
          <p>
            Motivated and detail-oriented Full Stack Developer with strong academic and professional experience in software development and cloud technologies. Skilled in designing interactive user interfaces, integrating APIs, and implementing robust backend solutions. Excited about creating impactful applications that leverage cutting-edge technology to enhance user engagement. Passionate about learning and innovation, eager to contribute to dynamic teams in fast-paced environments.
          </p>
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
      <div class="about-containers">
        <div class="details-container">
          <h2 class="experience-sub-title">Front-end Development</h2>
          <div class="article-container">
            <article>
              <img
                src="./assets/checkmark.png"
                alt="Experience icon"
                class="icon"
              />
              <div>
                <h3>HTML</h3>
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
              </div>
            </article>
            <article>
              <img
                src="./assets/checkmark.png"
                alt="Experience icon"
                class="icon"
              />
              <div>
                <h3> JavaScript </h3>
              </div>
            </article>
            <article>
              <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>jQuery</h3>
               </div>
            </article>
            <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>React JS</h3>
                </div>
              </article>
            <article>
              <img
                src="./assets/checkmark.png"
                alt="Experience icon"
                class="icon"
              />
              <div>
                <h3>Bootstrap</h3>
              </div>
            </article>
          </div>
        </div>
        <div class="details-container">
          <h2 class="experience-sub-title">Back-end Development</h2>
          <div class="article-container">
            <article>
              <img
                src="./assets/checkmark.png"
                alt="Experience icon"
                class="icon"
              />
              <div>
                <h3>PostgreSQL</h3>
              </div>
            </article>
            <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>Java</h3>
                </div>
              </article>
            <article>
                <img
                  src="./assets/checkmark.png"
                  alt="Experience icon"
                  class="icon"
                />
                <div>
                  <h3>PHP</h3>
                </div>
              </article>
            <article>
              <img
                src="./assets/checkmark.png"
                alt="Experience icon"
                class="icon"
              />
              <div>
                <h3>Node JS</h3>
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
              </div>
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
      <!-- Project 1 Container -->
      <div class="about-containers">
        <div class="details-container color-container">
          <div class="article-container">
            <img
              src="./assets/gazetter.png"
              alt="Project 1"
              class="project-img"
            />
          </div>
          <h2 class="experience-sub-title project-title">Project #1: Gazetteer</h2>
          <div class="btn-container">
            <button
              class="btn btn-color-2 project-btn"
              onclick="window.open('https://github.com/thamannarasik/Thamanna/tree/main/Project1', '_blank')"
            >
              Github
            </button>
            <button
              class="btn btn-color-2 project-btn"
              onclick="window.open('https://thamanna.co.uk/project1/', '_blank')"
            >
              Live Demo
            </button>
          </div>
        </div>
     
      
      <!-- Project 2 Container -->
  
        <div class="details-container color-container">
          <div class="article-container">
            <img
              src="./assets/companydirectory.png"
              alt="Project 2"
              class="project-img"
            />
          </div>
          <h2 class="experience-sub-title project-title">Project #2: Company Directory</h2>
          <div class="btn-container">
            <button
              class="btn btn-color-2 project-btn"
              onclick="window.open('https://github.com/thamannarasik/Thamanna/tree/main/Project2', '_blank')"
            >
              Github
            </button>
            <button
              class="btn btn-color-2 project-btn"
              onclick="window.open('https://thamanna.co.uk/project2/', '_blank')"
            >
              Live Demo
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  
  <section id="contact">
    <p class="section__text__p1">Get in Touch</p>
    <h1 class="title">Contact Me</h1>
    <div class="contact-form-container">
        <form id="contactForm" action="contact.php" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required class="form-control" />
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required autocomplete="off" class="form-control" />
            
            <label for="message">Message</label>
            <textarea name="message" id="message" required class="form-control"></textarea>
            
            <br>
            
            <button type="submit" name="submitContact">Send</button>
        </form>
        
        <div id="formResponse"></div> <!-- Response area -->
    </div>
</section>
  <footer>
    <nav>
      <div class="nav-links-container">
        <ul class="nav-links">
          <li><a href="#about">About</a></li>
          <li><a href="#experience">Experience</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>
  </footer>
  <script src="jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="sweetalert/js/sweetalert2.min.js"></script>
  <script>
  const preloader = document.getElementById("preloader");
            if (preloader) {
              console.log("Hiding preloader...");
              preloader.style.display = "none";
            } else {
              console.error("Preloader element not found!");
            }
            const messageText = "<?= isset($_SESSION['status']) && !empty($_SESSION['status']) ? $_SESSION['status'] : ''; ?>";

    if (messageText) {
        Swal.fire({
            title: "Thank you",
            text: messageText,
            icon: "success",
            customClass: {
                confirmButton: 'custom-confirm-button' 
            }
        });

        
        <?php unset($_SESSION['status']); ?>
    }
  </script>
</body>
</html>