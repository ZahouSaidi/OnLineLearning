<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight"></h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formation</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <style>
            body {
                font-family: "Roboto", sans-serif;
                margin: 0;
                padding: 20px;
            }

            header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: #f5f5f5;
                padding: 1rem;
            }

            .logo {
                font-size: 1.5rem;
                font-weight: bold;
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
            }

            .search-icon {
                width: 24px;
                height: 24px;
                border-radius: 50%;
                background-color: #aaa;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-right: 10px;
            }

            .search-icon path {
                fill: white;
            }

            header h1 {
                font-size: 2rem;
                color: #3f51b5;
            }

            .document-list {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
            }

            .document-list h2 {
                font-size: 1.5rem;
                color: #3f51b5;
                margin-bottom: 20px;
            }

            .document {
                margin-bottom: 20px;
                background-color: #f1f1f1;
                padding: 10px;
                border-radius: 5px;
            }

            .document h3 {
                font-size: 1.2rem;
                margin-bottom: 10px;
            }

            .document a {
                text-decoration: none;
                color: #333;
                background-color: #3f51b5;
                padding: 5px 10px;
                border-radius: 3px;
            }

            .document a:hover {
                background-color: #1a237e;
                color: white;
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
      }}
        </style>
    </head>
    <body>
        <header>
            <div class="logo">
                <h1>Formation</h1>
            </div>
            <nav>
    <ul>
        @auth
            <li><a href="dashboard">Home</a></li>
        @else
            <li><a href="/">Home</a></li>
        @endauth
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#program">PROGRAMS</a></li>
        <li><a href="documents">Cours</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</nav>
            <div class="search-container">
                <div class="search-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.1-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14zm7.52-3.9l-1.42 1.42-1.42-1.42C15.42 11.88 15 11.39 15 11c-1.01 0-2-.81-2-1.91v-1.8c0-1.1.81-2 1.91-2 1.1 0 2 .89 2 1.91v1.8C17 10.11 16.01 11.88 15.52 13.4z"
                        />
                    </svg>
                </div>
                <input
                    type="text"
                    id="search-input"
                    placeholder="Search"
                />
            </div>
        </header>

        <div class="document-list">
            <h2>Document List</h2>
            @if(Auth::check())
                <h2>Cours</h2>
                @foreach ($documents->where('type', 'cours') as $document)
                    <div class="document">
                        <h3>{{ $document->title }}</h3>
                        <a href="{{ route('documents.show', $document) }}">View</a>
                    </div>
                @endforeach

                <h2>Examens</h2>
                @foreach ($documents->where('type', 'examen') as $document)
                    <div class="document">
                        <h3>{{ $document->title }}</h3>
                        <a href="{{ route('documents.show', $document) }}">View</a>
                    </div>
                @endforeach
            @else
                <p><strong>Please log in first to view the courses.</strong></p>
            @endif
        </div>
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
    </x-app-layout>
