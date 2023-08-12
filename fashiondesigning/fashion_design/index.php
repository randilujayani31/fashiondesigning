<!DOCTYPE html>
<html>
   <head>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@1,300&family=MuseoModerno:wght@100&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Grandstander&family=Kanit:ital,wght@0,500;0,700;1,300&family=MuseoModerno:wght@100&family=Rokkitt:wght@600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <title>Our Fashion Design Company</title>
      <style>
         /* Reset some default styles */
         * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         }

         /* Set a background color or image */
         body
         {
         background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(30,236,213,1) 47%, rgba(7,34,39,1) 94%);
         font-family: Arial, sans-serif;
         display: flex;
         flex-direction: column;
         }

         header {
         background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(50,179,213,1) 46%, rgba(7,34,39,1) 94%);         
         padding: 15px;
         text-align: center;
         position: fixed;
         top: 0;
         left: 0;
         right: 0;
         z-index: 1;
         }

         header nav a {
          font-family: Georgia, serif;
         padding-left: 5px;
         padding-right: 5px;
         font-size: 20px;
         text-decoration: none;
         color: black;
         cursor: pointer;
         }

         a:hover {
         background-color: black;
         border-radius: 5px;
         padding: 10px;
         color: whitesmoke;
         }

         .logo img {
         height: 80px;
         padding-bottom: 20px;
         }

         nav ul {
         list-style: none;
         margin: 0;
         }

         nav ul li {
         display: inline-block;
         margin-right: 10px;
         }

         nav ul li a {
         text-decoration: none;
         color: #fff;
         }

         /* Define the main section styles */
         .main {
         margin-right: auto;
         margin-left: auto;
         height: auto;
         font-family: Arial, sans-serif;
         max-width: 800px;
         width: 100%;
         padding: 20px;
         margin-top: 5%;
         /* Adjust the margin-top value to create space below the header */
         margin-bottom: 100px;
         /* Adjust the margin-bottom value to create space above the footer */
         display: flex;
         flex-direction: column;
         }

         section {
         margin-right: auto;
         margin-left: auto;
         height: auto;
         padding-top:20%;
         margin-top: -20%;
         text-align: center;
         text-align: justify;
         padding-bottom: 40px;
         width: 100%;
         max-width: 800px;
         display: flex;
         flex-direction: column;
         }

         section h2 {
         text-align: center;
         font-family: 'Grandstander', cursive;
         color: #0000A5;
         font-size: 30px;
         }

         section h3{
         padding-top: 20px;
         font-family: 'Ubuntu', sans-serif;
         color: #0000A5;
         font-size: 25px;
         }
