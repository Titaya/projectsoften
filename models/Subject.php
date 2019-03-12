<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property int $cId
 * @property string $cNumber
 * @property string $cName
 * @property int $cYear
 * @property int $cTerm
 * @property int $cSection
 * @property string $cPassword
 * @property int $cStatus
 *
 * @property Classstudent[] $classstudents
 * @property Classta[] $classtas
 * @property Section[] $sections
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cYear', 'cTerm', 'cSection', 'cStatus'], 'integer'],
            [['cNumber', 'cName', 'cPassword'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cId' => 'C ID',
            'cNumber' => 'C Number',
            'cName' => 'C Name',
            'cYear' => 'C Year',
            'cTerm' => 'C Term',
            'cSection' => 'C Section',
            'cPassword' => 'C Password',
            'cStatus' => 'C Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassstudents()
    {
        return $this->hasMany(Classstudent::className(), ['subject_cId' => 'cid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasstas()
    {
        return $this->hasMany(Classta::className(), ['subject_cId' => 'cid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSections()
    {
        return $this->hasMany(Section::className(), ['subject_cId' => 'cid']);
    }
}
