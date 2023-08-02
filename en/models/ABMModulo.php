<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modulo".
 *
 * @property int $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $idsuscripcion
 */
class ABMModulo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modulo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'descripcion', 'idsuscripcion'], 'required'],
            [['descripcion'], 'string'],
            [['nombre', 'idsuscripcion'], 'string', 'max' => 255],
        ];
    }

    public function getRelation_table()
    {
        return $this->hasOne(ABMSuscripciones::className(), ['id' => 'idsuscripcion']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Referencia'),
            'nombre' => Yii::t('app', 'Módulo'),
            'descripcion' => Yii::t('app', 'Descripción'),
            'idsuscripcion' => Yii::t('app', 'Nivel'),
        ];
    }
}
