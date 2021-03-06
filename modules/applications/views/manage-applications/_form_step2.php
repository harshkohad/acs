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
//echo '<pre>';
//print_r($model);
//die;
?>

<section class="panel">
    <div class="panel-body">
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
            <div class="col-lg-3">
                <?php
                $model->date_of_birth = date('Y-m-d');
                ?>
                <?=
                $form->field($model, 'date_of_birth')->widget(
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
        </div>

        <div class="row">
            <div class="col-lg-3"><?= $form->field($model, 'aadhaar_card_no')->textInput(['maxlength' => true]) ?></div>
            <div class="col-lg-3"><?= $form->field($model, 'pan_card_no')->textInput(['maxlength' => true]) ?></div>
            <div class="col-lg-3"><?= $form->field($model, 'mobile_no')->textInput(['maxlength' => true]) ?></div>
            <div class="col-lg-3"><?= $form->field($model, 'alternate_contact_no')->textInput(['maxlength' => true]) ?></div>
        </div>

        <div class="row">
            <div class="col-lg-3"><?= $form->field($model, 'case_id')->textInput(['maxlength' => true]) ?></div>
            <div class="col-lg-3"><?= $form->field($model, 'branch')->textInput(['maxlength' => true]) ?></div>            
            <div class="col-lg-3"><?= $form->field($model, 'institute_id')->dropDownList(ArrayHelper::map($institutes->find()->asArray()->all(), 'id', 'name'), ['prompt' => 'Select Institute'])->label('Institute Name') ?></div>
            <div class="col-lg-3"><?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?></div>
        </div>
        <div class="row">
            <div class="col-lg-3"><?= $form->field($model, 'loan_type_id')->dropDownList(ArrayHelper::map($loantypes->find()->asArray()->all(), 'id', 'loan_name'), ['prompt' => 'Select Loan Type'])->label('Loan Type') ?></div>
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
        </div>
        <div class="row">
            <div class="col-lg-3">
                <?= $form->field($model, 'address')->textarea(['address' => true]) ?>
                <input type="hidden" name="app_version" id="app_version" value="<?= $model->version; ?>" />
            </div>
        </div>
    </div>
</section>

<section class="panel">
    <header class="panel-heading">
        Verification Addresses
    </header>
</section>
<!--Verification Addresses-->
<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-default cust-panel">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <strong>Residence Address</strong>                    
                    <span class="tools pull-right">                        
                        <a href="javascript:;" class="fa fa-chevron-up"></a>
                    </span>
                    <span class="pull-right"> 
                        <?PHP
                        $icon = 'fa fa-check-circle';
                        $icon_color = 'color:#5cb85c';
                        $display = '';
                        if ($applicationResi->resi_address_verification != 1) {
                            $icon = 'fa fa-times-circle';
                            $icon_color = 'color:#d9534f';
                            $display = 'style="display:none;"';
                        }
                        ?>
                        <i class="fa fa-map-marker map_marker" value="<?= $model->id . '_1' ?>" <?= $display ?>></i> &nbsp;
                        <i class="<?= $icon ?>" style="<?= $icon_color ?>"></i>
                    </span>
                </h4>
            </div>
            <div class="panel-body" style="display: none;">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationResi, 'resi_address')->textArea() ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?=
                        $form->field($applicationResi, 'resi_address_pincode')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                            'language' => 'en',
                            'options' => ['placeholder' => 'Select pincode ...'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationResi, 'resi_address_trigger')->textArea() ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($applicationResi, 'resi_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default cust-panel">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <strong>Business Address</strong>
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-up"></a>
                    </span>
                    <span class="pull-right"> 
                        <?PHP
                        $icon = 'fa fa-check-circle';
                        $icon_color = 'color:#5cb85c';
                        $display = '';
                        if ($applicationBusi->busi_address_verification != 1) {
                            $icon = 'fa fa-times-circle';
                            $icon_color = 'color:#d9534f';
                            $display = 'style="display:none;"';
                        }
                        ?>
                        <i class="fa fa-map-marker map_marker" value="<?= $model->id . '_2' ?>" <?= $display ?>></i> &nbsp;
                        <i class="<?= $icon ?>" style="<?= $icon_color ?>"></i>
                    </span>
                </h4>
            </div>
            <div class="panel-body" style="display: none;">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationBusi, 'busi_address')->textArea() ?>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-12">
                        <?=
                        $form->field($applicationBusi, 'busi_address_pincode')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                            'language' => 'en',
                            'options' => ['placeholder' => 'Select pincode ...'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationBusi, 'busi_address_trigger')->textArea() ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($applicationBusi, 'busi_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                    </div>
                </div>    
            </div>
        </div>
    </div> 
    <div class="col-lg-4">
        <div class="panel panel-default cust-panel">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <strong>Office Address</strong>
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-up"></a>
                    </span>
                    <span class="pull-right"> 
                        <?PHP
                        $icon = 'fa fa-check-circle';
                        $icon_color = 'color:#5cb85c';
                        $display = '';
                        if ($applicationOffice->office_address_verification != 1) {
                            $icon = 'fa fa-times-circle';
                            $icon_color = 'color:#d9534f';
                            $display = 'style="display:none;"';
                        }
                        ?>
                        <i class="fa fa-map-marker map_marker" value="<?= $model->id . '_3' ?>" <?= $display ?>></i> &nbsp;
                        <i class="<?= $icon ?>" style="<?= $icon_color ?>"></i>
                    </span>
                </h4>
            </div>
            <div class="panel-body" style="display: none;">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationOffice, 'office_address')->textArea() ?>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-12">
                        <?=
                        $form->field($applicationOffice, 'office_address_pincode')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                            'language' => 'en',
                            'options' => ['placeholder' => 'Select pincode ...'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationOffice, 'office_address_trigger')->textArea() ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($applicationOffice, 'office_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                    </div>
                </div>    
            </div>                 
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-default cust-panel">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <strong>Residence/Office Address</strong>
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-up"></a>
                    </span>
                    <span class="pull-right"> 
                        <?PHP
                        $icon = 'fa fa-check-circle';
                        $icon_color = 'color:#5cb85c';
                        $display = '';
                        if ($applicationResiOffice->resi_office_address_verification != 1) {
                            $icon = 'fa fa-times-circle';
                            $icon_color = 'color:#d9534f';
                            $display = 'style="display:none;"';
                        }
                        ?>
                        <i class="fa fa-map-marker map_marker" value="<?= $model->id . '_5' ?>" <?= $display ?>></i> &nbsp;
                        <i class="<?= $icon ?>" style="<?= $icon_color ?>"></i>
                    </span>
                </h4>
            </div>
            <div class="panel-body" style="display: none;">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationResiOffice, 'resi_office_address')->textArea() ?>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-12">
                        <?=
                        $form->field($applicationResiOffice, 'resi_office_address_pincode')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                            'language' => 'en',
                            'options' => ['placeholder' => 'Select pincode ...'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationResiOffice, 'resi_office_address_trigger')->textArea() ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($applicationResiOffice, 'resi_office_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default cust-panel">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <strong>Builder Profile Address</strong>
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-up"></a>
                    </span>
                    <span class="pull-right"> 
                        <?PHP
                        $icon = 'fa fa-check-circle';
                        $icon_color = 'color:#5cb85c';
                        $display = '';
                        if ($applicationBuilderProfile->builder_profile_address_verification != 1) {
                            $icon = 'fa fa-times-circle';
                            $icon_color = 'color:#d9534f';
                            $display = 'style="display:none;"';
                        }
                        ?>
                        <i class="fa fa-map-marker map_marker" value="<?= $model->id . '_6' ?>" <?= $display ?>></i> &nbsp;
                        <i class="<?= $icon ?>" style="<?= $icon_color ?>"></i>
                    </span>
                </h4>
            </div>
            <div class="panel-body" style="display: none;">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationBuilderProfile, 'builder_profile_address')->textArea() ?>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-12">
                        <?=
                        $form->field($applicationBuilderProfile, 'builder_profile_address_pincode')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                            'language' => 'en',
                            'options' => ['placeholder' => 'Select pincode ...'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationBuilderProfile, 'builder_profile_address_trigger')->textArea() ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($applicationBuilderProfile, 'builder_profile_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default cust-panel">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <strong>Property(APF) Address</strong>
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-up"></a>
                    </span>
                    <span class="pull-right"> 
                        <?PHP
                        $icon = 'fa fa-check-circle';
                        $icon_color = 'color:#5cb85c';
                        $display = '';
                        if ($applicationPropertyApf->property_apf_address_verification != 1) {
                            $icon = 'fa fa-times-circle';
                            $icon_color = 'color:#d9534f';
                            $display = 'style="display:none;"';
                        }
                        ?>
                        <i class="fa fa-map-marker map_marker" value="<?= $model->id . '_7' ?>" <?= $display ?>></i> &nbsp;
                        <i class="<?= $icon ?>" style="<?= $icon_color ?>"></i>
                    </span>
                </h4>
            </div>
            <div class="panel-body" style="display: none;">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationPropertyApf, 'property_apf_address')->textArea() ?>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-12">
                        <?=
                        $form->field($applicationPropertyApf, 'property_apf_address_pincode')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                            'language' => 'en',
                            'options' => ['placeholder' => 'Select pincode ...'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationPropertyApf, 'property_apf_address_trigger')->textArea() ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($applicationPropertyApf, 'property_apf_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-default cust-panel">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <strong>Individual Property Address</strong>
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-up"></a>
                    </span>
                    <span class="pull-right"> 
                        <?PHP
                        $icon = 'fa fa-check-circle';
                        $icon_color = 'color:#5cb85c';
                        $display = '';
                        if ($applicationIndivProperty->indiv_property_address_verification != 1) {
                            $icon = 'fa fa-times-circle';
                            $icon_color = 'color:#d9534f';
                            $display = 'style="display:none;"';
                        }
                        ?>
                        <i class="fa fa-map-marker map_marker" value="<?= $model->id . '_8' ?>" <?= $display ?>></i> &nbsp;
                        <i class="<?= $icon ?>" style="<?= $icon_color ?>"></i>
                    </span>
                </h4>
            </div>
            <div class="panel-body" style="display: none;">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationIndivProperty, 'indiv_property_address')->textArea() ?>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-12">
                        <?=
                        $form->field($applicationIndivProperty, 'indiv_property_address_pincode')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                            'language' => 'en',
                            'options' => ['placeholder' => 'Select pincode ...'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationIndivProperty, 'indiv_property_address_trigger')->textArea() ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($applicationIndivProperty, 'indiv_property_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                    </div>
                </div>    
            </div>
        </div>
    </div>  
    <div class="col-lg-4">
        <div class="panel panel-default cust-panel">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <strong>NOC (Society) Address</strong>
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-up"></a>
                    </span>
                    <span class="pull-right"> 
                        <?PHP
                        $icon = 'fa fa-check-circle';
                        $icon_color = 'color:#5cb85c';
                        $display = '';
                        if ($applicationNocSoc->noc_soc_address_verification != 1) {
                            $icon = 'fa fa-times-circle';
                            $icon_color = 'color:#d9534f';
                            $display = 'style="display:none;"';
                        }
                        ?>
                        <i class="fa fa-map-marker map_marker" value="<?= $model->id . '_9' ?>" <?= $display ?>></i> &nbsp;
                        <i class="<?= $icon ?>" style="<?= $icon_color ?>"></i>
                    </span>
                </h4>
            </div>
            <div class="panel-body" style="display: none;">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationNocSoc, 'noc_soc_address')->textArea() ?>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-12">
                        <?=
                        $form->field($applicationNocSoc, 'noc_soc_address_pincode')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                            'language' => 'en',
                            'options' => ['placeholder' => 'Select pincode ...'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationNocSoc, 'noc_soc_address_trigger')->textArea() ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($applicationNocSoc, 'noc_soc_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="panel panel-default cust-panel">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <strong>NOC (Business/Conditional) Address</strong>
                    <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-up"></a>
                    </span>
                    <span class="pull-right"> 
                        <?PHP
                        $icon = 'fa fa-check-circle';
                        $icon_color = 'color:#5cb85c';
                        $display = '';
                        if ($applicationNocBusi->noc_address_verification != 1) {
                            $icon = 'fa fa-times-circle';
                            $icon_color = 'color:#d9534f';
                            $display = 'style="display:none;"';
                        }
                        ?>
                        <i class="fa fa-map-marker map_marker" value="<?= $model->id . '_4' ?>" <?= $display ?>></i> &nbsp;
                        <i class="<?= $icon ?>" style="<?= $icon_color ?>"></i>
                    </span>
                </h4>
            </div>
            <div class="panel-body" style="display: none;">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationNocBusi, 'noc_address')->textArea() ?>
                    </div>
                </div>
                <div class="row">    
                    <div class="col-lg-12">
                        <?=
                        $form->field($applicationNocBusi, 'noc_address_pincode')->widget(Select2::classname(), [
                            'data' => ArrayHelper::map($pincode_master->find()->asArray()->all(), 'pincode', 'pincode'),
                            'language' => 'en',
                            'options' => ['placeholder' => 'Select pincode ...'],
                            'pluginOptions' => [
                                'allowClear' => true
                            ],
                        ])
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?= $form->field($applicationNocBusi, 'noc_address_trigger')->textArea() ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?= $form->field($applicationNocBusi, 'noc_address_verification')->checkboxList(['1' => 'Send for verification'])->label(false); ?>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
<!--End Verification Addresses-->

