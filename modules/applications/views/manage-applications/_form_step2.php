<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\date\DatePicker;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\modules\applications\models\Applications */
/* @var $form yii\widgets\ActiveForm */
$institutes->id = $model->institute_id;
$loantypes->id = $model->loan_type_id;
//$area_model->id = $model->area_id;
?>

<div class="applications-form">
    <div class="body-wrapper">
        <!--    <div class="div_search">
                <div class="row">
                    <div class="col-lg-12">sdfs</div>
                </div>
            </div>-->

        <?php $form = ActiveForm::begin(); ?>

        <?php //$form->field($model, 'profile_id')->textInput() ?>

        <div class="row">
            <div class="col-lg-3"><?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?></div>
            <div class="col-lg-3"><?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?></div>
            <div class="col-lg-3"><?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?></div>
            <div class="col-lg-3"><?= $form->field($model, 'aadhaar_card_no')->textInput(['maxlength' => true]) ?></div>
        </div>

        <div class="row">
            <div class="col-lg-3"><?= $form->field($model, 'pan_card_no')->textInput(['maxlength' => true]) ?></div>
            <div class="col-lg-3"><?= $form->field($model, 'mobile_no')->textInput(['maxlength' => true]) ?></div>
            <div class="col-lg-3"><?= $form->field($model, 'institute_id')->dropDownList(ArrayHelper::map($institutes->find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Institute'])->label('Institute Name') ?></div>
            <div class="col-lg-3"><?= $form->field($model, 'loan_type_id')->dropDownList(ArrayHelper::map($loantypes->find()->asArray()->all(), 'id', 'loan_name'), ['prompt' => 'Select Loan Type'])->label('Loan Type') ?></div>
        </div>

        <div class="row">
            <div class="col-lg-3"><?= $form->field($model, 'applicant_type')->dropDownList(['1' => 'Salaried', '2' => 'Self-employed'], ['prompt' => 'Select Applicant Type']) ?></div>
            <div class="col-lg-3"><?= $form->field($model, 'profile_type')->dropDownList(['1' => 'Resi', '2' => 'Office', '3' => 'Resi/Office'], ['prompt' => 'Select Profile Type']) ?></div>            
            <div class="col-lg-3">
                <?=
                $form->field($model, 'date_of_application')->widget(
                        DatePicker::className(), [
                    'type' => DatePicker::TYPE_COMPONENT_APPEND,
                    'pluginOptions' => [
                        'autoclose' => true,
                        'format' => 'yyyy-mm-dd',
                        'endDate' => '0d',
                        'todayHighlight' => true
                    ]
                ]);
                ?>

            </div>
            <div class="col-lg-3"><?php //$form->field($model, 'area_id')->dropDownList(ArrayHelper::map($area_model->find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Area'])->label('Area')  ?></div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default cust-panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <strong>Residence Address</strong>
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <?= $form->field($model, 'resi_address')->textArea() ?>
                            </div>
                            <div class="col-lg-4">
                                <?= $form->field($model, 'resi_address_pincode')->widget(Select2::classname(), [
                                    'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Select pincode ...'],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <?= $form->field($model, 'resi_address_trigger')->textArea() ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <?= $form->field($model, 'resi_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default cust-panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <strong>Office Address</strong>
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <?= $form->field($model, 'office_address')->textArea() ?>
                            </div>
                            <div class="col-lg-4">
                                <?= $form->field($model, 'office_address_pincode')->widget(Select2::classname(), [
                                    'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Select pincode ...'],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <?= $form->field($model, 'office_address_trigger')->textArea() ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <?= $form->field($model, 'office_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                            </div>
                        </div>    
                    </div>                 
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-default cust-panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <strong>Business Address</strong>
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <?= $form->field($model, 'busi_address')->textArea() ?>
                            </div>
                            <div class="col-lg-4">
                                <?= $form->field($model, 'busi_address_pincode')->widget(Select2::classname(), [
                                    'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Select pincode ...'],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <?= $form->field($model, 'busi_address_trigger')->textArea() ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <?= $form->field($model, 'busi_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default cust-panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <strong>NOC Address</strong>
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <?= $form->field($model, 'noc_address')->textArea() ?>
                            </div>
                            <div class="col-lg-4">
                                <?= $form->field($model, 'noc_address_pincode')->widget(Select2::classname(), [
                                    'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Select pincode ...'],
                                    'pluginOptions' => [
                                        'allowClear' => true
                                    ],
                                ]) ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <?= $form->field($model, 'noc_address_trigger')->textArea() ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <?= $form->field($model, 'noc_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-group" id="accordion" style="margin-bottom: 20px;">
            <!--Residence Verification-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#resi_verification"><strong>Residence Verification</strong></a>
                    </h4>
                </div>
                <div id="resi_verification" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'resi_society_name_plate')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'resi_door_name_plate')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'resi_tpc_neighbor_1')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'resi_tpc_neighbor_2')->textInput(['maxlength' => true]) ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'resi_met_person')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'resi_relation')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'resi_ownership_status')->dropDownList(['1' => 'Rented', '2' => 'Owned', '3' => 'Parental', '4' => 'Other'], ['prompt' => 'Select Ownership']) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'resi_ownership_status_text')->textInput(['maxlength' => true, 'readOnly' => true]) ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'resi_home_area')->textInput() ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'resi_stay_years')->textInput() ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'resi_total_family_members')->textInput() ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'resi_working_members')->textInput() ?></div>                            
                        </div>

                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'resi_locality')->dropDownList(['1' => 'Chawl', '2' => 'Residential', '3' => 'Bunglow', '4' => 'Other'], ['prompt' => 'Select Locality']) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'resi_locality_text')->textInput(['maxlength' => true, 'readOnly' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'resi_landmark_1')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'resi_landmark_2')->textInput(['maxlength' => true]) ?></div>                            
                        </div>

                        <div class="row">
                            <div class="col-lg-9"><?= $form->field($model, 'resi_structure')->textInput() ?></div>
                            <div class="col-lg-3">
                                <label>Market Feedback</label>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->resi_market_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[resi_market_feedback]" autocomplete="off" <?= ($model->resi_market_feedback == 1) ? 'checked' : '' ?> value="1"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->resi_market_feedback == 2) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[resi_market_feedback]" autocomplete="off" <?= ($model->resi_market_feedback == 2) ? 'checked' : '' ?> value="2"> Negative
                                    </label>
                                </div>
                            </div>                           
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-default cust-panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <strong>Docs</strong>
                                        </h4>
                                    </div>
                                    <div class="panel-body" style="height: 200px;overflow-y: auto;">
                                        <div id="resi_docs">
