<?php

namespace frontend\assets;
use yii\web\AssetBundle;
/**
 * Description of TestAsset
 *
 * @author Kirilloid
 */
class TestAsset extends AssetBundle {
    public $css = [
        'css/test/bootstrap.css'
    ];
    public $js = [
        'js/test/jquery.min',
        'js/test/bootstrap.bundle.min',
    ];
}
