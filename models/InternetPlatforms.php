<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "internet_platforms".
 *
 * @property string $id
 * @property string $name
 * @property string $siteURL
 * @property string $configuration
 *
 * @property AdvertRents[] $advertRents
 */
class InternetPlatforms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'internet_platforms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['siteURL', 'configuration'], 'string'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'siteURL' => 'Site Url',
            'configuration' => 'Configuration',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAdvertRents()
    {
        return $this->hasMany(AdvertRents::className(), ['platform_id' => 'id']);
    }
}
