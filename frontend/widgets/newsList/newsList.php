<?php
/**
 * Description of newsList
 *
 * @author Kirilloid
 */
namespace frontend\widgets\newsList;
use yii\base\Widget;
use frontend\models\Test;
use Yii;

class newsList extends Widget {
    
    public $showLimit = null;
    
    public function run() {
        $max = Yii::$app->params['maxNewInlist'];
        if (isset($this->showLimit)) {
            $max = $this->showLimit;
        }
        $news = Test::getNewsList($max);        
        return $this->render('block',[
            'news' => $news
        ]);
    }
}