@import url('https://fonts.googleapis.com/css?family=Berkshire+Swash');
section h1 {
    font-family: "Berkshire Swash", cursive;
    font-weight: bold;
    text-align: center;
    font-size: 40px;
    color: rgb(238, 169, 58);
    padding-top: 10%;
    text-shadow: rgb(60, 57, 57) 10px 9px 4px;
}


         section p {
         font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
         font-size: 25px;
         text-align: justify;
         padding-top: 10px;
         text-align: center;
         }

         .fa {
         padding: 20px;
         font-size: 30px;
         width: auto;
         text-align: center;
         text-decoration: none;
         margin: 5px 2px;
         border-radius: 10px;
         }

         .fa:hover {
         opacity: 0.7;
         }

         .fa-facebook {
         background: black;
         color: white;
         }

         .fa-twitter {
         background: black;
         color: white;
         }

         .fa-google {
         background: black;
         color: white;
         }

         .fa-linkedin {
         background: black;
         color: white;
         }

         .fa-youtube {
         background: black;
         color: white;
         }

         ul {
         list-style: none;
         align-items: center;
         text-align: center;
         }

         ul li {
         display: inline-block;
         }

         button {
         padding: 10px 20px;
         background-color: transparent;
         color: indianred;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         font-size: 16px;
         margin-top: 20px;
         align-items: center;
         text-align: center;
         position: relative;
         font-family: "Arial Black", Gadget, sans-serif;
         }

         button:hover {
         background-color: #45a049;
         }

         /* Define the footer styles */
         footer {
         background: linear-gradient(0deg, rgba(34, 193, 195, 1) 0%, rgba(164, 201, 153, 1) 49%, rgba(253, 187, 45, 1) 100%);
         color: #fff;
         padding: 20px;
         text-align: center;
         position: relative;
         left: 0;
         bottom: 0;
         width: 100%;    
         }

         
         /* Slideshow styles */
         .slideshow {
         width: 550px;
         height: 400px;
         position: relative;
         text-align: center;
         align-items: center;
         margin-bottom: 20px;
         margin-top: 20px;
         box-shadow: 0px 3px 27px 4px rgba(26,25,26,1);

         }

         .slideshow img {
         width: 750px;
         height: 400px;
         object-fit: cover;

         }

         .slideshow .slide {
         position: absolute;
         top: 0;
         left: 0;
         opacity: 0;
         transition: opacity 0.5s ease-in-out;
         }

         .slideshow .active {
         opacity: 1;
         }
                  
         .form-group {
         margin-bottom: 10px;
         }

         label {
         display: block;
         font-weight: bold;
         margin-bottom: 5px;
         }

         input[type="text"],
         input[type="email"] {
         width: 80%;
         padding: 10px;
         padding-right: 10px;
         margin-bottom: 10px;
         border-radius: 4px;
         border: 1px solid #ccc;
         }

         .form-container {
         width: 400px;
         margin: 0 auto;
         padding: 20px;
         border: 1px solid #ccc;
         height: 450px;
         margin-top: 10px;
         margin-bottom: 20px;
         background: #B4CE37;
background: -moz-radial-gradient(center, #B4CE37 0%, #A43D2C 39%, #252EC5 100%);
background: -webkit-radial-gradient(center, #B4CE37 0%, #A43D2C 39%, #252EC5 100%);
background: radial-gradient(ellipse at center, #B4CE37 0%, #A43D2C 39%, #252EC5 100%);        border-radius: 5px;
         box-shadow: 2px 5px 15px 5px #000000;
         }

         button[type="submit"] {
         padding: 10px 20px;
         background-color: black;
         color: white;
         border: none;
         border-radius: 4px;
         cursor: pointer;
         font-size: 16px;
         }
         button[type="submit"]:hover {
         background-color: #45a049;
         }
     
         #readmore{
         background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(0,151,242,0.6924019607843137) 50%, rgba(252,176,69,1) 100%);
         padding: 10px;
         font-size: 20px;
         border-radius: 10px;
         margin-top: 5px;
         margin-bottom: 10px;
         }

         .contact-details{
         font-family: 'Kanit', sans-serif;
         font-size: 15px;
         padding: 5px;
         }

         .snowflakes {
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         pointer-events: none;
         z-index: -1;
         }

         .snowflake {
         color: skyblue;
         font-size: 3em;
         will-change: transform;
         position: absolute;
         top: -10%;
         animation: snow 30s infinite linear;
         }

         @keyframes snow {
         0% {
         transform: translateY(0) rotate(0deg);
         }
         100% {
         transform: translateY(100vh) rotate(360deg);
         }
         }

         #gallery {
         text-align: center;
         }

         .categories {
         margin-bottom: 20px;
         }

         .category-btn {
         padding: 8px 16px;
         margin-right: 5px;
         background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(30, 65, 236, 1) 47%, rgba(7, 34, 39, 1) 94%);
         font-family: 'Kanit', sans-serif;
         border: 2px solid black;
         border-radius: 5px;
         cursor: pointer;
         color: ghostwhite;
         font-size: 15px;
         }

         .category-btn.active {
         background: black;}

         .photos {
         display: flex;
         flex-wrap: wrap;
         justify-content: center;
         }

         .photos img {
         width: 600px;
         }

         .photo {
         position: relative;
         margin: 10px;
         z-index: -1;
         }

      </style>


     background-color: #0056b3;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">//smooth scrolling
         $(document).ready(function(){
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {
         
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();
         
              // Store hash
              var hash = this.hash;
         
              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){
           
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
         });
      </script>
      <script type="text/javascript">  // Rest of your code...
         window.addEventListener('DOMContentLoaded', (event) => {
           var slides = document.querySelectorAll('.slide');
           var currentSlide = 0;
         
           function showSlide(n) {
             for (var i = 0; i < slides.length; i++) {
               slides[i].classList.remove('active');
             }
             slides[n].classList.add('active');
           }
         
           function nextSlide() {
             currentSlide = (currentSlide + 1) % slides.length;
             showSlide(currentSlide);
           }
         
           function previousSlide() {
             currentSlide = (currentSlide - 1 + slides.length) % slides.length;
             showSlide(currentSlide);
           }
         
           setInterval(nextSlide, 3000); // Change slide every 3 seconds
         });
      </script>
 function validateForm() {
            var name = document.forms["contactForm"]["name"].value;
            var email = document.forms["contactForm"]["email"].value;
            var phone = document.forms["contactForm"]["phone"].value;
            var message = document.forms["contactForm"]["message"].value;

            var namePattern = /^[a-zA-Z ]*$/;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!name.match(namePattern)) {
                alert("Name must contain only letters and spaces");
                return false;
            }

            if (!email.match(emailPattern)) {
                alert("Invalid email format");
                return false;
            }

            // You can add additional validation for phone if needed

            if (message.includes("<") || message.includes(">")) {
                alert("Message cannot contain HTML tags");
                return false;
            }

            return true;
        }
    </script>
	// Example JavaScript code (you might need to adjust this based on your setup)
