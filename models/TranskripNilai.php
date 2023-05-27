<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transkrip_nilai".
 *
 * @property int $id
 * @property string|null $id_mahasiswa
 * @property int|null $semester_lulus
 * @property string|null $tahun_lulus
 * @property string|null $nomor_transkrip
 */
class TranskripNilai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transkrip_nilai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['semester_lulus'], 'integer'],
            [['id_mahasiswa', 'tahun_lulus', 'nomor_transkrip'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_mahasiswa' => 'Id Mahasiswa',
            'semester_lulus' => 'Semester Lulus',
            'tahun_lulus' => 'Tahun Lulus',
            'nomor_transkrip' => 'Nomor Transkrip',
        ];
    }
}
