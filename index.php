





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" type="image/png" href="img/icon.png" />

    <link
      href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="section1style.css" />
    <title>document</title>
    <script defer src="script.js"></script>
  </head>
  <body>
    <header class="header">
      <div class="header__title">
        <h1>
          <span class="highlight">Comfort</span>
          <span> Or</span><br />
          <span class="header__text highlight">Chic</span>
        </h1>

        <h4>Our Unique Style Has It All.</h4>
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
          <div class="col-md-5 pad">
            <div class="product-box position-relative">
              <img src="img/Coats.jpeg" alt="coats" class="img-fluid1" />
              <div class="category-btn">
                <button class="btn btn-white shadow-sm rounded-pill">
                  <span>COATS</span>
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-5 pad">
            <div class="product-box position-relative">
              <img src="img/Sweats.jpg" alt="sweats" class="img-fluid1" />
              <div class="category-btn">
                <button class="btn btn-white shadow-sm rounded-pill">
                  <span>SWEATS</span>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 pad">
            <div class="product-box position-relative">
              <img src="img/Pants.jpg" alt="pants" class="img-fluid1" />
              <div class="category-btn">
                <button class="btn btn-white shadow-sm rounded-pill">
                  <span>PANTS</span>
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-5 pad" style="""">
            <div class="product-box position-relative">
              <img src="img/t_shirts.jpg" alt="T-SHIRTS" class="img-fluid1" />
              <div class="category-btn">
                <button class="btn btn-white shadow-sm rounded-pill">
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
      <div class="categories">
        <div class="categories__tab-container">
          <button
            class="btn categories__tab categories__tab--1 categories__tab--active"
            data-tab="1"
          >
            <span>Casual</span>
          </button>
          <button class="btn categories__tab categories__tab--2" data-tab="2">
            <span>Chic</span>
          </button>
          <button class="btn categories__tab categories__tab--3" data-tab="3">
            <span>Classy</span>
          </button>
        </div>

        <div
          class="categories__content categories__content--1 categories__content--active"
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
        <div class="categories__content categories__content--2">
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
        <div class="categories__content categories__content--3">
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
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-1 pad">
            <img src="img/slider/casual.jpg" class="img-mode">
          </div>
          <div class="col-md-1 pad">
            <img src="img/slider/casual1.jpg" class="img-mode">
          </div>
          <div class="col-md-1 pad">
            <img src="img/slider/casual2.jpg" class="img-mode">
          </div>
          <div class="col-md-1 pad">
            <img src="img/slider/casual3.jpg" class="img-mode">
          </div>
          <div class="col-md-1 pad">
            <img src="img/slider/casual4.jpg" class="img-mode">
          </div>
          <div class="col-md-1 pad">
            <img src="img/slider/casual5.jpg" class="img-mode">
          </div>
        </div>
      </div>
    </section>
     <div class="gallery-wrap"  >
        <img id ="prev" src="prev.png">
        <div class="gallery">
            <div>
                <span class="container">
                    <img src="90s.jpg" class="image">
                    <span class="overlay">21.99€</span>
                </span>
                <span class="container">
                    <img src="90s1.jpg" class="image" >
                    <span class="overlay">11.55€</span>
                </span>
                <span class="container">
                    <img src="90s2.jpg" class="image" >
                    <span class="overlay">17.86€</span>
                </span>
                <span class="container">
                    <img src="90s3.jpg" class="image" >
                    <span class="overlay">7.99€</span>
                </span>
                <span class="container">
                    <img src="90s4.jpg" class="image" >
                    <span class="overlay">18.99€</span>
                </span>
                <span class="container">
                    <img src="90s5.jpg" class="image" >
                    <span class="overlay">15€</span>
                </span>
            
        </div>
        <div>
            <span class="container">
                <img src="90s6.jpg" class="image">
                <span class="overlay">13.75€</span>
            </span>
            <span class="container">
                <img src="90s7.jpg"  class="image">
                <span class="overlay">6.53€</span>
            </span>
            <span class="container" >
                <img src="90s8.jpg">
                <span class="overlay">18.45€</span>
            </span>
        
            <span class="container">
                <img src="90s9.jpg" class="image">
                <span class="overlay">14.99€</span>
            </span>
            <span class="container">
                <img src="90s10.jpg" class="image">
                <span class="overlay">9.99€</span>
            </span>
            <span class="container">
                <img src="90s11.jpg" class="image">
                <span class="overlay">14.63€</span>
            </span>
        
    </div>
        
    </div>
    <img  id="next" src="suiv.png">
    </div>
  </body>
</html>