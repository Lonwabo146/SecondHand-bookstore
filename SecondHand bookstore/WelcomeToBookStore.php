<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Books Lover | Ebookstore</title>
    <link rel="stylesheet" href="style1.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?
      family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>
    <!------------------ Header ------------------>
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <a href="index.html">
              <img src="images/Books logo.jpg" alt="EbookStore-Logo"
            /></a>
          </div>
          <!----------  Nav Bar ------------------>
          <nav>
            <ul id="MenuItems">
              <li><a href="WelcomeToBookStore.php">Home</a></li>
              <li><a href="addtocart.php">Ebooks</a></li>
            </ul>
          </nav>
          <a href="cart.html">
            <img
              src="images/cart.png"
              alt="Shoping Cart"
              width="28px"
              height="28px"
              style="margin-left: 10px; margin-top: 15px"
            />
          </a>
          <img src="images/menu.png" class="menu-icon" onclick="menutoggle()" />
        </div>
        <div class="row">
          <div class="col-2">
            <h1>
              The world's knowledge at your disposal.<br />
              
            </h1>
            <p>
              
              All your college textbooks you need.<br/>
			  We have everything.
            </p>
            <a href="ebooks.php" class="btn">Explore Now &#x27F6;</a>
          </div>
          <div class="col-2">
            
          </div>
        </div>
      </div>
    </div>
   
    <!----------------featured Books -------------------->
    <div class="small-container">
      <h2 class="title">Featured Titles</h2>
      <div class="row">
        <div class="col-4">
          <a href="book-detail.html">
            <img src="images/Java Programming.jpg" alt="Book 4"
          /></a>
          <a href="book-detail.html"> <h4>Pro Java Programming</h4></a>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>R500</p>
        </div>
        <div class="col-4">
          <img src="images/JAVAscript.jpg" alt="Book 5" />
          <h4>Javascript</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>R700</p>
        </div>
        <div class="col-4">
          <img src="images/PHP and mysql.jpg" alt="Book 6" />
          <h4>PHP</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>R400</p>
        </div>
        <div class="col-4">
          <img src="images/Beginnning SQL Server for developers.jpg" alt="Book 7" />
          <h4>SQL</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>R350</p>
        </div>
      </div>
      <h2 class="title">Bestsellers</h2>
      <div class="row">
        <div class="col-4">
          <img src="images/Successful project management.jpg" alt="Book 8" />
          <h4>Successful project management</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>R800</p>
        </div>
        <div class="col-4">
          <img src="images/Scholarship textbook.jpg" alt="Book 9" />
          <h4>Scholarship</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>R600</p>
        </div>
        <div class="col-4">
          <img src="images/Systems design and analysis.jpg" alt="Book 10" />
          <h4>Systems design and analysis</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>R600</p>
        </div>
        <div class="col-4">
          <img src="images/web dev.jpg" alt="Book 11" />
          <h4>Web development</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>R600</p>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <img src="images/College Maths.jpg" alt="Book 12" />
          <h4>College Maths</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>R250</p>
        </div>
        <div class="col-4">
          <img src="images/Kotlin programming.jpg" alt="Book 13" />
          <h4>Kotlin programming</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>R600</p>
        </div>
        <div class="col-4">
          <img src="images/Public relations.jpg" alt="Book 14" />
          <h4>Public relations</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
          </div>
          <p>R800</p>
        </div>
        <div class="col-4">
          <img src="images/Guide to business law.jpg" alt="Book 15" />
          <h4>Business Law</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>R700</p>
        </div>
      </div>
    </div>
    <!------------------offer ------------>
    <div class="offer">
      <div class="small-container">
        <div class="row">
          <div class="col-2">
            <img src="images/offer-Book.jpg" class="offer-img" />
          </div>
          <div class="col-2">
            <p>Available on EbookStore</p>
            <br />
            <h2>I Don't Want To Die Poor</h2>
            <br />
            <small>
              Making Michael Arceneaux's I Don't Want to Die Poor required
              reading in universities across the country would help a lot of
              young people think twice about the promise that going to college
              at any cost is the only path to upward social mobility.
            </small>
            <a href="ebooks.php" class="btn">Buy Now &#8594;</a>
          </div>
        </div>
      </div>
    </div>
   
    <!-- ---------Javascript for toggle menu------------- -->
    <script>
      var MenuItems = document.getElementById("MenuItems");
      MenuItems.style.maxHeight = "0px";
      function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
          MenuItems.style.maxHeight = "200px";
        } else {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>
  </body>
</html>
