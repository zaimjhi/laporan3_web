<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peserta_ujian".
 *
 * @property int $id
 * @property string|null $nim
 * @property int|null $no_kursi
 * @property string|null $no_peserta
 */
class PesertaUjian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peserta_ujian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kursi'], 'integer'],
            [['nim', 'no_peserta'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'no_kursi' => 'No Kursi',
            'no_peserta' => 'No Peserta',
        ];
    }
}
