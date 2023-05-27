<?php
namespace app\controllers;

use app\models\TranskripNilai;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class TranskripNilaiController extends Controller
{
    public function actionIndex()
    {
        $query = TranskripNilai::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
    public function actionTambah()
    {
        $transkrip_nilai = new TranskripNilai;
        $transkrip_nilai->id_mahasiswa = '1234';
        $transkrip_nilai->semester_lulus = 8;
        $transkrip_nilai->tahun_lulus = '2025';
        $transkrip_nilai->nomor_transkrip = 'a123';
        if ($transkrip_nilai->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($transkrip_nilai->getError());
            die();
        }
    }

    public function actionUpdate($id)
    {
        $transkrip_nilai = TranskripNilai::findOne($id);
        $transkrip_nilai->tahun_lulus = '2026';
        if ($transkrip_nilai->save()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($transkrip_nilai->getError());
            die();
        }
    }

    public function actionDelete($id)
    {
        $transkrip_nilai = TranskripNilai::findOne($id);
        if ($transkrip_nilai->delete()) {
            return $this->redirect(['index']);
        }
        else {
            var_dump($transkrip_nilai->getError());
            die();
        }
    }


}

