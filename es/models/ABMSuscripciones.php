<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "suscripciones".
 *
 * @property int $id
 * @property string $nombre
 * @property string $precio
 * @property string $descripcion
 */
class ABMSuscripciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suscripciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'precio', 'descripcion'], 'required'],
            [['descripcion'], 'string'],
            [['nombre', 'precio'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'Referencia'),
            'nombre' => Yii::t('app', 'Concepto'),
            'precio' => Yii::t('app', 'Precio'),
            'descripcion' => Yii::t('app', 'Descripción'),
        ];
    }
}
