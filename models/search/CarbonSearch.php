<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Carbon;

/**
 * CarbonSearch represents the model behind the search form of `app\models\Carbon`.
 */
class CarbonSearch extends Carbon
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kendaraan_pelanggan_id', 'pelanggan_id', 'harga_motif', 'panjang_part', 'lebar_part', 'harga_motif2', 'panjang_part2', 'lebar_part2', 'harga_motif3', 'panjang_part3', 'lebar_part3', 'harga_motif4', 'panjang_part4', 'lebar_part4', 'harga_motif5', 'panjang_part5', 'lebar_part5', 'harga_motif6', 'panjang_part6', 'lebar_part6', 'harga_motif7', 'panjang_part7', 'lebar_part7', 'harga_motif8', 'panjang_part8', 'lebar_part8', 'harga_motif9', 'panjang_part9', 'lebar_part9', 'harga_motif10', 'panjang_part10', 'lebar_part10'], 'integer'],
            [['nama_part', 'jenis_motif', 'nama_part2', 'jenis_motif2', 'nama_part3', 'jenis_motif3', 'nama_part4', 'jenis_motif4', 'nama_part5', 'jenis_motif5', 'nama_part6', 'jenis_motif6', 'nama_part7', 'jenis_motif7', 'nama_part8', 'jenis_motif8', 'nama_part9', 'jenis_motif9', 'nama_part10', 'jenis_motif10'], 'safe'],
            [['biaya_carbon', 'biaya_carbon2', 'biaya_carbon3', 'biaya_carbon4', 'biaya_carbon5', 'biaya_carbon6', 'biaya_carbon7', 'biaya_carbon8', 'biaya_carbon9', 'biaya_carbon10', 'biaya_tambahan', 'total_biaya'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Carbon::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'kendaraan_pelanggan_id' => $this->kendaraan_pelanggan_id,
            'pelanggan_id' => $this->pelanggan_id,
            'harga_motif' => $this->harga_motif,
            'panjang_part' => $this->panjang_part,
            'lebar_part' => $this->lebar_part,
            'biaya_carbon' => $this->biaya_carbon,
            'harga_motif2' => $this->harga_motif2,
            'panjang_part2' => $this->panjang_part2,
            'lebar_part2' => $this->lebar_part2,
            'biaya_carbon2' => $this->biaya_carbon2,
            'harga_motif3' => $this->harga_motif3,
            'panjang_part3' => $this->panjang_part3,
            'lebar_part3' => $this->lebar_part3,
            'biaya_carbon3' => $this->biaya_carbon3,
            'harga_motif4' => $this->harga_motif4,
            'panjang_part4' => $this->panjang_part4,
            'lebar_part4' => $this->lebar_part4,
            'biaya_carbon4' => $this->biaya_carbon4,
            'harga_motif5' => $this->harga_motif5,
            'panjang_part5' => $this->panjang_part5,
            'lebar_part5' => $this->lebar_part5,
            'biaya_carbon5' => $this->biaya_carbon5,
            'harga_motif6' => $this->harga_motif6,
            'panjang_part6' => $this->panjang_part6,
            'lebar_part6' => $this->lebar_part6,
            'biaya_carbon6' => $this->biaya_carbon6,
            'harga_motif7' => $this->harga_motif7,
            'panjang_part7' => $this->panjang_part7,
            'lebar_part7' => $this->lebar_part7,
            'biaya_carbon7' => $this->biaya_carbon7,
            'harga_motif8' => $this->harga_motif8,
            'panjang_part8' => $this->panjang_part8,
            'lebar_part8' => $this->lebar_part8,
            'biaya_carbon8' => $this->biaya_carbon8,
            'harga_motif9' => $this->harga_motif9,
            'panjang_part9' => $this->panjang_part9,
            'lebar_part9' => $this->lebar_part9,
            'biaya_carbon9' => $this->biaya_carbon9,
            'harga_motif10' => $this->harga_motif10,
            'panjang_part10' => $this->panjang_part10,
            'lebar_part10' => $this->lebar_part10,
            'biaya_carbon10' => $this->biaya_carbon10,
            'biaya_tambahan' => $this->biaya_tambahan,
            'total_biaya' => $this->total_biaya,
        ]);

        $query->andFilterWhere(['like', 'nama_part', $this->nama_part])
            ->andFilterWhere(['like', 'jenis_motif', $this->jenis_motif])
            ->andFilterWhere(['like', 'nama_part2', $this->nama_part2])
            ->andFilterWhere(['like', 'jenis_motif2', $this->jenis_motif2])
            ->andFilterWhere(['like', 'nama_part3', $this->nama_part3])
            ->andFilterWhere(['like', 'jenis_motif3', $this->jenis_motif3])
            ->andFilterWhere(['like', 'nama_part4', $this->nama_part4])
            ->andFilterWhere(['like', 'jenis_motif4', $this->jenis_motif4])
            ->andFilterWhere(['like', 'nama_part5', $this->nama_part5])
            ->andFilterWhere(['like', 'jenis_motif5', $this->jenis_motif5])
            ->andFilterWhere(['like', 'nama_part6', $this->nama_part6])
            ->andFilterWhere(['like', 'jenis_motif6', $this->jenis_motif6])
            ->andFilterWhere(['like', 'nama_part7', $this->nama_part7])
            ->andFilterWhere(['like', 'jenis_motif7', $this->jenis_motif7])
            ->andFilterWhere(['like', 'nama_part8', $this->nama_part8])
            ->andFilterWhere(['like', 'jenis_motif8', $this->jenis_motif8])
            ->andFilterWhere(['like', 'nama_part9', $this->nama_part9])
            ->andFilterWhere(['like', 'jenis_motif9', $this->jenis_motif9])
            ->andFilterWhere(['like', 'nama_part10', $this->nama_part10])
            ->andFilterWhere(['like', 'jenis_motif10', $this->jenis_motif10]);

        return $dataProvider;
    }
}
