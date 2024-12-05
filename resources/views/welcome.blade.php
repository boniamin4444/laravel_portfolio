@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Md. Boni Amin - Extraordinary Portfolio</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">
  <style>
    /* Global Styles */
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    /* Section Styles */
    section {
      width: 100% !important;
      padding: 20px;
      margin-bottom: 20px;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    /* Card Hover Effect */
    .card {
      transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
      overflow: hidden;
      border-radius: 15px;
      border: 2px solid transparent;
      background-color: #ffffff;
    }
    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
    }

    /* Progress Circle Styles */
    .progress-circle {
      position: relative;
      width: 120px;
      height: 120px;
      border-radius: 50%;
      background: conic-gradient(#007bff 0% 33%, #f39c12 33% 66%, #28a745 66% 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      font-weight: bold;
      color: #333;
      transition: background 1s ease-in-out;
      margin-bottom: 10px;
    }

    /* Custom Progress Bar Style */
    .progress-circle p {
      position: absolute;
      font-size: 1.5rem;
      font-weight: bold;
    }

    /* Styling Skills Section */
    #skills p {
      font-weight: bold;
      font-size: 1.2rem;
      margin-top: 10px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
      .progress-circle {
        width: 100px;
        height: 100px;
      }
      .progress-circle p {
        font-size: 1rem;
      }
    }
  </style>
</head>
<body>

  @section('content')

  <!-- Portfolio Section -->
  <section id="portfolio">
    <h2 class="text-center mb-5" style="font-weight: bold;">My Portfolio</h2>
    <div class="row justify-content-center">
      @foreach($portfolios as $portfolio)
  
     
      <div class="col-md-4 mb-4">
        <div class="card border-0 shadow-lg rounded">
          <!-- Portfolio Image -->
          <img src="{{ asset('storage/'.$portfolio->image) }}" alt="Portfolio Image" class="card-img-top">
          <div class="card-body">
            <!-- Portfolio Title -->
            <h5 class="card-title" style="color: #f39c12;">{{ $portfolio->title }}</h5>
            <!-- Portfolio Description -->
            <p class="card-text">{{ $portfolio->description }}</p>
          </div>
          <!-- Buttons for Live View and Video View -->
          <div class="d-flex justify-content-between">
            <a href="{{ $portfolio->live_link }}" class="btn btn-outline-warning mt-2" style="width: 48%;" target="_blank">View Live</a>
            <a href="{{ $portfolio->video_link }}" class="btn btn-outline-warning mt-2" style="width: 48%;" target="_blank">View Video</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  

  <!-- About Section -->
  <section id="about">
    <h1 class="text-center mb-5" style="font-weight: bold;">About Me</h1>
    <div class="content d-flex justify-content-between align-items-center">
        <div class="hero-text" style="max-width: 60%;">
            <h3 style="font-weight: bold;">Hi, I Am Md. Boni Amin</h3>
            <p style="font-weight: normal;">
                As a dedicated and skilled <strong>Web Developer</strong> with expertise in <strong>PHP</strong>, <strong>Laravel</strong>, <strong>JavaScript</strong> (including <strong>React.js</strong>, <strong>Vue.js</strong>), <strong>jQuery</strong>, <strong>Bootstrap</strong>, and <strong>HTML/CSS</strong>, I specialize in building dynamic, responsive, and high-performance web applications. With experience across diverse technologies and frameworks, I strive to create seamless user experiences and robust back-end systems.
                <br><br>
                In addition to my front-end and back-end development skills, I have extensive experience with <strong>WordPress</strong>, allowing me to deliver custom websites and themes that align with both business needs and user expectations. I am also proficient in <strong>MS Office</strong> for project documentation and reporting, and use <strong>Figma</strong> for UI/UX design, ensuring that designs are not only visually appealing but also user-friendly and intuitive.
                <br><br>
                My goal is always to blend creative design with functional code to deliver solutions that are efficient, scalable, and impactful. I thrive in collaborative environments and am always eager to learn new technologies, improve my skills, and contribute to the success of each project I work on.
            </p>
        </div>
        <div class="hero-img" style="flex-shrink: 0; margin-left: 50px;">
            <img src="https://via.placeholder.com/300" alt="Profile Picture" style="width: 300px; height: 300px; border-radius: 50%; border: 5px solid #f39c12;">
        </div>
    </div>
