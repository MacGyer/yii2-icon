<?php
/**
 * @link https://github.com/MacGyer/yii2-icon
 * @copyright Copyright (c) 2017 ... MacGyer for pluspunkt coding
 * @license https://github.com/MacGyer/yii2-icon/blob/master/LICENSE
 */

namespace macgyer\yii2icon\fontawesome\widgets;

use macgyer\yii2icon\fontawesome\assets\FontawesomeAsset;
use macgyer\yii2icon\fontawesome\helpers\FontawesomeIconHelper;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

/**
 * FontawesomeIcon provides an alternative way to use FontawesomeIconHelper.
 *
 * Please refer to [[\macgyer\yii2-icon\helpers\FontawesomeIconHelper|FontawesomeIconHelper]] for details on the available
 * config options.
 *
 * @author Christoph Erdmann
 * @package widgets
 */
class FontawesomeIcon extends Widget
{
    /**
     * @var array the HTML attributes for the widget container tag.
     * @see [yii\helpers\BaseHtml::renderTagAttributes()](http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#renderTagAttributes()-detail)
     * for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();
        FontawesomeAsset::register($this->getView());
    }

    /**
     * Executes the widget.
     *
     * @return string the rendered markup.
     */
    public function run()
    {
        $name = ArrayHelper::remove($this->options, 'name', null);
        if (!$name) {
            return '';
        }

        return FontawesomeIconHelper::getInstance($name, $this->options)->render();
    }
}
