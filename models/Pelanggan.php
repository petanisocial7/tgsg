<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelanggan".
 *
 * @property int $id
 * @property string $nama_pelanggan
 * @property string $alamat_pelanggan
 * @property string $nomor_telepon
 *
 * @property Carbon[] $carbons
 * @property KendaraanPelanggan[] $kendaraanPelanggans
 * @property Repaint[] $repaints
 * @property RincianJasa[] $rincianJasas
 */
class Pelanggan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelanggan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pelanggan', 'alamat_pelanggan', 'nomor_telepon'], 'required'],
            [['nama_pelanggan', 'alamat_pelanggan', 'nomor_telepon'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_pelanggan' => 'Nama Pelanggan',
            'alamat_pelanggan' => 'Alamat Pelanggan',
            'nomor_telepon' => 'Nomor Telepon',
        ];
    }

    /**
     * Gets query for [[Carbons]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCarbons()
    {
        return $this->hasMany(Carbon::className(), ['pelanggan_id' => 'id']);
    }

    /**
     * Gets query for [[KendaraanPelanggans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKendaraanPelanggans()
    {
        return $this->hasMany(KendaraanPelanggan::className(), ['pelanggan_id' => 'id']);
    }

    /**
     * Gets query for [[Repaints]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRepaints()
    {
        return $this->hasMany(Repaint::className(), ['pelanggan_id' => 'id']);
    }

    /**
     * Gets query for [[RincianJasas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRincianJasas()
    {
        return $this->hasMany(RincianJasa::className(), ['pelanggan_id' => 'id']);
    }
}
