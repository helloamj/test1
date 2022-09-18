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
      
          <a class="navbar-brand" href="index.html" color="white"><h3><b>&nbsp&nbsp&nbspWeBlog</b></h3></a>
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
                  </form>
              </ul>
                  <ul class="navbar-nav me-right mb-2 mb-lg-0">
      
      
              <li class="nav-item dropdown" style="left: 100%;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
      </svg> Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" id="login"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
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
        <center><h1 class="css-1a6ercr" style="font-size: 125px;">WeBlog</h1><br><h2>Everything You Need to Start Blogging as a Developer...</h2><br></center>
    </div>    <center>
<div class="container">
    <div class="row" style="color: white;">
        <div class="col-md-6 login-left">
            <h2 style="color: white">Login Here</h2>
            <form action="validation.php" method="post">
            <div class="form-group" style="
    margin-top: 30px;">
                    <input type="text" name="user" class="form-control" placeholder="Registered Email" required>
                </div>
                <div class="form-group" style="
    margin-top: 30px;">
                    <input type="password" name="password" placeholder="Password" class="form-control" required>
                </div><br>
                <button type="submit" class="btn btn-success">Login</button>
            </form>

        </div>
        <div class="col-md-6 login-right">
            <h2 style="color: white">Register Here</h2>
            <form action="registration.php" method="post">
            <div class="form-group" style="
    margin-top: 30px;">
                    <input type="text" name="user" placeholder="Email" class="form-control" required>
                </div>
                <div class="form-group" style="
    margin-top: 30px;">
                    <input type="password" placeholder="Password" name="password" class="form-control" required>
                </div><br>
                <button type="submit" class="btn btn-success">Register</button>
            </form>

        </div>
        </div>

</div>
</center>
<br>
</body>
</html>