<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ABMResponsive as ABMResponsiveModel;

/**
 * ABMResponsive represents the model behind the search form of `app\models\ABMResponsive`.
 */
class ABMResponsive extends ABMResponsiveModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'modulo', 'ejercicio', 'bit', 'alto', 'pos1', 'pos2', 'pos3'], 'integer'],
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
        $query = ABMResponsiveModel::find();

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
            'modulo' => $this->modulo,
            'ejercicio' => $this->ejercicio,
            'bit' => $this->bit,
            'alto' => $this->alto,
            'pos1' => $this->pos1,
            'pos2' => $this->pos2,
            'pos3' => $this->pos3,
        ]);

        return $dataProvider;
    }
}
