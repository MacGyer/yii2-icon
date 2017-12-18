<?php

namespace common\components\iconhelper\lib;

use macgyer\yii2icon\fontawesome\helpers\FontawesomeIconHelper;
use Yii;
use yii\base\NotSupportedException;
use yii\base\Object;

class BaseIconHelper
{
    public $tag = 'span';
    public $options = [];

    public function render()
    {
        throw new NotSupportedException('The method ' . __METHOD__ . ' must be overriden by child class.');
    }

    /**
     * @param $name
     * @param array $config
     * @return FontawesomeIconHelper|Object
     */
    public static function getInstance($name, $config = [])
    {
        $config['name'] = $name;
        $config['class'] = get_called_class();

        /* @var $instance \macgyer\yii2icon\fontawesome\helpers\FontawesomeIconHelper */
        $instance = Yii::createObject($config);

        return $instance;
    }
}
