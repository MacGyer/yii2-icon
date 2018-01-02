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
 * FontawesomeIconLayer provides a means of layering icons, text and counter bubbles.
 *
 * @author Christoph Erdmann
 * @package widgets
 * @see https://fontawesome.com/how-to-use/svg-with-js#layering
 */
class FontawesomeIconLayer extends Widget
{
    /**
     * Sets the itemType in the [[items]] to 'icon'.
     */
    const ITEM_TYPE_ICON = 'icon';

    /**
     * Sets the itemType in the [[items]] to 'text'.
     */
    const ITEM_TYPE_TEXT = 'text';

    /**
     * Sets the itemType in the [[items]] to 'counter'.
     */
    const ITEM_TYPE_COUNTER = 'counter';

    /**
     * Sets the counter position to 'top-left'.
     */
    const COUNTER_POSITION_TOP_LEFT = 'top-left';

    /**
     * Sets the counter position to 'top-right'.
     */
    const COUNTER_POSITION_TOP_RIGHT = 'top-right';

    /**
     * Sets the counter position to 'bottom-left'.
     */
    const COUNTER_POSITION_BOTTOM_LEFT = 'bottom-left';

    /**
     * Sets the counter position to 'bottom-right'.
     */
    const COUNTER_POSITION_BOTTOM_RIGHT = 'bottom-right';

    /**
     * @var array the HTML attributes for the icon tag.
     * @see [yii\helpers\BaseHtml::renderTagAttributes()](http://www.yiiframework.com/doc-2.0/yii-helpers-basehtml.html#renderTagAttributes()-detail)
     * for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * @var array the layer items.
     * The `itemType` key determines which layer rendering will be executed for each item. See [[renderItems()]] for details.
     * See [[renderIconItem()]], [[renderTextItem()]] and [[renderCounterItem()]] for configuration details.
     *
     * ```php
     * // layered icons
     * 'items' => [
     *      [
     *          'name' => 'circle',
     *          'type' => FontawesomeIconHelper::TYPE_SOLID,
     *          'options' => ['style' => 'color: Tomato']
     *      ],
     *      [
     *          'name' => 'times',
     *          'type' => FontawesomeIconHelper::TYPE_SOLID,
     *          'inverse' => true,
     *          'shrink' => 6
     *      ]
     * ]
     *
     * // counter
     * 'items' => [
     *      [
     *          'name' => 'envelope',
     *          'type' => FontawesomeIconHelper::TYPE_SOLID,
     *      ],
     *      [
     *          'itemType' => FontawesomeIconLayer::ITEM_TYPE_COUNTER,
     *          'content' => '1,419',
     *          'style' => 'background: Tomato',
     *      ],
     * ]
     * ```
     */
    public $items = [];

    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();

        Html::addCssClass($this->options, ['widget' => 'fa-layers fa-fw']);
    }

    /**
     * Executes the widget.
     * @return string the rendered markup.
     */
    public function run()
    {
        $tag = ArrayHelper::remove($this->options, 'tag', 'span');
        $html[] = Html::beginTag($tag, $this->options);
        $html[] = $this->renderItems();
        $html[] = Html::endTag($tag);

        return implode("\n", $html);
    }

    /**
     * Renders all layer items.
     *
     * @return string the markup generated for every layer.
     */
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

    /**
     * Renders an icon layer item.
     *
     * @param array $config the configuration for the icon.
     * The key `name` must be present in config as it represents the icon name. See [[FontawesomeIconHelper]] for more config options.
     *
     * @return string the rendered icon markup.
     */
    protected function renderIconItem($config = [])
    {
        $name = ArrayHelper::remove($config, 'name', null);
        if (!$name) {
            return '';
        }

        return FontawesomeIconHelper::getInstance($name, $config)->render();
    }

    /**
     * Renders an text layer item.
     *
     * @param array $config the configuration for the layer
     * The following special options are recognised:
     * - tag: string, the tag name for the text element, defaults to 'span'
     * - content: string, the tag content (the actual text for the layer)
     * - transform: string, transformation options
     *
     * All other config options are treated as HTML attributes for the resulting tag.
     *
     * @return string the rendered icon markup.
     * @see https://fontawesome.com/how-to-use/svg-with-js#layering
     */
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

    /**
     * Renders an counter layer item.
     *
     * @param array $config the configuration for the layer
     * The following special options are recognised:
     * - tag: string, the tag name for the text element, defaults to 'span'
     * - content: string, the tag content (the actual counter value for the layer)
     * - position: string, the counter position, either 'bottom-left', 'bottom-right', 'top-left' or 'top-tight'. Defaults to 'top-right'.
     *
     * All other config options are treated as HTML attributes for the resulting tag.
     *
     * @return string the rendered icon markup.
     * @see https://fontawesome.com/how-to-use/svg-with-js#layering
     */
    protected function renderCounterItem($config = [])
    {
        $tag = ArrayHelper::remove($config, 'tag', 'span');
        $content = ArrayHelper::remove($config, 'content', '');
        $position = ArrayHelper::remove($config, 'position', self::COUNTER_POSITION_TOP_RIGHT);

        Html::addCssClass($config, ['counter' => "fa-layers-counter"]);
        Html::addCssClass($config, ['counter-position' => "fa-layers-{$position}"]);

        return Html::tag($tag, $content, $config);
    }
}
