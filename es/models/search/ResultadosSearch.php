<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Resultados;

/**
 * ResultadosSearch represents the model behind the search form of `app\models\Resultados`.
 */
class ResultadosSearch extends Resultados
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['fecha', 'hora', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'tl', 'tt', 'idUsuario', 'idModulo'], 'safe'],
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
        $query = Resultados::find();

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
        ]);

        $query->andFilterWhere(['like', 'fecha', $this->fecha])
            ->andFilterWhere(['like', 'hora', $this->hora])
            ->andFilterWhere(['like', 'b1', $this->b1])
            ->andFilterWhere(['like', 'b2', $this->b2])
            ->andFilterWhere(['like', 'b3', $this->b3])
            ->andFilterWhere(['like', 'b4', $this->b4])
            ->andFilterWhere(['like', 'b5', $this->b5])
            ->andFilterWhere(['like', 'b6', $this->b6])
            ->andFilterWhere(['like', 'b7', $this->b7])
            ->andFilterWhere(['like', 'b8', $this->b8])
            ->andFilterWhere(['like', 'tl', $this->tl])
            ->andFilterWhere(['like', 'tt', $this->tt])
            ->andFilterWhere(['like', 'idUsuario', $this->idUsuario])
            ->andFilterWhere(['like', 'idModulo', $this->idModulo]);

        return $dataProvider;
    }
}