<section class="panel">
    <header class="panel-heading">
        Back Office
    </header>
</section>

<!--Back Office-->
<div class="panel-group" id="backoffice" style="margin-bottom: 20px;">
    <!--KYC-->
    <div class="panel panel-default cust-panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#backoffice" href="#kyc"><strong>KYC</strong></a>
            </h4>
        </div>
        <div id="kyc" class="panel-collapse collapse in">
            <div class="panel-body" id="kyc_table" style="height: 350px;overflow-y: scroll;">
                <?php echo $kycTable; ?>
            </div>
            <div id="loader_kyc" style="display: none; height: 350px; margin: auto; text-align: center; padding: 70px 0;">
                <img src='<?php echo Yii::$app->request->BaseUrl; ?>/images/acs_loader.gif'>
            </div>    
        </div>
    </div>

    <!--ITR-->
    <div class="panel panel-default cust-panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#backoffice" href="#itr"><strong>ITR</strong></a>
            </h4>
        </div>
        <div id="itr" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12" id="noc_table">
                        <?php echo $itrTable; ?>
                    </div>
                </div>
                <div id="loader_itr" style="display: none; height: 350px; margin: auto; text-align: center; padding: 70px 0;">
                    <img src='<?php echo Yii::$app->request->BaseUrl; ?>/images/acs_loader.gif'>
                </div>
            </div>
        </div>                
    </div>

    <!--Financial-->
    <div class="panel panel-default cust-panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#backoffice" href="#financial"><strong>Financial</strong></a>
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
                <a data-toggle="collapse" data-parent="#backoffice" href="#bank_statement"><strong>Bank Statement</strong></a>
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
</div>
<!--New section-->
<div class="row">
    <div class="col-lg-6">
        <div class="panel-group" id="backoffice1" style="margin-bottom: 20px;">
            <!--PANCARD-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice1" href="#pancard">
                            <strong>PANCARD</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;">                            
                            <?=
                            $form->field($model, 'pan_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>
                        </span>
                    </h4>
                </div>
                <div id="pancard" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->pan_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[pan_feedback]" autocomplete="off" <?= ($model->pan_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->pan_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[pan_feedback]" autocomplete="off" <?= ($model->pan_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>  
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'pan_first_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'pan_middle_name')->textInput(['maxlength' => true]) ?></div>
                        </div>    
                        <div class="row">    
                            <div class="col-lg-6"><?= $form->field($model, 'pan_last_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'pan_pan_no')->textInput() ?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <?php
                                echo '<label class="control-label">DOB</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[pan_dob]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->pan_dob,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                            <div class="col-lg-6">
                                <?php
                                echo '<label class="control-label">Date Of Issue</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[pan_date_of_issue]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->pan_date_of_issue,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                        <br>
                        <div class="row">    
                            <div class="col-lg-12"><?= $form->field($model, 'pan_address')->textarea(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--AADHAR CARD-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice1" href="#aadharcard">
                            <strong>AADHAR CARD</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;"> 
                            <?=
                            $form->field($model, 'ac_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>
                        </span>
                    </h4>
                </div>
                <div id="aadharcard" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->ac_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[ac_feedback]" autocomplete="off" <?= ($model->ac_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->ac_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[ac_feedback]" autocomplete="off" <?= ($model->ac_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>  
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'ac_first_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'ac_middle_name')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6"><?= $form->field($model, 'ac_last_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'ac_aadhar_no')->textInput() ?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <?php
                                echo '<label class="control-label">DOB</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[ac_dob]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->ac_dob,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                            <div class="col-lg-6"><?= $form->field($model, 'ac_mobile_no')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-12"><?= $form->field($model, 'ac_address')->textarea(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--PASSPORT-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice1" href="#passport">
                            <strong>PASSPORT</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;">
                            <?=
                            $form->field($model, 'passport_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>
                        </span>
                    </h4>
                </div>
                <div id="passport" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->passport_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[passport_feedback]" autocomplete="off" <?= ($model->passport_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->passport_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[passport_feedback]" autocomplete="off" <?= ($model->passport_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>  
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'passport_first_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'passport_middle_name')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'passport_last_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'passport_passport_no')->textInput() ?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <?php
                                echo '<label class="control-label">Validity</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[passport_validity]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->passport_validity,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                            <div class="col-lg-6">
                                <?php
                                echo '<label class="control-label">Date Of Issue</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[passport_date_of_issue]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->passport_date_of_issue,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                        <br>
                        <div class="row">    
                            <div class="col-lg-12"><?= $form->field($model, 'passport_address')->textarea(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--ELECTRICITY BILL-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice1" href="#elec_bill">
                            <strong>ELECTRICITY BILL</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;"> 
                            <?=
                            $form->field($model, 'electricity_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>
                        </span>
                    </h4>
                </div>
                <div id="elec_bill" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->electricity_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[electricity_feedback]" autocomplete="off" <?= ($model->electricity_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->electricity_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[electricity_feedback]" autocomplete="off" <?= ($model->electricity_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>  
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'electricity_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'electricity_address')->textarea(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--TELEPHONE / MOBILE BILL-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice1" href="#tele_bill">
                            <strong>TELEPHONE / MOBILE BILL</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;"> 
                            <?=
                            $form->field($model, 'telephone_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>                            
                        </span>
                    </h4>
                </div>
                <div id="tele_bill" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->telephone_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[telephone_feedback]" autocomplete="off" <?= ($model->telephone_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->telephone_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[telephone_feedback]" autocomplete="off" <?= ($model->telephone_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'telephone_mobile_no')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'telephone_name')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6"><?= $form->field($model, 'telephone_amount')->textInput() ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'telephone_address')->textArea(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--VOTER ID-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice1" href="#voter_id">
                            <strong>VOTER ID</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;"> 
                            <?=
                            $form->field($model, 'voter_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?> 
                        </span>
                    </h4>
                </div>
                <div id="voter_id" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->voter_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[voter_feedback]" autocomplete="off" <?= ($model->voter_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->voter_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[voter_feedback]" autocomplete="off" <?= ($model->voter_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'voter_first_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'voter_middle_name')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6"><?= $form->field($model, 'voter_last_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'voter_voter_id_no')->textInput() ?></div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-12"><?= $form->field($model, 'voter_address')->textarea(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--DRIVING LICENSE-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice1" href="#driv_lic">
                            <strong>DRIVING LICENSE</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;"> 
                            <?=
                            $form->field($model, 'driving_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>
                        </span>
                    </h4>
                </div>
                <div id="driv_lic" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->driving_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[driving_feedback]" autocomplete="off" <?= ($model->driving_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->driving_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[driving_feedback]" autocomplete="off" <?= ($model->driving_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'driving_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'driving_driving_license_number')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <?php
                                echo '<label class="control-label">Validity Upto</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[driving_validity]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->driving_validity,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                            <div class="col-lg-6">
                                <?php
                                echo '<label class="control-label">Date Of Issue</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[driving_date_of_issue]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->driving_date_of_issue,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="panel-group" id="backoffice2" style="margin-bottom: 20px;">
            <!--COMPANY ID-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice2" href="#company_id">
                            <strong>COMPANY ID</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;"> 
                            <?=
                            $form->field($model, 'company_id_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>
                        </span>
                    </h4>
                </div>
                <div id="company_id" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->company_id_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[company_id_feedback]" autocomplete="off" <?= ($model->company_id_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->company_id_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[company_id_feedback]" autocomplete="off" <?= ($model->company_id_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'company_id_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'company_id_designation')->textInput(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--SHOP ACT-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice2" href="#shop_act">
                            <strong>SHOP ACT</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;"> 
                            <?=
                            $form->field($model, 'shop_act_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>
                        </span>
                    </h4>
                </div>
                <div id="shop_act" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->shop_act_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[shop_act_feedback]" autocomplete="off" <?= ($model->shop_act_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->shop_act_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[shop_act_feedback]" autocomplete="off" <?= ($model->shop_act_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'shop_act_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'shop_act_shop_act_no')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <?php
                                echo '<label class="control-label">From Date</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[shop_act_from_date]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->shop_act_from_date,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                            <div class="col-lg-6">
                                <?php
                                echo '<label class="control-label">Till Date</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[shop_act_till_date]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->shop_act_till_date,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12"><?= $form->field($model, 'shop_act_address')->textarea(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--GST CERTIFICATE-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice2" href="#gst_cert">
                            <strong>GST CERTIFICATE</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;"> 
                            <?=
                            $form->field($model, 'gst_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>
                        </span>
                    </h4>
                </div>
                <div id="gst_cert" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->gst_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[gst_feedback]" autocomplete="off" <?= ($model->gst_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->gst_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[gst_feedback]" autocomplete="off" <?= ($model->gst_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'gst_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'gst_gst_no')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-12"><?= $form->field($model, 'gst_address')->textarea(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--RENT AGREEMENT-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice2" href="#rent_agree">
                            <strong>RENT AGREEMENT</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;"> 
                            <?=
                            $form->field($model, 'rent_agreement_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>
                        </span>
                    </h4>
                </div>
                <div id="rent_agree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->rent_agreement_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[rent_agreement_feedback]" autocomplete="off" <?= ($model->rent_agreement_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->rent_agreement_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[rent_agreement_feedback]" autocomplete="off" <?= ($model->rent_agreement_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'rent_agreement_met_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'rent_agreement_owner_name')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6"><?= $form->field($model, 'rent_agreement_rent_amount')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6">
                                <?php
                                echo '<label class="control-label">Validity</label>';
                                echo DatePicker::widget([
                                    'name' => 'Applications[rent_agreement_validity]',
                                    'type' => DatePicker::TYPE_INPUT,
                                    'value' => $model->rent_agreement_validity,
                                    'pluginOptions' => [
                                        'autoclose' => true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);
                                ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'rent_agreement_deposit_amount')->textInput(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>    

            <!--SALE AGREEMENT-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice2" href="#sale_agree">
                            <strong>SALE AGREEMENT</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;"> 
                            <?=
                            $form->field($model, 'sale_agreement_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>
                        </span>
                    </h4>
                </div>
                <div id="sale_agree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->sale_agreement_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[sale_agreement_feedback]" autocomplete="off" <?= ($model->sale_agreement_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->sale_agreement_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[sale_agreement_feedback]" autocomplete="off" <?= ($model->sale_agreement_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'sale_agreement_seller_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'sale_agreement_purchaser_name')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-12"><?= $form->field($model, 'sale_agreement_address')->textarea(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--OC/CC/PLAN-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice2" href="#oc_cc_plan">
                            <strong>OC/CC/PLAN</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;"> 
                            <?=
                            $form->field($model, 'oc_cc_plan_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>
                        </span>
                    </h4>
                </div>
                <div id="oc_cc_plan" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->oc_cc_plan_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[oc_cc_plan_feedback]" autocomplete="off" <?= ($model->oc_cc_plan_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->oc_cc_plan_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[oc_cc_plan_feedback]" autocomplete="off" <?= ($model->oc_cc_plan_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'oc_cc_plan_cts_no')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'oc_cc_plan_issuing_authority')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6"><?= $form->field($model, 'oc_cc_plan_signature')->textInput(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--OCR RECEIPT-->
            <div class="panel panel-default cust-panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#backoffice2" href="#ocr_receipt">
                            <strong>OCR RECEIPT</strong>
                        </a>
                        <span class="pull-right" style="margin-top:-2px !important;"> 
                            <?=
                            $form->field($model, 'ocr_receipt_is_complete')->checkbox(['label' => '',
                                'data-toggle' => "toggle",
                                'data-width' => "115",
                                'data-size' => "mini",
                                'data-on' => "<i class='fa fa-check'></i> Verified",
                                'data-off' => "<i class='fa fa-times'></i> Not Verified",
                                'data-onstyle' => "success",
                                'data-offstyle' => "danger"])->label(FALSE);
                            ?>
                        </span>
                    </h4>
                </div>
                <div id="ocr_receipt" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-lg-6">
                                <label>Feedback</label><br>
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary <?= ($model->ocr_receipt_feedback == 0) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[ocr_receipt_feedback]" autocomplete="off" <?= ($model->ocr_receipt_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                                    </label>
                                    <label class="btn btn-primary <?= ($model->ocr_receipt_feedback == 1) ? 'active' : '' ?>">
                                        <input type="radio" name="Applications[ocr_receipt_feedback]" autocomplete="off" <?= ($model->ocr_receipt_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                                    </label>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'ocr_receipt_builder_name')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'ocr_receipt_met_person')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">     
                            <div class="col-lg-6"><?= $form->field($model, 'ocr_receipt_designation')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'ocr_receipt_amount')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6"><?= $form->field($model, 'ocr_receipt_receipt_no')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'ocr_receipt_signature')->textInput(['maxlength' => true]) ?></div>
                        </div>
                        <div class="row">     
                            <div class="col-lg-6"><?= $form->field($model, 'ocr_receipt_tpc')->textInput(['maxlength' => true]) ?></div>
                            <div class="col-lg-6"><?= $form->field($model, 'ocr_receipt_landmark')->textInput(['maxlength' => true]) ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Back Office-->

<section class="panel">
    <header class="panel-heading">
        Verifier's Data
    </header>
</section>

<div class="panel-group" id="accordion" style="margin-bottom: 20px;">
    <!--Residence Verification-->
    <div class="panel panel-default cust-panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#resi_verification"><strong>Residence Verification</strong></a>
                <?= $model->verificationStatus($model->id, 1); ?>
            </h4>
        </div>
        <div id="resi_verification" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row" style="padding-bottom:10px;">
                    <div class="col-lg-3">
                        <label>Is Reachable</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn  resi_verification_is_reachable btn-primary <?= ($applicationResi->resi_is_reachable == 0) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsResi[resi_is_reachable]" autocomplete="off" <?= ($applicationResi->resi_is_reachable == 0) ? 'checked' : '' ?> value="0"  class ='resi_verification_is_reachable_radio' rel="resi_verification_disable" active='resi_verification_enable'> Yes
                            </label>
                            <label class="btn resi_verification_is_reachable btn-primary <?= ($applicationResi->resi_is_reachable == 1) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsResi[resi_is_reachable]" autocomplete="off" <?= ($applicationResi->resi_is_reachable == 1) ? 'checked' : '' ?> value="1" class ='resi_verification_is_reachable_radio' rel="resi_verification_disable" active='resi_verification_enable'> No
                            </label>
                        </div>
                    </div>                           
                </div>
                <div class="row resi_verification_disable">
                    <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable"><?= $form->field($applicationResi, 'resi_society_name_plate')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable"><?= $form->field($applicationResi, 'resi_door_name_plate')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable"><?= $form->field($applicationResi, 'resi_tpc_neighbor_1')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable"><?= $form->field($applicationResi, 'resi_tpc_neighbor_2')->textInput(['maxlength' => true]) ?></div>
                </div>

                <div class="row resi_verification_disable">
                    <div class="col-lg-3 resi_locked_disable resi_shifted_enable resi_locked_shifted_enable"><?= $form->field($applicationResi, 'resi_met_person')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 resi_locked_disable resi_shifted_disable resi_locked_shifted_disable"><?= $form->field($applicationResi, 'resi_relation')->dropDownList(['1' => 'Self', '2' => 'Father', '3' => 'Mother', '4' => 'Brother', '5' => 'Wife', '6' => 'Son', '7' => 'Daughter', '8' => 'Grandfather', '9' => 'Grand Mother', '10' => 'Uncle', '11' => 'Aunt', '12' => 'Cousin', '13' => 'Employee', '14' => 'Neighbour', '15' => 'Security Guard', '16' => 'NA'], ['prompt' => 'Select Relation']) ?></div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable"><?= $form->field($applicationResi, 'resi_ownership_status')->dropDownList(['1' => 'Rented', '2' => 'Owned', '3' => 'Parental', '4' => 'Other'], ['prompt' => 'Select Ownership']) ?></div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable"><?= $form->field($applicationResi, 'resi_ownership_status_text')->textInput(['maxlength' => true, 'readOnly' => true]) ?></div>
                </div>
                <div class="row resi_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationResi, 'resi_available_status')->dropDownList(['1' => 'Available for Verification', '2' => 'Door Locked', '3' => 'Shifted', '4' => 'Door Locked & Shifted'], ['rel' => 'resi_status']) ?></div>
                    <div class="col-lg-3 resi_locked_disable resi_shifted_disable resi_locked_shifted_disable"><?= $form->field($applicationResi, 'resi_rented_owner_name')->textInput() ?></div>
                    <div class="col-lg-3 resi_locked_disable resi_shifted_disable resi_locked_shifted_disable"><?= $form->field($applicationResi, 'resi_rent_amount')->textInput() ?></div>
                    <div class="col-lg-3 resi_locked_disable resi_shifted_enable resi_locked_shifted_enable"><?= $form->field($applicationResi, 'resi_shifted_tenure')->textInput() ?></div>
                </div>
                <div class="row resi_verification_disable">
                    <div class="col-lg-3 resi_locked_disable resi_shifted_disable resi_locked_shifted_disable"><?= $form->field($applicationResi, 'resi_home_area')->textInput() ?></div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_disable resi_locked_shifted_enable"><?= $form->field($applicationResi, 'resi_stay_years')->textInput() ?></div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_disable resi_locked_shifted_enable"><?= $form->field($applicationResi, 'resi_total_family_members')->dropDownList(['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12', '13' => '13', '14' => '14', '15' => '15'], ['prompt' => 'Select Family Members']) ?></div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_disable resi_locked_shifted_enable"><?= $form->field($applicationResi, 'resi_working_members')->textInput() ?></div>                            
                </div>

                <div class="row resi_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationResi, 'resi_locality')->dropDownList(['1' => 'Chawl', '2' => 'Building', '3' => 'Bunglow', '4' => 'Other'], ['prompt' => 'Select Locality']) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResi, 'resi_locality_type')->dropDownList(['1' => 'Chawl', '2' => 'Building', '3' => 'Bunglow', '4' => 'Other'], ['prompt' => 'Select Locality']) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResi, 'resi_locality_text')->textInput(['maxlength' => true, 'readOnly' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResi, 'resi_landmark_1')->textInput(['maxlength' => true]) ?></div>                           
                </div>


                <div class="row resi_verification_disable">                    
                    <div class="col-lg-3"><?= $form->field($applicationResi, 'resi_landmark_2')->textInput(['maxlength' => true]) ?></div> 
                    <div class="col-lg-3"><?= $form->field($applicationResi, 'resi_structure')->textInput() ?></div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_disable resi_locked_shifted_enable"></div>
                    <div class="col-lg-3">
                        <label>Market Feedback</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary <?= ($applicationResi->resi_market_feedback == 0) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsResi[resi_market_feedback]" autocomplete="off" <?= ($applicationResi->resi_market_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                            </label>
                            <label class="btn btn-primary <?= ($applicationResi->resi_market_feedback == 1) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsResi[resi_market_feedback]" autocomplete="off" <?= ($applicationResi->resi_market_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                            </label>
                        </div>
                    </div>                           
                </div>
                <div class="row">
                    <div class="col-lg-9 resi_verification_enable"><?= $form->field($applicationResi, 'resi_not_reachable_remarks')->textArea(['maxlength' => true]) ?></div>
                </div>    
                <div class="row">
                    <div class="col-lg-6 resi_verification_disable">
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
                    <div class="col-lg-9 resi_verification_disable"><?= $form->field($applicationResi, 'resi_remarks')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 resi_verification_disable">
                        <label>Status</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary <?= ($applicationResi->resi_status == 0) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[resi_status]" autocomplete="off" <?= ($applicationResi->resi_status == 0) ? 'checked' : '' ?> value="0"> Positive
                            </label>
                            <label class="btn btn-primary <?= ($applicationResi->resi_status == 1) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[resi_status]" autocomplete="off" <?= ($applicationResi->resi_status == 1) ? 'checked' : '' ?> value="1"> Negative
                            </label>
                            <label class="btn btn-primary <?= ($applicationResi->resi_status == 2) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[resi_status]" autocomplete="off" <?= ($applicationResi->resi_status == 2) ? 'checked' : '' ?> value="2"> Credit Refer
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
                <?= $model->verificationStatus($model->id, 2); ?>
            </h4>
        </div>
        <div id="busi_verification" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row" style="padding-bottom:10px;">
                    <div class="col-lg-3">
                        <label>Is Reachable</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn  busi_verification_is_reachable btn-primary <?= ($applicationBusi->busi_is_reachable == 0) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsBusi[busi_is_reachable]" autocomplete="off" <?= ($applicationBusi->busi_is_reachable == 0) ? 'checked' : '' ?> value="0"  class ='resi_verification_is_reachable_radio' rel="busi_verification_disable" active='busi_verification_enable'> Yes
                            </label>
                            <label class="btn busi_verification_is_reachable btn-primary <?= ($applicationBusi->busi_is_reachable == 1) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsBusi[busi_is_reachable]" autocomplete="off" <?= ($applicationBusi->busi_is_reachable == 1) ? 'checked' : '' ?> value="1" class ='resi_verification_is_reachable_radio' rel="busi_verification_disable" active='busi_verification_enable'> No
                            </label>
                        </div>
                    </div>                           
                </div>
                <div class="row busi_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_tpc_neighbor_1')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_tpc_neighbor_2')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_company_name_board')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_enable busi_locked_shifted_enable"><?= $form->field($applicationBusi, 'busi_met_person')->textInput(['maxlength' => true]) ?></div>
                </div>

                <div class="row busi_verification_disable busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_designation')->dropDownList(['1' => 'Self', '2' => 'Manager', '3' => 'Accountant', '4' => 'HR', '5' => 'Staff', '6' => 'Security', '7' => 'Others'], ['prompt' => 'Select Designation']) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_designation_others')->textInput(['maxlength' => true, 'readonly' => "readonly"]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_nature_of_business')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_years_in_business')->textInput() ?></div>

                </div>

                <div class="row busi_verification_disable">                            
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable"><?= $form->field($applicationBusi, 'busi_type_of_business')->dropDownList(['1' => 'DIRECTORSHIP', '2' => 'PROPRIETOR', '3' => 'PARTNERSHIP'], ['prompt' => 'Select Type Of Business']) ?></div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable"><?= $form->field($applicationBusi, 'busi_ownership_status')->dropDownList(['1' => 'Rented', '2' => 'Owned', '3' => 'Parental', '4' => 'Other'], ['prompt' => 'Select Ownership']) ?></div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable"><?= $form->field($applicationBusi, 'busi_ownership_status_text')->textInput(['maxlength' => true, 'readOnly' => true]) ?></div>                            
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable"><?= $form->field($applicationBusi, 'busi_locality')->textInput(['maxlength' => true, 'readOnly' => true]) ?></div>                            
                </div>
                <div class="row busi_verification_disable busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_rented_owner_name')->textInput() ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_rent_amount')->textInput() ?></div>
                </div>
                <div class="row busi_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_locality_type')->dropDownList(['1' => 'Gala', '2' => 'Shopline', '3' => 'Compound', '4' => 'Resi', '5' => 'Commercial', '6' => 'Other'], ['prompt' => 'Select Locality']) ?></div>                    
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable"><?= $form->field($applicationBusi, 'busi_locality_text')->textInput(['readOnly' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_available_status')->dropDownList(['1' => 'Available for Verification', '2' => 'Door Locked', '3' => 'Shifted', '4' => 'Door Locked & Shifted'], ['rel' => 'resi_status']) ?></div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable"><?= $form->field($applicationBusi, 'busi_staff_declared')->textInput() ?></div>                    
                </div>


                <div class="row">
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable"><?= $form->field($applicationBusi, 'busi_staff_seen')->textInput(['type' => 'number']) ?></div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable"><?= $form->field($applicationBusi, 'busi_area')->textInput() ?></div>
                    <div class="col-lg-3 busi_locked_enable busi_shifted_disable busi_locked_shifted_enable"><?= $form->field($applicationBusi, 'busi_reason_for_closed')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_enable busi_locked_shifted_enable"><?= $form->field($applicationBusi, 'busi_shifted_tenure')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row busi_verification_disable">                            
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_landmark_1')->textInput(['maxlength' => true]) ?></div>  
                    <div class="col-lg-3"><?= $form->field($applicationBusi, 'busi_landmark_2')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3">
                        <label>Activity Seen</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary <?= ($applicationBusi->busi_activity_seen == 0) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[busi_activity_seen]" autocomplete="off" <?= ($applicationBusi->busi_activity_seen == 0) ? 'checked' : '' ?> value="0"> Yes
                            </label>
                            <label class="btn btn-primary <?= ($applicationBusi->busi_activity_seen == 1) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[busi_activity_seen]" autocomplete="off" <?= ($applicationBusi->busi_activity_seen == 1) ? 'checked' : '' ?> value="1"> No
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-9"><?= $form->field($applicationBusi, 'busi_structure')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-6 busi_verification_disable busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
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
                <div class="row busi_verification_disable">
                    <div class="col-lg-3">
                        <label>Status</label>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary <?= ($applicationBusi->busi_status == 0) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[busi_status]" autocomplete="off" <?= ($applicationBusi->busi_status == 0) ? 'checked' : '' ?> value="0"> Positive
                            </label>
                            <label class="btn btn-primary <?= ($applicationBusi->busi_status == 1) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[busi_status]" autocomplete="off" <?= ($applicationBusi->busi_status == 1) ? 'checked' : '' ?> value="1"> Negative
                            </label>
                            <label class="btn btn-primary <?= ($applicationBusi->busi_status == 2) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[busi_status]" autocomplete="off" <?= ($applicationBusi->busi_status == 2) ? 'checked' : '' ?> value="2"> Credit Refer
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-9"><?= $form->field($applicationBusi, 'busi_remarks')->textInput(['maxlength' => true]) ?></div>
                </div>                 
                <div class="row">
                    <div class="col-lg-9 busi_verification_enable"><?= $form->field($applicationBusi, 'busi_not_reachable_remarks')->textArea(['maxlength' => true]) ?></div>
                </div>
            </div>
        </div>
    </div>    

    <!--Office Verification-->
    <div class="panel panel-default cust-panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#office_verification"><strong>Office Verification</strong></a>
                <?= $model->verificationStatus($model->id, 3); ?>
            </h4>
        </div>
        <div id="office_verification" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row" style="padding-bottom:10px;">
                    <div class="col-lg-3">
                        <label>Is Reachable</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn  office_verification_is_reachable btn-primary <?= ($applicationOffice->office_is_reachable == 0) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsOffice[office_is_reachable]" autocomplete="off" <?= ($applicationOffice->office_is_reachable == 0) ? 'checked' : '' ?> value="0"  class ='office_verification_is_reachable_radio' rel="office_verification_disable" active='office_verification_enable'> Yes
                            </label>
                            <label class="btn office_verification_is_reachable btn-primary <?= ($applicationOffice->office_is_reachable == 1) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsOffice[office_is_reachable]" autocomplete="off" <?= ($applicationOffice->office_is_reachable == 1) ? 'checked' : '' ?> value="1" class ='office_verification_is_reachable_radio' rel="office_verification_disable" active='office_verification_enable'> No
                            </label>
                        </div>
                    </div>                           
                </div>
                <div class="row office_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationOffice, 'office_company_name_board')->textInput(['maxlength' => true]) ?></div>  
                    <div class="col-lg-3"><?= $form->field($applicationOffice, 'office_available_status')->dropDownList(['1' => 'Available for Verification', '2' => 'Door Locked', '3' => 'Shifted', '4' => 'Door Locked & Shifted'], ['rel' => 'resi_status']) ?></div>
                    <div class="col-lg-3 office_locked_disable office_shifted_enable office_locked_shifted_enable"><?= $form->field($applicationOffice, 'office_met_person')->textInput(['maxlength' => true]) ?></div>     
                    <div class="col-lg-3 office_locked_disable office_shifted_disable office_locked_shifted_disable"><?= $form->field($applicationOffice, 'office_met_person_designation')->textInput(['maxlength' => true]) ?></div>

                </div>

                <div class="row office_verification_disable">
                    <div class="col-lg-3 office_locked_disable office_shifted_disable office_locked_shifted_disable"><?= $form->field($applicationOffice, 'office_designation')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 office_locked_disable office_shifted_disable office_locked_shifted_disable"><?= $form->field($applicationOffice, 'office_department')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 office_locked_disable office_shifted_disable office_locked_shifted_disable"><?= $form->field($applicationOffice, 'office_nature_of_company')->textInput(['maxlength' => true]) ?></div> 
                    <div class="col-lg-3 office_locked_disable office_shifted_disable office_locked_shifted_disable"><?= $form->field($applicationOffice, 'office_employment_years')->textInput() ?></div>

                </div>

                <div class="row office_verification_disable">
                    <div class="col-lg-3 office_locked_disable office_shifted_disable office_locked_shifted_disable"><?= $form->field($applicationOffice, 'office_net_salary_amount')->textInput(['maxlength' => true]) ?></div>                                       
                    <div class="col-lg-3"><?= $form->field($applicationOffice, 'office_tpc_for_applicant')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationOffice, 'office_tpc_for_company')->textInput(['maxlength' => true]) ?></div> 
                    <div class="col-lg-3"><?= $form->field($applicationOffice, 'office_landmark')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"></div>
                </div>
                <div class="row office_verification_disable">
                    <div class="col-lg-3 busi_locked_enable busi_shifted_disable office_locked_shifted_enable"><?= $form->field($applicationOffice, 'office_reason_for_closed')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_enable office_locked_shifted_enable"><?= $form->field($applicationOffice, 'office_shifted_tenure')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-9 office_verification_enable"><?= $form->field($applicationOffice, 'office_not_reachable_remarks')->textArea(['maxlength' => true]) ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-6 office_verification_disable "><?= $form->field($applicationOffice, 'office_remarks')->textInput(['maxlength' => true]) ?></div>
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
                <div class="row office_verification_disable">
                    <div class="col-lg-3">
                        <label>Status</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary <?= ($applicationOffice->office_status == 0) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[office_status]" autocomplete="off" <?= ($applicationOffice->office_status == 0) ? 'checked' : '' ?> value="0"> Positive
                            </label>
                            <label class="btn btn-primary <?= ($applicationOffice->office_status == 1) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[office_status]" autocomplete="off" <?= ($applicationOffice->office_status == 1) ? 'checked' : '' ?> value="1"> Negative
                            </label>
                            <label class="btn btn-primary <?= ($applicationOffice->office_status == 2) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[office_status]" autocomplete="off" <?= ($applicationOffice->office_status == 2) ? 'checked' : '' ?> value="2"> Credit Refer
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Residence/Office Verification-->
    <div class="panel panel-default cust-panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#resi_office_verification"><strong>Residence/Office Verification</strong></a>
                <?= $model->verificationStatus($model->id, 5); ?>
            </h4>
        </div>
        <div id="resi_office_verification" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row" style="padding-bottom:10px;">
                    <div class="col-lg-3">
                        <label>Is Reachable</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn  resi_office_verification_is_reachable btn-primary <?= ($applicationResiOffice->resi_office_is_reachable == 0) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsResiOffice[resi_office_is_reachable]" autocomplete="off" <?= ($applicationResiOffice->resi_office_is_reachable == 0) ? 'checked' : '' ?> value="0"  class ='resi_office_verification_is_reachable_radio' rel="resi_office_verification_disable" active='resi_office_verification_enable'> Yes
                            </label>
                            <label class="btn resi_office_verification_is_reachable btn-primary <?= ($applicationResiOffice->resi_office_is_reachable == 1) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsResiOffice[resi_office_is_reachable]" autocomplete="off" <?= ($applicationResiOffice->resi_office_is_reachable == 1) ? 'checked' : '' ?> value="1" class ='resi_office_verification_is_reachable_radio' rel="resi_office_verification_disable" active='resi_office_verification_enable'> No
                            </label>
                        </div>
                    </div>                           
                </div>
                <div class="row resi_office_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_society_name_plate')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_door_name_plate')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable"><?= $form->field($applicationResiOffice, 'resi_office_tpc_neighbor_1')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable"><?= $form->field($applicationResiOffice, 'resi_office_tpc_neighbor_2')->textInput(['maxlength' => true]) ?></div>
                </div>

                <div class="row resi_office_verification_disable">
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable"><?= $form->field($applicationResiOffice, 'resi_office_relation')->dropDownList(['1' => 'Self', '2' => 'Father', '3' => 'Mother', '4' => 'Brother', '5' => 'Wife', '6' => 'Son', '7' => 'Daughter', '8' => 'Grandfather', '9' => 'Grand Mother', '10' => 'Uncle', '11' => 'Aunt', '12' => 'Cousin', '13' => 'Employee', '14' => 'Neighbour', '15' => 'Security Guard', '16' => 'NA'], ['prompt' => 'Select Relation']) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_ownership_status')->dropDownList(['1' => 'Rented', '2' => 'Owned', '3' => 'Parental', '4' => 'Other'], ['prompt' => 'Select Ownership']) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_ownership_status_text')->textInput(['maxlength' => true, 'readOnly' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_available_status')->dropDownList(['1' => 'Available for Verification', '2' => 'Door Locked', '3' => 'Shifted', '4' => 'Door Locked & Shifted'], ['rel' => 'resi_status']) ?></div>

                </div>
                <div class="row resi_office_verification_disable">                    
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable"><?= $form->field($applicationResiOffice, 'resi_office_home_area')->textInput() ?></div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable"><?= $form->field($applicationResiOffice, 'resi_office_rented_owner_name')->textInput() ?></div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable"><?= $form->field($applicationResiOffice, 'resi_office_rent_amount')->textInput() ?></div>
                </div>
                <div class="row resi_office_verification_disable">
                    <div class="col-lg-3 resi_office_locked_enable resi_office_shifted_disable resi_office_locked_shifted_enable"><?= $form->field($applicationResiOffice, 'resi_office_reason_for_closed')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_enable resi_office_locked_shifted_enable"><?= $form->field($applicationResiOffice, 'resi_office_shifted_tenure')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row resi_office_verification_disable">                            
                    <div class="col-lg-3 resi_office_locked_enable resi_office_shifted_disable resi_office_locked_shifted_enable"><?= $form->field($applicationResiOffice, 'resi_office_stay_years')->textInput() ?></div>
                    <div class="col-lg-3 resi_office_locked_enable resi_office_shifted_disable resi_office_locked_shifted_enable"><?= $form->field($applicationResiOffice, 'resi_office_total_family_members')->dropDownList(['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12', '13' => '13', '14' => '14', '15' => '15'], ['prompt' => 'Select Family Members']) ?></div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable"><?= $form->field($applicationResiOffice, 'resi_office_working_members')->textInput() ?></div> 
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable"><?= $form->field($applicationResiOffice, 'resi_office_company_name_board')->textInput(['maxlength' => true]) ?></div>            
                </div>

                <div class="row resi_office_verification_disable">                            
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_designation')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_met_person')->textInput(['maxlength' => true]) ?></div>     
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_met_person_designation')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_department')->textInput(['maxlength' => true]) ?></div>
                </div>

                <div class="row resi_office_verification_disable">                            
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable"><?= $form->field($applicationResiOffice, 'resi_office_nature_of_company')->textInput(['maxlength' => true]) ?></div> 
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable"><?= $form->field($applicationResiOffice, 'resi_office_employment_years')->textInput() ?></div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable"><?= $form->field($applicationResiOffice, 'resi_office_net_salary_amount')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_tpc_for_applicant')->textInput(['maxlength' => true]) ?></div>
                </div>

                <div class="row resi_office_verification_disable">                            
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_tpc_for_company')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_locality')->dropDownList(['1' => 'Chawl', '2' => 'Building', '3' => 'Bunglow', '4' => 'Other'], ['prompt' => 'Select Locality']) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_locality_type')->dropDownList(['1' => 'Chawl', '2' => 'Building', '3' => 'Bunglow', '4' => 'Other'], ['prompt' => 'Select Locality']) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_locality_text')->textInput(['maxlength' => true, 'readOnly' => true]) ?></div>
                </div>
                <div class="row resi_office_verification_disable">     
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_landmark_1')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_landmark_2')->textInput(['maxlength' => true]) ?></div> 
                    <div class="col-lg-3"><?= $form->field($applicationResiOffice, 'resi_office_structure')->textInput(['maxlength' => true]) ?></div>                            
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable">
                        <label>Market Feedback</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary <?= ($applicationResiOffice->resi_office_market_feedback == 0) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[resi_office_market_feedback]" autocomplete="off" <?= ($applicationResiOffice->resi_office_market_feedback == 0) ? 'checked' : '' ?> value="0"> Positive
                            </label>
                            <label class="btn btn-primary <?= ($applicationResiOffice->resi_office_market_feedback == 1) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[resi_office_market_feedback]" autocomplete="off" <?= ($applicationResiOffice->resi_office_market_feedback == 1) ? 'checked' : '' ?> value="1"> Negative
                            </label>
                        </div>
                    </div> 

                </div>
                <div class="row">
                    <div class="col-lg-9 resi_office_verification_enable"><?= $form->field($applicationResiOffice, 'resi_office_not_reachable_remarks')->textArea(['maxlength' => true]) ?></div>
                </div>
                <div class="row">                           
                    <div class="col-lg-6">
                        <div class="panel panel-default cust-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <strong>Photos</strong>
                                </h4>
                            </div>
                            <div class="panel-body" style="height: 200px;overflow-y: auto;">
                                <div id="office_photos">
                                    <?php echo $resiOfficePhotosTable; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
                <div class="row">
                    <div class="col-lg-9 resi_office_verification_disable"><?= $form->field($applicationResiOffice, 'resi_office_remarks')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 resi_office_verification_disable">
                        <label>Status</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary <?= ($applicationResiOffice->resi_office_status == 0) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsResiOffice[resi_office_status]" autocomplete="off" <?= ($applicationResiOffice->resi_office_status == 0) ? 'checked' : '' ?> value="0"> Positive
                            </label>
                            <label class="btn btn-primary <?= ($applicationResiOffice->resi_office_status == 1) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsResiOffice[resi_office_status]" autocomplete="off" <?= ($applicationResiOffice->resi_office_status == 1) ? 'checked' : '' ?> value="1"> Negative
                            </label>
                            <label class="btn btn-primary <?= ($applicationResiOffice->resi_office_status == 2) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsResiOffice[resi_office_status]" autocomplete="off" <?= ($applicationResiOffice->resi_office_status == 2) ? 'checked' : '' ?> value="2"> Credit Refer
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Builder Profile-->
    <div class="panel panel-default cust-panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#builder_profile"><strong>Builder Profile</strong></a>
                <?= $model->verificationStatus($model->id, 6); ?>
            </h4>
        </div>
        <div id="builder_profile" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row" style="padding-bottom:10px;">
                    <div class="col-lg-3">
                        <label>Is Reachable</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn  builder_profile_verification_is_reachable btn-primary <?= ($applicationBuilderProfile->builder_profile_is_reachable == 0) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsBuilderProfile[builder_profile_is_reachable]" autocomplete="off" <?= ($applicationBuilderProfile->builder_profile_is_reachable == 0) ? 'checked' : '' ?> value="0"  class ='builder_profile_verification_is_reachable_radio' rel="builder_profile_verification_disable" active='builder_profile_verification_enable'> Yes
                            </label>
                            <label class="btn builder_profile_verification_is_reachable btn-primary <?= ($applicationBuilderProfile->builder_profile_is_reachable == 1) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsBuilderProfile[builder_profile_is_reachable]" autocomplete="off" <?= ($applicationBuilderProfile->builder_profile_is_reachable == 1) ? 'checked' : '' ?> value="1" class ='builder_profile_verification_is_reachable_radio' rel="builder_profile_verification_disable" active='builder_profile_verification_enable'> No
                            </label>
                        </div>
                    </div>                           
                </div>
                <div class="row builder_profile_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationBuilderProfile, 'builder_profile_company_name_board')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBuilderProfile, 'builder_profile_met_person')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBuilderProfile, 'builder_profile_met_person_designation')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBuilderProfile, 'builder_profile_exsistence')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row builder_profile_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationBuilderProfile, 'builder_profile_current_projects')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBuilderProfile, 'builder_profile_previous_projects')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBuilderProfile, 'builder_profile_staff')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBuilderProfile, 'builder_profile_area')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row builder_profile_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationBuilderProfile, 'builder_profile_type_of_office')->dropDownList(['1' => 'test', '2' => 'test1'], ['prompt' => 'Select Type of Office']) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBuilderProfile, 'builder_profile_tpc_neighbor_1')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBuilderProfile, 'builder_profile_tpc_neighbor_2')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationBuilderProfile, 'builder_profile_landmark_1')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-9 builder_profile_verification_enable"><?= $form->field($applicationBuilderProfile, 'builder_profile_not_reachable_remarks')->textArea(['maxlength' => true]) ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-3 builder_profile_verification_disable"><?= $form->field($applicationBuilderProfile, 'builder_profile_landmark_2')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3 builder_profile_verification_disable"></div>
                    <div class="col-lg-6">
                        <div class="panel panel-default cust-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <strong>Photos</strong>
                                </h4>
                            </div>
                            <div class="panel-body" style="height: 200px;overflow-y: auto;">
                                <div id="office_photos">
                                    <?php echo $builderProfilePhotosTable; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Property(APF)-->
    <div class="panel panel-default cust-panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#property_apf"><strong>Property (APF)</strong></a>
                <?= $model->verificationStatus($model->id, 7); ?>
            </h4>
        </div>
        <div id="property_apf" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row" style="padding-bottom:10px;">
                    <div class="col-lg-3">
                        <label>Is Reachable</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn  property_apf_verification_is_reachable btn-primary <?= ($applicationPropertyApf->property_apf_is_reachable == 0) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsPropertyApf[property_apf_is_reachable]" autocomplete="off" <?= ($applicationPropertyApf->property_apf_is_reachable == 0) ? 'checked' : '' ?> value="0"  class ='property_apf_verification_is_reachable_radio' rel="property_apf_verification_disable" active='property_apf_verification_enable'> Yes
                            </label>
                            <label class="btn property_apf_verification_is_reachable btn-primary <?= ($applicationPropertyApf->property_apf_is_reachable == 1) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsPropertyApf[property_apf_is_reachable]" autocomplete="off" <?= ($applicationPropertyApf->property_apf_is_reachable == 1) ? 'checked' : '' ?> value="1" class ='property_apf_verification_is_reachable_radio' rel="property_apf_verification_disable" active='property_apf_verification_enable'> No
                            </label>
                        </div>
                    </div>                           
                </div>
                <div class="row property_apf_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_met_person')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_met_person_designation')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_property_status')->dropDownList(['1' => 'Freshland', '2' => 'Redevelopment'], ['prompt' => 'Select Property Status']) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_no_of_workers')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row property_apf_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_mode_of_payment')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_construction_stock')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_total_flats')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_how_many_sold')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row property_apf_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_total_shops')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_area')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_work_completed')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_possession')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row property_apf_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_apf')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_delay_in_work')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_tpc')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationPropertyApf, 'property_apf_landmark')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-9 property_apf_verification_enable"><?= $form->field($applicationPropertyApf, 'property_apf_not_reachable_remarks')->textArea(['maxlength' => true]) ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default cust-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <strong>Photos</strong>
                                </h4>
                            </div>
                            <div class="panel-body" style="height: 200px;overflow-y: auto;">
                                <div id="office_photos">
                                    <?php echo $propertyApfPhotosTable; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Individual Property-->
    <div class="panel panel-default cust-panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#individual_property"><strong>Individual Property</strong></a>
                <?= $model->verificationStatus($model->id, 8); ?>
            </h4>
        </div>
        <div id="individual_property" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row" style="padding-bottom:10px;">
                    <div class="col-lg-3">
                        <label>Is Reachable</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn  indiv_property_verification_is_reachable btn-primary <?= ($applicationIndivProperty->indiv_property_is_reachable == 0) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsIndivProperty[indiv_property_is_reachable]" autocomplete="off" <?= ($applicationIndivProperty->indiv_property_is_reachable == 0) ? 'checked' : '' ?> value="0"  class ='indiv_property_verification_is_reachable_radio' rel="indiv_property_verification_disable" active='indiv_property_verification_enable'> Yes
                            </label>
                            <label class="btn indiv_property_verification_is_reachable btn-primary <?= ($applicationIndivProperty->indiv_property_is_reachable == 1) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsIndivProperty[indiv_property_is_reachable]" autocomplete="off" <?= ($applicationIndivProperty->indiv_property_is_reachable == 1) ? 'checked' : '' ?> value="1" class ='indiv_property_verification_is_reachable_radio' rel="indiv_property_verification_disable" active='indiv_property_verification_enable'> No
                            </label>
                        </div>
                    </div>                           
                </div>
                <div class="row indiv_property_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationIndivProperty, 'indiv_property_met_person')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationIndivProperty, 'indiv_property_met_person_designation')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationIndivProperty, 'indiv_property_property_confirmed')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationIndivProperty, 'indiv_property_previous_owner')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row indiv_property_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationIndivProperty, 'indiv_property_property_type')->dropDownList(['1' => 'Fresh Property', '2' => 'Old Sold Out'], ['prompt' => 'Select Property Status']) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationIndivProperty, 'indiv_property_area')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationIndivProperty, 'indiv_property_approx_market_value')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationIndivProperty, 'indiv_property_society_name_plate')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row indiv_property_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationIndivProperty, 'indiv_property_door_name_plate')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationIndivProperty, 'indiv_property_tpc')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationIndivProperty, 'indiv_property_landmark')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"></div>
                </div>
                <div class="row">
                    <div class="col-lg-9 indiv_property_verification_enable"><?= $form->field($applicationIndivProperty, 'indiv_property_not_reachable_remarks')->textArea(['maxlength' => true]) ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default cust-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <strong>Photos</strong>
                                </h4>
                            </div>
                            <div class="panel-body" style="height: 200px;overflow-y: auto;">
                                <div id="office_photos">
                                    <?php echo $indivPropertyPhotosTable; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--NOC (Society)-->
    <div class="panel panel-default cust-panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#noc_soc"><strong>NOC (Society)</strong></a>
                <?= $model->verificationStatus($model->id, 9); ?>
            </h4>
        </div>
        <div id="noc_soc" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row" style="padding-bottom:10px;">
                    <div class="col-lg-3">
                        <label>Is Reachable</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn  noc_soc_verification_is_reachable btn-primary <?= ($applicationNocSoc->noc_soc_is_reachable == 0) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsNocSoc[noc_soc_is_reachable]" autocomplete="off" <?= ($applicationNocSoc->noc_soc_is_reachable == 0) ? 'checked' : '' ?> value="0"  class ='noc_soc_verification_is_reachable_radio' rel="noc_soc_verification_disable" active='noc_soc_verification_enable'> Yes
                            </label>
                            <label class="btn noc_soc_verification_is_reachable btn-primary <?= ($applicationNocSoc->noc_soc_is_reachable == 1) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsNocSoc[noc_soc_is_reachable]" autocomplete="off" <?= ($applicationNocSoc->noc_soc_is_reachable == 1) ? 'checked' : '' ?> value="1" class ='noc_soc_verification_is_reachable_radio' rel="noc_soc_verification_disable" active='noc_soc_verification_enable'> No
                            </label>
                        </div>
                    </div>                           
                </div>
                <div class="row noc_soc_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationNocSoc, 'noc_soc_met_person')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationNocSoc, 'noc_soc_met_person_designation')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationNocSoc, 'noc_soc_signature_done_by')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationNocSoc, 'noc_soc_bldg_reg_number')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row noc_soc_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationNocSoc, 'noc_soc_society_type')->dropDownList(['1' => 'Housing', '2' => 'Mhada', '3' => 'Chawl Society'], ['prompt' => 'Select Property Status']) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationNocSoc, 'noc_soc_previous_owner')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationNocSoc, 'noc_soc_chairman_name')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3"><?= $form->field($applicationNocSoc, 'noc_soc_secretary_name')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row noc_soc_verification_disable">
                    <div class="col-lg-3"><?= $form->field($applicationNocSoc, 'noc_soc_tresurer_name')->textInput(['maxlength' => true]) ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-9 noc_soc_verification_enable"><?= $form->field($applicationNocSoc, 'noc_soc_not_reachable_remarks')->textArea(['maxlength' => true]) ?></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default cust-panel">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <strong>Photos</strong>
                                </h4>
                            </div>
                            <div class="panel-body" style="height: 200px;overflow-y: auto;">
                                <div id="office_photos">
                                    <?php echo $nocSocPhotosTable; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--NOC (Business/Conditional)-->
    <div class="panel panel-default cust-panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#noc"><strong>NOC (Business/Conditional)</strong></a>
                <?= $model->verificationStatus($model->id, 4); ?>
            </h4>
        </div>
        <div id="noc" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row" style="padding-bottom:10px;">
                    <div class="col-lg-3">
                        <label>Is Reachable</label><br>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn  noc_verification_is_reachable btn-primary <?= ($applicationNocBusi->noc_is_reachable == 0) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsNocBusi[noc_is_reachable]" autocomplete="off" <?= ($applicationNocBusi->noc_is_reachable == 0) ? 'checked' : '' ?> value="0"  class ='noc_verification_is_reachable_radio' rel="noc_verification_disable" active='noc_verification_enable'> Yes
                            </label>
                            <label class="btn noc_verification_is_reachable btn-primary <?= ($applicationNocBusi->noc_is_reachable == 1) ? 'active' : '' ?>">
                                <input type="radio" name="ApplicationsNocBusi[noc_is_reachable]" autocomplete="off" <?= ($applicationNocBusi->noc_is_reachable == 1) ? 'checked' : '' ?> value="1" class ='noc_verification_is_reachable_radio' rel="noc_verification_disable" active='noc_verification_enable'> No
                            </label>
                        </div>
                    </div>                           
                </div>
                <div class="row noc_verification_disable">
                    <div class="col-lg-12" id="noc_table">
                        <?php echo $nocTable; ?>
                    </div>
                </div>    
                <div id="loader_noc" style="display: none; height: 350px; margin: auto; text-align: center; padding: 70px 0;">
                    <img src='<?php echo Yii::$app->request->BaseUrl; ?>/images/acs_loader.gif'>
                </div>
                <div class="row">
                    <div class="col-lg-9 noc_verification_enable"><?= $form->field($applicationNocBusi, 'noc_not_reachable_remarks')->textArea(['maxlength' => true]) ?></div>
                </div>
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
                    <div class="col-lg-9"><?= $form->field($applicationNocBusi, 'noc_structure')->textInput(['maxlength' => true]) ?></div>
                    <div class="col-lg-3">
                        <label>Status</label>
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary <?= ($applicationNocBusi->noc_status == 0) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[noc_status]" autocomplete="off" <?= ($applicationNocBusi->noc_status == 0) ? 'checked' : '' ?> value="0"> Positive
                            </label>
                            <label class="btn btn-primary <?= ($applicationNocBusi->noc_status == 1) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[noc_status]" autocomplete="off" <?= ($applicationNocBusi->noc_status == 1) ? 'checked' : '' ?> value="1"> Negative
                            </label>
                            <label class="btn btn-primary <?= ($applicationNocBusi->noc_status == 2) ? 'active' : '' ?>">
                                <input type="radio" name="Applications[noc_status]" autocomplete="off" <?= ($applicationNocBusi->noc_status == 2) ? 'checked' : '' ?> value="2"> Credit Refer
                            </label>
                        </div>
                    </div>
                </div>
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

<!-- Image pop-->
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

<!--Upload NOC modal-->    
<div class="modal fade" id="modal-add-noc">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header label-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    <i class="text-white fa fa-pencil-square-o"></i><span class="text-white bold">Add NOC</span>
                </h4>
            </div>
            <form id="noc_form" method="post">
                <div class="modal-body" id="noc_modal_body">
                    <div class="form-group">
                        <label for="noc_met_person" class="col-form-label">Met Person:</label>
                        <input type="text" class="form-control" name="noc_met_person" id="noc_met_person">
                    </div>
                    <div class="form-group">
                        <label for="noc_designation" class="col-form-label">Designation:</label>
                        <input type="text" class="form-control" name="noc_designation" id="noc_designaion">
                    </div>
                    <div class="form-group">
                        <label for="noc_remarks" class="col-form-label">Remarks:</label>
                        <input type="text" class="form-control" name="noc_remarks" id="noc_remarks">
                    </div> 
                    <input type="hidden" name="application_id" id="application_id" value="<?= $model->id; ?>" />
                </div>               

                <div class="modal-footer" id="noc_modal_footer">
                    <div id="noc_button_div">
                        <button type="submit" class="btn btn-primary" id="noc_submit">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                    <div id="noc_loader_div" style="display: none;">
                        Uploading.... <img src='<?php echo Yii::$app->request->BaseUrl; ?>/images/acs_loader.gif'>
                    </div>
                    <div id="noc_response_div" style="display: none;">

                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!--Upload ITR modal-->    
<div class="modal fade" id="modal-add-itr">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header label-success">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
                    <i class="text-white fa fa-pencil-square-o"></i><span class="text-white bold">Add ITR</span>
                </h4>
            </div>
            <form id="itr_form" method="post">
                <div class="modal-body" id="itr_modal_body">
                    <div class="form-group">
                        <label for="total_income" class="col-form-label">Total income:</label>
                        <input type="text" name="total_income" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="date_of_filing" class="col-form-label">Date of Filing:</label>
                        <input type="date" max="<?PHP echo date('Y-m-d'); ?>" name="date_of_filing" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pan_card_no" class="col-form-label">Pan no.:</label>
                        <input type="text" name="pan_card_no" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="acknowledgement_no" class="col-form-label">Acknowledgement No.:</label>
                        <input type="text" name="acknowledgement_no" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="assessment_year" class="col-form-label">Assesement year (YYYY-YYYY):</label>
                        <input type="text" pattern="[0-9]{4}-[0-9]{4}" name="assessment_year" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="remarks" class="col-form-label">Remarks:</label>
                        <input type="text" name="remarks" class="form-control">
                    </div>
                    <input type="hidden" name="application_id" id="application_id" value="<?= $model->id; ?>" />
                </div>               

                <div class="modal-footer" id="itr_modal_footer">
                    <div id="itr_button_div">
                        <button type="submit" class="btn btn-primary" id="itr_submit">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>
                            Close
                        </button>
                    </div>
                    <div id="itr_loader_div" style="display: none;">
                        Uploading.... <img src='<?php echo Yii::$app->request->BaseUrl; ?>/images/acs_loader.gif'>
                    </div>
                    <div id="itr_response_div" style="display: none;">

                    </div>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- Map-->
<div class="modal fade" id="mapmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 1000px !important;">
        <div class="modal-content">              
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <div id="mapholder"></div>
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

<script src="https://maps.google.com/maps/api/js?key=<?= Yii::$app->params['GOOGLE_MAPS_API_KEY_POPUP'] ?>"></script>

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
            $('.addMoreItr').on('click', function() {
                $('#modal-add-itr').modal('show'); 
            });
            $('.addMoreNoc').on('click', function() {
                $('#modal-add-noc').modal('show'); 
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
            
            $('#noc_form').on('submit',(function(e) {
                $('#noc_button_div').hide();
                $('#noc_loader_div').show();
                e.preventDefault();
                $.ajax({
                    url: 'add-noc', // Url to which the request is send
                    type: 'POST',             // Type of request to be send, called as method
                    data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false,       // The content type used when sending data to the server.
                    cache: false,             // To unable request pages to be cached
                    processData:false,        // To send DOMDocument or non processed data file it is set to false
                    success: function(data)   // A function to be called if request succeeds
                    {
                        $('#noc_loader_div').hide();
                        $('#noc_response_div').show();
                        $('#noc_response_div').html(data);
                        
                        //hide & reset modal 
                        setTimeout(function() { 
                            resetNocModal();                            
                        }, 3000);
                        
                    }
                });
            }));
            
            $('#itr_form').on('submit',(function(e) {
                $('#itr_button_div').hide();
                $('#itr_loader_div').show();
                e.preventDefault();
                $.ajax({
                    url: 'add-itr', // Url to which the request is send
                    type: 'POST',             // Type of request to be send, called as method
                    data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                    contentType: false,       // The content type used when sending data to the server.
                    cache: false,             // To unable request pages to be cached
                    processData:false,        // To send DOMDocument or non processed data file it is set to false
                    success: function(data)   // A function to be called if request succeeds
                    {
                        $('#itr_loader_div').hide();
                        $('#itr_response_div').show();
                        $('#itr_response_div').html(data);
                        
                        //hide & reset modal 
                        setTimeout(function() { 
                            resetItrModal();                            
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
                $('#noc_button_div').show(); 
                $('#response_photos_div').hide();
                $('#photos_form').reset;
                
                //reloadPhotosTable();
                location.reload();
            }
            
            function resetNocModal() {
                $('#modal-add-noc').modal('hide'); 
                $('#button_div').show(); 
                $('#noc_response_div').hide();
                $('#noc_form').reset;
                
                reloadNocTable();
            }
            
            function resetItrModal() {
                $('#modal-add-itr').modal('hide'); 
                $('#button_div').show(); 
                $('#itr_response_div').hide();
                $('#itr_form').reset;
                
                reloadItrTable();
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
            
            function reloadNocTable() {
                $('#loader_noc').show();
                $('#noc_table').hide();
                //reload NOC table
                $.post('get-noc-table?id=$model->id', {'data': ''}, function (response) {
                    $('#noc_table').html(response);
                    $('#noc_table').show();
                    $('#loader_noc').hide();
                });
            }
            
            function reloadItrTable() {
                $('#loader_itr').show();
                $('#itr_table').hide();
                //reload ITR table
                $.post('get-itr-table?id=$model->id', {'data': ''}, function (response) {
                    $('#itr_table').html(response);
                    $('#itr_table').show();
                    $('#loader_itr').hide();
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
            
            $(document).on('click', '.deleteNoc', function() {
                var record_id = this.value;
                bootbox.confirm('Are you sure you want to delete?', function(result){ 
                    if(result) {
                    var data = {record_id: record_id};
                        //ajax call
                        $.post('delete-noc', data, function (response) {
                            bootbox.alert('Sucessfully Deleted!!!');
                            reloadNocTable();
                        });
                    }
                });
            });
            
            $(document).on('click', '.deleteItr', function() {
                var record_id = this.value;
                bootbox.confirm('Are you sure you want to delete?', function(result){ 
                    if(result) {
                    var data = {record_id: record_id};
                        //ajax call
                        $.post('delete-itr', data, function (response) {
                            bootbox.alert('Sucessfully Deleted!!!');
                            reloadItrTable();
                        });
                    }
                });
            });
            
            $('.map_marker').click(function() {
                var values = $(this).attr('value');
                
                var all_ids = values.split('_');
                var record_id = all_ids[0];
                var section_id = all_ids[1];
                var data = {record_id: record_id, section_id: section_id};
                //ajax call
                $.post('map-details', data, function (response) {
                    if(!jQuery.isEmptyObject(response)) {
                        var obj = jQuery.parseJSON(response);
                        if(obj.latitude != '' && obj.longitude != '') {
                            showPosition(obj.latitude, obj.longitude);
                        } else {
                            alert('Something went wrong!!!');
                        }
                    } else {
                        alert('Something went wrong!!!');
                    }
                });
            });
            
            function showPosition(lat, lon) {
                var latlon = new google.maps.LatLng(lat, lon)
                var mapholder = document.getElementById('mapholder')
                mapholder.style.height = '500px';
                mapholder.style.width = '950px';

                var myOptions = {
                center:latlon,zoom:14,
                mapTypeId:google.maps.MapTypeId.ROADMAP,
                mapTypeControl:false,
                navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
                }

                var map = new google.maps.Map(document.getElementById('mapholder'), myOptions);
                var marker = new google.maps.Marker({position:latlon,map:map,title:'You are here!'});
                $('#mapmodal').modal('show'); 
            }
            
            $(document).on('click', '.photoViewLocation', function() {
                var record_id = this.value;
                var data = {record_id: record_id};
                //ajax call
                $.post('photo-map-details', data, function (response) {
                    if(!jQuery.isEmptyObject(response)) {
                        var obj = jQuery.parseJSON(response);
                        if(obj.latitude != '' && obj.longitude != '') {
                            showPosition(obj.latitude, obj.longitude);
                        } else {
                            alert('Something went wrong!!!');
                        }
                    } else {
                        alert('Something went wrong!!!');
                    }
                });
            });
});
");
?>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        var resiChecked = $('input[name="ApplicationsResi[resi_is_reachable]"]').filter(":checked").val();
        autoShowHide(resiChecked, "resi");
        var resiChecked = $('input[name="ApplicationsBusi[busi_is_reachable]"]').filter(":checked").val();
        autoShowHide(resiChecked, "busi");
        var resiChecked = $('input[name="ApplicationsOffice[office_is_reachable]"]').filter(":checked").val();
        autoShowHide(resiChecked, "office");
        var resiChecked = $('input[name="ApplicationsResiOffice[resi_office_is_reachable]"]').filter(":checked").val();
        autoShowHide(resiChecked, "resi_office");
        var resiChecked = $('input[name="ApplicationsBuilderProfile[builder_profile_is_reachable]"]').filter(":checked").val();
        autoShowHide(resiChecked, "builder_profile");
        var resiChecked = $('input[name="Applications[property_apf_is_reachable]"]').filter(":checked").val();
        autoShowHide(resiChecked, "property_apf");
        var resiChecked = $('input[name="Applications[indiv_property_is_reachable]"]').filter(":checked").val();
        autoShowHide(resiChecked, "indiv_property");
        var resiChecked = $('input[name="ApplicationsNocSoc[noc_soc_is_reachable]"]').filter(":checked").val();
        autoShowHide(resiChecked, "noc_soc");
        var resiChecked = $('input[name="Applications[noc_is_reachable]"]').filter(":checked").val();
        autoShowHide(resiChecked, "noc");
        function autoShowHide(resiChecked, source) {
            if (resiChecked == 1) {
                $("." + source + "_verification_enable").show();
                $("." + source + "_verification_disable").hide();
            } else {
                $("." + source + "_verification_disable").show();
                $("." + source + "_verification_enable").hide();
            }
        }
        $('input[name="ApplicationsResi[resi_is_reachable]"]').change(function () {

            var value = $(this).filter(":checked").val();
            var hideValue = $(this).attr('rel');
            var enableValue = $(this).attr('active');
            showHide(value, hideValue, enableValue);
        });
        $('input[name="ApplicationsBusi[busi_is_reachable]"]').change(function () {
            var value = $(this).filter(":checked").val();
            var hideValue = $(this).attr('rel');
            var enableValue = $(this).attr('active');
            showHide(value, hideValue, enableValue);
        });
        $('input[name="ApplicationsOffice[office_is_reachable]"]').change(function () {
            var value = $(this).filter(":checked").val();
            var hideValue = $(this).attr('rel');
            var enableValue = $(this).attr('active');
            showHide(value, hideValue, enableValue);
        });
        $('input[name="ApplicationsResiOffice[resi_office_is_reachable]"]').change(function () {
            var value = $(this).filter(":checked").val();
            var hideValue = $(this).attr('rel');
            var enableValue = $(this).attr('active');
            showHide(value, hideValue, enableValue);
        });
        $('input[name="ApplicationsPropertyApf[property_apf_is_reachable]"]').change(function () {
            var value = $(this).filter(":checked").val();
            var hideValue = $(this).attr('rel');
            var enableValue = $(this).attr('active');
            showHide(value, hideValue, enableValue);
        });
        $('input[name="ApplicationIndivProperty[indiv_property_is_reachable]"]').change(function () {
            var value = $(this).filter(":checked").val();
            var hideValue = $(this).attr('rel');
            var enableValue = $(this).attr('active');
            showHide(value, hideValue, enableValue);
        });
        $('input[name="ApplicationsNocSoc[noc_soc_is_reachable]"]').change(function () {
            var value = $(this).filter(":checked").val();
            var hideValue = $(this).attr('rel');
            var enableValue = $(this).attr('active');
            showHide(value, hideValue, enableValue);
        });
        $('input[name="ApplicationsNocBusi[noc_is_reachable]"]').change(function () {
            var value = $(this).filter(":checked").val();
            var hideValue = $(this).attr('rel');
            var enableValue = $(this).attr('active');
            showHide(value, hideValue, enableValue);
        });
        $('input[name="ApplicationsBuilderProfile[builder_profile_is_reachable]"]').change(function () {
            var value = $(this).filter(":checked").val();
            var hideValue = $(this).attr('rel');
            var enableValue = $(this).attr('active');
            showHide(value, hideValue, enableValue);
        });


        function showHide(value, hideValue, enableValue) {
            if (value == 1) {
                $("." + hideValue).hide();
                $("." + enableValue).show();
            } else {
                $("." + hideValue).show();
                $("." + enableValue).hide();
            }
        }

        var default_designation = $("#applications-busi_designation").val();
        if (default_designation == 6) {
            $("#applications-busi_designation_others").removeAttr("readonly");
        } else {
            $("#applications-busi_designation_others").attr("readonly", "readonly");
        }
        $("#applications-busi_designation").change(function () {
            var designation = $(this).val();
            if (designation == 6) {
                $("#applications-busi_designation_others").removeAttr("readonly");
            } else {
                $("#applications-busi_designation_others").attr("readonly", "readonly");
            }
        });
        var is_rented = $("#applications-resi_ownership_status").val();
        hideRented("resi", is_rented);
        $("#applications-resi_ownership_status").change(function () {
            var is_rented = $(this).val();
            hideRented("resi", is_rented);
        });
        var is_rented = $("#applications-busi_ownership_status").val();
        hideRented("busi", is_rented);
        $("#applications-busi_ownership_status").change(function () {
            var is_rented = $(this).val();
            hideRented("busi", is_rented);
        });
        var is_rented = $("#applications-resi_office_ownership_status").val();
        hideRented("resi_office", is_rented);
        $("#applications-resi_office_ownership_status").change(function () {
            var is_rented = $(this).val();
            hideRented("resi_office", is_rented);
        });
        function hideRented(source, value) {
            if (value == 1) {
                $(".field-applications-" + source + "_rented_owner_name").show();
                $(".field-applications-" + source + "_rent_amount").show();
            } else {
                $(".field-applications-" + source + "_rented_owner_name").hide();
                $(".field-applications-" + source + "_rent_amount").hide();
            }
        }
        var resi_availability_status = $("#applicationsresi-resi_available_status").val();
        availableHide("resi", resi_availability_status);
        $("#applicationsresi-resi_available_status").change(function () {
            var resi_availability_status = $(this).val();
            availableHide("resi", resi_availability_status);
        });
        var busi_availability_status = $("#applicationsbusi-busi_available_status").val();
        availableHide("busi", busi_availability_status);
        $("#applicationsbusi-busi_available_status").change(function () {
            var busi_availability_status = $(this).val();
            availableHide("busi", busi_availability_status);
        });
        var office_availability_status = $("#applicationsoffice-office_available_status").val();
        availableHide("office", office_availability_status);
        $("#applicationsoffice-office_available_status").change(function () {
            var office_availability_status = $(this).val();
            availableHide("office", office_availability_status);
        });
        var resi_office_availability_status = $("#applicationsresioffice-resi_available_status").val();
        availableHide("resi_office", resi_office_availability_status);
        $("#applicationsresioffice-resi_office_available_status").change(function () {
            var resi_office_availability_status = $(this).val();
            availableHide("resi_office", resi_office_availability_status);
        });

        function availableHide(source, availability_status) {
            $("." + source + "_verification_disable").show();
            if (availability_status == 2) {
                $("." + source + "_locked_disable").hide();
                $("." + source + "_locked_enable").show();
            }
            if (availability_status == 3) {
                $("." + source + "_shifted_disable").hide();
                $("." + source + "_shifted_enable").show();
            }
            if (availability_status == 4) {
                $("." + source + "_locked_shifted_disable").hide();
                $("." + source + "_locked_shifted_enable").show();
            }
            if (availability_status == 1) {
                $("." + source + "_shifted_enable").show();
                $("." + source + "_shifted_disable").show();
                $("." + source + "_locked_enable").show();
                $("." + source + "_locked_disable").show();
                $("." + source + "_locked_shifted_enable").show();
                $("." + source + "_locked_shifted_disable").show();
            }
        }

    });
</script>
