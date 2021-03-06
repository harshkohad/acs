<?php

namespace app\modules\applications\models;

use Yii;

/**
 * This is the model class for table "tbl_kyc".
 *
 * @property integer $id
 * @property integer $application_id
 * @property string $doc_type
 * @property string $remarks
 * @property string $file_name
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 * @property integer $is_deleted
 * @property integer $send_for_verification
 */
class Kyc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_kyc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['application_id', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['created_on', 'updated_on'], 'safe'],
            [['doc_type'], 'string', 'max' => 150],
            [['remarks', 'file_name'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'application_id' => 'Application ID',
            'doc_type' => 'Doc Type',
            'remarks' => 'Remarks',
            'file_name' => 'File Name',
            'send_for_verification' => 'Send For Verification',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'updated_by' => 'Updated By',
            'updated_on' => 'Updated On',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
