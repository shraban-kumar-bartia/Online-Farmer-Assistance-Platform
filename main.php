<?php
// Start the session
session_start();

// Check if the user is not logged in, redirect to index.html
if (!isset($_SESSION["email"])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>krishan</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

<div class="loader"></div>
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
       

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#aboutus">about the platform</a>
            <a href="#category">category</a>
            <a href="#contact">contact</a>
            <ul>
                <li><a href="#features">features <i class="fa-solid fa-caret-down"></i></a>
                    <ul>
                        <li>
                            <a href="#" onclick="window.location.href='weather/currentLocationW/index.html'">weather</a><br>
                            <a href="http://192.168.169.55:5000">Prediction of Crop</a><br>
                            <a href="http://localhost:8501">Disease Detection</a><br />
                ><br />
                        </li>
                    </ul>
                </li>
            </ul>
            <a href="logout.php">logout</a>
        </nav>
    </header>

    <div class="logo">
        <img src="image/logo1.png" alt="" href>
</div>


    <!-- Home section start -->

    <section class="home" id="home">
      <div>
      <div class="heading1" data-aos="fade-right">
          <h1>Standing by farmers,</h1>
          <h1>growing together</h1>
          <h1>with every seed they plant.</h1>
        </div>

        <div class="para" data-aos="fade-right">
          <p>
            We partner with farmers to provide the tools, knowledge, and support
            needed for sustainable growth. By working together, we help them
            overcome challenges and achieve success. Together, we cultivate a
            future of abundance, one field at a time.
          </p>
        </div>

        <div>
          <button class="btn1" data-aos="fade-right">
            <p class="text">Get Started</p>
          </button>
        </div>
      </div>

      <div class="home-img" data-aos="fade-left">
        <img src="image/smile-farmer.png" alt="" />
      </div>
    </section>

<!-- <section class="home" id="home"></section>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="image/home-1.jpg" alt=""></div>
          <div class="swiper-slide"><img src="image/home55.jpg" alt=""></div>
          <div class="swiper-slide"><img src="image/home44.jpg" alt=""></div>
          <div class="swiper-slide"><img src="image/home33.jpg" alt=""></div>
          <div class="swiper-slide"><img src="image/home22.jpg" alt=""></div>
        </div>
        <div class="swiper-button-next"></div> 
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>

           <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
      var swiper = new Swiper(".mySwiper", {
        
        centeredSlides: true,
        autoplay: {
          delay: 7500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script> -->

    
    <!-- Home section start -->


    <!-- about us section  -->

    <section class="aboutus" id="aboutus">
    <div class="heading2">
        <h1>About us</h1>
        <p>
        We empower farmers with the tools and support they need to thrive, 
        fostering sustainable growth for a brighter agricultural future.
        </p>
      </div>
        <div class="content1" id="content">
            <img src="image/aboutus1.webp" alt="">
            <p>Welcome to our online farmer assistance and management system! At KRISHAN, we're committed to supporting 
                farmers by providing them with the tools and resources they need to succeed in today's dynamic agricultural
                landscape. Our platform offers a comprehensive suite of features designed to streamline farming processes.</p>
            <p>Our journey began with a simple yet powerful vision: to empower farmers with innovative digital solutions
                that enhance productivity, efficiency, and sustainability in agriculture. Recognizing the vital role of 
                farmers in feeding the world and contributing to rural economies, we set out to create a platform that 
                addresses the unique challenges faced by farmers and provides them with the tools and support them.</p>
        </div>
        <div class="content2" id="content">
            <img src="image/aboutus2.webp" alt="">
            <p>Through our interactive farming process visualizations, farmers can access step-by-step guides and tutorials 
                that cover everything from planting to harvesting. Additionally, our daily news updates keep farmers informed 
                about the latest trends and developments in agriculture, while our real-time weather updates provide invaluable 
                insights to help them plan and optimize their operations. With KRISHAN, farmers have a trusted partner 
                by their side, dedicated to helping them thrive in an ever-changing environment.</p>
        </div>
        
    </section>
    <div class="photo">
        <img src="image/aboutus3.jpg" alt="">
        </div>
    

    <!-- about section ends here -->


    <!-- category section start -->
    <section class="category" id="category">
    <div class="heading2">
        <h1>Process Of farming</h1>
        <p>
        Discover the step-by-step process of farming, from soil preparation and planting to nurturing crops and harvesting. Learn how each stage ensures a successful and sustainable yield.
        </p>
      </div>
        <div class="box-container">
            <div class="box">
                <img src="image/vegetables-farming.jpeg" alt="">
                <div class="uiverse" onclick="window.location.href='html/vegetables.html'">
                    <span class="tooltip">process of farming <i class="fa-solid fa-tree"></i></span>
                    <span class="item">
                        vagetables <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </div>
            </div>

            <div class="box">
                <img src="image/fruit-farming-.jpeg" alt="">
                <div class="uiverse" onclick="window.location.href='html/fruits.html'">
                    <span class="tooltip">process of farming <i class="fa-solid fa-tree"></i></span>
                    <span class="item">
                        fruits <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </div>
            </div>

            <div class="box">
                <img src="image/rice-farming-in-india.jpeg" alt="">
                <div class="uiverse" onclick="window.location.href='html/grains.html'">
                    <span class="tooltip">process of farming <i class="fa-solid fa-tree"></i></span>
                    <span class="item">
                        grains <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </div>
            </div>

            <div class="box">
                <img src="image/spice-farming-.jpeg" alt="">
                <div class="uiverse" onclick="window.location.href='html/masala.html'">
                    <span class="tooltip">process of farming <i class="fa-solid fa-tree"></i></span>
                    <span class="item">
                        masala <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </div>
            </div>

        </div>
    </section>
    <!-- category section end -->


<!-- 
    <section id="features" class="features">

        <div class="heading">
            <span>f</span>
            <span>e</span>
            <span>a</span>
            <span>t</span>
            <span>u</span>
            <span>r</span>
            <span>e</span>
            <span>s</span>
        </div>

        <div class="card">

            <div class="box">
                <img src="/image/banana.jpg" alt="">

            </div>

            <div class="box">
                <img src="/image/bringal.jpeg" alt="">

            </div>

            <div class="box">
                <img src="/image/bringal.jpeg" alt="">

            </div>

            <div class="box">
                <img src="/image/bringal.jpeg" alt="">

            </div>

        </div>
    </section> -->

    <!-- contact section start -->
    <section class="contact" id="contact">

        <div class="contact">
            <div class="container">
                <div class="content">
                    <div class="left-side">
                        <div class="address details">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="topic">Address</div>
                            <div class="text-one">GIET UNIVERESITY,GUNUPUR</div>
                        </div>
                        <div class="phone details">
                            <i class="fas fa-phone-alt"></i>
                            <div class="topic">Phone</div>
                            <div class="text-one">+91-9692391711</div>
                        </div>
                        <div class="email details">
                            <i class="fas fa-envelope"></i>
                            <div class="topic">Email</div>
                            <div class="text-one">krisan@company.com</div>
                        </div>
                    </div>
                    <div class="right-side">
                        <div class="topic-text">Send us a message</div>
                            <p>If you have any work from me or any types of quries related to my tutorial, you can send me
                               message from here. It's my pleasure to help you.</p>
                               <form action="mailto:shrabankumarbartia11@gmail.com" method="post" enctype="text/plain">
                                    <div class="inputBox">
                                        <input type="text" name="phone" placeholder="Phone Number">
                                    </div>
                                    
                                    <div class="inputBox">
                                        <input type="email" name="email" placeholder="Email"> 
                                    </div>

                                    <div class="inputBox">
                                        <input type="text" name="subject" placeholder="Subject">
                                    </div>

                                    <div class="inputBox">
                                    <textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
                                    </div>

                                    <div class="submit">
                                    <input type="submit" class="btn" value="Send Message" class="submit">
                                </div>

                            </form>
                        </div>
                </div>
            </div>
        </div>
        </section>

    <!-- contact section end -->

    <!-- footer section start -->
    <footer class="footer-distributed">

        <div class="footer-left">

            <!-- <h3>Company<span>logo</span></h3> -->
            <div class="logo-footer">
                <a href="#home"><img src="image/logo1.png" alt="" href="#"></a>
        </div>

            <p class="footer-links">
                <a href="#home" class="link-1">Home</a>

                <a href="#category">category</a>

                <a href="#aboutus">About us</a>
                <a href="#contact">Contact</a>
            </p>

            <p class="footer-company-name">Company Name © 2015</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa-solid fa-location-dot"></i>
                <p>GIET UNIVERESITY,GUNUPUR</p>
            </div>

            <div>
                <i class="fa-solid fa-phone"></i>
                <p>+919692391711</p>
            </div>

            <div>
                <i class="fa-solid fa-envelope"></i>
                <p><a href="mailto:support@company.com">krisan@company.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>THANK YOU FOR VISITING US.❤️❤️</span>
            </p>

            <div class="footer-icons">

                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-github"></i></a>

            </div>

        </div>

    </footer>
    <!-- footer section end -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    
    <!-- AOS Library JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script>
      // AOS initialization
      AOS.init({
        duration: 1300,
        once: true,
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>