<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Detalheoferta;

/**
 * DetalheofertaSearch represents the model behind the search form of `app\models\Detalheoferta`.
 */
class DetalheofertaSearch extends Detalheoferta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'DISCIPLINA_ID', 'OFERTA_ID'], 'integer'],
            [['SEMESTRE_ANO'], 'safe'],
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
        $query = Detalheoferta::find();

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
            'ID' => $this->ID,
            'DISCIPLINA_ID' => $this->DISCIPLINA_ID,
            'OFERTA_ID' => $this->OFERTA_ID,
        ]);

        $query->andFilterWhere(['like', 'SEMESTRE_ANO', $this->SEMESTRE_ANO]);

        return $dataProvider;
    }
}