<?php echo $resiDocsTable; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-default cust-panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <strong>Photos</strong>
                                        </h4>
                                    </div>
                                    <div class="panel-body" style="height: 200px;overflow-y: auto;">
                                        <div id="resi_photos">
<?php echo $resiPhotosTable; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>                      
                        </div>

                        <div class="row">
                            <div class="col-lg-12"><?= $form->field($model, 'resi_remarks')->textInput(['maxlength' => true]) ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <label>Status</label>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->resi_status == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[resi_status]" autocomplete="off" <?= ($model->resi_status == 1) ? 'checked' : '' ?> value="1"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->resi_status == 2) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[resi_status]" autocomplete="off" <?= ($model->resi_status == 2) ? 'checked' : '' ?> value="2"> Negative
                                    </label>
                                    <label class="btn btn-primary <?= ($model->resi_status == 3) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[resi_status]" autocomplete="off" <?= ($model->resi_status == 3) ? 'checked' : '' ?> value="2"> Credit Refer
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Business Verification-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#busi_verification"><strong>Business Verification</strong></a>
                    </h4>
                </div>
                <div id="busi_verification" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'busi_tpc_neighbor_1')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'busi_tpc_neighbor_2')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'busi_company_name_board')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'busi_met_person')->textInput(['maxlength' => true]) ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'busi_designation')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'busi_nature_of_business')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'busi_years_in_business')->textInput() ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'busi_type_of_business')->dropDownList(['1' => 'DIRECTORSHIP', '2' => 'PROPRIETOR', '3' => 'PARTNERSHIP'], ['prompt' => 'Select Type Of Business']) ?></div>
                        </div>

                        <div class="row">                            
                            <div class="col-lg-3"><?= $form->field($model, 'busi_ownership_status')->dropDownList(['1' => 'Rented', '2' => 'Owned', '3' => 'Parental', '4' => 'Other'], ['prompt' => 'Select Ownership']) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'busi_ownership_status_text')->textInput(['maxlength' => true, 'readOnly' => true]) ?></div>                            
                            <div class="col-lg-3"><?= $form->field($model, 'busi_locality')->dropDownList(['1' => 'Gala', '2' => 'Shopline', '3' => 'Compound', '4' => 'Resi', '5' => 'Commercial', '6' => 'Other'], ['prompt' => 'Select Locality']) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'busi_locality_text')->textInput(['readOnly' => true]) ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'busi_staff_declared')->textInput() ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'busi_staff_seen')->textInput() ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'busi_area')->textInput() ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'busi_landmark_1')->textInput(['maxlength' => true]) ?></div>                            
                        </div>

                        <div class="row">                            
                            <div class="col-lg-3"><?= $form->field($model, 'busi_landmark_2')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-9"><?= $form->field($model, 'busi_structure')->textInput(['maxlength' => true]) ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-default cust-panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <strong>Docs</strong>
                                        </h4>
                                    </div>
                                    <div class="panel-body" style="height: 200px;overflow-y: auto;">
                                        <div id="busi_docs">
