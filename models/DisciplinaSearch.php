<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Disciplina;

/**
 * DisciplinaSearch represents the model behind the search form of `app\models\Disciplina`.
 */
class DisciplinaSearch extends Disciplina
{
    public function attributes()
   {      
       return array_merge(parent::attributes(), ['nucleo.NOME','matriz.SIGLA']);
   }

    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'CH', 'PERIODO'], 'integer'],
            [['NOME','nucleo.NOME','matriz.SIGLA'], 'safe'],
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
        $query = Disciplina::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $query->joinWith(['nucleo']);
        $dataProvider->sort->attributes['nucleo.NOME'] = [
            'asc' => ['nucleo.NOME' => SORT_ASC],
            'desc' => ['nucleo.NOME' => SORT_DESC],
        ];
        $query->joinWith(['matriz']);
        $dataProvider->sort->attributes['matriz.SIGLA'] = [
            'asc' => ['matriz.SIGLA' => SORT_ASC],
            'desc' => ['matriz.SIGLA' => SORT_DESC],
        ];


        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'CH' => $this->CH,
            'PERIODO' => $this->PERIODO,
            'NUCLEO_ID' => $this->NUCLEO_ID,
            'MATRIZ_ID' => $this->MATRIZ_ID,
        ]);

        $query->andFilterWhere(['like', 'NOME', $this->NOME]);
        $query->andFilterWhere(['LIKE', 'nucleo.NOME',$this->getAttribute('nucleo.NOME')]);
        $query->andFilterWhere(['LIKE', 'matriz.SIGLA',$this->getAttribute('matriz.SIGLA')]);

        return $dataProvider;
    }
}
