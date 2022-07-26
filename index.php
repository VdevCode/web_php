

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href='./src/style.css'  rel='stylesheet'>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>

      <!--header -->
    <section class="header__sub-menu">
        <div class="header__menu">
            <a href="">
               <img src="./image/logo1.png" alt="">
            </a>

            <ul id='show__menu'>
              <li class="main-active">Home</li>
              <li>Features</li>
              <li>About</li>
              <li>Contact</li>
            
            </ul>

            <div class="header__icons">
                <i class='bx bxs-star' id="darkmode"></i>
                <i class='bx bxs-user-detail' ></i>
                <i class='bx bx-cart-alt' ></i>
                <i class='bx bx-menu'  id='menu'></i>
            </div>
        </div>
      
    </section>


    <!-- main-->

    <section class="grid content">
        <div class="image__content">
            <img src="./image/background.png" alt="">

        </div>

        <div class="content__heading">
            <h1>Create Prespectives With Virtual Reality</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos beatae, eaque explicabo aliquam magnam quis error hic necessitatibus alias fuga!</p>
            <button class="btn">Explore Now</button>
        </div>
    </section>
      

    <!-- features-->


    <section class="features grid">
        <div class="features__container">
            <div class="features__img">
                <img src="./image/info-icon4.png" alt="">
            </div>
            <div class="features__text">
                <h4>Web Development</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, minus.</p>
               <a href="">
                <button class="btn blue">Check</button>
               </a>
            </div>
        </div>

        <div class="features__container">
            <div class="features__img">
                <img src="./image/info-icon5.png" alt="">
            </div>
            <div class="features__text">
                <h4>Web Development</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, minus.</p>
               <a href="">
                <button class="btn yellow">Check</button>
               </a>
            </div>
        </div>

        <div class="features__container">
            <div class="features__img">
                <img src="./image/info-icon6.png" alt="">
            </div>
            <div class="features__text">
                <h4>Web Development</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, minus.</p>
               <a href="">
                <button class="btn green">Check</button>
               </a>
            </div>
        </div>

        <div class="features__container">
            <div class="features__img">
                <img src="./image/info-icon7.png" alt="">
            </div>
            <div class="features__text">
                <h4>Web Development</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, minus.</p>
               <a href="">
                <button class="btn orange">Check</button>
               </a>
            </div>
        </div>

    </section>

    <!-- navbar -->

    <section class="grid navbar__content">
        <div class="content__heading">
            <h1>Start Tracking Your Statistics</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos beatae, eaque explicabo aliquam magnam quis error hic necessitatibus alias fuga!</p>
            <button class="btn blue">Read More</button>
        </div>
        <div class="image__content">
            <img src="./image/about.png" alt="">

        </div>
    </section>


    <!--contact -->
    <section class="contact">
        <div class="contact__heading">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, accusantium!</p>
        </div>
        <form action="user.php" method="post">
            <input type="text" name='user' placeholder="Your Name ..." required> 
            <input type="email" name='email' placeholder="Your Email ..." required> 
            <textarea name="message" id="" placeholder="Type Your Message Here ..."></textarea>
            <button type="submit" class="btn blue">Send</button>
        </form>
    </section>



    <script src=./src/index.js></script>

</body>
</html>