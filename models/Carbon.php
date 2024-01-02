<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carbon".
 *
 * @property int $id
 * @property int|null $kendaraan_pelanggan_id
 * @property int $pelanggan_id
 * @property string $nama_part
 * @property string $jenis_motif
 * @property int $harga_motif
 * @property int $panjang_part
 * @property int $lebar_part
 * @property float $biaya_carbon
 * @property string|null $nama_part2
 * @property string|null $jenis_motif2
 * @property int|null $harga_motif2
 * @property int|null $panjang_part2
 * @property int|null $lebar_part2
 * @property float|null $biaya_carbon2
 * @property string|null $nama_part3
 * @property string|null $jenis_motif3
 * @property int|null $harga_motif3
 * @property int|null $panjang_part3
 * @property int|null $lebar_part3
 * @property float|null $biaya_carbon3
 * @property string|null $nama_part4
 * @property string|null $jenis_motif4
 * @property int|null $harga_motif4
 * @property int|null $panjang_part4
 * @property int|null $lebar_part4
 * @property float|null $biaya_carbon4
 * @property string|null $nama_part5
 * @property string|null $jenis_motif5
 * @property int|null $harga_motif5
 * @property int|null $panjang_part5
 * @property int|null $lebar_part5
 * @property float|null $biaya_carbon5
 * @property string|null $nama_part6
 * @property string|null $jenis_motif6
 * @property int|null $harga_motif6
 * @property int|null $panjang_part6
 * @property int|null $lebar_part6
 * @property float|null $biaya_carbon6
 * @property string|null $nama_part7
 * @property string|null $jenis_motif7
 * @property int|null $harga_motif7
 * @property int|null $panjang_part7
 * @property int|null $lebar_part7
 * @property float|null $biaya_carbon7
 * @property string|null $nama_part8
 * @property string|null $jenis_motif8
 * @property int|null $harga_motif8
 * @property int|null $panjang_part8
 * @property int|null $lebar_part8
 * @property float|null $biaya_carbon8
 * @property string|null $nama_part9
 * @property string|null $jenis_motif9
 * @property int|null $harga_motif9
 * @property int|null $panjang_part9
 * @property int|null $lebar_part9
 * @property float|null $biaya_carbon9
 * @property string|null $nama_part10
 * @property string|null $jenis_motif10
 * @property int|null $harga_motif10
 * @property int|null $panjang_part10
 * @property int|null $lebar_part10
 * @property float|null $biaya_carbon10
 * @property float|null $biaya_tambahan
 * @property float $total_biaya
 *
 * @property Pelanggan $pelanggan
 * @property KendaraanPelanggan $kendaraanPelanggan
 */
class Carbon extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carbon';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kendaraan_pelanggan_id', 'pelanggan_id', 'harga_motif', 'panjang_part', 'lebar_part', 'harga_motif2', 'panjang_part2', 'lebar_part2', 'harga_motif3', 'panjang_part3', 'lebar_part3', 'harga_motif4', 'panjang_part4', 'lebar_part4', 'harga_motif5', 'panjang_part5', 'lebar_part5', 'harga_motif6', 'panjang_part6', 'lebar_part6', 'harga_motif7', 'panjang_part7', 'lebar_part7', 'harga_motif8', 'panjang_part8', 'lebar_part8', 'harga_motif9', 'panjang_part9', 'lebar_part9', 'harga_motif10', 'panjang_part10', 'lebar_part10'], 'integer'],
            [['pelanggan_id', 'nama_part', 'jenis_motif', 'harga_motif', 'panjang_part', 'lebar_part', 'biaya_carbon', 'total_biaya'], 'required'],
            [['biaya_carbon', 'biaya_carbon2', 'biaya_carbon3', 'biaya_carbon4', 'biaya_carbon5', 'biaya_carbon6', 'biaya_carbon7', 'biaya_carbon8', 'biaya_carbon9', 'biaya_carbon10', 'biaya_tambahan', 'total_biaya'], 'number'],
            [['nama_part', 'jenis_motif', 'nama_part2', 'jenis_motif2', 'nama_part3', 'jenis_motif3', 'nama_part4', 'jenis_motif4', 'nama_part5', 'jenis_motif5', 'nama_part6', 'jenis_motif6', 'nama_part7', 'jenis_motif7', 'nama_part8', 'jenis_motif8', 'nama_part9', 'jenis_motif9', 'nama_part10', 'jenis_motif10'], 'string', 'max' => 255],
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
            'jenis_motif' => 'Jenis Motif',
            'harga_motif' => 'Harga Motif',
            'panjang_part' => 'Panjang Part',
            'lebar_part' => 'Lebar Part',
            'biaya_carbon' => 'Biaya Carbon',
            'nama_part2' => 'Nama Part2',
            'jenis_motif2' => 'Jenis Motif2',
            'harga_motif2' => 'Harga Motif2',
            'panjang_part2' => 'Panjang Part2',
            'lebar_part2' => 'Lebar Part2',
            'biaya_carbon2' => 'Biaya Carbon2',
            'nama_part3' => 'Nama Part3',
            'jenis_motif3' => 'Jenis Motif3',
            'harga_motif3' => 'Harga Motif3',
            'panjang_part3' => 'Panjang Part3',
            'lebar_part3' => 'Lebar Part3',
            'biaya_carbon3' => 'Biaya Carbon3',
            'nama_part4' => 'Nama Part4',
            'jenis_motif4' => 'Jenis Motif4',
            'harga_motif4' => 'Harga Motif4',
            'panjang_part4' => 'Panjang Part4',
            'lebar_part4' => 'Lebar Part4',
            'biaya_carbon4' => 'Biaya Carbon4',
            'nama_part5' => 'Nama Part5',
            'jenis_motif5' => 'Jenis Motif5',
            'harga_motif5' => 'Harga Motif5',
            'panjang_part5' => 'Panjang Part5',
            'lebar_part5' => 'Lebar Part5',
            'biaya_carbon5' => 'Biaya Carbon5',
            'nama_part6' => 'Nama Part6',
            'jenis_motif6' => 'Jenis Motif6',
            'harga_motif6' => 'Harga Motif6',
            'panjang_part6' => 'Panjang Part6',
            'lebar_part6' => 'Lebar Part6',
            'biaya_carbon6' => 'Biaya Carbon6',
            'nama_part7' => 'Nama Part7',
            'jenis_motif7' => 'Jenis Motif7',
            'harga_motif7' => 'Harga Motif7',
            'panjang_part7' => 'Panjang Part7',
            'lebar_part7' => 'Lebar Part7',
            'biaya_carbon7' => 'Biaya Carbon7',
            'nama_part8' => 'Nama Part8',
            'jenis_motif8' => 'Jenis Motif8',
            'harga_motif8' => 'Harga Motif8',
            'panjang_part8' => 'Panjang Part8',
            'lebar_part8' => 'Lebar Part8',
            'biaya_carbon8' => 'Biaya Carbon8',
            'nama_part9' => 'Nama Part9',
            'jenis_motif9' => 'Jenis Motif9',
            'harga_motif9' => 'Harga Motif9',
            'panjang_part9' => 'Panjang Part9',
            'lebar_part9' => 'Lebar Part9',
            'biaya_carbon9' => 'Biaya Carbon9',
            'nama_part10' => 'Nama Part10',
            'jenis_motif10' => 'Jenis Motif10',
            'harga_motif10' => 'Harga Motif10',
            'panjang_part10' => 'Panjang Part10',
            'lebar_part10' => 'Lebar Part10',
            'biaya_carbon10' => 'Biaya Carbon10',
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
