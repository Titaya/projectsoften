<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property string $stuId
 * @property string $stuName
 *
 * @property ClassstudentHasStudent[] $classstudentHasStudents
 * @property Classstudent[] $classstudentCStus
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['stuId'], 'required'],
            [['stuId'], 'string', 'max' => 13],
            [['stuName'], 'string', 'max' => 100],
            [['stuId'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'stuId' => 'Stu ID',
            'stuName' => 'Stu Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassstudentHasStudents()
    {
        return $this->hasMany(ClassstudentHasStudent::className(), ['student_stuId' => 'stuid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassstudentCStus()
    {
        return $this->hasMany(Classstudent::className(), ['cstuid' => 'classstudent_cStuId', 'subject_cId' => 'classstudent_subject_cId'])->viaTable('classstudent_has_student', ['student_stuId' => 'stuid']);
    }
}