<?php echo $busiDocsTable; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="panel panel-default cust-panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <strong>Photos</strong>
                                        </h4>
                                    </div>
                                    <div class="panel-body" style="height: 200px;overflow-y: auto;">
                                        <div id="busi_photos">
<?php echo $busiPhotosTable; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>                      
                        </div>

                        <div class="row">                            
                            <div class="col-lg-12"><?= $form->field($model, 'busi_remarks')->textInput(['maxlength' => true]) ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <label>Status</label>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->busi_status == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[busi_status]" autocomplete="off" <?= ($model->busi_status == 1) ? 'checked' : '' ?> value="1"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->busi_status == 2) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[busi_status]" autocomplete="off" <?= ($model->busi_status == 2) ? 'checked' : '' ?> value="2"> Negative
                                    </label>
                                    <label class="btn btn-primary <?= ($model->busi_status == 3) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[busi_status]" autocomplete="off" <?= ($model->busi_status == 3) ? 'checked' : '' ?> value="2"> Credit Refer
                                    </label>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>    

            <!--Office Verification-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#office_verification"><strong>Office Verification</strong></a>
                    </h4>
                </div>
                <div id="office_verification" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'office_company_name_board')->textInput(['maxlength' => true]) ?></div>            
                            <div class="col-lg-3"><?= $form->field($model, 'office_designation')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'office_met_person')->textInput(['maxlength' => true]) ?></div>     
                            <div class="col-lg-3"><?= $form->field($model, 'office_met_person_designation')->textInput(['maxlength' => true]) ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'office_department')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'office_nature_of_company')->textInput(['maxlength' => true]) ?></div> 
                            <div class="col-lg-3"><?= $form->field($model, 'office_employment_years')->textInput() ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'office_net_salary_amount')->textInput(['maxlength' => true]) ?></div>                                                       
                        </div>

                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'office_tpc_for_applicant')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'office_tpc_for_company')->textInput(['maxlength' => true]) ?></div> 
                            <div class="col-lg-3"><?= $form->field($model, 'office_landmark')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'office_remarks')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6">
                                <div class="panel panel-default cust-panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <strong>Photos</strong>
                                        </h4>
                                    </div>
                                    <div class="panel-body" style="height: 200px;overflow-y: auto;">
                                        <div id="office_photos">
