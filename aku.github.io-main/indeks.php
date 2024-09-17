<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>portofolio</title>

    <!-- box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <!-- header design -->
    <header class="header">
      <a href="#" class="logo">Portofolio</a>

      <i class='bx bx-menu' id="menu-icon"></i>
    
  
     <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#portofolio">Portofolio</a>
      <a href="#contact">Contact</a>
      <a href="index.php">Log out</a>
     </nav>

    </header>

    <!-- home section design -->
    <section class="home" id="home">
      <div class="home-content">
        <h3>Hello, It's Me</h3>
        <h1>Jakki Mubarok</h1>
        <h3>And I'm a <span class="multiple-text"></span></h3>
        <p>Hello welcome to my website</p>
      
      <div class="social-media">
        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
        <a href="#"><i class='bx bxl-tiktok'></i></a>
        <a href="#"><i class='bx bx-link' ></i></a>
        <a href="#"><i class='bx bxl-twitter' ></i></a>
      </div>
      <a href="home.png" class="btn">Download CV</a>
    </div>


      <div class="home-img">
        <img src="home.png">
      </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
      <div class="about-img">
        <img src="01.png" alt="">
      </div>

      <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <h3>Adudu</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus magni possimus ullam eaque sapiente laudantium omnis voluptatem maxime ipsam enim tempora vel aperiam officiis, nostrum illo deserunt totam eos vitae.</p>
        <a href="#" class="btn">Read More</a>
      </div>
    </section>

    <!-- services section design -->
    <section class="services" id="services">
      <h2 class="heading">Our <span>Service</span></h2>

      <div class="services-container">
        <div class="services-box">
          <i class='bx bxs-pen'></i>
          <h3>Design Grafis</h3>
          <p>service you with my skills in the field of graphic design.</p>
          <a href="#" class="btn">Read More</a>
        </div>
      

      
        <div class="services-box">
          <i class='bx bx-bar-chart'></i>
          <h3>Digital Marketing</h3>
          <p>When you experience digital marketing problems, we have the solution.</p>
          <a href="#" class="btn">Read More</a>
        </div>
      

      
        <div class="services-box">
          <i class='bx bx-code-alt'></i>
          <h3>Web Developer</h3>
          <p>Want to find web developer services whose quality is guaranteed? Visit my website.</p>
          <a href="#" class="btn">Read More</a>
        </div>
      </div>
    </section>

    <!-- portfolio section design -->
    <section class="portofolio" id="portofolio">
      <h2 class="heading">Latest <span>Project</span></h2>

      <div class="portofolio-container">
        <div class="portofolio-box">
          <img src="a.webp" alt=""height="300" width="300">
          <div class="portofolio-layer">
            <h4>a</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam odio voluptate vel similique explicabo quis alias, ex dolorum voluptates adipisci minima repellendus cupiditate soluta. Quo laboriosam recusandae possimus non delectus.</p>
            <a href="#"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="portofolio-box">
          <img src="b.jpg" alt=""height="300" width="300">
          <div class="portofolio-layer">
            <h4>b</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nam explicabo culpa iusto, quibusdam porro, atque dolorum mollitia assumenda distinctio nostrum, ipsum repellat at harum illo fuga architecto minima facere.</p>
            <a href="#"><i class='bx bx-link-external'></i></a>
          </div>
        </div>

        <div class="portofolio-box">
          <img src="c.jpg" alt="" height="300" width="300">
          <div class="portofolio-layer">
            <h4>c</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, est? Expedita maiores quibusdam quidem fuga aut obcaecati iusto consectetur tempore veritatis exercitationem fugit ipsa reiciendis, quo provident dignissimos temporibus illum!</p>
            <a href="#"><i class='bx bx-link-external'></i></a>
          </div>
        </div>
    </section>

    <!-- contact section design -->
    <section class="contact" id="contact">
      <h2 class="heading">Contact <span>Me!</span></h2>

      <form action="#">
        <div class="input-box">
          <input type="text" placeholder="full Name">
          <input type="email" placeholder="Email Addres">
        </div>

        <div class="input-box">
          <input type="number" placeholder="Mobile Number">
          <input type="text" placeholder="Email Subject">
        </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Name"></textarea>
        <input type="submit" value="Send Massaage" class="btn">
      </form>
    </section>

    <!-- footer design -->
    <footer class="footer">
      <div class="footer-text">
        <p>Copyright &copy; 2023 by Ivan. | All Rights Reserved.</p>
      </div>

      <div class="footer-iconTop">
        <a href="#home"><i class='bx bx-up-arrow-circle'></i></a>
      </div>
    </footer>


    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- typed js -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- custom js -->
    <script src="script.js"></script>
  </body>
</html>