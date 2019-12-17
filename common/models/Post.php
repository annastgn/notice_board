<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 * @property string|null $title
 * @property string|null $content
 * @property string|null $city
 * @property float|null $cost
 * @property string|null $description
 * @property string|null $category
 * @property int|null $status
 *
 * @property User $user
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'created_at', 'updated_at'], 'required'],
            [['user_id', 'created_at', 'updated_at', 'status'], 'default', 'value' => null],
            [['user_id', 'created_at', 'updated_at', 'status'], 'integer'],
            [['content', 'description'], 'string'],
            [['cost'], 'number'],
            [['title', 'city', 'category'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'title' => 'Title',
            'content' => 'Content',
            'city' => 'City',
            'cost' => 'Cost',
            'description' => 'Description',
            'category' => 'Category',
            'status' => 'Status',
        ];
    }

    public function fields()
    {
        return [
            'title',
            'content'
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
