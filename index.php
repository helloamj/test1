<!Doctype html>
<head>
    <TItle>
        WeBlog
    </TItle>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
      
          <a class="navbar-brand" href="home.html" color="white"><h3><b>&nbsp&nbsp&nbspWeBlog</b></h3></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
           
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Tech</a></li>
                    <li><a class="dropdown-item" href="#">DSA</a></li>
                    <li><a class="dropdown-item" href="#">STL</a></li>
                    <li><a class="dropdown-item" href="#">OOPS</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Privacy</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Terms and Condition</a>
                </li>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">&nbsp&nbsp
                  <form class="d-flex"> 
                      <input class="form-control m-auto" style="width:400px" type="search" placeholder="Search" aria-label="Search" >
                      <button class="btn btn-outline-success" type="submit" style=" height: 39px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>
                  <ul class="navbar-nav me-right mb-2 mb-lg-0">
              <li class="nav-item dropdown" style="left: 100%;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
      </svg> Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="http://localhost/WeBlog/Login1.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
        <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
      </svg> Login/Sign Up</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="http://localhost/WeBlog-main/suggestion box.php">Suggestions</a></li>
                </ul>
              </li>
      
            </ul>
      
      
          </div>
        </div>
      </nav>
      <div class="banner shadow-none p-3 mb-5 bg-dark" style="height: 380px; color:white ;">
        <h1 class="css-1a6ercr" style="font-size: 125px;">WeBlog</h1><br><h2>Everything You Need to Start Blogging as a Developer...</h2><br><a href="Login1.php"><button>&nbsp&nbspWrite a Blog</button></a>
    </div>
    <div id="change">
      <div class="container">
        <div class="text-center my-5">
          <h1 style="color:white">Bootstrap 5 - Blog Posts Grid Layout</h1>
          <hr style="color:white"/>
        </div>
  
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card mb-5 shadow-sm">
              <img src="imgs/a.jpg" class="img-fluid" />
  
              <div class="card-body">
                <div class="card-title">
                  <h2>This is the blog title</h2>
                </div>
                <div class="card-text">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deleniti corporis quis ab. Exercitationem et quibusdam
                    impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                    maxime facere, quod harum aliquid in...
                  </p>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                  >Read More</a
                >
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card mb-5 shadow-sm">
              <img src="imgs/b.jpg" class="img-fluid" />
  
              <div class="card-body">
                <div class="card-title">
                  <h2>This is the blog title</h2>
                </div>
                <div class="card-text">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deleniti corporis quis ab. Exercitationem et quibusdam
                    impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                    maxime facere, quod harum aliquid in...
                  </p>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                  >Read More</a
                >
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card mb-5 shadow-sm">
              <img src="imgs/c.jpg" class="img-fluid" />
  
              <div class="card-body">
                <div class="card-title">
                  <h2>This is the blog title</h2>
                </div>
                <div class="card-text">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deleniti corporis quis ab. Exercitationem et quibusdam
                    impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                    maxime facere, quod harum aliquid in...
                  </p>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                  >Read More</a
                >
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card mb-5 shadow-sm">
              <img src="imgs/d.jpg" class="img-fluid" />
  
              <div class="card-body">
                <div class="card-title">
                  <h2>This is the blog title</h2>
                </div>
                <div class="card-text">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deleniti corporis quis ab. Exercitationem et quibusdam
                    impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                    maxime facere, quod harum aliquid in...
                  </p>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                  >Read More</a
                >
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card mb-5 shadow-sm">
              <img src="imgs/e.jpg" class="img-fluid" />
  
              <div class="card-body">
                <div class="card-title">
                  <h2>This is the blog title</h2>
                </div>
                <div class="card-text">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deleniti corporis quis ab. Exercitationem et quibusdam
                    impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                    maxime facere, quod harum aliquid in...
                  </p>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                  >Read More</a
                >
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card mb-5 shadow-sm">
              <img src="imgs/f.jpg" class="img-fluid" />
  
              <div class="card-body">
                <div class="card-title">
                  <h2>This is the blog title</h2>
                </div>
                <div class="card-text">
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Deleniti corporis quis ab. Exercitationem et quibusdam
                    impedit? Sint vitae labore nulla sit, dignissimos non tempore,
                    maxime facere, quod harum aliquid in...
                  </p>
                </div>
                <a href="#" class="btn btn-outline-primary rounded-0 float-end"
                  >Read More</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>