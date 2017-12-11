<?php

namespace app\modules\applications\models;

use app\modules\applications\models\LoanTypes;
use Yii;

/**
 * This is the model class for table "tbl_applications".
 *
 * @property integer $id
 * @property integer $application_id
 * @property integer $profile_id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $aadhaar_card_no
 * @property string $pan_card_no
 * @property string $mobile_no
 * @property integer $institute_id
 * @property integer $loan_type_id
 * @property integer $applicant_type
 * @property integer $profile_type
 * @property integer $area_id
 * @property string $date_of_application
 * @property string $resi_society_name_plate
 * @property string $resi_door_name_plate
 * @property string $resi_tpc_neighbor_1
 * @property string $resi_tpc_neighbor_2
 * @property string $resi_met_person
 * @property string $resi_relation
 * @property integer $resi_home_area
 * @property string $resi_ownership_status
 * @property string $resi_ownership_status_text
 * @property integer $resi_stay_years
 * @property integer $resi_total_family_members
 * @property integer $resi_working_members
 * @property string $resi_locality
 * @property string $resi_locality_text
 * @property string $resi_landmark_1
 * @property string $resi_landmark_2
 * @property string $resi_remarks
 * @property string $busi_tpc_neighbor_1
 * @property string $busi_tpc_neighbor_2
 * @property string $busi_company_name_board
 * @property string $busi_met_person
 * @property string $busi_designation
 * @property string $busi_nature_of_business
 * @property integer $busi_staff_declared
 * @property integer $busi_staff_seen
 * @property integer $busi_years_in_business
 * @property integer $busi_type_of_business
 * @property string $busi_ownership_status
 * @property string $busi_ownership_status_text
 * @property integer $busi_area
 * @property string $busi_locality
 * @property string $busi_locality_text
 * @property string $busi_landmark_1
 * @property string $busi_landmark_2
 * @property string $busi_remarks
 * @property string $office_met_person
 * @property string $office_designation
 * @property string $office_nature_of_company
 * @property integer $office_employment_years
 * @property string $office_net_salary_amount
 * @property string $office_tpc_for_applicant
 * @property string $office_tpc_for_company
 * @property string $office_landmark
 * @property string $office_remarks
 * @property string $financial_pan_card_no
 * @property string $financial_name
 * @property string $financial_assessment_year
 * @property string $financial_date_of_filing
 * @property string $financial_sales
 * @property string $financial_share_capital
 * @property string $financial_net_profit
 * @property string $financial_debtors
 * @property string $financial_creditors
 * @property string $financial_total_loans
 * @property string $financial_depriciation
 * @property string $bank_bank_name
 * @property string $bank_account_holder
 * @property string $bank_account_number
 * @property string $bank_dated_transaction
 * @property string $bank_pan_card_no
 * @property string $bank_current_balance
 * @property string $bank_account_opening_date
 * @property string $bank_date_of_birth
 * @property string $bank_address
 * @property string $bank_narration
 * @property integer $application_status
 * @property integer $mobile_user_id
 * @property string $mobile_user_assigned_date
 * @property integer $mobile_user_status
 * @property string $mobile_user_status_updated_on
 * @property string $resi_address
 * @property integer $resi_address_verification
 * @property string $office_address
 * @property integer $office_address_verification
 * @property string $busi_address
 * @property integer $busi_address_verification
 * @property integer $created_by
 * @property string $created_on
 * @property integer $update_by
 * @property string $updated_on
 * @property integer $is_deleted
 */
