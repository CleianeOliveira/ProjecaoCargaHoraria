<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Docente;

/**
 * DocenteSearch represents the model behind the search form of `app\models\Docente`.
 */
class DocenteSearch extends Docente
{
    /**
     * {@inheritdoc}
     */

    public function attributes()
    {      
        return array_merge(parent::attributes(), ['nucleo.nome']);
    }
 
    public function rules()
    {
        return [
            [['id', 'nucleo_id'], 'integer'],
            [['nome','nucleo.nome'], 'safe'],
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
        $query = Docente::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->joinWith(['nucleo']);
        $dataProvider->sort->attributes['nucleo.nome'] = [
            'asc' => ['nucleo.nome' => SORT_ASC],
            'desc' => ['nucleo.nome' => SORT_DESC],
        ];


        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'nucleo_id' => $this->nucleo_id,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome]);
        $query->andFilterWhere(['like', 'nucleo.nome', $this->getAttribute('nucleo.nome')]);

        return $dataProvider;
    }
}
