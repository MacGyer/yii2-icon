<?php
/**
 * @link https://github.com/MacGyer/yii2-icon
 * @copyright Copyright (c) 2017 ... MacGyer for pluspunkt coding
 * @license https://github.com/MacGyer/yii2-icon/blob/master/LICENSE
 */

namespace macgyer\yii2icon\fontawesome\widgets;

use macgyer\yii2icon\fontawesome\helpers\FontawesomeIconHelper;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class FontawesomeIconLayer
 *
 * @author Christoph Erdmann
 * @package widgets
 */
class FontawesomeIconLayer extends Widget
{
    const ITEM_TYPE_ICON = 'icon';
    const ITEM_TYPE_TEXT = 'text';
    const ITEM_TYPE_COUNTER = 'counter';

    const COUNTER_POSITION_TOP_LEFT = 'top-left';
    const COUNTER_POSITION_TOP_RIGHT = 'top-right';
    const COUNTER_POSITION_BOTTOM_LEFT = 'bottom-left';
    const COUNTER_POSITION_BOTTOM_RIGHT = 'bottom-right';

    public $options = [];
    public $items = [];

    public function init()
    {
        parent::init();

        Html::addCssClass($this->options, ['widget' => 'fa-layers fa-fw']);
    }

    public function run()
    {
        $tag = ArrayHelper::remove($this->options, 'tag', 'span');
        $html[] = Html::beginTag($tag, $this->options);
        $html[] = $this->renderItems();
        $html[] = Html::endTag($tag);

        return implode("\n", $html);
    }

    protected function renderItems()
    {
        $items = [];

        foreach ($this->items as $itemConfig) {
            $itemType = ArrayHelper::remove($itemConfig, 'itemType', self::ITEM_TYPE_ICON);
            switch ($itemType) {
                case self::ITEM_TYPE_COUNTER:
                    $item = $this->renderCounterItem($itemConfig);
                    break;
                case self::ITEM_TYPE_TEXT:
                    $item = $this->renderTextItem($itemConfig);
                    break;
                default:
                    $item = $this->renderIconItem($itemConfig);
            }

            $items[] = $item;
        }

        return implode("\n", $items);
    }

    protected function renderIconItem($config = [])
    {
        $name = ArrayHelper::remove($config, 'name', null);
        if (!$name) {
            return '';
        }

        return FontawesomeIconHelper::getInstance($name, $config)->render();
    }

    protected function renderTextItem($config = [])
    {
        $tag = ArrayHelper::remove($config, 'tag', 'span');
        $content = ArrayHelper::remove($config, 'content', '');
        $transform = ArrayHelper::remove($config, 'transform', '');

        Html::addCssClass($config, ['text' => 'fa-layers-text']);

        if ($transform) {
            $config['data-fa-transform'] = $transform;
        }

        return Html::tag($tag, $content, $config);
    }

    protected function renderCounterItem($config = [])
    {
        $position = ArrayHelper::remove($config, 'position', self::COUNTER_POSITION_TOP_RIGHT);
        $tag = ArrayHelper::remove($config, 'tag', 'span');
        $content = ArrayHelper::remove($config, 'content', '');

        Html::addCssClass($config, ['counter' => "fa-layers-counter"]);
        Html::addCssClass($config, ['counter-position' => "fa-layers-{$position}"]);

        return Html::tag($tag, $content, $config);
    }
}
