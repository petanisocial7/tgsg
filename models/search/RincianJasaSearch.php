<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RincianJasa;

/**
 * RincianJasaSearch represents the model behind the search form of `app\models\RincianJasa`.
 */
class RincianJasaSearch extends RincianJasa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kendaraan_pelanggan_id', 'pelanggan_id'], 'integer'],
            [['jenis_jasa', 'tanggal_dibuat', 'tanggal_diterima', 'estimasi_siap', 'status_pengerjaan', 'status_barang'], 'safe'],
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
        $query = RincianJasa::find();

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
            'tanggal_dibuat' => $this->tanggal_dibuat,
            'tanggal_diterima' => $this->tanggal_diterima,
            'estimasi_siap' => $this->estimasi_siap,
        ]);

        $query->andFilterWhere(['like', 'jenis_jasa', $this->jenis_jasa])
            ->andFilterWhere(['like', 'status_pengerjaan', $this->status_pengerjaan])
            ->andFilterWhere(['like', 'status_barang', $this->status_barang]);

        return $dataProvider;
    }
}
