<?php
/**
 * @link https://craftcms.com/
 * @copyright Copyright (c) Pixel & Tonic, Inc.
 * @license MIT
 */

namespace craft\commerce\stripe\web\assets\chargeform;

use craft\web\AssetBundle;
use yii\web\JqueryAsset;

class JqA extends JqueryAsset
{
    public function init()
    {
        $this->jsOptions = [
            'data-cookieconsent' => 'ignore', 'data-pagespeed-no-defer' => 'true'
        ];

        parent::init();
    }
}

/**
 * Asset bundle for the Payment Form
 */
class ChargeFormAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = __DIR__;

        $this->css = [
            'css/paymentForm.css',
        ];

        $this->js = [
            'js/paymentForm.js',
        ];

        $this->jsOptions = [
            'data-cookieconsent' => 'ignore', 'data-pagespeed-no-defer' => 'true'
        ];

        $this->depends = [
            JqA::class,
        ];

        parent::init();
    }
}
