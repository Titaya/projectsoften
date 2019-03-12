<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property int $secId
 * @property int $secName
 * @property int $class_cId
 *
 * @property Class $classC
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['secName', 'class_cId'], 'integer'],
            [['class_cId'], 'required'],
            [['class_cId'], 'exist', 'skipOnError' => true, 'targetClass' => Class::className(), 'targetAttribute' => ['class_cId' => 'cid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'secId' => 'Sec ID',
            'secName' => 'Sec Name',
            'class_cId' => 'Class C ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassC()
    {
        return $this->hasOne(Class::className(), ['cid' => 'class_cId']);
    }
}
