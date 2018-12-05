<?php

namespace macgyer\yii2icon\lib;

use macgyer\yii2icon\fontawesome\helpers\FontawesomeIconHelper;
use Yii;
use yii\base\NotSupportedException;
use yii\base\UnknownMethodException;

/**
 * Class BaseIconHelper
 * @package macgyer\yii2icon\lib
 */
class BaseIconHelper
{
    /**
     * @var string the tag name for the icon
     */
    public $tag = 'span';

    /**
     * @var array the HTML attributes for the icon tag.
     * @see [yii\helpers\BaseHtml::renderTagAttributes()](http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#renderTagAttributes()-detail)
     * for details on how attributes are being rendered.
     */
    public $options = [];

    public function render()
    {
        throw new NotSupportedException('The method ' . __METHOD__ . ' must be overriden by child class.');
    }

    /**
     * Get the current instance for manipulation.
     *
     * @param string $name the icon name
     * @param array $config the object configuration
     * @return FontawesomeIconHelper|Object
     * @throws \yii\base\InvalidConfigException
     */
    public static function getInstance($name, $config = [])
    {
        $config['name'] = $name;
        $config['class'] = get_called_class();

        /* @var $instance \macgyer\yii2icon\fontawesome\helpers\FontawesomeIconHelper */
        $instance = Yii::createObject($config);

        return $instance;
    }

    /**
     * The magic to create an instance from the virtual method name.
     *
     * @param string $name the method name
     * @param mixed $arguments the method arguments
     * @return FontawesomeIconHelper|Object
     * @throws \yii\base\InvalidConfigException
     */
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
