<?php


namespace app\widgets;


use yii\bootstrap\Widget;

class SwiperWidget extends Widget
{
    /*
     * Configuration
     * */
    public $config = [];
    public $_config = [
        'slides' => 'lorem ipsum dolor'
    ];
    /*
     * Layouts
     * */
    public $layouts = [];
    public $_layouts = [
    ];

    public function asset()
    {
        $this->fileCss('https://unpkg.com/swiper/css/swiper.min.css');
        $this->fileJs('https://unpkg.com/swiper/js/swiper.min.js');
    }

    public function codes()
    {
        $main = <<<HTML
<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
       {slideDiv}
       <div class="swiper-slide">{slides}</div>
       
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>   
HTML;

        /* $slides = '';
         foreach ($this->_config['data'] as $image)
             $slides .= strtr($this->layouts['slides'], [
                 '{slides}' => $image
             ]);*/


        $this->htm = strtr($this->_layouts['main'], [
            '{slideDiv}' => 'asd'
        ]);

        $this->js = <<<JS
$(document).ready(function () {
  var mySwiper = new Swiper ('.swiper-container', {
    direction: 'horizontal',
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
  })
});
JS;
    }
}
