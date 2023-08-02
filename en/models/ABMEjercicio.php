<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ejercicio".
 *
 * @property int $id
 * @property string $Nombre
 * @property string $idModulo
 * @property string $url
 * @property string $imagen
 * @property string $posicion
 * @property int $b1
 * @property int $b2
 * @property int $b3
 * @property int $b4
 * @property int $b5
 * @property int $b6
 * @property int $b7
 * @property int $b8
 * @property int $tl
 * @property int $tt
 */
class ABMEjercicio extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ejercicio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nombre', 'idModulo', 'posicion', 'b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'tl', 'tt'], 'required'],
            [['b1', 'b2', 'b3', 'b4', 'b5', 'b6', 'b7', 'b8', 'tl', 'tt'], 'integer'],
            [['Nombre', 'idModulo','url'], 'string', 'max' => 255],
            [['url'], 'file'],
            [['posicion'], 'string', 'max' => 50],
        ];
    }

    public function getRelation_table()
    {
        return $this->hasOne(ABMModulo::className(), ['id' => 'idModulo']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Nombre' => Yii::t('app', 'Nombre'),
            'idModulo' => Yii::t('app', 'Módulo'),
            'url' => Yii::t('app', 'Archivo'),
            'imagen' => Yii::t('app', 'Cargar Pagina'),
            'posicion' => Yii::t('app', 'Posición'),
            'b1' => Yii::t('app', 'B1'),
            'b2' => Yii::t('app', 'B2'),
            'b3' => Yii::t('app', 'B3'),
            'b4' => Yii::t('app', 'B4'),
            'b5' => Yii::t('app', 'B5'),
            'b6' => Yii::t('app', 'B6'),
            'b7' => Yii::t('app', 'B7'),
            'b8' => Yii::t('app', 'B8'),
            'tl' => Yii::t('app', 'TL'),
            'tt' => Yii::t('app', 'TT'),
        ];
    }
}
