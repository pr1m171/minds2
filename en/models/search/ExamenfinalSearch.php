<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Examenfinal;

/**
 * ExamenfinalSearch represents the model behind the search form of `app\models\Examenfinal`.
 */
class ExamenfinalSearch extends Examenfinal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'p1r1v', 'p1r2v', 'p1r3v', 'p1r4v', 'p1r5v', 'p2r1v', 'p2r2v', 'p2r3v', 'p2r4v', 'p2r5v', 'p3r1v', 'p3r2v', 'p3r3v', 'p3r4v', 'p3r5v', 'p4r1v', 'p4r2v', 'p4r3v', 'p4r4v', 'p4r5v', 'p5r1v', 'p5r2v', 'p5r3v', 'p5r4v', 'p5r5v'], 'integer'],
            [['modulo', 'p1', 'p1r1', 'p1r2', 'p1r3', 'p1r4', 'p1r5', 'p2', 'p2r1', 'p2r2', 'p2r3', 'p2r4', 'p2r5', 'p3', 'p3r1', 'p3r2', 'p3r3', 'p3r4', 'p3r5', 'p4', 'p4r1', 'p4r2', 'p4r3', 'p4r4', 'p4r5', 'p5', 'p5r1', 'p5r2', 'p5r3', 'p5r4', 'p5r5'], 'safe'],
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
        $query = Examenfinal::find();

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
            'p1r1v' => $this->p1r1v,
            'p1r2v' => $this->p1r2v,
            'p1r3v' => $this->p1r3v,
            'p1r4v' => $this->p1r4v,
            'p1r5v' => $this->p1r5v,
            'p2r1v' => $this->p2r1v,
            'p2r2v' => $this->p2r2v,
            'p2r3v' => $this->p2r3v,
            'p2r4v' => $this->p2r4v,
            'p2r5v' => $this->p2r5v,
            'p3r1v' => $this->p3r1v,
            'p3r2v' => $this->p3r2v,
            'p3r3v' => $this->p3r3v,
            'p3r4v' => $this->p3r4v,
            'p3r5v' => $this->p3r5v,
            'p4r1v' => $this->p4r1v,
            'p4r2v' => $this->p4r2v,
            'p4r3v' => $this->p4r3v,
            'p4r4v' => $this->p4r4v,
            'p4r5v' => $this->p4r5v,
            'p5r1v' => $this->p5r1v,
            'p5r2v' => $this->p5r2v,
            'p5r3v' => $this->p5r3v,
            'p5r4v' => $this->p5r4v,
            'p5r5v' => $this->p5r5v,
        ]);

        $query->andFilterWhere(['like', 'modulo', $this->modulo])
            ->andFilterWhere(['like', 'p1', $this->p1])
            ->andFilterWhere(['like', 'p1r1', $this->p1r1])
            ->andFilterWhere(['like', 'p1r2', $this->p1r2])
            ->andFilterWhere(['like', 'p1r3', $this->p1r3])
            ->andFilterWhere(['like', 'p1r4', $this->p1r4])
            ->andFilterWhere(['like', 'p1r5', $this->p1r5])
            ->andFilterWhere(['like', 'p2', $this->p2])
            ->andFilterWhere(['like', 'p2r1', $this->p2r1])
            ->andFilterWhere(['like', 'p2r2', $this->p2r2])
            ->andFilterWhere(['like', 'p2r3', $this->p2r3])
            ->andFilterWhere(['like', 'p2r4', $this->p2r4])
            ->andFilterWhere(['like', 'p2r5', $this->p2r5])
            ->andFilterWhere(['like', 'p3', $this->p3])
            ->andFilterWhere(['like', 'p3r1', $this->p3r1])
            ->andFilterWhere(['like', 'p3r2', $this->p3r2])
            ->andFilterWhere(['like', 'p3r3', $this->p3r3])
            ->andFilterWhere(['like', 'p3r4', $this->p3r4])
            ->andFilterWhere(['like', 'p3r5', $this->p3r5])
            ->andFilterWhere(['like', 'p4', $this->p4])
            ->andFilterWhere(['like', 'p4r1', $this->p4r1])
            ->andFilterWhere(['like', 'p4r2', $this->p4r2])
            ->andFilterWhere(['like', 'p4r3', $this->p4r3])
            ->andFilterWhere(['like', 'p4r4', $this->p4r4])
            ->andFilterWhere(['like', 'p4r5', $this->p4r5])
            ->andFilterWhere(['like', 'p5', $this->p5])
            ->andFilterWhere(['like', 'p5r1', $this->p5r1])
            ->andFilterWhere(['like', 'p5r2', $this->p5r2])
            ->andFilterWhere(['like', 'p5r3', $this->p5r3])
            ->andFilterWhere(['like', 'p5r4', $this->p5r4])
            ->andFilterWhere(['like', 'p5r5', $this->p5r5]);

        return $dataProvider;
    }
}
