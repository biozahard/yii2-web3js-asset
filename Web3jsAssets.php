<?php

namespace biozahard\web3js;

/**
 * Created by PhpStorm.
 * User: zakhariifesenko
 * Date: 12/30/17
 * Time: 15:23
 */
class Web3jsAssets extends \yii\web\AssetBundle
{
    public $sourcePath = '@vendor/biozahard/yii2-web3js-asset/dist';
    public $css = [
    ];
    public $js = [
        'js/web3.min.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}

