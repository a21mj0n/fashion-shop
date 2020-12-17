<?php
/* @var $this View */

/* @var $content string */

use app\assets\AppAsset;
use app\models\Category;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\web\View;

AppAsset::register($this);
$this->beginPage() ?>
  <!DOCTYPE html>
  <html lang="<?= Yii::$app->language ?>">

  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
      <?php $this->head() ?>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
  </head>

  <body>
  <?php $this->beginBody() ?>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header Section Begin -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="ht-left">
          <div class="mail-service">
            <i class=" fa fa-envelope"></i>
            hello.colorlib@gmail.com
          </div>
          <div class="phone-service">
            <i class=" fa fa-phone"></i>
            +65 11.188.888
          </div>
        </div>
        <a href="/"></a>
        <div class="ht-right">

            <?
            if (Yii::$app->user->isGuest) {
                ?> <a href="/site/login" class="login-panel"><i class="fa fa-user"></i>Login</a> <?
            } else {
                echo Html::a('Sign out', ['/site/logout'], [
                    'data-method' => 'post',
                    'class' => 'login-panel'
                ]);
            }

            ?>
          <div class="lan-selector">
            <select class="language_drop" name="countries" id="countries" style="width:300px;">
              <option value='yt' data-image="/web/img/flag-1.jpg" data-imagecss="flag yt"
                      data-title="English">English
              </option>
              <option value='yu' data-image="/web/img/flag-2.jpg" data-imagecss="flag yu"
                      data-title="Bangladesh">German
              </option>
            </select>
          </div>
          <div class="top-social">
            <a href="#"><i class="ti-facebook"></i></a>
            <a href="#"><i class="ti-twitter-alt"></i></a>
            <a href="#"><i class="ti-linkedin"></i></a>
            <a href="#"><i class="ti-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="inner-header">
        <div class="row">
          <div class="col-lg-2 col-md-2">
            <div class="logo">
              <a href="/">
                <img src="/web/img/logo.png" alt="">
              </a>
            </div>
          </div>
          <div class="col-lg-7 col-md-7">
            <div class="advanced-search">
              <!--              <button type="button" class="category-btn">All Categories</button>-->
              <div class="input-group">
                <input type="text" placeholder="What do you need?">
                <button type="button"><i class="ti-search"></i></button>
              </div>
            </div>
          </div>
          <div class="col-lg-3 text-right col-md-3">
            <ul class="nav-right">
              <li class="heart-icon">
                <a href="#">
                  <i class="icon_heart_alt"></i>
                  <span>1</span>
                </a>
              </li>
              <li class="cart-icon">
                <a href="#">
                  <i class="icon_bag_alt"></i>
                  <span>3</span>
                </a>
                <div class="cart-hover">
                  <div class="select-items">
                    <table>
                      <tbody>
                      <tr>
                        <td class="si-pic"><img src="/web/img/select-product-1.jpg" alt=""></td>
                        <td class="si-text">
                          <div class="product-selected">
                            <p>$60.00 x 1</p>
                            <h6>Kabino Bedside Table</h6>
                          </div>
                        </td>
                        <td class="si-close">
                          <i class="ti-close"></i>
                        </td>
                      </tr>
                      <tr>
                        <td class="si-pic"><img src="/web/img/select-product-2.jpg" alt=""></td>
                        <td class="si-text">
                          <div class="product-selected">
                            <p>$60.00 x 1</p>
                            <h6>Kabino Bedside Table</h6>
                          </div>
                        </td>
                        <td class="si-close">
                          <i class="ti-close"></i>
                        </td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="select-total">
                    <span>total:</span>
                    <h5>$120.00</h5>
                  </div>
                  <div class="select-button">
                    <a href="#" class="primary-btn view-card">VIEW CARD</a>
                    <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                  </div>
                </div>
              </li>
              <li class="cart-price">$150.00</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-item">
      <div class="container">
        <div class="nav-depart">
          <div class="depart-btn">
            <i class="ti-menu"></i>
            <span>All categories</span>
            <ul class="depart-hover">
                <?
                $categories = Category::find()
                    ->where([
                        'parent_id' => 0
                    ])
                    ->limit(5)
                    ->all();
                foreach ($categories as $category) : ?>
                  <li class="active">
                    <a href="/category/index?category-id=<?= $category->id ?>">
                        <?= $category->name ?>
                    </a>
                  </li>
                <? endforeach; ?>
            </ul>
          </div>
        </div>
        <nav class="nav-menu mobile-menu">
          <ul>
            <li class="active"><a href="./index.html">Home</a></li>
            <li><a href="./shop.html">Shop</a></li>
            <li><a href="#">Collection</a>
              <ul class="dropdown">
                <li><a href="#">Men's</a></li>
                <li><a href="#">Women's</a></li>
                <li><a href="#">Kid's</a></li>
              </ul>
            </li>
            <li><a href="./blog.html">Blog</a></li>
            <li><a href="./contact.html">Contact</a></li>
            <li><a href="#">Pages</a>
              <ul class="dropdown">
                <li><a href="./blog-details.html">Blog Details</a></li>
                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                <li><a href="./check-out.html">Checkout</a></li>
                <li><a href="./faq.html">Faq</a></li>
                <li><a href="./register.html">Register</a></li>
                <li><a href="./login.html">Login</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
      </div>
    </div>
  </header>
  <!-- Header End -->

  <?= $content ?>

  <!-- Footer Section Begin -->
  <footer class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-left">
            <div class="footer-logo">
              <a href="#"><img src="/web/img/footer-logo.png" alt=""></a>
            </div>
            <ul>
              <li>Address: 60-49 Road 11378 New York</li>
              <li>Phone: +65 11.188.888</li>
              <li>Email: hello.colorlib@gmail.com</li>
            </ul>
            <div class="footer-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 offset-lg-1">
          <div class="footer-widget">
            <h5>Information</h5>
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Checkout</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Serivius</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2">
          <div class="footer-widget">
            <h5>My Account</h5>
            <ul>
              <li><a href="#">My Account</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Shopping Cart</a></li>
              <li><a href="#">Shop</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="newslatter-item">
            <h5>Join Our Newsletter Now</h5>
            <p>Get E-mail updates about our latest shop and special offers.</p>
            <form action="#" class="subscribe-form">
              <input type="text" placeholder="Enter Your Mail">
              <button type="button">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-reserved">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="copyright-text">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script>
              All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                  aria-hidden="true"></i> by <a
                href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
            <div class="payment-pic">
              <img src="/web/img/payment-method.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer Section End -->
  <?
  Modal::begin([
      'header' => '<h3 class="text-center">Cart</h3>',
      'options' => [
          'id' => 'cartModal',
      ],
      'footer' => '<button id="continueBtn" type="button" class="btn btn-default">Continue</button> 
               <a href="/cart/view" class="btn btn-success">Checkout</a>'
  ]);
  Modal::end();
  ?>


  <?php $this->endBody() ?>
  </body>

  </html>
<?php $this->endPage() ?>