function updateItem(itemId) {
    document.getElementById("item_id").value = itemId;
    document.getElementById("action").value = "update";
}

function deleteItem(itemId) {
    document.getElementById("item_id").value = itemId;
    document.getElementById("action").value = "delete";
}

   </head>
   <body>
      <header>
         <div class="logo">
            <img src="image/5.jpg" alt="Fashion Designing Logo">
         </div>
         <nav>
            <a href="#home" >Home</a>
            <a href="#about" >About</a>
            <a href="#services" >Services</a>
            <a href="#portfolio" >Portfolio</a>
            <a href="#contact" >Contact Us</a>
            <a href="#gallery" >Gallery</a>
         </nav>
      </header>
      <div class="main">
         <section id="home">
            <h1>Welcome to My Fashion Design Company</h1>
<br><br>

            <div class="slideshow">
               <img class="slide active" src="image/1.jpg" alt="Slide 1">
               <img class="slide" src="image/2.jpg" alt="Slide 2">
               <img class="slide" src="image/3.jpg" alt="Slide 3">
            </div>
            <p>We will design any type of dresses you prefer. The only thing you have to do is share your needs with us. We will do our best to make your product great.</p>
            
         </section><br><br><br><br><br>
         <section id="about">
            <h2>About</h2><br>
            <p>Professional Fashion Designer. WTR Fashion Designing Offer a wide rage of customize fashion Solutions. We provide a wide range of fashion solutions. Trusted fashion rental suppliers in Sri Lanka. Wedding Planning. Fashion Suppliers Sri Lanka. Meetings & Exhibitions. </p>
         </section><br><br><br><br><br>
         <section id="services">
            <h2>Services</h2>
            <p>At L.G.R.J.Lindapitiya, we offer a range of comprehensive fashion design services tailored to meet the unique needs of our clients. With our expertise in creative design, craftsmanship, and attention to detail, we strive to bring your fashion aspirations to life. Our services include:</p>
            <button id="toggleButton">Read More...</button>
            <!-- Additional information to be toggled -->
            <div id="additionalInfo" style="display: none;">
               <div id="readmore">
                  <h3>Custom Design</h3>
                  <p>We specialize in creating custom-designed garments that are crafted exclusively for you. From elegant evening gowns to stylish suits, our team of experienced designers will work closely with you to understand your vision and create a personalized piece that reflects your style and personality.</p>
                  <h3>Collection Development</h3>
                  <p>For fashion brands and retailers, we offer collection development services. Our team will collaborate with you to conceptualize and create cohesive collections that align with your brand identity. From trend research and sketching to fabric selection and sample production, we provide end-to-end support in bringing your collection to life.</p>
                  <h3>Alterations and Tailoring</h3>
                  <p>We provide expert alterations and tailoring services to ensure your garments fit you perfectly. Whether you need a hemline adjustment, garment resizing, or intricate alterations, our skilled team will meticulously tailor your clothing to achieve the desired fit and silhouette.</p>
                  <h3>Consultation and Styling</h3>
                  <p>Our fashion consultants and stylists are available to offer expert advice and guidance on fashion trends, wardrobe planning, and styling. Whether you're attending a special event or looking to revamp your personal style, we can help you curate a wardrobe that is both fashionable and functional.</p>
                  <h3>Collaborations and Partnerships</h3>
                  <p>We welcome collaboration opportunities with like-minded individuals, brands, and organizations. If you're interested in partnering with us for fashion projects, runway shows, or creative collaborations, please get in touch to discuss how we can work together to create something extraordinary.</p>
                  <p>Contact us today to learn more about our services or to schedule a consultation. We look forward to working with you and bringing your fashion dreams to life!</p>
               </div>
            </div>
         </section><br><br><br><br>
         <section id="portfolio">
            <h2>Portfolio</h2>
            <p>
            <p>Welcome to the world of L.G.R.J.Lindapitiya, where art and fashion intersect to create stunning, unique designs that captivate and inspire. With a passion for creativity and an unwavering commitment to craftsmanship, L.G.R.J.Lindapitiya has established themselves as a prominent figure in the fashion industry.</p>
            <h3>Background and Experience</h3>
            <p>With a solid foundation in fashion design education and training, L.G,R.J.Lindapitiya brings a wealth of expertise to every creation. Their journey began with formal education at Kelaniya University of SriLanka, where they honed their skills and developed a keen eye for detail. Following their education, L.G.R.J.Lindapitiya gained valuable experience working with renowned fashion houses and collaborating with industry professionals, further refining their craft.</p>
            <h3>Design Philosophy</h3>
            <p>At the heart of L.G.R.J.Lindapitiya's designs lies a commitment to artistry and innovation. Drawing inspiration from , their designs seamlessly blend classic elements with modern aesthetics. With meticulous attention to fabric selection, impeccable tailoring, and exquisite embellishments, each piece reflects their dedication to creating garments that evoke beauty, confidence, and self-expression.</p>
            <h3>Brand Values</h3>
            <p>L.G.R.J.Lindapitiya's brand is built on a foundation of values that extend beyond the world of fashion. With a deep respect for sustainability and ethical production practices, they strive to create designs that minimize their impact on the environment. By prioritizing fair trade and responsible sourcing, L.G.R.J.Lindapitiya ensures that their creations are not only visually stunning but also socially conscious.</p>
            <h3>Collections and Achievements</h3>
            <p>Over the years, L.G.R.J.Lindapitiya has presented a series of breathtaking collections that have garnered critical acclaim and captivated fashion enthusiasts. From WTR Fashion Shows, their designs have graced prestigious runways and received accolades from industry insiders. Their commitment to excellence has earned them recognition, including [Mention Awards/Achievements].</p>
            <h3>Clientele</h3>
            <p>L.G.R.J.Lindapitiya has had the privilege of working with an array of esteemed clients, including national and international clients. From celebrities to influencers and fashion-forward individuals, their designs have resonated with a diverse clientele who appreciate the fusion of art and fashion.</p>
            <h3>Get in Touch</h3>
            <p>To learn more about L.G.R.J.Lindapitiya and explore their creations, please feel free to get in touch:</p>
            <p style="text-align: center;">Email: wtrfashiondesigning@gmail.com</p>
            <p style="text-align: center;">Phone: +94 234 567 789</p>
            <p style="text-align: center;">Follow us on social media:
            </p>
         </section>
         <ul>
            <li><a href="#" class="fa fa-facebook"></a>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-google"></a></li>
            <li><a href="#" class="fa fa-linkedin"></a></li>
            <li><a href="#" class="fa fa-youtube"></a></li>
            </li>
         </ul>
         <br><br><br><br><br><br><br>
         <section id="contact">
            <h2>Contact Us</h2>
            <br>
            <div class="form-container">
               <form name="contactForm" onsubmit="return validateForm()" method="post" action="process_form.php">
                  <div class="form-group">
                     <label for="name">Name:</label>
                     <input type="text" id="name" name="name" required>
                  </div>
                  <div class="form-group">
                     <label for="email">Email:</label>
                     <input type="email" id="email" name="email" required>
                  </div>
                  <div class="form-group">
                     <label for="phone">Phone:</label>
                     <input type="text" id="phone" name="phone" required>
                  </div>
	<div class="form-group">
                     <label for="message">Message:</label>
                     <input type="text" id="message" name="message" required>
                  </div>
                  <button type="submit" value="Submit">Submit</button>
               </form>
            </div>
            <br><br>
         </section><br><br>