<?php echo $officePhotosTable; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Status</label>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->office_status == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[busi_status]" autocomplete="off" <?= ($model->office_status == 1) ? 'checked' : '' ?> value="1"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->office_status == 2) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[busi_status]" autocomplete="off" <?= ($model->office_status == 2) ? 'checked' : '' ?> value="2"> Negative
                                    </label>
                                    <label class="btn btn-primary <?= ($model->office_status == 3) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[busi_status]" autocomplete="off" <?= ($model->office_status == 3) ? 'checked' : '' ?> value="2"> Credit Refer
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--ITR-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#itr"><strong>ITR</strong></a>
                    </h4>
                </div>
                <div id="itr" class="panel-collapse collapse">
                    <div class="panel-body">
<?php echo $itrTable; ?>
                    </div>
                </div>
            </div>

            <!--Financial-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#financial"><strong>Financial</strong></a>
                    </h4>
                </div>
                <div id="financial" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'financial_pan_card_no')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'financial_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3">
                                <?php
                                echo '<label class="control-label">Assessment Year</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[financial_assessment_year]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->date_of_application,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                            <div class="col-lg-3">
                                <?php
                                echo '<label class="control-label">Date Of Filing</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[financial_date_of_filing]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->date_of_application,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'financial_sales')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'financial_share_capital')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'financial_net_profit')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'financial_debtors')->textInput(['maxlength' => true]) ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'financial_creditors')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'financial_total_loans')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'financial_depriciation')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Bank Statement-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#bank_statement"><strong>Bank Statement</strong></a>
                    </h4>
                </div>
                <div id="bank_statement" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'bank_bank_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'bank_account_holder')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'bank_account_number')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'bank_dated_transaction')->textInput() ?></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3"><?= $form->field($model, 'bank_pan_card_no')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3"><?= $form->field($model, 'bank_current_balance')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3">
                                <?php
                                echo '<label class="control-label">Account Opening Date</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[bank_account_opening_date]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->date_of_application,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                            <div class="col-lg-3">
                                <?php
                                echo '<label class="control-label">Date Of Birth</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[bank_date_of_birth]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->date_of_application,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'bank_address')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'bank_narration')->textInput(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--NOC-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#noc"><strong>NOC</strong></a>
                    </h4>
                </div>
                <div id="noc" class="panel-collapse collapse">
                    <div class="panel-body">
<?php echo $nocTable; ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="panel panel-default cust-panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <strong>Photos</strong>
                                        </h4>
                                    </div>
                                    <div class="panel-body" style="height: 200px;overflow-y: auto;">
                                        <div id="noc_photos">
<?php echo $nocPhotosTable; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9"><?= $form->field($model, 'noc_structure')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-3">
                                <label>Status</label>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->noc_status == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[noc_status]" autocomplete="off" <?= ($model->noc_status == 1) ? 'checked' : '' ?> value="1"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->noc_status == 2) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[noc_status]" autocomplete="off" <?= ($model->noc_status == 2) ? 'checked' : '' ?> value="2"> Negative
                                    </label>
                                    <label class="btn btn-primary <?= ($model->noc_status == 3) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[noc_status]" autocomplete="off" <?= ($model->noc_status == 3) ? 'checked' : '' ?> value="2"> Credit Refer
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--KYC-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#kyc"><strong>KYC</strong></a>
                    </h4>
                </div>
                <div id="kyc" class="panel-collapse collapse">
                    <div class="panel-body" id="kyc_table" style="height: 350px;overflow-y: scroll;">
