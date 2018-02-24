<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\applications\models\Applications */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="applications-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'application_id',
            'profile_id',
            'first_name',
            'middle_name',
            'last_name',
            'aadhaar_card_no',
            'pan_card_no',
            'mobile_no',
            'institute_id',
            'loan_type_id',
            'applicant_type',
            'profile_type',
            'area_id',
            'date_of_application',
            'resi_society_name_plate',
            'resi_door_name_plate',
            'resi_tpc_neighbor_1',
            'resi_tpc_neighbor_2',
            'resi_met_person',
            'resi_relation',
            'resi_home_area',
            'resi_ownership_status',
            'resi_ownership_status_text',
            'resi_stay_years',
            'resi_total_family_members',
            'resi_working_members',
            'resi_locality',
            'resi_locality_text',
            'resi_landmark_1',
            'resi_landmark_2',
            'resi_structure',
            'resi_market_feedback',
            'resi_remarks',
            'resi_status',
            'busi_tpc_neighbor_1',
            'busi_tpc_neighbor_2',
            'busi_company_name_board',
            'busi_met_person',
            'busi_designation',
            'busi_nature_of_business',
            'busi_staff_declared',
            'busi_staff_seen',
            'busi_years_in_business',
            'busi_type_of_business',
            'busi_ownership_status',
            'busi_ownership_status_text',
            'busi_area',
            'busi_locality',
            'busi_locality_text',
            'busi_landmark_1',
            'busi_landmark_2',
            'busi_structure',
            'busi_remarks',
            'busi_status',
            'office_company_name_board',
            'office_designation',
            'office_met_person',
            'office_met_person_designation',
            'office_department',
            'office_nature_of_company',
            'office_employment_years',
            'office_net_salary_amount',
            'office_tpc_for_applicant',
            'office_tpc_for_company',
            'office_landmark',
            'office_structure',
            'office_remarks',
            'office_status',
            'financial_pan_card_no',
            'financial_name',
            'financial_assessment_year',
            'financial_date_of_filing',
            'financial_sales',
            'financial_share_capital',
            'financial_net_profit',
            'financial_debtors',
            'financial_creditors',
            'financial_total_loans',
            'financial_depriciation',
            'bank_bank_name',
            'bank_account_holder',
            'bank_account_number',
            'bank_dated_transaction',
            'bank_pan_card_no',
            'bank_current_balance',
            'bank_account_opening_date',
            'bank_date_of_birth',
            'bank_address',
            'bank_narration',
            'noc_structure',
            'noc_status',
            'resi_office_society_name_plate',
            'resi_office_door_name_plate',
            'resi_office_tpc_neighbor_1',
            'resi_office_tpc_neighbor_2',
            'resi_office_met_person',
            'resi_office_relation',
            'resi_office_home_area',
            'resi_office_ownership_status',
            'resi_office_ownership_status_text',
            'resi_office_stay_years',
            'resi_office_total_family_members',
            'resi_office_working_members',
            'resi_office_company_name_board',
            'resi_office_designation',
            'resi_office_department',
            'resi_office_nature_of_company',
            'resi_office_employment_years',
            'resi_office_net_salary_amount',
            'resi_office_tpc_for_applicant',
            'resi_office_tpc_for_company',
            'resi_office_locality',
            'resi_office_locality_text',
            'resi_office_landmark_1',
            'resi_office_landmark_2',
            'resi_office_structure',
            'resi_office_market_feedback',
            'resi_office_remarks',
            'resi_office_status',
            'builder_profile_company_name_board',
            'builder_profile_met_person',
            'builder_profile_met_person_designation',
            'builder_profile_exsistence',
            'builder_profile_current_projects',
            'builder_profile_previous_projects',
            'builder_profile_staff',
            'builder_profile_area',
            'builder_profile_type_of_office',
            'builder_profile_tpc_neighbor_1',
            'builder_profile_tpc_neighbor_2',
            'builder_profile_landmark_1',
            'builder_profile_landmark_2',
            'property_apf_met_person',
            'property_apf_met_person_designation',
            'property_apf_property_status',
            'property_apf_no_of_workers',
            'property_apf_mode_of_payment',
            'property_apf_construction_stock',
            'property_apf_total_flats',
            'property_apf_how_many_sold',
            'property_apf_total_shops',
            'property_apf_area',
            'property_apf_work_completed',
            'property_apf_possession',
            'property_apf_apf',
            'property_apf_delay_in_work',
            'property_apf_tpc',
            'property_apf_landmark',
            'indiv_property_met_person',
            'indiv_property_met_person_designation',
            'indiv_property_property_confirmed',
            'indiv_property_previous_owner',
            'indiv_property_property_type',
            'indiv_property_area',
            'indiv_property_approx_market_value',
            'indiv_property_society_name_plate',
            'indiv_property_door_name_plate',
            'indiv_property_tpc',
            'indiv_property_landmark',
            'application_status',
            'resi_address',
            'resi_address_verification',
            'resi_address_pincode',
            'resi_address_trigger',
            'resi_address_lat',
            'resi_address_long',
            'office_address',
            'office_address_verification',
            'office_address_pincode',
            'office_address_trigger',
            'office_address_lat',
            'office_address_long',
            'busi_address',
            'busi_address_verification',
            'busi_address_pincode',
            'busi_address_trigger',
            'busi_address_lat',
            'busi_address_long',
            'noc_address',
            'noc_address_verification',
            'noc_address_pincode',
            'noc_address_trigger',
            'noc_address_lat',
            'noc_address_long',
            'resi_office_address',
            'resi_office_address_verification',
            'resi_office_address_pincode',
            'resi_office_address_trigger',
            'resi_office_address_lat',
            'resi_office_address_long',
            'builder_profile_address',
            'builder_profile_address_verification',
            'builder_profile_address_pincode',
            'builder_profile_address_trigger',
            'builder_profile_address_lat',
            'builder_profile_address_long',
            'property_apf_address',
            'property_apf_address_verification',
            'property_apf_address_pincode',
            'property_apf_address_trigger',
            'property_apf_address_lat',
            'property_apf_address_long',
            'indiv_property_address',
            'indiv_property_address_verification',
            'indiv_property_address_pincode',
            'indiv_property_address_trigger',
            'indiv_property_address_lat',
            'indiv_property_address_long',
            'created_by',
            'created_on',
            'update_by',
            'updated_on',
            'is_deleted',
        ],
    ]) ?>

</div>
