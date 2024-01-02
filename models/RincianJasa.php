<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rincian_jasa".
 *
 * @property int $id
 * @property int|null $kendaraan_pelanggan_id
 * @property int $pelanggan_id
 * @property string $jenis_jasa
 * @property string $tanggal_dibuat
 * @property string|null $tanggal_diterima
 * @property string|null $estimasi_siap
 * @property string|null $status_pengerjaan
 * @property string|null $status_barang
 *
 * @property Pelanggan $pelanggan
 * @property KendaraanPelanggan $kendaraanPelanggan
 */
class RincianJasa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rincian_jasa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kendaraan_pelanggan_id', 'pelanggan_id'], 'integer'],
            [['pelanggan_id', 'jenis_jasa'], 'required'],
            [['tanggal_dibuat', 'tanggal_diterima', 'estimasi_siap'], 'safe'],
            [['jenis_jasa', 'status_pengerjaan', 'status_barang'], 'string', 'max' => 50],
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
            'jenis_jasa' => 'Jenis Jasa',
            'tanggal_dibuat' => 'Tanggal Dibuat',
            'tanggal_diterima' => 'Tanggal Diterima',
            'estimasi_siap' => 'Estimasi Siap',
            'status_pengerjaan' => 'Status Pengerjaan',
            'status_barang' => 'Status Barang',
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
