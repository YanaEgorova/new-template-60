<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <title>Shop</title>
</head>

<body>



  <div class="wrapper">
    <div class="header__wrapper">
      <div class="container">
        <header class="header">
          <a href="./shop.html" class="cart__btn cart__btn--desc">My Cart <span class="js_cart__span"></span></a>
          <a href="./index.html" class="header__logo logo js_website-name">website name</a>
          <button class="header__btn js_menu-btn">
            <span></span>
          </button>
          <nav class="nav js_menu">
            <ul class="nav__list">
              <li class="nav__item">
                <a href="./contacts.html" class="nav__link">Contact Us</a>
              </li>
              <li class="nav__item">
                <a href="./privacy.html" class="nav__link">Privacy Notice</a>
              </li>
              <li class="nav__item">
                <a href="./purchase.html" class="nav__link">Terms of Purchase</a>
              </li>
              <li class="nav__item">
                <a href="./return.html" class="nav__link">Return Policy</a>
              </li>
              <li class="nav__item">
                <a href="./shipping.html" class="nav__link">Shipping Policy</a>
              </li>
              <li class="nav__item">
                <a href="./use.html" class="nav__link">Terms of Use</a>
              </li>
              <li class="nav__item">
                  <a href="./shop.html" class="cart__btn">My Cart</a>
              </li>
            </ul>
          </nav>
        </header>
      </div>
    </div>

    <main class="main">
      <div class="thank-you__wrapper" >
        <section class="thank-you">
          <div class="container">
              <div class="block">
                  <img src="./img/thank6.png" alt="" class="img">
                <!-- <h1 class="title">Thank you</h1> -->
                <p class="text">Your order was completed successfully!</p>
                <?php if($_GET["order_id"]){ ?> 
      <p class="text" style="font-size: 3rem">Your Order ID is: <?php echo htmlspecialchars($_GET["order_id"]); ?></p>
    <?php } ?>
              </div>
          </div>
        </section>
    </div>
    </main>

    <div class="footer__wrapper">
      <footer class="footer">
        <div class="footer__top">
          <div class="container">
            <div class="footer__policies">
            <div class="footer__block">
              <p class="footer__subtitle">Policies</p>
              <ul class="sub-list list-col">
                <li class="item">
                  <a href="./contacts.html" class="footer__link">Contact Us</a>
                </li>
                <li class="item">
                  <a href="./return.html" class="footer__link">Return Policy</a>
                </li>
                <li class="item">
                  <a href="./purchase.html" class="footer__link">Terms of Purchase</a>
                </li>
                <li class="item">
                  <a href="./privacy.html" class="footer__link">Privacy Notice</a>
                </li>
                <li class="item">
                  <a href="./shipping.html" class="footer__link">Shipping Policy</a>
                </li>
                <li class="item">
                  <a href="./use.html" class="footer__link">Terms of Use</a>
                </li>
                <li class="item">
                  <a href="./cancellation.html" class="footer__link">Cancellation</a>
                </li>
              </ul>
            </div>
            <div class="footer__block footer__block--jus">
              <p class="footer__subtitle">Contact us</p>
              <ul class="sub-list">
                <li class="item item--df">
               
                  <a href="" class="footer__link js_website-email"></a>
                </li>
                <li class="item item--df">
                 
                  <a href="" class="footer__link js_website-phone"></a>
                </li>
                <li class="item item--df">
                  
                  <p class="text js_website-address"></p>
                </li>
              </ul>
       
            </div>
        
          </div>
          <div class="footer__block footer__block--df">
            <a href="./index.html" class="footer__logo logo js_website-name"></a>
            <p class="text text--mb js_website-corp"></p>
            <span class="footer__span">?? All rights reserved</span>
          </div>
          </div>
        </div>
      

       
  
      </footer>
  
  </div> 
  </div>

 
  <script type="module" src="./js/on-load.js"></script>
  <script type="module" src="./js/website-data.js"></script>
  <script>
    const menuBtn = document.querySelector('.js_menu-btn');
    const menu = document.querySelector('.js_menu');
    menuBtn.addEventListener('click', () => {
      menu.classList.toggle('open-menu');
      document.body.classList.toggle('open-menu');
    })
  </script>
</body>

</html>