<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subject;

/**
 * SubjectSearch represents the model behind the search form of `app\models\Subject`.
 */
class SubjectSearch extends Subject
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cId', 'cYear', 'cTerm', 'cSection', 'cStatus'], 'integer'],
            [['cNumber', 'cName', 'cPassword'], 'safe'],
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
        $query = Subject::find();

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
            'cId' => $this->cId,
            'cYear' => $this->cYear,
            'cTerm' => $this->cTerm,
            'cSection' => $this->cSection,
            'cStatus' => $this->cStatus,
        ]);

        $query->andFilterWhere(['like', 'cNumber', $this->cNumber])
            ->andFilterWhere(['like', 'cName', $this->cName])
            ->andFilterWhere(['like', 'cPassword', $this->cPassword]);

        return $dataProvider;
    }
}
