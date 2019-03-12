<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classta".
 *
 * @property int $cTaId
 * @property int $subject_cId
 * @property string $ta_taId
 *
 * @property Subject $subjectC
 * @property Ta $taTa
 */
class Classta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_cId', 'ta_taId'], 'required'],
            [['subject_cId'], 'integer'],
            [['ta_taId'], 'string', 'max' => 13],
            [['subject_cId'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_cId' => 'cid']],
            [['ta_taId'], 'exist', 'skipOnError' => true, 'targetClass' => Ta::className(), 'targetAttribute' => ['ta_taId' => 'taid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cTaId' => 'C Ta ID',
            'subject_cId' => 'Subject C ID',
            'ta_taId' => 'Ta Ta ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubjectC()
    {
        return $this->hasOne(Subject::className(), ['cid' => 'subject_cId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaTa()
    {
        return $this->hasOne(Ta::className(), ['taid' => 'ta_taId']);
    }
}
