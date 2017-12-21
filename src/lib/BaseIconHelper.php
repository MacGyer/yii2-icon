<?php

namespace macgyer\yii2icon\lib;

use macgyer\yii2icon\fontawesome\helpers\FontawesomeIconHelper;
use Yii;
use yii\base\NotSupportedException;
use yii\base\UnknownMethodException;

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

    public static function __callStatic($name, $arguments)
    {
        if (!(strpos($name, 'fa') === 0)) {
            throw new UnknownMethodException("The method '$name' does not exist' in '" . get_called_class() . "'");
        }

        $methodParts = preg_split('/(?=[A-Z])/', $name, -1, PREG_SPLIT_NO_EMPTY);
        $fullIconName = '';

        $i = count($methodParts) - 1;
        while ($i >= 1) {
            $iconName = strtolower($methodParts[$i]);
            $fullIconName = "-$iconName$fullIconName";
            $i--;
        }

        $fullIconName = substr($fullIconName, 1);
        return self::getInstance($fullIconName);
    }
}
