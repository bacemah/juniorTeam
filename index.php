<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>document</title>
    <script
      src="https://kit.fontawesome.com/54a4ae632a.js"
      crossorigin="anonymous"
    ></script>
    <script defer src="script.js"></script>
  </head>
    <header class="header">
      <div class="navigator">
        <img src="img/logo.png" class="logo" />
        <nav class="nav">
          <a class="nav_link" href="#">Home</a>
          <a href="#"
            ><i
              class="fa-regular fa-user fa-flip-horizontal fa-sm nav_link"
              style="color: #dddddd"
            ></i
          ></a>
          <a href="#"
            ><i class="fa-solid fa-bag-shopping fa-sm nav_link" style="color: #dddddd"></i
          ></a>
        </nav>
      </div>
      <div class="header__title">
        <h1 class="header__text">
            <div class="comfort-or"> 
                <div class="highlight" data-aos="fade-right"
                data-aos-offset="350"
                data-aos-easing="ease-in-sine"
                data-aos-duration="1500">Comfort</div>
                <div data-aos="fade-left"
                data-aos-offset="350"
                data-aos-easing="ease-in-sine"
                data-aos-duration="2200">Or</div>
            </div>
            <div class="highlight chic" data-aos="fade-up"
            data-aos-anchor-placement="top-bottom" data-aos-duration="3000">Chic</div>
        </h1>
        <br>
        <h4 style="color:#333333">Our Unique Style Has It All.</h4>
        <button class="btn--text btn--scroll-to">Shop now &DownArrow;</button>
    </div>
    </header>
    <section class="section" id="section--2">
      <div class="container">
        <!--<div class="row align-items-center">
          <div class="col"><img src="/img/Coats.jpeg" /></div>
          <div class="col">2 of 3</div>
          <div class="col">3 of 3</div>
        </div>-->
        <div class="row">
          <div class="col-md-5 pad" data-aos="fade-right" data-aos-duration="1500">
            <div class="product-box position-relative">
              <img src="img/newcoats.jpg" alt="coats" class="img-fluid1" />
              <div class="category-btn">
                <button class="btn btn1 shadow-sm rounded-pill">
                  <span>COATS</span>
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-5 pad"data-aos="fade-left" data-aos-duration="1500">
            <div class="product-box position-relative">
              <img src="img/newhoodies.png" alt="sweats" class="img-fluid1" />
              <div class="category-btn">
                <button class="btn btn1 shadow-sm rounded-pill">
                  <span>HOODIES</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 pad">
            <div class="product-box position-relative"data-aos="fade-right" data-aos-duration="1500">
              <img src="img/newpants.jpg" alt="pants" class="img-fluid1" />
              <div class="category-btn">
                <button class="btn btn1 shadow-sm rounded-pill">
                  <span>PANTS</span>
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-5 pad" data-aos="fade-left" data-aos-duration="1500">
            <div class="product-box position-relative">
              <img src="img/newtshirts.jpg" alt="T-SHIRTS" class="img-fluid1" />
              <div class="category-btn">
                <button class="btn btn1 shadow-sm rounded-pill">
                  <span>T-SHIRTS</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        .
      </div>
    </section>
    <section class="section" id="section--3">
      <h1 class="section_title" data-aos="zoom-in-down" data-aos-duration="2000">Get the look</h1>
      <div class="categories">
        <div class="categories__tab-container">
          <button
            class="btn categories__tab categories__tab--1 categories__tab--active"
            data-tab="1" data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine"
            data-aos-duration="1000"
          >
            <span>Casual</span>
          </button>
          <button class="btn categories__tab categories__tab--2" data-tab="2" data-aos="zoom-in" data-aos-duration="2000">
            <span>Chic</span>
          </button>
          <button class="btn categories__tab categories__tab--3" data-tab="3" data-aos="fade-left"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine"
          data-aos-duration="1000">
            <span>Classy</span>
          </button>
        </div>

        <div
          class="categories__content categories__content--1 categories__content--active" data-aos="zoom-in" data-aos-duration="2000" 
        >
          <img
            src="img/Casual-outfit.jpg"
            alt="Casual Outfit"
            class="img-fluid"
          />
          <div class="product-card" style="top: 40%; left: 55%">
            <div class="card-flex">
              <img src="img/orange-hoodie.png" class="card-image" />
              <div>
                <h5>Orange Hoodie</h5>
                <p>Comfort Fit</p>
              </div>
            </div>
          </div>
          <div class="product-card" style="top: 75%; left: 15%">
            <div class="card-flex">
              <img src="img/white-pants.png" class="card-image" />
              <div>
                <h5>White Pants</h5>
                <p>Slim Fit</p>
              </div>
            </div>
          </div>
        </div>
        <div class="categories__content categories__content--2" data-aos="zoom-in" data-aos-duration="2000">
          <img src="img/luxpolos.png" alt="Sports Outfit" class="img-fluid" />
          <div class="product-card" style="top: 40%; left: 75%">
            <div class="card-flex">
              <img src="img/Red polo.png" class="card-image" />
              <div>
                <h5>Red Polo</h5>
                <p>Woman's Sport Chic</p>
              </div>
            </div>
          </div>
          <div class="product-card" style="top: 32%; left: 30%">
            <div class="card-flex">
              <img src="img/white polo.png" class="card-image" />
              <div>
                <h5>White Polo</h5>
                <p>Man's Sport Chic</p>
              </div>
            </div>
          </div>
          <div class="product-card" style="top: 80%; left: 35%">
            <div class="card-flex">
              <img src="img/jeans.png" class="card-image" />
              <div>
                <h5>Blue Jeans</h5>
                <p>Casual Jeans</p>
              </div>
            </div>
          </div>
        </div>
        <div class="categories__content categories__content--3" data-aos="zoom-in" data-aos-duration="2000">
          <img src="img/Models.jpg" alt="Classy Outfit" class="img-fluid" />
          <div class="product-card" style="top: 65%; left: 68%">
            <div class="card-flex">
              <img src="img/strpied-blazer.png" class="card-image" />
              <div>
                <h5>Stripes Blazer</h5>
                <p>Modern Fit</p>
              </div>
            </div>
          </div>
          <div class="product-card" style="top: 65%; left: 27%">
            <div class="card-flex">
              <img src="img/Woman-Blazer.png" class="card-image" />
              <div>
                <h5>Gray Blazer</h5>
                <p>Modern Fit</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="container"> 
          <div class="row">
              <div class="footer-col">
                  <h4>company</h4>
                  <ul>
                      <li><a href="#">about us</a></li>
                      <li><a href="#">our services</a></li>
                      <li><a href="#">privacy policy</a></li>
                      <li><a href="#">affiliate program</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>get help</h4>
                  <ul>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">shipping</a></li>
                      <li><a href="#">returns</a></li>
                      <li><a href="#">order status</a></li>
                      <li><a href="#">payment options</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>online shop</h4>
                  <ul>
                      <li><a href="#">watch</a></li>
                      <li><a href="#">bag</a></li>
                      <li><a href="#">shoes</a></li>
                      <li><a href="#">dress</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>follow us</h4>
                  <div class="social-links">
                      <a href="#"><i class="fa-brands fa-facebook" style="color: #cac4b9;"></i></a>
                      <a href="#"><i class="fa-brands fa-instagram" style="color: #cac4b9;"></i></a>
                      <a href="#"><i class="fa-brands fa-tiktok" style="color: #cac4b9;"></i></a>
                  </div>
              </div>
      </footer>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
  </body>
</html>
