<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>King Richie Realty</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&family=Playfair+Display&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="header position-relative">
    <div class="slideshow-container">
      <div class="slideshow-image active" style="background-image: url('http://googleusercontent.com/file_content/0');"></div>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100 top-0">
      <div class="container-fluid p-4">
        <a class="navbar-brand" href="#">
          CHRISTIE'S
          <span class="d-block">INTERNATIONAL REAL ESTATE</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav align-items-center">
            <li class="nav-item">
              <a class="nav-link text-white mx-3" href="#">Buy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-3" href="#">Rent</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-3" href="#">Sell</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-3" href="#">Agents & Offices</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white mx-3" href="#">Explore</a>
            </li>
            <li class="nav-item ms-lg-3">
              <a class="btn btn-custom-contact px-4 py-2" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="content-overlay position-absolute w-100 h-100 d-flex flex-column justify-content-center align-items-center text-white text-center">
      <h1 class="main-heading mb-4">Find Your Luxury Home</h1>
      <div class="search-bar-container w-50">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search by Location or Agent" aria-label="Search">
          <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
          </span>
        </div> 
      </div>
    </div>

    <div class="pause-button position-absolute">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pause-fill" viewBox="0 0 16 16">
        <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z"/>
      </svg>
    </div>
    <div class="address-info position-absolute">
      169 FIESTA WAY, FORT LAUDERDALE, FLORIDA &rarr;
    </div>

  </header>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>