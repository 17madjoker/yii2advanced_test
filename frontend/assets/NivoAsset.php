<?php

namespace frontend\assets;
use yii\web\AssetBundle;

/**
 * Description of NivoAsset
 *
 * @author Kirilloid
 */
class NivoAsset extends AssetBundle {
    public $css = [
        'css/nivo/nivo-slider.css',
        'css/nivo/style.css',
    ];
    
    public $js = [
        'js/nivo/jquery-1.9.0.min.js',
        'js/nivo/jquery.nivo.slider.js',
        'js/nivo/initscript.js'
    ];  
}