<section id="contact">
    <h2>Project Management</h2>
    <br>
<div class="form-container">
    <form name="contactForm" action="crud.php" method="POST">
        <table>
            <tr>
                <td>ID:</td>
                <td><input type="text" name="id"></td>
            </tr>
            <tr>
                <td>Title:</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>Description:</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <td>Image:</td>
                <td><input type="text" name="image"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit" name="submit1" value="insert">Submit</button>
                    <button type="submit" name="submit2" value="delete">Delete</button>
                    <button type="submit" name="submit3" value="update">Update</button><br>
                    <button type="submit" name="submit4" value="display">Display</button>
                    <button type="submit" name="submit5" value="search">Search</button>
                </td>
            </tr>
        </table>
    </form>
</div>
</section><br><br><br><br><br>

<section>
<div class="main">      
        <input type="checkbox" id="chk" aria-hidden="true">

            <div class="signup">
                <form method="POST" action="login_process2.php">
                    <label for="chk" aria-hidden="true">Sign up</label><br>
                    
                    <input type="email" name="email" placeholder="Email or Number" required="">
                    <input type="password" name="pwd" placeholder="Password" required="">
                    <button type="submit" name="signup" id="signup">Sign up</button>
                </form>
            </div><br><br>

            <div class="login">
                <form method="POST" action="login_process2.php">
                    <label for="chk" aria-hidden="true">Login</label><br>
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="password" name="pwd" placeholder="Password" required="">
                    <button type="submit" name="login" id="login">Login</button>
                </form>
            </div>
    </div>
