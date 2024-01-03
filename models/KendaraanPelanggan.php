<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kendaraan_pelanggan".
 *
 * @property int $id
 * @property int $pelanggan_id
 * @property string|null $nama_kendaraan
 * @property string|null $tahun_kendaraan
 * @property string|null $plat_kendaraan
 *
 * @property Carbon[] $carbons
 * @property Pelanggan $pelanggan
 * @property Repaint[] $repaints
 * @property RincianJasa[] $rincianJasas
 */
class KendaraanPelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kendaraan_pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pelanggan_id'], 'required'],
            [['pelanggan_id'], 'integer'],
            [['tahun_kendaraan'], 'safe'],
            [['nama_kendaraan'], 'string', 'max' => 255],
            [['plat_kendaraan'], 'string', 'max' => 30],
            [['pelanggan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['pelanggan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pelanggan_id' => 'Pelanggan ID',
            'nama_kendaraan' => 'Nama Kendaraan',
            'tahun_kendaraan' => 'Tahun Kendaraan',
            'plat_kendaraan' => 'Plat Kendaraan',
        ];
    }

    /**
     * Gets query for [[Carbons]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarbons()
    {
        return $this->hasMany(Carbon::className(), ['kendaraan_pelanggan_id' => 'id']);
    }

    /**
     * Gets query for [[Pelanggan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPelanggan()
    {
        return $this->hasOne(Pelanggan::className(), ['id' => 'pelanggan_id']);
    }

    /**
     * Gets query for [[Repaints]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepaints()
    {
        return $this->hasMany(Repaint::className(), ['kendaraan_pelanggan_id' => 'id']);
    }

    /**
     * Gets query for [[RincianJasas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRincianJasas()
    {
        return $this->hasMany(RincianJasa::className(), ['kendaraan_pelanggan_id' => 'id']);
    }

    public static function getAllKendaraanPelanggan()
    {
        $kendaraan_pelanggan = KendaraanPelanggan::find()->all();
        $kendaraan_pelanggan = ArrayHelper::map($kendaraan_pelanggan, 'id', 'nama_kendaraan');
        return $kendaraan_pelanggan;
    }
}
