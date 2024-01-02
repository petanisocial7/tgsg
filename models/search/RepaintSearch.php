<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Repaint;

/**
 * RepaintSearch represents the model behind the search form of `app\models\Repaint`.
 */
class RepaintSearch extends Repaint
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kendaraan_pelanggan_id', 'pelanggan_id'], 'integer'],
            [['nama_part', 'nama_warna'], 'safe'],
            [['biaya_repaint', 'biaya_tambahan', 'total_biaya'], 'number'],
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
        $query = Repaint::find();

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
            'biaya_repaint' => $this->biaya_repaint,
            'biaya_tambahan' => $this->biaya_tambahan,
            'total_biaya' => $this->total_biaya,
        ]);

        $query->andFilterWhere(['like', 'nama_part', $this->nama_part])
            ->andFilterWhere(['like', 'nama_warna', $this->nama_warna]);

        return $dataProvider;
    }
}
