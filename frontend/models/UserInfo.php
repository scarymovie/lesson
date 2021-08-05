<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_info".
 *
 * @property int $id
 * @property string|null $last_name
 * @property string $name
 * @property string|null $patronymic
 * @property string|null $birthday
 * @property string|null $date_create
 * @property string|null $date_update
 * @property string|null $photo
 * @property int $userId
 *
 * @property User $user
 */
class UserInfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'userId'], 'required'],
            [['birthday', 'date_create', 'date_update'], 'safe'],
            [['userId'], 'integer'],
            [['last_name', 'name', 'patronymic', 'photo'], 'string', 'max' => 255],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_name' => 'Last Name',
            'name' => 'Name',
            'patronymic' => 'Patronymic',
            'birthday' => 'Birthday',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'photo' => 'Photo',
            'userId' => 'User ID',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }

}
