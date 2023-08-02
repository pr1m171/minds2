<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "responsive".
 *
 * @property int $id
 * @property int $modulo
 * @property int $ejercicio
 * @property int $bit
 * @property int $alto
 * @property int $pos1
 * @property int $pos2
 * @property int $pos3
 */
class ABMResponsive extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'responsive';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['modulo', 'ejercicio', 'bit', 'alto', 'pos1', 'pos2', 'pos3'], 'required'],
            [['modulo', 'ejercicio', 'bit', 'alto', 'pos1', 'pos2', 'pos3'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'modulo' => Yii::t('app', 'Modulo'),
            'ejercicio' => Yii::t('app', 'Ejercicio'),
            'bit' => Yii::t('app', 'Bit'),
            'alto' => Yii::t('app', 'Alto'),
            'pos1' => Yii::t('app', 'Pos1'),
            'pos2' => Yii::t('app', 'Pos2'),
            'pos3' => Yii::t('app', 'Pos3'),
        ];
    }
}
