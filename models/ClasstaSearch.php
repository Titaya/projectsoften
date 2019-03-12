<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Classta;

/**
 * ClasstaSearch represents the model behind the search form of `app\models\Classta`.
 */
class ClasstaSearch extends Classta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cTaId', 'subject_cId'], 'integer'],
            [['ta_taId'], 'safe'],
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
        $query = Classta::find();

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
            'cTaId' => $this->cTaId,
            'subject_cId' => $this->subject_cId,
        ]);

        $query->andFilterWhere(['like', 'ta_taId', $this->ta_taId]);

        return $dataProvider;
    }
}
