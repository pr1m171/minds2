<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ABMVentas as ABMVentasModel;

/**
 * ABMVentas represents the model behind the search form of `app\models\ABMVentas`.
 */
class ABMVentas extends ABMVentasModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['idsuscripcion', 'idusuario', 'fecha', 'hora', 'estado', 'notas'], 'safe'],
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
        $query = ABMVentasModel::find();

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

        $query->andFilterWhere(['like', 'idsuscripcion', $this->idsuscripcion])
            ->andFilterWhere(['like', 'idusuario', $this->idusuario])
            ->andFilterWhere(['like', 'fecha', $this->fecha])
            ->andFilterWhere(['like', 'hora', $this->hora])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'notas', $this->notas]);

        return $dataProvider;
    }
}
