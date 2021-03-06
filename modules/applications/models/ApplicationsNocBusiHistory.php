<?php

namespace app\modules\applications\models;

use Yii;

/**
 * This is the model class for table "tbl_applications_noc_busi_history".
 *
 * @property integer $id
 * @property integer $application_id
 * @property string $noc_structure
 * @property string $noc_status
 * @property integer $noc_is_reachable
 * @property string $noc_not_reachable_remarks
 * @property string $noc_soc_chairman_name
 * @property string $noc_soc_secretary_name
 * @property string $noc_soc_tresurer_name
 * @property string $noc_address
 * @property integer $noc_address_verification
 * @property string $noc_address_pincode
 * @property string $noc_address_trigger
 * @property string $noc_address_lat
 * @property string $noc_address_long
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 * @property integer $is_deleted
 */
class ApplicationsNocBusiHistory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_applications_noc_busi_history';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['application_id'], 'required'],
            [['application_id', 'noc_is_reachable', 'noc_address_verification', 'created_by', 'updated_by', 'is_deleted'], 'integer'],
            [['noc_not_reachable_remarks'], 'string'],
            [['created_on', 'updated_on'], 'safe'],
            [['noc_structure', 'noc_address', 'noc_address_trigger'], 'string', 'max' => 1000],
            [['noc_status', 'noc_address_lat', 'noc_address_long'], 'string', 'max' => 45],
            [['noc_soc_chairman_name', 'noc_soc_secretary_name', 'noc_soc_tresurer_name'], 'string', 'max' => 200],
            [['noc_address_pincode'], 'string', 'max' => 10],
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
            'noc_structure' => 'Noc Structure',
            'noc_status' => 'Noc Status',
            'noc_is_reachable' => 'Noc Is Reachable',
            'noc_not_reachable_remarks' => 'Noc Not Reachable Remarks',
            'noc_soc_chairman_name' => 'Noc Soc Chairman Name',
            'noc_soc_secretary_name' => 'Noc Soc Secretary Name',
            'noc_soc_tresurer_name' => 'Noc Soc Tresurer Name',
            'noc_address' => 'Noc Address',
            'noc_address_verification' => 'Noc Address Verification',
            'noc_address_pincode' => 'Noc Address Pincode',
            'noc_address_trigger' => 'Noc Address Trigger',
            'noc_address_lat' => 'Noc Address Lat',
            'noc_address_long' => 'Noc Address Long',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'updated_by' => 'Updated By',
            'updated_on' => 'Updated On',
            'is_deleted' => 'Is Deleted',
        ];
    }
}
