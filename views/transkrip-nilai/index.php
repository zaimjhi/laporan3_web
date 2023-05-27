<?php
use app\models\TranskripNilai;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */
?>
<div class="Transkrip-nilai-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Transkrip Nilai',  ['class' => 'btn btn-primary']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            'id',
            'id_mahasiswa',
            'semester_lulus',
            'tahun_lulus',
            'nomor_transkrip',
            [
                'class' => ActionColumn::class,
                'template' => '{view} {update} {delete}',
            ],
        ],
    ]); ?>
</div>

