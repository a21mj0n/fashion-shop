<?php
/* @var $this View */

/* @var $content string */

use app\assets\AppAsset;
use app\models\Category;
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
    <title>Fashi | Admin Page</title>
      <?php $this->head() ?>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mmenu-js@8.5.20/dist/mmenu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mburger-css@1.3.3/dist/mburger.min.css">
    <script src="https://cdn.jsdelivr.net/npm/mmenu-js@8.5.20/dist/mmenu.js"></script>
    <script>
    document.addEventListener(
      'DOMContentLoaded', () => {
        new Mmenu('#my-menu');
      },
    );
    </script>
    <style>
      a.mburger:hover, a.mburger:focus {
        color: unset;
      }

      td a:hover, td a:focus {
        color: unset;
      }

      a.login-panel {
        font-size: 19px !important;
      }

      .copyright {
        border: 1px solid #e5e5e5;
      }
    </style>
  </head>

  <body>
  <?php $this->beginBody() ?>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>
  <nav id="my-menu">
    <ul>
      <li><a href="/">Home Page</a></li>
      <li><span>Tables</span>
        <ul>
          <li><a href="/admin/product/index">Products</a></li>
          <li><a href="/admin/category/index">Categories</a></li>
          <li><a href="/admin/order/index">Orders</a></li>
          <li><a href="/admin/order-item/index">Order Items</a></li>
        </ul>
      </li>
  </nav>


  <div class="page">
    <!-- Header Section Begin -->
    <header class="header-section">
      <div class="header-top">
        <div class="container">
          <div class="ht-left">
            <div class="mail-service" style="padding-bottom: 0; padding-top: 0;">
              <a class="mburger" href="#my-menu">
                <b></b>
                <b></b>
                <b></b>
              </a>
              <a href="/">
                <img src="/web/img/logo.png" alt="Logo">
              </a>
            </div>
          </div>
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
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->

    <!-- Container -->
    <div class="container-fluid" style="height: 100vh;">
        <?= $content ?>
    </div>
    <!-- Container -->

    <!-- Footer Section Begin -->
    <div class="copyright copyright-reserved">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-dark font-weight-normal col-md-6">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              All rights reserved | This template is made with <i class="fa fa-heart-o text-danger"
                                                                  aria-hidden="true"></i> by <a
                href="https://colorlib.com" target="_blank">Colorlib</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
            <div class="payment-pic col-md-6">
              <img src="/web/img/payment-method.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Section End -->
  </div>

  <?php $this->endBody() ?>
  </body>

  </html>
<?php $this->endPage() ?>