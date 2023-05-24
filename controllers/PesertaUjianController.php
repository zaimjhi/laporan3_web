<?php

namespace app\controllers;
use app\models\PesertaUjian;
use yii\data\ActiveDataProvider;

class PesertaUjianController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = PesertaUjian::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