class Applications extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'tbl_applications';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['first_name', 'last_name', 'date_of_application', 'applicant_type', 'profile_type', 'area_id', 'institute_id', 'loan_type_id'], 'required'],
            [['profile_id', 'institute_id', 'loan_type_id', 'applicant_type', 'profile_type', 'area_id', 'resi_home_area', 'resi_stay_years', 'resi_total_family_members', 'resi_working_members', 'resi_locality', 'busi_staff_declared', 'busi_staff_seen', 'busi_years_in_business', 'busi_type_of_business', 'busi_area', 'busi_locality', 'office_employment_years', 'application_status', 'mobile_user_id', 'mobile_user_status', 'resi_ownership_status', 'busi_ownership_status', 'created_by', 'update_by', 'is_deleted'], 'integer'],
            [['date_of_application', 'financial_date_of_filing', 'bank_dated_transaction', 'bank_account_opening_date', 'bank_date_of_birth', 'mobile_user_assigned_date', 'mobile_user_status_updated_on', 'created_on', 'updated_on'], 'safe'],
            [['first_name', 'middle_name', 'last_name', 'aadhaar_card_no', 'pan_card_no', 'mobile_no', 'resi_society_name_plate', 'resi_door_name_plate', 'resi_tpc_neighbor_1', 'resi_tpc_neighbor_2', 'resi_met_person', 'resi_relation', 'resi_ownership_status_text', 'resi_landmark_1', 'resi_landmark_2', 'busi_tpc_neighbor_1', 'busi_tpc_neighbor_2', 'busi_company_name_board', 'busi_met_person', 'busi_designation', 'busi_nature_of_business', 'busi_ownership_status_text', 'busi_landmark_1', 'busi_landmark_2', 'office_met_person', 'office_designation', 'office_nature_of_company', 'office_net_salary_amount', 'office_tpc_for_applicant', 'office_tpc_for_company', 'office_landmark', 'financial_pan_card_no', 'financial_name', 'financial_sales', 'financial_share_capital', 'financial_net_profit', 'financial_debtors', 'financial_creditors', 'financial_total_loans', 'financial_depriciation', 'bank_bank_name', 'bank_account_holder', 'bank_account_number', 'bank_pan_card_no', 'bank_current_balance', 'financial_assessment_year', 'resi_address', 'office_address', 'busi_address', 'resi_locality_text', 'busi_locality_text'], 'string', 'max' => 150],
            [['resi_remarks', 'busi_remarks', 'office_remarks', 'bank_address', 'bank_narration'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'application_id' => 'Application ID',
            'profile_id' => 'Profile ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'aadhaar_card_no' => 'Aadhaar Card No',
            'pan_card_no' => 'Pan Card No',
            'mobile_no' => 'Mobile No',
            'institute_id' => 'Institute Name',
            'loan_type_id' => 'Loan Type',
            'applicant_type' => 'Applicant Type',
            'profile_type' => 'Profile Type',
            'area_id' => 'Area',
            'date_of_application' => 'Date Of Application',
            'resi_society_name_plate' => 'Society Name Plate',
            'resi_door_name_plate' => 'Door Name Plate',
            'resi_tpc_neighbor_1' => 'Tpc Neighbor 1',
            'resi_tpc_neighbor_2' => 'Tpc Neighbor 2',
            'resi_met_person' => 'Met Person',
            'resi_relation' => 'Relation',
            'resi_home_area' => 'Home Area',
            'resi_ownership_status' => 'Ownership Status',
            'resi_ownership_status_text' => 'Ownership Status Other',
            'resi_stay_years' => 'Stay Years',
            'resi_total_family_members' => 'Total Family Members',
            'resi_working_members' => 'Working Members',
            'resi_locality' => 'Locality',
            'resi_locality_text' => 'Locality Other',
            'resi_landmark_1' => 'Landmark 1',
            'resi_landmark_2' => 'Landmark 2',
            'resi_remarks' => 'Remarks',
            'busi_tpc_neighbor_1' => 'Tpc Neighbor 1',
            'busi_tpc_neighbor_2' => 'Tpc Neighbor 2',
            'busi_company_name_board' => 'Company Name Board',
            'busi_met_person' => 'Met Person',
            'busi_designation' => 'Designation',
            'busi_nature_of_business' => 'Nature Of Business',
            'busi_staff_declared' => 'Staff Declared',
            'busi_staff_seen' => 'Staff Seen',
            'busi_years_in_business' => 'Years In Business',
            'busi_type_of_business' => 'Type Of Business',
            'busi_ownership_status' => 'Ownership Status',
            'busi_ownership_status_text' => 'Ownership Status Other',
            'busi_area' => 'Area',
            'busi_locality' => 'Locality',
            'busi_locality_text' => 'Locality Other',
            'busi_landmark_1' => 'Landmark 1',
            'busi_landmark_2' => 'Landmark 2',
            'busi_remarks' => 'Remarks',
            'office_met_person' => 'Met Person',
            'office_designation' => 'Designation',
            'office_nature_of_company' => 'Nature Of Company',
            'office_employment_years' => 'Employment Years',
            'office_net_salary_amount' => 'Net Salary Amount',
            'office_tpc_for_applicant' => 'Tpc For Applicant',
            'office_tpc_for_company' => 'Tpc For Company',
            'office_landmark' => 'Landmark',
            'office_remarks' => 'Remarks',
            'financial_pan_card_no' => 'Pan Card No',
            'financial_name' => 'Name',
            'financial_assessment_year' => 'Assessment Year',
            'financial_date_of_filing' => 'Date Of Filing',
            'financial_sales' => 'Sales',
            'financial_share_capital' => 'Share Capital',
            'financial_net_profit' => 'Net Profit',
            'financial_debtors' => 'Debtors',
            'financial_creditors' => 'Creditors',
            'financial_total_loans' => 'Total Loans',
            'financial_depriciation' => 'Depriciation',
            'bank_bank_name' => 'Bank Name',
            'bank_account_holder' => 'Account Holder',
            'bank_account_number' => 'Account Number',
            'bank_dated_transaction' => 'Dated Transaction',
            'bank_pan_card_no' => 'Pan Card No',
            'bank_current_balance' => 'Current Balance',
            'bank_account_opening_date' => 'Account Opening Date',
            'bank_date_of_birth' => 'Date Of Birth',
            'bank_address' => 'Address',
            'bank_narration' => 'Narration',
            'application_status' => 'Application Status',
            'mobile_user_id' => 'Mobile User',
            'mobile_user_assigned_date' => 'Mobile User Assigned Date',
            'mobile_user_status' => 'Mobile User Status',
            'mobile_user_status_updated_on' => 'Mobile User Status Updated On',
            'resi_address' => 'Residence Address',
            'resi_address_verification' => 'Send For Verification',
            'office_address' => 'Office Address',
            'office_address_verification' => 'Send For Verification',
            'busi_address' => 'Business Address',
            'busi_address_verification' => 'Send For Verification',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'update_by' => 'Update By',
            'updated_on' => 'Updated On',
            'is_deleted' => 'Is Deleted',
        ];
    }

    public function getApplicantName($first_name, $middle_name, $last_name) {
        return $first_name . ' ' . $middle_name . ' ' . $last_name;
    }

    public function getLoanType($loan_type_id) {

        $loan_data = LoanTypes::findOne($loan_type_id);

        return $loan_data->loan_name;
    }

    public function getApplicantType($applicant_type) {
        $return = '';

        switch ($applicant_type) {
            case 1:
                $return = 'Salaried';
                break;
            case 2:
                $return = 'Self-employed';
                break;
        }

        return $return;
    }

    public function getApplicationStatus($application_status) {
        $return = '';

        switch ($application_status) {
            case 1:
                $return = '<span style="color:#3c8dbc;font-weight:bold">New</span>';
                break;
            case 2:
                $return = '<span style="color:#d58512;font-weight:bold">Inprogress</div>';
                break;
            case 3:
                $return = '<span style="color:#00a65a;font-weight:bold">Completed</div>';
                break;
        }

        return $return;
    }

    public function getVerifierStatus($id, $verifier_status) {
        $return = '';

        switch ($verifier_status) {
            case 0:
                $return = '<button type="button" class="btn btn-block btn-primary btn-sm assignVerifier" value="'.$id.'">Assign Verifier</button>';
                break;
            case 1:
                $return = '<span style="color:#3c8dbc;font-weight:bold">New</span>';
                break;
            case 2:
                $return = '<span style="color:#d58512;font-weight:bold">Inprogress</div>';
                break;
            case 3:
                $return = '<span style="color:#00a65a;font-weight:bold">Completed</div>';
                break;
        }

        return $return;
    }
    
    function thumbnailCreator($newfile_name, $dirname, $thumbs_folder_name, $thumb_width, $thumb_height, $file_tmp, $file_ext) {
        //upload image path
        $upload_image = $dirname . '/' . $newfile_name;

        $thumbnail = $dirname . '/' . $thumbs_folder_name . '/' . $newfile_name;
        list($width, $height) = getimagesize($upload_image);
        $thumb_create = imagecreatetruecolor($thumb_width, $thumb_height);
        switch ($file_ext) {
            case 'jpg':
                $source = imagecreatefromjpeg($upload_image);
                break;
            case 'jpeg':
                $source = imagecreatefromjpeg($upload_image);
                break;

            case 'png':
                $source = imagecreatefrompng($upload_image);
                break;
            case 'gif':
                $source = imagecreatefromgif($upload_image);
                break;
            default:
                $source = imagecreatefromjpeg($upload_image);
        }

        imagecopyresized($thumb_create, $source, 0, 0, 0, 0, $thumb_width, $thumb_height, $width, $height);
        switch ($file_ext) {
            case 'jpg' || 'jpeg':
                imagejpeg($thumb_create, $thumbnail, 100);
                break;
            case 'png':
                imagepng($thumb_create, $thumbnail, 100);
                break;

            case 'gif':
                imagegif($thumb_create, $thumbnail, 100);
                break;
            default:
                imagejpeg($thumb_create, $thumbnail, 100);
        }
    }

}
