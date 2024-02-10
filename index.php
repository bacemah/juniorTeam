





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
  <body>
  <header class="header">
      <div class="navigator">
        <img src="img/logo.png" class="logo" />
        <nav class="nav">
          <a class="nav_link" href="#">Home</a>
          <a href="#"
            ><i class="fa-solid fa-bag-shopping fa-sm nav_link" style="color: #dddddd"></i
          ></a>
          <div class="heart-container">
            <a href="#"
            ><i
              class="fa-solid fa-heart fa-sm nav_link heart-btn"
              style="color: #dddddd"
            ></i
            ></a>
          </div>
          <a><i class="fa-solid fa-cart-shopping fa-sm nav_link btn--show-modal" style="color:#dddddd"></i></a>
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

     <!-- section 1 -->

    <div class="modal-cart hidden">
      <div class="cart-title-close">
      <h2 class="modal__header">
        My Shopping <span class="highlight">Cart</span>
      </h2>
      <button class="btn--close-modal">&times;</button>
    </div>
      
      <table class="table-responsive table-hover px-4">
  <thead>
    <tr>
      <th scope="col">Description</th>
      <th scope="col">Size</th>
      <th scope="col">Quantity</th>
      <th scope="col">Remove</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">
       <div class="description" data-id="$id">
       <img class ="imgheart" src="img/Casual-outfit.jpg" width="60px">
  
       <div class="eltDetails">
         <h2>$eltdescription</h2>
         <div class="item-details">
         <a href="#">details</a> 
         </div>
      </div>
      </div>
      </th>
      <td>XXL</td>
      <td>
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary minusBtn" type="button" style="background-color: #bbb;">-</button>
  </div>
  <input type="text" class="form-control" value="1">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary plusBtn" type="button" style="background-color: #bbb;">+</button>
  </div>
</div>
      </td>
      <td><button class="removeBtn">&times</button></td>
      <td>3d</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Test2</td>
      <td>Teest2</td>
      <td>&times</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Test3</td>
      <td>Teest3</td>
      <td>&times</td>
    </tr>
  </tbody>
</table>
    </div>
    <div class="overlay hidden"></div>
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
    <div class="video">
      <div class="over-video">
        <img src="img/logo2.png" >
        <button type="button" class="btn btn-light">Get The Look &rarr;</button>
      </div>
      <video loop autoplay muted>
        <source src="img/Vidéo sans titre ‐ Réalisée avec Clipchamp (1).mp4" type="video/mp4">
      </video>
    </div>
  </section>


          <!-- section 2 -->
        <section id="tranding">
        <div class="container">
            <h3 class="text-center section-subheading">FASHION</h3>
            <h1 class="text-center section-heading">Trending Clothes</h1>
        </div>
        <div class="container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="IMAGE-landscape-default-fill-6036e701-f3a8-4145-af1f-1b11cc90b1af-default_0.jpg" alt="image1">
                        </div>
                        <div class="tranding-slide-conte
                            <h1 class="food-price">$500</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Jacket</h2>
                                 <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                    </div>
                                
                                 </h3>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="ph1.avif" alt="image1">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$350</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Dress</h2>
                                 <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                    </div>
                                
                                 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="ph2.avif" alt="image1">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$350</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Dress</h2>
                                 <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                    </div>
                                
                                 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="ph8.jpeg" alt="image1">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$188</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Sweater</h2>
                                 <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                    </div>
                                
                                 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="ph9.jpg" alt="image1">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$190</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Sweater</h2>
                                 <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                    </div>
                                
                                 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="ph5.jpg" alt="image1">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$200</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Sweater</h2>
                                 <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                    </div>
                                
                                 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="ph6.jpg" alt="image1">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$140</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Sweater</h2>
                                 <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                    </div>
                                
                                 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="ph10.webp" alt="image1">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$210</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Jeans</h2>
                                 <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                    </div>
                                
                                 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="ph13.webp" alt="image1">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$350</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Jacket</h2>
                                 <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                    </div>
                                
                                 </h3>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="photo11.jpg" alt="image1">
                        </div>
                        <div class="tranding-slide-content">
                            <h1 class="food-price">$450</h1>
                            <div class="tranding-slide-content-bottom">
                                <h2 class="food-name">Jacket</h2>
                                 <h3 class="food-rating">
                                    <span>4.5</span>
                                    <div class="rating">
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                      <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                       <ion-icon name="star"></ion-icon>
                                    </div>
                                
                                 </h3>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tranding-slide-control">
                    
                    <div class="swipper-button-prev slider-arrow">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </div>
                    <div class="swipper-button-next slider-arrow">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="style.js"></script>

















        <!-- section 3 -->
        <div class="navigation">
        <div id ="casual"><button>Casual</button></div>
        <div id ="vintage"><button>Vintage</button></div>
        <div id ="90's"> <button>90's</button></div>
    </div>
        <div class="gallery-wrap"   >
        <img id ="prev" src="prev.png">
        <div class="gallery">
            <div>
                <span class="containers">
                    <img src="casual.jpg" class="image">
                    <span class="overlay">16,59€</span>
                </span>
                <span class="containers">
                    <img src="casual1.jpg" class="image" >
                    <span class="overlay">17,99€</span>
                </span>
                <span class="containers">
                    <img src="casual2.jpg" class="image" >
                    <span class="overlay">17,49€</span>
                </span>
                <span class="containers">
                    <img src="casual3.jpg" class="image" >
                    <span class="overlay">15dt</span>
                </span>
                <span class="containers">
                    <img src="casual4.jpg" class="image" >
                    <span class="overlay">7,99€</span>
                </span>
                <span class="containers">
                    <img src="casual5.jpg" class="image" >
                    <span class="overlay">15.55€</span>
                </span>
            
        </div>
        <div>
            <span class="containers">
                <img src="casual6.jpg" class="image">
                <span class="overlay">9.99€</span>
            </span>
            <span class="containers">
                <img src="casual7.jpg"  class="image">
                <span class="overlay">8.99€</span>
            </span>
            <span class="containers" >
                <img src="casual8.jpg">
                <span class="overlay">12.05€</span>
            </span>
        
            <span class="containers">
                <img src="casual9.jpg" class="image">
                <span class="overlay">16.55€</span>
            </span>
            <span class="containers">
                <img src="casual10.jpg" class="image">
                <span class="overlay">12.99€</span>
            </span>
            <span class="containers">
                <img src="casual11.jpg" class="image">
                <span class="overlay">14.88€</span>
            </span>
        
    </div>
        
    </div>
    <img  id="next" src="suiv.png">
    </div> 
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
      <div class="containers"> 
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