</section>

         <section id="gallery">
            <h2>Our Gallery</h2>
            <br><br>
            <div class="categories"  >
               <button class="category-btn active" data-category="all">All</button>
               <button class="category-btn" data-category="Sarees">Sarees</button>
               <button class="category-btn" data-category="Gawns">Gawns</button>
               <button class="category-btn" data-category="Office">Office Wear</button>
               <button class="category-btn" data-category="Bridal">Bridal Wear</button>
               <button class="category-btn" data-category="Casual">Casual Wear</button>
               <button class="category-btn" data-category="Mens">Mens Wear</button>
            </div>
            <div class="photos" >
               <div class="photo Sarees">
                  <img src="image/sarees/16.jpg" alt="Sarees Photo 1">
               </div>
               <div class="photo Sarees">
                  <img src="image/sarees/27.jpg" alt="Sarees Photo 2">
               </div>
               <div class="photo Sarees">
                  <img src="image/sarees/25.jpg" alt="Sarees Photo 3">
               </div>
               <div class="photo Sarees">
                  <img src="image/sarees/10.jpg" alt="Sarees Photo 4">
               </div>
               <div class="photo Gawns">
                  <img src="image/gawns/13.jpg" alt="Gawns Photo 1">
               </div>
               <div class="photo Gawns">
                  <img src="image/gawns/14.jpg" alt="Gawns Photo 2">
               </div>
               <div class="photo Gawns">
                  <img src="image/gawns/20.jpg" alt="Gawns Photo 3">
               </div>
               <div class="photo Gawns">
                  <img src="image/gawns/15.jpg" alt="Gawns Photo 4">
               </div>
               <div class="photo Office">
                  <img src="image/office/12.jpg" alt="Office Photo 1">
               </div>
               <div class="photo Bridal">
                  <img src="image/bridal/22.jpg" alt="Bridal Photo 1">
               </div>
               <div class="photo Bridal">
                  <img src="image/bridal/23.jpg" alt="Bridal Photo 2">
               </div>
               <div class="photo Bridal">
                  <img src="image/bridal/24.jpg" alt="Bridal Photo 3">
               </div>
               <div class="photo Bridal">
                  <img src="image/bridal/16.jpg" alt="Bridal Photo 4">
               </div>
               <div class="photo Casual">
                  <img src="image/casual/26.jpg" alt="Casual Photo 1">
               </div>
               <div class="photo Casual">
                  <img src="image/casual/17.jpg" alt="Casual Photo 2">
               </div>
               <div class="photo Casual">
                  <img src="image/casual/29.jpg" alt="Casual Photo 3">
               </div>
               <div class="photo Mens">
                  <img src="image/mens/18.jpg" alt="Mens Photo 1">
               </div>
               <div class="photo Mens">
                  <img src="image/mens/26.jpg" alt="Mens Photo 2">
               </div>
            </div>
         </section>
      </div>
      <footer>
         <div class="contact-details">
            <h3>Contact Details</h3>
            <p>Address: No.7,Flower road,Colombo,SriLanka</p>
            <p>Phone: +94 113 678 456</p>
            <p>Email: wtrfashiondesigning@gmail.com</p>
            <p>Website: www.wtrfashiondesigning.com</p>
         </div>
         <ul>
            <li><a href="#" class="fa fa-facebook"></a>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#" class="fa fa-google"></a></li>
            <li><a href="#" class="fa fa-linkedin"></a></li>
            <li><a href="#" class="fa fa-youtube"></a></li>
            </li>
         </ul>
      </footer>
      <div class="snowflakes" aria-hidden="true">
         <div class="snowflake">
            ❅
         </div>
         <div class="snowflake">
            ❅
         </div>
         <div class="snowflake">
            ❅
         </div>
         <!-- Add more snowflakes here -->
      </div>
      <!-- 
         <h3>Quick Links</h3>
         <br>
               <ul>
                 <li><a href="#">Latest Collections</a></li>
                 <li><a href="#">Fashion Trends</a></li>
                 <li><a href="#">Customer Reviews</a></li>
                 <li><a href="#">FAQ</a></li>
               </ul><br>
         
         
         
         
         
         <div class="centered">
         <h1>Interactive Elements</h1>
         
           
         </div>
           
      <a class="button" href="#">Click me</a> -->
      <script>
         const categoryButtons = document.querySelectorAll('.category-btn');
         const photos = document.querySelectorAll('.photo');
         
         // Add click event listener to each category button
         categoryButtons.forEach((button) => {
         button.addEventListener('click', () => {
         // Remove 'active' class from all buttons
         categoryButtons.forEach((btn) => btn.classList.remove('active'));
         // Add 'active' class to the clicked button
         button.classList.add('active');
         
         // Get the selected category
         const selectedCategory = button.getAttribute('data-category');
         
         // Show or hide photos based on the selected category
         photos.forEach((photo) => {
           if (selectedCategory === 'all') {
             photo.style.display = 'block'; // Show all photos
           } else {
             const categories = photo.getAttribute('data-categories').split(' ');
             if (categories.includes(selectedCategory)) {
               photo.style.display = 'block'; // Show photos in the selected category
             } else {
               photo.style.display = 'none'; // Hide photos not in the selected category
             }
           }
         });
         });
         });// Add event listeners to category buttons
         const categoryBtns = document.querySelectorAll('.category-btn');
         categoryBtns.forEach((btn) => {
         btn.addEventListener('click', filterPhotos);
         });
         
         // Filter photos based on selected category
         function filterPhotos() {
         const category = this.getAttribute('data-category');
         const photos = document.querySelectorAll('.photo');
         
         // Show all photos if category is 'all', otherwise show photos matching the category
         photos.forEach((photo) => {
         if (category === 'all' || photo.classList.contains(category)) {
           photo.style.display = 'block';
         } else {
           photo.style.display = 'none';
         }
         });
         
         // Update active category button
         categoryBtns.forEach((btn) => {
         btn.classList.remove('active');
         });
         this.classList.add('active');
         }
      </script>
      <script type="text/javascript">
         // Optional: You can add more snowflakes dynamically
         for (let i = 0; i < 5; i++) {
         createSnowflake();
         }
         
         function createSnowflake() {
         const snowflake = document.createElement('div');
         snowflake.innerHTML = '❅';
         snowflake.classList.add('snowflake');
         snowflake.style.left = `${Math.random() * 100}%`;
         snowflake.style.animationDuration = `${Math.random() * 10 + 2}s`;
         document.querySelector('.snowflakes').appendChild(snowflake);
         }
         
      </script>
      <script type="text/javascript">
         // Get the toggle button element
         const toggleButton = document.getElementById('toggleButton');
         
         // Get the additional information element
         const additionalInfo = document.getElementById('additionalInfo');
         
         // Add a click event listener to the toggle button
         toggleButton.addEventListener('click', function() {
           // Toggle the visibility of the additional information
           if (additionalInfo.style.display === 'none') {
             additionalInfo.style.display = 'block';
           } else {
             additionalInfo.style.display = 'none';
           }
         });
      </script>
	<script>
    // Function to handle delete action
    function deleteItem() {
        document.getElementById('action').value = 'delete';
        document.contactForm.submit();
    }
</script>
<script>
        const actionSelect = document.getElementById('action');
        const confirmPasswordField = document.getElementById('confirmPassword');

        actionSelect.addEventListener('change', () => {
            if (actionSelect.value === 'register') {
                confirmPasswordField.style.display = 'block';
            } else {
                confirmPasswordField.style.display = 'none';
            }
        });
    </script>
   </body>
</html>