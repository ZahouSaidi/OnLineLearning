<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formation</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
  />
  <style>
    /* Base Styles */
    body {
      font-family: "Roboto", sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #fafafa;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
      padding: 1rem;
      border-bottom: 1px solid #ddd;
    }

    .logo h1 {
      font-size: 1.5rem;
      font-weight: bold;
      color: #3f51b5;
      margin: 0;
    }

    nav ul {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      margin-right: 1rem;
    }

    nav ul li a {
      text-decoration: none;
      color: #333;
      padding: 5px 10px;
      transition: color 0.3s ease;
    }

    nav ul li a:hover {
      color: #3f51b5;
    }

    .search-container {
      display: flex;
      align-items: center;
    }

    .search-icon {
      width: 24px;
      height: 24px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-right: 10px;
    }

    .search-icon svg {
      fill: #333;
    }

    #search-input {
      padding: 5px 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .form-title {
      text-align: center;
      margin: 40px 0;
      font-size: 2rem;
      color: #3f51b5;
    }

    /* Intro Section */
    .intro, .Content {
      max-width: 600px;
      margin: 0 auto 40px;
      padding: 20px;
      background-color: #f1f1f1;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .intro h2, .Content h2 {
      font-size: 1.5rem;
      color: #3f51b5;
      margin-bottom: 20px;
    }

    .intro p, .Content p {
      line-height: 1.5;
      color: #555;
    }

    .intro img {
      max-width: 100%;
      height: auto;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .Content h3 {
      margin-top: 20px;
      font-size: 1.25rem;
      color: #3f51b5;
    }

    .about {
      
      margin: 0 auto;
      background-color: #f1f1f1;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .about p {
      line-height: 1.5;
      color: #555;
    }

    /* Form Styles */
    .form-container {
      max-width: 600px;
      margin: 0 auto 40px;
      background-color: #f5f5f5;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .form-container h2 {
      font-size: 1.5rem;
      color: #3f51b5;
      margin-bottom: 20px;
      text-align: center;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    .nice-form-group {
      margin-bottom: 20px;
    }

    .nice-form-group label {
      display: block;
      margin-bottom: 5px;
      color: #555;
    }

    .nice-form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button[type="submit"] {
      background-color: #3f51b5;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #303f9f;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 767.98px) {
      .form-container, .intro, .Content, .about {
        width: 100%;
        padding: 10px;
      }

      .form-container h2, .intro h2, .Content h2 {
        font-size: 1.25rem;
      }

      .form-container button {
        padding: 10px;
      }

      .content-container {
        flex-direction: column;
      }
    }

    .input-container {
      position: relative;
      display: flex;
      align-items: center;
    }

    .input-container span {
      position: absolute;
      left: 10px;
      color: #aaa;
      font-size: 1.2rem;
      pointer-events: none;
    }

    .input-container input {
      padding-left: 36px;
    }

    .content-container {
      display: flex;
      justify-content: space-between;
      gap: 20px;
      margin-bottom: 40px;
    }

    .intro, .Content {
      flex: 1;
      max-width: calc(50% - 10px);
    }
    /* Footer Styles */
    footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
      margin-top: 40px;
    }

    .footer-container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .footer-info, .footer-social {
      margin: 20px;
    }

    .footer-info h3, .footer-social h3 {
      margin-bottom: 10px;
    }

    .footer-info p, .footer-social p {
      margin: 5px 0;
    }

    .footer-info a, .footer-social a {
      color: #ffc107;
      text-decoration: none;
    }

    .footer-info a:hover, .footer-social a:hover {
      text-decoration: underline;
    }

    @media (max-width: 767.98px) {
      .footer-container {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
    <body class="font-sans antialiased">
        <div class="bg-gray-50 text-black/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
                    <div class="logo">
    <h1>Formation</h1>
  </div>
  <nav>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="#program">PROGRAM</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="d">Cours</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
  <div class="search-container">
    <div class="input-container">
      <div class="search-icon">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.1-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
        </svg>
      </div>
      <input type="text" id="search-input" placeholder="Search" />
    </div>
  </div>
</header>

<h1 class="form-title">
  Programs of Excellence, Short Duration, and Certificates
</h1>

<!-- Main Content Container -->
<div class="content-container">
  <!-- Intro Section -->
  <a id="program"></a>
  <div class="intro">
    <h2>PROGRAM</h2>
    <img class="img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjrCi0Wp8z9yUcGFiMjsnV-QfrZrSP5stAbd48quJSJw&s" alt="Photo de programmation">
    <p>The website offers a comprehensive range of web development courses covering the most essential languages and technologies in the field. Whether you're a beginner looking to learn the basics or an experienced developer wanting to deepen your skills, our programs are designed for you.</p>
    <p>Our courses will teach you the fundamental principles of web development, including creating and structuring web pages with HTML, styling and layout with CSS, and enhancing websites with JavaScript. You'll also have the opportunity to explore powerful programming languages like Java, C, and C++ to expand your skills and prepare for more advanced projects.</p>
    <p>Each training module is designed to guide you step by step through key concepts, with practical examples and real-world projects to reinforce your understanding. Our goal is to provide you with the skills and knowledge needed to succeed in the world of web development, whether you're starting a career, launching your own project, or simply deepening your passion for programming.</p>

    <h3>OBJECTIVES</h3>
    <ul>
      <li>Master essential web development languages, including HTML, CSS, and JavaScript.</li>
      <li>Explore advanced programming languages such as Java, C, and C++ to broaden your skills.</li>
      <li>Learn to create interactive and responsive user interfaces.</li>
      <li>Understand the basic principles of web design and software architecture.</li>
      <li>Practice website development through practical projects and guided exercises.</li>
    </ul>

    <h3>TARGET AUDIENCE</h3>
    <p>Our training is accessible to everyone, regardless of your current skill level and professional goals. Whether you're a complete beginner or an experienced developer looking to enhance your skills, our courses are designed to help you achieve your objectives.</p>

    <h3>REQUIREMENTS</h3>
    <p>No prior programming experience is necessary for our beginner-level courses. However, a good understanding of basic computer science and familiarity with using a computer and the Internet are recommended. For our advanced courses, prior knowledge of programming languages and web technologies can be beneficial but is not mandatory. Our programs are designed to be accessible to all, regardless of your current skill level.</p>
  </div>

  <!-- Content of the Training Section -->
  <div class="Content">
    <h2>Content of the training:</h2>

    <h3>First Quarter (Front-end Developer):</h3>
    <p>During the first quarter, learners will focus on front-end development, acquiring the fundamental skills to create attractive and functional user interfaces.</p>
    <ul>
      <li>Month 1: In-depth learning of HTML and CSS for creating basic layouts.</li>
      <li>Month 2: Deepening knowledge in CSS and introduction to JavaScript to make web pages more dynamic and interactive.</li>
      <li>Month 3: Intensive practice in building concrete projects using HTML, CSS, and JavaScript. Introduction to JavaScript frameworks for a more efficient approach to front-end development.</li>
    </ul>

    <h3>Second Quarter (Full Stack Developer):</h3>
    <p>The second quarter of the training focuses on full-stack development, allowing learners to acquire the skills necessary to design complete web applications, from front-end design to back-end logic management.</p>
    <ul>
      <li>Months 4-5: Introduction to back-end development with the choice of a server-side programming language and exploration of basic concepts, including database management.</li>
      <li>Months 5-6: Deepening knowledge in the chosen language and introduction to back-end frameworks to accelerate the development process.</li>
      <li>Months 7-8: Advanced practice with the selected back-end framework, integration of front-end and back-end to create complete and functional web applications. Finalization of projects and deployment on online servers for real-world experience.</li>
    </ul>

    <h3>Third Quarter (Tools and Additional Skills):</h3>
    <ul>
      <li>Month 9: Learning Git. This month is divided into two parts: the first part covers the basics of Git, and the second part focuses on practical projects using Git. This allows learners to understand not only the theoretical concepts but also to apply them in real projects.</li>
      <li>Month 10: UI/UX Design. In addition to learning basic concepts, include case studies and practical exercises to allow learners to apply their knowledge. Encourage them to create wireframes and mockups, as well as to conduct usability tests to improve their design skills.</li>
      <li>Month 11: Web Security</li>
    </ul>
  </div>
</div>
<a id="about"></a>
<h2><center>About</center></h2>
<div class="about">
  <p>
    Welcome to our online training platform dedicated to providing comprehensive learning experiences. At our site, you'll find a wide range of courses tailored to various skill levels and interests. Whether you're looking to enhance your professional skills or pursue personal development goals, we have something for everyone. Our platform offers interactive courses led by experienced instructors, supplemented with video tutorials to enrich your learning experience. Upon completion of each course, you'll have the opportunity to earn certifications to validate your newly acquired knowledge and skills. Join us on our journey to empower individuals through accessible and engaging online education.
  </p>
</div>
<a id="contact"></a>
<footer>
    <div class="footer-container">
      <div class="footer-info">
        <h3>Contact Information</h3>
        <p>Email: <a href="mailto:yazidizaho@gmail.com">yazidizaho@gmail.com</a></p>
        <p>Phone: <a href="tel:54654738">54654738</a></p>
        <p>Office Location: Enfidha Sousse</p>
      </div>
      <div class="footer-social">
        <h3>Follow Us</h3>
        <p>
          <a href="https://www.facebook.com/onlinelearning" target="_blank">Facebook</a> |
          <a href="https://www.instagram.com/onlinelearning" target="_blank">Instagram</a> |
          <a href="https://wa.me/54654738" target="_blank">WhatsApp</a>
        </p>
      </div>
    </div>
  </footer>
</body>
</html>