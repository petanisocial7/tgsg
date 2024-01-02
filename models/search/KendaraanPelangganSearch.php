<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KendaraanPelanggan;

/**
 * KendaraanPelangganSearch represents the model behind the search form of `app\models\KendaraanPelanggan`.
 */
class KendaraanPelangganSearch extends KendaraanPelanggan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'pelanggan_id'], 'integer'],
            [['nama_kendaraan', 'tahun_kendaraan', 'plat_kendaraan'], 'safe'],
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
        $query = KendaraanPelanggan::find();

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
            'pelanggan_id' => $this->pelanggan_id,
            'tahun_kendaraan' => $this->tahun_kendaraan,
        ]);

        $query->andFilterWhere(['like', 'nama_kendaraan', $this->nama_kendaraan])
            ->andFilterWhere(['like', 'plat_kendaraan', $this->plat_kendaraan]);

        return $dataProvider;
    }
}
