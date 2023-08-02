<?php
namespace app\models;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuarios;

/**
* PodcastSearch represents the model behind the search form of `backend\models\podcast`.
*/
class UsuariosSearch extends Usuarios
{
/**
* {@inheritdoc}
*/
public function rules()
{
    return [
        [['nombre', 'apellido', 'dni', 'email', 'password', 'fnac', 'tel', 'pais', 'ciudad', 'direccion', 'ocupacion', 'idioma', 'intereses'], 'required'],
        [['nombre', 'apellido', 'dni', 'email', 'password', 'fnac', 'tel', 'pais', 'ciudad', 'direccion', 'ocupacion', 'intereses'], 'string', 'max' => 255],
        [['idioma'], 'string', 'max' => 2],
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
$query = Usuarios::find();

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
'status' => $this->status,
]);

$query->andFilterWhere(['like', 'nombre', $this->nombre])
->andFilterWhere(['like', 'apellido', $this->apellido])
->andFilterWhere(['like', 'dni', $this->dni])
->andFilterWhere(['like', 'email', $this->email])
->andFilterWhere(['like', 'fnac', $this->fnac])
->andFilterWhere(['like', 'tel', $this->tel])
->andFilterWhere(['like', 'pais', $this->pais])
->andFilterWhere(['like', 'ciudad', $this->ciudad])
->andFilterWhere(['like', 'direccion', $this->direccion])
->andFilterWhere(['like', 'ocupacion', $this->ocupacion])
->andFilterWhere(['like', 'idioma', $this->idioma])
->andFilterWhere(['like', 'intereses', $this->intereses]);

return $dataProvider;
}
}