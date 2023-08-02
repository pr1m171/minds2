<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "conceptual".
 *
 * @property int $id
 * @property string $idModulo
 * @property string $nombre
 * @property string $url
 * @property string $palabras
 */
class Conceptual extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'conceptual';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idModulo', 'nombre', 'url', 'palabras'], 'required'],
            [['palabras'], 'string'],
            [['idModulo'], 'string', 'max' => 5],
            [['nombre'], 'string', 'max' => 255],
            [['url'], 'string', 'max' => 500],
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
            'idModulo' => Yii::t('app', 'Módulo'),
            'nombre' => Yii::t('app', 'Nombre'),
            'url' => Yii::t('app', 'Imagen'),
            'palabras' => Yii::t('app', 'Palabras'),
        ];
    }
}
