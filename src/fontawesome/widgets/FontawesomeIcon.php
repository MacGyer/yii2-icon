<?php

namespace macgyer\yii2icon\fontawesome\widgets;

use macgyer\yii2icon\fontawesome\helpers\FontawesomeIconHelper;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class FontawesomeIcon extends Widget
{
    public $options = [];

    public function init()
    {
        parent::init();
    }

    public function run()
    {
        $name = ArrayHelper::remove($this->options, 'name', null);
        if (!$name) {
            return '';
        }

        return FontawesomeIconHelper::getInstance($name, $this->options)->render();
    }
}