<?php echo $kycTable; ?>
                    </div>
                    <div id="loader_kyc" style="display: none; height: 350px; margin: auto; text-align: center; padding: 70px 0;">
                        <img src='<?php echo Yii::$app->request->BaseUrl; ?>/images/acs_loader.gif'>
                    </div>    
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
<?= Html::submitButton(($model->isNewRecord || $step2 == 1) ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>

<?php ActiveForm::end(); ?>

    </div>
</div>

<!--Upload KYC modal-->    
<div class="modal fade" id="modal-kyc-upload">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header label-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="text-white fa fa-pencil-square-o"></i> <span
                        class="text-white bold">Upload KYC</span></h4>
            </div>
            <form id="kyc_form" method="post" enctype="multipart/form-data">
                <div class="modal-body" id="kyc_modal_body">

                    <div class="form-group">
                        <label for="doc_type" class="col-form-label">Doc Type:</label>
                        <input type="text" class="form-control" name="doc_type" id="doc_type">
                    </div>
                    <div class="form-group">
                        <label for="kyc_remarks" class="col-form-label">Remarks:</label>
                        <textarea class="form-control"  name="kyc_remarks" id="kyc_remarks"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input class="form-control" name="kyc_file" type="file">
                    </div>
                    <input type="hidden" name="application_id" id="application_id" value="<?= $model->id; ?>" />
                    <input type="hidden" name="application_number" id="application_number" value="<?= $model->application_id; ?>" />

                </div>

                <div class="modal-footer" id="kyc_modal_footer">
                    <div id="button_div">
                        <button type="submit" class="btn btn-primary" id="kyc_submit">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                    <div id="loader_div" style="display: none;">
                        Uploading.... <img src='<?php echo Yii::$app->request->BaseUrl; ?>/images/acs_loader.gif'>
                    </div>
                    <div id="response_div" style="display: none;">

                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!--Upload Photos modal-->    
<div class="modal fade" id="modal-photos-upload">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header label-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><i class="text-white fa fa-pencil-square-o"></i> <span
                        class="text-white bold">Upload </span><span id="modal_heading"></span></h4>
            </div>
            <form id="photos_form" method="post" enctype="multipart/form-data">
                <div class="modal-body" id="photos_modal_body">
                    <div class="form-group">
                        <label for="photos_remarks" class="col-form-label">Remarks:</label>
                        <textarea class="form-control"  name="photos_remarks" id="photos_remarks"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <input class="form-control" name="photos_file" type="file">
                    </div>
                    <input type="hidden" name="application_id" id="application_id" value="<?= $model->id; ?>" />
                    <input type="hidden" name="application_number" id="application_number" value="<?= $model->application_id; ?>" />
                    <input type="hidden" name="photos_section" id="photos_section" value="" />
                    <input type="hidden" name="photos_type" id="photos_type" value="" />

                </div>

                <div class="modal-footer" id="photos_modal_footer">
                    <div id="button_photos_div">
                        <button type="submit" class="btn btn-primary" id="photos_submit">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                    <div id="loader_photos_div" style="display: none;">
                        Uploading.... <img src='<?php echo Yii::$app->request->BaseUrl; ?>/images/acs_loader.gif'>
                    </div>
                    <div id="response_photos_div" style="display: none;">

                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">              
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <img src="" class="imagepreview" style="width: 100%;">
            </div>
        </div>
    </div>
</div>   

<!--<div class="col-lg-3">
                <label>Market Feedback</label>
                <div class="btn-group" data-toggle="buttons">    
<?php
//                    $form->field($model, 'resi_market_feedback')->radioList(
//                            [1 => 'Positive', 2 => 'Negative'], [
//                        'item' => function($index, $label, $name, $checked, $value) {
//
//                            $return = '<label class="btn btn-primary">';
//                            $return .= '<input type="radio" name="' . $name . '" value="' . $value . '">';
//                            $return .= '<i></i>';
//                            $return .= '<span>' . ucwords($label) . '</span>';
//                            $return .= '</label>';
//
//                            return $return;
//                        }
//                    ])->label(false);
?></div>
            </div>-->

<?php
$this->registerJs("
        $(function(){
            resiOwnership();
            resiLocality();
            busiOwnership();
            busiLocality();
            $('#applications-resi_ownership_status').on('change', function() {
                resiOwnership();
            });
            $('#applications-resi_locality').on('change', function() {
                resiLocality();
            });
            $('#applications-busi_ownership_status').on('change', function() {
                busiOwnership();
            });
            $('#applications-busi_locality').on('change', function() {
                busiLocality();
            });
            $('#addMoreItr').on('click', function() {
                var data = $('#itr_table tr:eq(1)').clone(true).appendTo('#itr_table');
                data.find('input').val('');
            });
            $('#addMoreNoc').on('click', function() {
                var data = $('#noc_table tr:eq(1)').clone(true).appendTo('#noc_table');
                data.find('input').val('');
            });
            $('#addMoreKyc').on('click', function() {
                // Call Modal
                $('#modal-kyc-upload').modal('show'); 
            });
            
            $('.addMorePhotos').on('click', function() {
                // Call Modal
                var section_type = this.value.split('_');
                var section_id = section_type[0];
                var type_id = section_type[1];
                
                var section_name = getSectionName(section_id);
                var type_name = getTypeName(type_id);
                
                $('#photos_section').val(section_id);
                $('#photos_type').val(type_id);
                $('#modal_heading').html(section_name+' '+type_name);
                $('#modal-photos-upload').modal('show'); 
            });
            
            $(document).on('click', '.remove', function() {
                var trIndex = $(this).closest('tr').index();
                    if(trIndex>1) {
                    $(this).closest('tr').remove();
                } else {
                    alert('Sorry!! Can\'t remove first row!');
                }
            });
            
            $(document).on('click', '.deleteKyc', function() {
                var kyc_id = this.value;
                bootbox.confirm('Are you sure you want to delete the KYC!', function(result){ 
                    if(result) {
                    var data = {kyc_id: kyc_id, application_id: '$model->application_id'};
                        //ajax call
                        $.post('delete-kyc', data, function (response) {
                            reloadKycTable();
                        });
                    }

                });
            });
            
            $(document).on('click', '.checkKyc', function() {
                var kyc_id = this.value;
                
                var checkboxchecked = 0;
                
                if($('#kyc_check_'+kyc_id).is(':checked')){
                    // Code in the case checkbox is checked.
                    checkboxchecked = 1;
                } 
                
                var data = {kyc_id: kyc_id, checkboxchecked : checkboxchecked};
                //ajax call
                $.post('send-kyc-for-verification', data, function (response) {
                    reloadKycTable();
                });                
            });
            
            $(document).on('click', '.assignVerifier', function() {
                //var app_id = this.value;
                alert('sdfsd');
            });

            $('#kyc_form').on('submit',(function(e) {
                $('#button_div').hide();
                $('#loader_div').show();
                e.preventDefault();
                $.ajax({
                    url: 'upload-kyc', // Url to which the request is send
                    type: 'POST',             // Type of request to be send, called as method
                    data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false,       // The content type used when sending data to the server.
                    cache: false,             // To unable request pages to be cached
                    processData:false,        // To send DOMDocument or non processed data file it is set to false
                    success: function(data)   // A function to be called if request succeeds
                    {
                        $('#loader_div').hide();
                        $('#response_div').show();
                        $('#response_div').html(data);
                        
                        //hide & reset modal 
                        setTimeout(function() { 
                            resetModal();
                        }, 3000);
                        
                    }
                });
            }));
            
            $('#photos_form').on('submit',(function(e) {
                $('#button_photos_div').hide();
                $('#loader_photos_div').show();
                e.preventDefault();
                $.ajax({
                    url: 'upload-photos', // Url to which the request is send
                    type: 'POST',             // Type of request to be send, called as method
                    data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false,       // The content type used when sending data to the server.
                    cache: false,             // To unable request pages to be cached
                    processData:false,        // To send DOMDocument or non processed data file it is set to false
                    success: function(data)   // A function to be called if request succeeds
                    {
                        $('#loader_photos_div').hide();
                        $('#response_photos_div').show();
                        $('#response_photos_div').html(data);
                        
                        //hide & reset modal 
                        setTimeout(function() { 
                            resetPhotosModal();                            
                        }, 3000);
                        
                    }
                });
            }));
            
            function resiOwnership() {
                var resi_ownership_status = $('#applications-resi_ownership_status').val();
                if(resi_ownership_status == 4) {
                    $('#applications-resi_ownership_status_text').attr('readonly', false);
                } else {
                    $('#applications-resi_ownership_status_text').attr('readonly', true);
                }
            }
            
            function resiLocality() {
                var resi_locality = $('#applications-resi_locality').val();
                if(resi_locality == 4) {
                    $('#applications-resi_locality_text').attr('readonly', false);
                } else {
                    $('#applications-resi_locality_text').attr('readonly', true);
                }
            }
            
            function busiOwnership() {
                var busi_ownership_status = $('#applications-busi_ownership_status').val();
                if(busi_ownership_status == 4) {
                    $('#applications-busi_ownership_status_text').attr('readonly', false);
                } else {
                    $('#applications-busi_ownership_status_text').attr('readonly', true);
                }
            }
            
            function busiLocality() {
                var busi_locality = $('#applications-busi_locality').val();
                if(busi_locality == 6) {
                    $('#applications-busi_locality_text').attr('readonly', false);
                } else {
                    $('#applications-busi_locality_text').attr('readonly', true);
                }
            }
            
            function resetModal() {
                $('#modal-kyc-upload').modal('hide'); 
                $('#button_div').show(); 
                $('#response_div').hide();
                $('#kyc_form').reset;
                
                reloadKycTable();
            }
            
            function resetPhotosModal() {
                $('#modal-photos-upload').modal('hide'); 
                $('#button_photos_div').show(); 
                $('#response_photos_div').hide();
                $('#photos_form').reset;
                
                //reloadPhotosTable();
                location.reload();
            }
            
            $(document).on('click', '.pop_kyc', function() {
                var path = $(this).find('img').attr('src');
                var new_path = path.replace('/thumbs', '');
                $('.imagepreview').attr('src', new_path);
                $('#imagemodal').modal('show');   
            });
            
            function reloadKycTable() {
                $('#loader_kyc').show();
                $('#kyc_table').hide();
                //reload KYC table
                $.post('get-kyc-table?id=$model->id&application_id=$model->application_id&getHtml=0&isAjaxCall=1', {'data': ''}, function (response) {
                    $('#kyc_table').html(response);
                    $('#kyc_table').show();
                    $('#loader_kyc').hide();
                });
            }
            
            function reloadPhotosTable() {
                $('#loader_kyc').show();
                $('#kyc_table').hide();
                //reload KYC table
                $.post('get-kyc-table?id=$model->id&application_id=$model->application_id&getHtml=0&isAjaxCall=1', {'data': ''}, function (response) {
                    $('#kyc_table').html(response);
                    $('#kyc_table').show();
                    $('#loader_kyc').hide();
                });
            }
            
            function getSectionName(section_id) {
                var return_data = '';
                switch(section_id) {
                    case '1':
                        return_data = 'Residence'
                        break;
                    case '2':
                        return_data = 'Business'
                        break;
                    case '3':
                        return_data = 'Office'
                        break;
                    case '4':
                        return_data = 'NOC'
                        break;
                }                
                return return_data;
            }
            
            function getTypeName(type_id) {
                var return_data = '';
                switch(type_id) {
                    case '1':
                        return_data = 'Photos'
                        break;
                    case '2':
                        return_data = 'Docs'
                        break;
                }                
                return return_data; 
            }
            
            $(document).on('click', '.deletePhotos', function() {
                var all_ids = this.value.split('_');
                var record_id = all_ids[0];
                var section_id = all_ids[1];
                var type_id = all_ids[2];
                
                var section_name = getSectionName(section_id);
                var type_name = getTypeName(type_id);
                bootbox.confirm('Are you sure you want to delete the '+section_name+' '+type_name+'!', function(result){ 
                    if(result) {
                    var data = {record_id: record_id, application_id: '$model->application_id'};
                        //ajax call
                        $.post('delete-photos', data, function (response) {
                            alert('Sucessfully Deleted!!!');
                            location.reload();
                        });
                    }

                });
            });

        });    
    ");


