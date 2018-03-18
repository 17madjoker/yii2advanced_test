<?php

namespace frontend\controllers;
use frontend\models\Book;
use frontend\models\Publisher;
use Yii;

class BookshopController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Book::find();
        
        $result = $query->all();

        return $this->render('index',[
            'result' => $result
        ]);
    }
    
    public function actionCreate()
    {
        $book = new Book();
        $publishers = Publisher::getList();
        
            if ($book->load(Yii::$app->request->post()) && $book->save()){
                Yii::$app->session->setFlash('success', 'The book was created');
                return $this->refresh();
            }
                
        return $this->render('create',[
            'book' => $book,
            'publishers' => $publishers
        ]);
    }

}
