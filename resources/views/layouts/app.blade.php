<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Md. Boni Amin')</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <style>
        /* Global Styles */
        body {
          font-family: 'Poppins', sans-serif;
          margin: 0;
          scroll-behavior: smooth;
          background: linear-gradient(to right, #9bd3d0, #9be1eb);
        }
        header {
          background-color: #101010;
          padding: 15px 30px;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
          position: fixed;
          top: 0;
          width: 100%;
          z-index: 1000;
        }
        header .navbar-brand {
          font-weight: 700;
          font-size: 1.8rem;
          color: #f39c12;
          text-transform: uppercase;
        }
        header .nav-link {
          color: white;
          font-weight: 700;
          position: relative;
        }
        header .nav-link::after {
          content: '';
          position: absolute;
          width: 0;
          height: 3px;
          background: #f39c12;
          bottom: -5px;
          left: 50%;
          transition: 0.3s;
          transform: translateX(-50%);
        }
        header .nav-link:hover::after {
          width: 100%;
        }
        .btn-cta {
          background-color: #f39c12;
          color: white;
          border: none;
          border-radius: 50px;
          transition: 0.3s;
        }
        .btn-cta:hover {
          background-color: white;
          color: #f39c12;
        }
        .hero {
          background: linear-gradient(to bottom, #101010, rgba(0, 0, 0, 0.7)), url('https://source.unsplash.com/1600x900/?developer') no-repeat center center;
          background-size: cover;
          height: 100vh;
          display: flex;
          align-items: center;
          color: white;
        }
        .hero .content {
          display: flex;
          align-items: center;
          justify-content: space-between;
          width: 80%;
          margin: 0 auto;
        }
        .hero img {
          width: 300px;
          height: 300px;
          border-radius: 50%;
          border: 5px solid #f39c12;
        }
        .hero-text {
          max-width: 50%;
        }
        .hero h1 {
          font-size: 4rem;
          font-weight: 700;
          margin-bottom: 15px;
        }
        .hero p {
          font-size: 1.5rem;
          margin-bottom: 25px;
        }
        section {
          padding: 80px 20px;
        }
       
        .btn-outline-warning {
          border-color: #f39c12;
          color: #f39c12;
          transition: background-color 0.3s, color 0.3s;
        }
        .btn-outline-warning:hover {
          background-color: #f39c12;
          color: white;
        }
        footer {
          background-color: #101010;
          color: white;
          text-align: center;
          padding: 20px;
          margin-bottom: 0px;
        }
        footer p {
          font-size: 0.9rem;
          letter-spacing: 1px;
        }

        /* Remove margin and padding for the container in the content section */
        .container.mt-4 {
          padding: 0;
          margin: 0;
          width: 100%;
          max-width: 100%;
        }

        .container.mt-4 .row{
          display: flex;
          align-items: center;
          justify-content: space-between;
          width: 80%;
          margin: 0 auto;
        }
        .container.mt-4 .content{
          display: flex;
          align-items: center;
          width: 80%;
          margin: 0 auto;
        }

        .container.mt-4 section{
            background: linear-gradient(to bottom, #101010, rgba(0, 0, 0, 0.7)), url('https://source.unsplash.com/1600x900/?developer') no-repeat center center;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Md. Boni Amin</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#blog">Blogs</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                    <a href="#contact" class="btn btn-cta ms-lg-3">Hire Me</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="content">
            <img src="https://via.placeholder.com/200" alt="Profile Picture">
            <div class="hero-text">
                <h1>Crafting Digital Masterpieces</h1>
                <p>I’m Md. Boni Amin, a Full-Stack Developer passionate about creating exceptional web experiences.</p>
                <div>
                    <a href="#portfolio" class="btn btn-outline-light">View Portfolio</a>
                    <a href="/resume.pdf" class="btn btn-cta">Download Resume</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <div class="container mt-4">
        @yield('content')
    </div>
 
    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
      <div class="container">
          <div class="row">
              <!-- Column 1: About Me -->
              <div class="col-md-3">
                  <h5>About Me</h5>
                  <p style="font-size: 14px;">I am a web developer with expertise in full-stack development. I create dynamic and responsive websites using various technologies.</p>
              </div>
              <!-- Column 2: Quick Links -->
              <div class="col-md-3">
                  <h5>Quick Links</h5>
                  <ul style="list-style-type: none; padding-left: 0;">
                      <li><a href="#portfolio" class="text-white" style="text-decoration: none;">Portfolio</a></li>
                      <li><a href="#about" class="text-white" style="text-decoration: none;">About</a></li>
                      <li><a href="#contact" class="text-white" style="text-decoration: none;">Contact</a></li>
                  </ul>
              </div>
              <!-- Column 3: Contact Info -->
              <div class="col-md-3">
                  <h5>Contact Info</h5>
                  <ul style="list-style-type: none; padding-left: 0;">
                      <li><i class="fas fa-phone"></i> +8801793280228</li>
                      <li><i class="fas fa-phone"></i> +8801822860232</li>
                      <li><i class="fas fa-envelope"></i>boniamin4444@gmail.com</li>
                  </ul>
              </div>
              <!-- Column 4: Social Media -->
              <div class="col-md-3">
                <h5>Follow Me</h5>
                <div class="social-icons">
                    <a href="https://www.facebook.com/md.meadtang.7" class="text-white mx-2 mb-3 d-block"><i class="fab fa-facebook fa-2x"></i></a>
                    <a href="#" class="text-white mx-2 mb-3 d-block"><i class="fab fa-twitter fa-2x"></i></a>
                    <a href="https://www.linkedin.com/in/md-boni-amin-365900333/" class="text-white mx-2 mb-3 d-block"><i class="fab fa-linkedin fa-2x"></i></a>
                    <a href="https://github.com/boniamin4444" class="text-white mx-2 mb-3 d-block"><i class="fab fa-github fa-2x"></i></a>
                </div>
            </div>
            
          </div>
          <!-- Copyright Row -->
          <div class="row mt-4">
              <div class="col text-center">
                  <p style="font-weight: bold;">© 2024 Md. Boni Amin. Designed with 💻 & ❤️</p>
              </div>
          </div>
      </div>
  </footer>
  
</body>
</html>
