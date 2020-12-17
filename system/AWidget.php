<?php


class AWidget extends \yii\bootstrap\Widget
{

    public $htm;
    public $css;
    public $js;

    public function run()
    {

        $this->asset();

        $this->codes();

        $this->register();

        return $this->htm;

    }

    public function asset ()
    {

    }

    public function codes ()
    {

    }

    private function register ()
    {
        $this->view->registerCss($this->css);
        $this->view->registerJs($this->js);
    }

}