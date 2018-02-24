<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\applications\models\ApplicationsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="applications-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'application_id') ?>

    <?= $form->field($model, 'profile_id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'middle_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'aadhaar_card_no') ?>

    <?php // echo $form->field($model, 'pan_card_no') ?>

    <?php // echo $form->field($model, 'mobile_no') ?>

    <?php // echo $form->field($model, 'institute_id') ?>

    <?php // echo $form->field($model, 'loan_type_id') ?>

    <?php // echo $form->field($model, 'applicant_type') ?>

    <?php // echo $form->field($model, 'profile_type') ?>

    <?php // echo $form->field($model, 'area_id') ?>

    <?php // echo $form->field($model, 'date_of_application') ?>

    <?php // echo $form->field($model, 'resi_society_name_plate') ?>

    <?php // echo $form->field($model, 'resi_door_name_plate') ?>

    <?php // echo $form->field($model, 'resi_tpc_neighbor_1') ?>

    <?php // echo $form->field($model, 'resi_tpc_neighbor_2') ?>

    <?php // echo $form->field($model, 'resi_met_person') ?>

    <?php // echo $form->field($model, 'resi_relation') ?>

    <?php // echo $form->field($model, 'resi_home_area') ?>

    <?php // echo $form->field($model, 'resi_ownership_status') ?>

    <?php // echo $form->field($model, 'resi_ownership_status_text') ?>

    <?php // echo $form->field($model, 'resi_stay_years') ?>

    <?php // echo $form->field($model, 'resi_total_family_members') ?>

    <?php // echo $form->field($model, 'resi_working_members') ?>

    <?php // echo $form->field($model, 'resi_locality') ?>

    <?php // echo $form->field($model, 'resi_locality_text') ?>

    <?php // echo $form->field($model, 'resi_landmark_1') ?>

    <?php // echo $form->field($model, 'resi_landmark_2') ?>

    <?php // echo $form->field($model, 'resi_structure') ?>

    <?php // echo $form->field($model, 'resi_market_feedback') ?>

    <?php // echo $form->field($model, 'resi_remarks') ?>

    <?php // echo $form->field($model, 'resi_status') ?>

    <?php // echo $form->field($model, 'busi_tpc_neighbor_1') ?>

    <?php // echo $form->field($model, 'busi_tpc_neighbor_2') ?>

    <?php // echo $form->field($model, 'busi_company_name_board') ?>

    <?php // echo $form->field($model, 'busi_met_person') ?>

    <?php // echo $form->field($model, 'busi_designation') ?>

    <?php // echo $form->field($model, 'busi_nature_of_business') ?>

    <?php // echo $form->field($model, 'busi_staff_declared') ?>

    <?php // echo $form->field($model, 'busi_staff_seen') ?>

    <?php // echo $form->field($model, 'busi_years_in_business') ?>

    <?php // echo $form->field($model, 'busi_type_of_business') ?>

    <?php // echo $form->field($model, 'busi_ownership_status') ?>

    <?php // echo $form->field($model, 'busi_ownership_status_text') ?>

    <?php // echo $form->field($model, 'busi_area') ?>

    <?php // echo $form->field($model, 'busi_locality') ?>

    <?php // echo $form->field($model, 'busi_locality_text') ?>

    <?php // echo $form->field($model, 'busi_landmark_1') ?>

    <?php // echo $form->field($model, 'busi_landmark_2') ?>

    <?php // echo $form->field($model, 'busi_structure') ?>

    <?php // echo $form->field($model, 'busi_remarks') ?>

    <?php // echo $form->field($model, 'busi_status') ?>

    <?php // echo $form->field($model, 'office_company_name_board') ?>

    <?php // echo $form->field($model, 'office_designation') ?>

    <?php // echo $form->field($model, 'office_met_person') ?>

    <?php // echo $form->field($model, 'office_met_person_designation') ?>

    <?php // echo $form->field($model, 'office_department') ?>

    <?php // echo $form->field($model, 'office_nature_of_company') ?>

    <?php // echo $form->field($model, 'office_employment_years') ?>

    <?php // echo $form->field($model, 'office_net_salary_amount') ?>

    <?php // echo $form->field($model, 'office_tpc_for_applicant') ?>

    <?php // echo $form->field($model, 'office_tpc_for_company') ?>

    <?php // echo $form->field($model, 'office_landmark') ?>

    <?php // echo $form->field($model, 'office_structure') ?>

    <?php // echo $form->field($model, 'office_remarks') ?>

    <?php // echo $form->field($model, 'office_status') ?>

    <?php // echo $form->field($model, 'financial_pan_card_no') ?>

    <?php // echo $form->field($model, 'financial_name') ?>

    <?php // echo $form->field($model, 'financial_assessment_year') ?>

    <?php // echo $form->field($model, 'financial_date_of_filing') ?>

    <?php // echo $form->field($model, 'financial_sales') ?>

    <?php // echo $form->field($model, 'financial_share_capital') ?>

    <?php // echo $form->field($model, 'financial_net_profit') ?>

    <?php // echo $form->field($model, 'financial_debtors') ?>

    <?php // echo $form->field($model, 'financial_creditors') ?>

    <?php // echo $form->field($model, 'financial_total_loans') ?>

    <?php // echo $form->field($model, 'financial_depriciation') ?>

    <?php // echo $form->field($model, 'bank_bank_name') ?>

    <?php // echo $form->field($model, 'bank_account_holder') ?>

    <?php // echo $form->field($model, 'bank_account_number') ?>

    <?php // echo $form->field($model, 'bank_dated_transaction') ?>

    <?php // echo $form->field($model, 'bank_pan_card_no') ?>

    <?php // echo $form->field($model, 'bank_current_balance') ?>

    <?php // echo $form->field($model, 'bank_account_opening_date') ?>

    <?php // echo $form->field($model, 'bank_date_of_birth') ?>

    <?php // echo $form->field($model, 'bank_address') ?>

    <?php // echo $form->field($model, 'bank_narration') ?>

    <?php // echo $form->field($model, 'noc_structure') ?>

    <?php // echo $form->field($model, 'noc_status') ?>

    <?php // echo $form->field($model, 'resi_office_society_name_plate') ?>

    <?php // echo $form->field($model, 'resi_office_door_name_plate') ?>

    <?php // echo $form->field($model, 'resi_office_tpc_neighbor_1') ?>

    <?php // echo $form->field($model, 'resi_office_tpc_neighbor_2') ?>

    <?php // echo $form->field($model, 'resi_office_met_person') ?>

    <?php // echo $form->field($model, 'resi_office_relation') ?>

    <?php // echo $form->field($model, 'resi_office_home_area') ?>

    <?php // echo $form->field($model, 'resi_office_ownership_status') ?>

    <?php // echo $form->field($model, 'resi_office_ownership_status_text') ?>

    <?php // echo $form->field($model, 'resi_office_stay_years') ?>

    <?php // echo $form->field($model, 'resi_office_total_family_members') ?>

    <?php // echo $form->field($model, 'resi_office_working_members') ?>

    <?php // echo $form->field($model, 'resi_office_company_name_board') ?>

    <?php // echo $form->field($model, 'resi_office_designation') ?>

    <?php // echo $form->field($model, 'resi_office_department') ?>

    <?php // echo $form->field($model, 'resi_office_nature_of_company') ?>

    <?php // echo $form->field($model, 'resi_office_employment_years') ?>

    <?php // echo $form->field($model, 'resi_office_net_salary_amount') ?>

    <?php // echo $form->field($model, 'resi_office_tpc_for_applicant') ?>

    <?php // echo $form->field($model, 'resi_office_tpc_for_company') ?>

    <?php // echo $form->field($model, 'resi_office_locality') ?>

    <?php // echo $form->field($model, 'resi_office_locality_text') ?>

    <?php // echo $form->field($model, 'resi_office_landmark_1') ?>

    <?php // echo $form->field($model, 'resi_office_landmark_2') ?>

    <?php // echo $form->field($model, 'resi_office_structure') ?>

    <?php // echo $form->field($model, 'resi_office_market_feedback') ?>

    <?php // echo $form->field($model, 'resi_office_remarks') ?>

    <?php // echo $form->field($model, 'resi_office_status') ?>

    <?php // echo $form->field($model, 'builder_profile_company_name_board') ?>

    <?php // echo $form->field($model, 'builder_profile_met_person') ?>

    <?php // echo $form->field($model, 'builder_profile_met_person_designation') ?>

    <?php // echo $form->field($model, 'builder_profile_exsistence') ?>

    <?php // echo $form->field($model, 'builder_profile_current_projects') ?>

    <?php // echo $form->field($model, 'builder_profile_previous_projects') ?>

    <?php // echo $form->field($model, 'builder_profile_staff') ?>

    <?php // echo $form->field($model, 'builder_profile_area') ?>

    <?php // echo $form->field($model, 'builder_profile_type_of_office') ?>

    <?php // echo $form->field($model, 'builder_profile_tpc_neighbor_1') ?>

    <?php // echo $form->field($model, 'builder_profile_tpc_neighbor_2') ?>

    <?php // echo $form->field($model, 'builder_profile_landmark_1') ?>

    <?php // echo $form->field($model, 'builder_profile_landmark_2') ?>

    <?php // echo $form->field($model, 'property_apf_met_person') ?>

    <?php // echo $form->field($model, 'property_apf_met_person_designation') ?>

    <?php // echo $form->field($model, 'property_apf_property_status') ?>

    <?php // echo $form->field($model, 'property_apf_no_of_workers') ?>

    <?php // echo $form->field($model, 'property_apf_mode_of_payment') ?>

    <?php // echo $form->field($model, 'property_apf_construction_stock') ?>

    <?php // echo $form->field($model, 'property_apf_total_flats') ?>

    <?php // echo $form->field($model, 'property_apf_how_many_sold') ?>

    <?php // echo $form->field($model, 'property_apf_total_shops') ?>

    <?php // echo $form->field($model, 'property_apf_area') ?>

    <?php // echo $form->field($model, 'property_apf_work_completed') ?>

    <?php // echo $form->field($model, 'property_apf_possession') ?>

    <?php // echo $form->field($model, 'property_apf_apf') ?>

    <?php // echo $form->field($model, 'property_apf_delay_in_work') ?>

    <?php // echo $form->field($model, 'property_apf_tpc') ?>

    <?php // echo $form->field($model, 'property_apf_landmark') ?>

    <?php // echo $form->field($model, 'indiv_property_met_person') ?>

    <?php // echo $form->field($model, 'indiv_property_met_person_designation') ?>

    <?php // echo $form->field($model, 'indiv_property_property_confirmed') ?>

    <?php // echo $form->field($model, 'indiv_property_previous_owner') ?>

    <?php // echo $form->field($model, 'indiv_property_property_type') ?>

    <?php // echo $form->field($model, 'indiv_property_area') ?>

    <?php // echo $form->field($model, 'indiv_property_approx_market_value') ?>

    <?php // echo $form->field($model, 'indiv_property_society_name_plate') ?>

    <?php // echo $form->field($model, 'indiv_property_door_name_plate') ?>

    <?php // echo $form->field($model, 'indiv_property_tpc') ?>

    <?php // echo $form->field($model, 'indiv_property_landmark') ?>

    <?php // echo $form->field($model, 'application_status') ?>

    <?php // echo $form->field($model, 'resi_address') ?>

    <?php // echo $form->field($model, 'resi_address_verification') ?>

    <?php // echo $form->field($model, 'resi_address_pincode') ?>

    <?php // echo $form->field($model, 'resi_address_trigger') ?>

    <?php // echo $form->field($model, 'resi_address_lat') ?>

    <?php // echo $form->field($model, 'resi_address_long') ?>

    <?php // echo $form->field($model, 'office_address') ?>

    <?php // echo $form->field($model, 'office_address_verification') ?>

    <?php // echo $form->field($model, 'office_address_pincode') ?>

    <?php // echo $form->field($model, 'office_address_trigger') ?>

    <?php // echo $form->field($model, 'office_address_lat') ?>

    <?php // echo $form->field($model, 'office_address_long') ?>

    <?php // echo $form->field($model, 'busi_address') ?>

    <?php // echo $form->field($model, 'busi_address_verification') ?>

    <?php // echo $form->field($model, 'busi_address_pincode') ?>

    <?php // echo $form->field($model, 'busi_address_trigger') ?>

    <?php // echo $form->field($model, 'busi_address_lat') ?>

    <?php // echo $form->field($model, 'busi_address_long') ?>

    <?php // echo $form->field($model, 'noc_address') ?>

    <?php // echo $form->field($model, 'noc_address_verification') ?>

    <?php // echo $form->field($model, 'noc_address_pincode') ?>

    <?php // echo $form->field($model, 'noc_address_trigger') ?>

    <?php // echo $form->field($model, 'noc_address_lat') ?>

    <?php // echo $form->field($model, 'noc_address_long') ?>

    <?php // echo $form->field($model, 'resi_office_address') ?>

    <?php // echo $form->field($model, 'resi_office_address_verification') ?>

    <?php // echo $form->field($model, 'resi_office_address_pincode') ?>

    <?php // echo $form->field($model, 'resi_office_address_trigger') ?>

    <?php // echo $form->field($model, 'resi_office_address_lat') ?>

    <?php // echo $form->field($model, 'resi_office_address_long') ?>

    <?php // echo $form->field($model, 'builder_profile_address') ?>

    <?php // echo $form->field($model, 'builder_profile_address_verification') ?>

    <?php // echo $form->field($model, 'builder_profile_address_pincode') ?>

    <?php // echo $form->field($model, 'builder_profile_address_trigger') ?>

    <?php // echo $form->field($model, 'builder_profile_address_lat') ?>

    <?php // echo $form->field($model, 'builder_profile_address_long') ?>

    <?php // echo $form->field($model, 'property_apf_address') ?>

    <?php // echo $form->field($model, 'property_apf_address_verification') ?>

    <?php // echo $form->field($model, 'property_apf_address_pincode') ?>

    <?php // echo $form->field($model, 'property_apf_address_trigger') ?>

    <?php // echo $form->field($model, 'property_apf_address_lat') ?>

    <?php // echo $form->field($model, 'property_apf_address_long') ?>

    <?php // echo $form->field($model, 'indiv_property_address') ?>

    <?php // echo $form->field($model, 'indiv_property_address_verification') ?>

    <?php // echo $form->field($model, 'indiv_property_address_pincode') ?>

    <?php // echo $form->field($model, 'indiv_property_address_trigger') ?>

    <?php // echo $form->field($model, 'indiv_property_address_lat') ?>

    <?php // echo $form->field($model, 'indiv_property_address_long') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'created_on') ?>

    <?php // echo $form->field($model, 'update_by') ?>

    <?php // echo $form->field($model, 'updated_on') ?>

    <?php // echo $form->field($model, 'is_deleted') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