</section>


  <!-- Skills Section -->
  <section id="skills">
    <h3 class="text-center mb-4" style="font-weight: bold;">My Skills</h3>
    <div class="row">
      <div class="col-md-4 text-center mb-3">
        <div class="progress-circle" id="php-progress" data-percentage="90" data-color1="#FF5733" data-color2="#F39C12" data-color3="#C70039">
          <p>90%</p>
        </div>
        <p>PHP</p>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="progress-circle" id="laravel-progress" data-percentage="85" data-color1="#28A745" data-color2="#007bff" data-color3="#FFD700">
          <p>85%</p>
        </div>
        <p>Laravel</p>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="progress-circle" id="js-progress" data-percentage="80" data-color1="#E74C3C" data-color2="#8E44AD" data-color3="#2980B9">
          <p>80%</p>
        </div>
        <p>JavaScript</p>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="progress-circle" id="react-progress" data-percentage="75" data-color1="#F39C12" data-color2="#E74C3C" data-color3="#9B59B6">
          <p>75%</p>
        </div>
        <p>React.js</p>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="progress-circle" id="mysql-progress" data-percentage="90" data-color1="#3498DB" data-color2="#2ECC71" data-color3="#E74C3C">
          <p>90%</p>
        </div>
        <p>MySQL</p>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="progress-circle" id="wordpress-progress" data-percentage="95" data-color1="#007BFF" data-color2="#F39C12" data-color3="#2C3E50">
          <p>95%</p>
        </div>
        <p>WordPress</p>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="progress-circle" id="html-progress" data-percentage="100" data-color1="#FF5733" data-color2="#FFC300" data-color3="#C70039">
          <p>100%</p>
        </div>
        <p>HTML</p>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="progress-circle" id="css-progress" data-percentage="90" data-color1="#8E44AD" data-color2="#F39C12" data-color3="#2980B9">
          <p>90%</p>
        </div>
        <p>CSS-3</p>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="progress-circle" id="bootstrap-progress" data-percentage="85" data-color1="#FF1493" data-color2="#FFD700" data-color3="#28A745">
          <p>85%</p>
        </div>
        <p>Bootstrap</p>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="progress-circle" id="vue-progress" data-percentage="70" data-color1="#F39C12" data-color2="#8E44AD" data-color3="#2980B9">
          <p>70%</p>
        </div>
        <p>Vue.js</p>
      </div>
      <div class="col-md-4 text-center mb-3">
        <div class="progress-circle" id="computer-fundamental-progress" data-percentage="80" data-color1="#FF6347" data-color2="#32CD32" data-color3="#00BFFF">
          <p>80%</p>
        </div>
        <p>Computer Fundamentals</p>
      </div>
    </div>
  </section>


   <!-- Contact Section -->
   <section class="contact-section py-5" id="contact">
    <h2  class="text-center mb-4" style="font-weight: bold;">Contact With Me</h2>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-form p-4 border rounded shadow">
            <h2 class="text-center mb-4">Get in Touch</h2>

            <form action="{{ url('/contact') }}" method="POST">
              @csrf
              <div class="mb-3">
                  <label for="name" class="form-label">Your Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
              </div>
          
              <div class="mb-3">
                  <label for="email" class="form-label">Your Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
              </div>
          
              <div class="mb-3">
                  <label for="message" class="form-label">Your Message</label>
                  <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message" required></textarea>
              </div>
          
              <button type="submit" class="btn btn-primary w-100">Send Message</button>
          </form>
          </div>
        </div>

        <!-- Social Media Section -->
        <div class="col-md-6 text-center">
          <h3>Follow Me</h3>
          <div class="social-links">
            <a href="https://www.facebook.com/md.meadtang.7" class="mx-2"><i class="fab fa-facebook"></i></a>
            <a href="https://www.linkedin.com/in/md-boni-amin-365900333/" class="mx-2"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/boniamin4444" class="mx-2"><i class="fab fa-github"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection

  <script>



    // Intersection Observer to trigger progress bar animations on scroll into view
    document.addEventListener("DOMContentLoaded", () => {
      const progressCircles = document.querySelectorAll(".progress-circle");
      const options = {
        root: null,
        threshold: 0.5 // Trigger when 50% of the element is in view
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            const circle = entry.target;
            const percentage = parseInt(circle.getAttribute("data-percentage"));
            const color1 = circle.getAttribute("data-color1") || "#007bff";
            const color2 = circle.getAttribute("data-color2") || "#f39c12";
            const color3 = circle.getAttribute("data-color3") || "#28a745";

            let currentProgress = 0;

            // Set initial background with a gradient
            circle.style.background = `conic-gradient(${color1} 0% ${currentProgress}%, ${color2} ${currentProgress}% 66%, ${color3} ${currentProgress}% 100%)`;

            // Gradually animate progress from 0% to target
            const interval = setInterval(() => {
              if (currentProgress < percentage) {
                currentProgress++;
                // Dynamically update the progress with a conic gradient
                circle.style.background = `conic-gradient(${color1} 0% ${currentProgress}%, ${color2} ${currentProgress}% 66%, ${color3} ${currentProgress}% 100%)`;
                circle.querySelector('p').textContent = `${currentProgress}%`;
              } else {
                clearInterval(interval);
              }
            }, 20); // Adjust speed of the progress animation
          }
        });
      }, options);

      // Observe each progress circle
      progressCircles.forEach(circle => observer.observe(circle));
    });
  </script>

</body>
</html>
