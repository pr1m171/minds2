<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ABMEjercicio as ABMEjercicioModel;

/**
 * ABMEjercicio represents the model behind the search form of `app\models\ABMEjercicio`.
 */
class ABMEjercicio extends ABMEjercicioModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'tl', 'tt'], 'integer'],
            [['Nombre', 'idModulo', 'url', 'posicion'], 'safe'],
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
        $query = ABMEjercicioModel::find();

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
            'b1' => $this->b1,
            'b2' => $this->b2,
            'b3' => $this->b3,
            'b4' => $this->b4,
            'b5' => $this->b5,
            'b6' => $this->b6,
            'b7' => $this->b7,
            'b8' => $this->b8,
            'tl' => $this->tl,
            'tt' => $this->tt,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'idModulo', $this->idModulo])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'posicion', $this->posicion]);

        return $dataProvider;
    }
}
