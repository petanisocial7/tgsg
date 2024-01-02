<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "repaint".
 *
 * @property int $id
 * @property int|null $kendaraan_pelanggan_id
 * @property int $pelanggan_id
 * @property string $nama_part
 * @property string $nama_warna
 * @property float $biaya_repaint
 * @property float $biaya_tambahan
 * @property float $total_biaya
 *
 * @property Pelanggan $pelanggan
 * @property KendaraanPelanggan $kendaraanPelanggan
 */
class Repaint extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'repaint';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kendaraan_pelanggan_id', 'pelanggan_id'], 'integer'],
            [['pelanggan_id', 'nama_part', 'nama_warna', 'biaya_repaint', 'biaya_tambahan', 'total_biaya'], 'required'],
            [['biaya_repaint', 'biaya_tambahan', 'total_biaya'], 'number'],
            [['nama_part', 'nama_warna'], 'string', 'max' => 255],
            [['pelanggan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Pelanggan::className(), 'targetAttribute' => ['pelanggan_id' => 'id']],
            [['kendaraan_pelanggan_id'], 'exist', 'skipOnError' => true, 'targetClass' => KendaraanPelanggan::className(), 'targetAttribute' => ['kendaraan_pelanggan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kendaraan_pelanggan_id' => 'Kendaraan Pelanggan ID',
            'pelanggan_id' => 'Pelanggan ID',
            'nama_part' => 'Nama Part',
            'nama_warna' => 'Nama Warna',
            'biaya_repaint' => 'Biaya Repaint',
            'biaya_tambahan' => 'Biaya Tambahan',
            'total_biaya' => 'Total Biaya',
        ];
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
     * Gets query for [[KendaraanPelanggan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKendaraanPelanggan()
    {
        return $this->hasOne(KendaraanPelanggan::className(), ['id' => 'kendaraan_pelanggan_id']);
    }
}
