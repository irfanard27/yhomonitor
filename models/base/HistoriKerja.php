<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "histori_kerja".
 *
 * @property integer $id
 * @property string $tanggal
 * @property string $waktu_masuk
 * @property string $waktu_keluar
 * @property string $keterangan
 * @property string $aliasModel
 */
abstract class HistoriKerja extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'histori_kerja';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal', 'waktu_masuk', 'waktu_keluar', 'keterangan'], 'required'],
            [['keterangan'], 'string'],
            [['tanggal', 'waktu_masuk', 'waktu_keluar'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal' => 'Tanggal',
            'waktu_masuk' => 'Waktu Masuk',
            'waktu_keluar' => 'Waktu Keluar',
            'keterangan' => 'Keterangan',
        ];
    }




}
