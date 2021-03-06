<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\applications\models\Applications */

$this->title = 'View Application: ' . $model->application_id;
$this->params['breadcrumbs'][] = ['label' => 'Applications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->application_id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'View';
?>
<section class="panel">
    <div class="panel-body">
        <p>
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?=
            Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ])
            ?>
        </p>

        <div class="row">
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('first_name') ?></label>
                <div class="readonlydiv"><?= $model->first_name ?></div>
            </div>
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('middle_name') ?></label>
                <div class="readonlydiv"><?= $model->middle_name ?></div>
            </div>
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('last_name') ?></label>
                <div class="readonlydiv"><?= $model->last_name ?></div>
            </div>
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('date_of_birth') ?></label>
                <div class="readonlydiv"><?= $model->date_of_birth ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('aadhaar_card_no') ?></label>
                <div class="readonlydiv"><?= $model->aadhaar_card_no ?></div>
            </div>
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('pan_card_no') ?></label>
                <div class="readonlydiv"><?= $model->pan_card_no ?></div>
            </div>
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('mobile_no') ?></label>
                <div class="readonlydiv"><?= $model->mobile_no ?></div>
            </div>
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('alternate_contact_no') ?></label>
                <div class="readonlydiv"><?= $model->alternate_contact_no ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('case_id') ?></label>
                <div class="readonlydiv"><?= $model->case_id ?></div>
            </div>
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('branch') ?></label>
                <div class="readonlydiv"><?= $model->branch ?></div>
            </div>
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('institute_id') ?></label>
                <div class="readonlydiv"><?= $model->getInstituteNameType($model->institute_id) ?></div>
            </div>
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('company_name') ?></label>
                <div class="readonlydiv"><?= $model->company_name ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('loan_type_id') ?></label>
                <div class="readonlydiv"><?= $model->getLoanType($model->loan_type_id) ?></div>
            </div>
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('applicant_type') ?></label>
                <div class="readonlydiv"><?= $model->getApplicantType($model->applicant_type) ?></div>
            </div>
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('profile_type') ?></label>
                <div class="readonlydiv"><?= $model->getProfileType($model->profile_type) ?></div>
            </div>            
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('date_of_application') ?></label>
                <div class="readonlydiv"><?= $model->date_of_application ?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('address') ?></label>
                <textarea class="form-control" readonly=""><?= $model->address ?></textarea>
            </div>
        </div>
    </div>
</section>

<section class="panel">
    <header class="panel-heading">
        Verification Addresses
    </header>
</section>

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
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_address') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationResi->resi_address ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_address_pincode') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_address_pincode ?></div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_address_trigger') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationResi->resi_address_trigger ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Send for verification: <?= ($applicationResi->resi_address_verification == 1) ? 'TRUE' : 'FALSE' ?></label>
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
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_address') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationBusi->busi_address ?></textarea>
                    </div>    
                </div>  
                <div class="row">    
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_address_pincode') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_address_pincode ?></div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_address_trigger') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationBusi->busi_address_trigger ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Send for verification: <?= ($applicationBusi->busi_address_verification == 1) ? 'TRUE' : 'FALSE' ?></label>
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
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_address') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationOffice->office_address ?></textarea>
                    </div>    
                </div>  
                <div class="row">    
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_address_pincode') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_address_pincode ?></div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_address_trigger') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationOffice->office_address_trigger ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Send for verification: <?= ($applicationOffice->office_address_verification == 1) ? 'TRUE' : 'FALSE' ?></label>
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
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_address') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationResiOffice->resi_office_address ?></textarea>
                    </div>    
                </div>  
                <div class="row">    
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_address_pincode') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_address_pincode ?></div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_address_trigger') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationResiOffice->resi_office_address_trigger ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Send for verification: <?= ($applicationResiOffice->resi_office_address_verification == 1) ? 'TRUE' : 'FALSE' ?></label>
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
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_address') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationBuilderProfile->builder_profile_address ?></textarea>
                    </div>    
                </div>  
                <div class="row">    
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_address_pincode') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_address_pincode ?></div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_address_trigger') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationBuilderProfile->builder_profile_address_trigger ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Send for verification: <?= ($applicationBuilderProfile->builder_profile_address_verification == 1) ? 'TRUE' : 'FALSE' ?></label>
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
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_address') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationPropertyApf->property_apf_address ?></textarea>
                    </div>    
                </div>  
                <div class="row">    
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_address_pincode') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_address_pincode ?></div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_address_trigger') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationPropertyApf->property_apf_address_trigger ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Send for verification: <?= ($applicationPropertyApf->property_apf_address_verification == 1) ? 'TRUE' : 'FALSE' ?></label>
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
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_address') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationIndivProperty->indiv_property_address ?></textarea>
                    </div>    
                </div>  
                <div class="row">    
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_address_pincode') ?></label>
                        <div class="readonlydiv"><?= $applicationIndivProperty->indiv_property_address_pincode ?></div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_address_trigger') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationIndivProperty->indiv_property_address_trigger ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Send for verification: <?= ($applicationIndivProperty->indiv_property_address_verification == 1) ? 'TRUE' : 'FALSE' ?></label>
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
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_address') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationNocSoc->noc_soc_address ?></textarea>
                    </div>    
                </div>  
                <div class="row">    
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_address_pincode') ?></label>
                        <div class="readonlydiv"><?= $applicationNocSoc->noc_soc_address_pincode ?></div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_address_trigger') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationNocSoc->noc_soc_address_trigger ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Send for verification: <?= ($applicationNocSoc->noc_soc_address_verification == 1) ? 'TRUE' : 'FALSE' ?></label>
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
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocBusi->getAttributeLabel('noc_address') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationNocBusi->noc_address ?></textarea>
                    </div>    
                </div>  
                <div class="row">    
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocBusi->getAttributeLabel('noc_address_pincode') ?></label>
                        <div class="readonlydiv"><?= $applicationNocBusi->noc_address_pincode ?></div>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-lg-12">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocBusi->getAttributeLabel('noc_address_trigger') ?></label>
                        <textarea class="form-control" readonly=""><?= $applicationNocBusi->noc_address_trigger ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label>Send for verification: <?= ($applicationNocBusi->noc_address_verification == 1) ? 'TRUE' : 'FALSE' ?></label>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>

<section class="panel">
    <header class="panel-heading">
        Back Office
    </header>
</section>

<div class="panel-group" id="backoffice" style="margin-bottom: 20px;">
    <!--KYC-->
    <div class="panel panel-default cust-panel">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#backoffice" href="#kyc"><strong>KYC</strong></a>
            </h4>
        </div>
        <div id="kyc" class="panel-collapse collapse in">
            <div class="panel-body" id="kyc_table">
                <?php echo $kycTable; ?>
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
                <?php echo $itrTable; ?>
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
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('financial_pan_card_no') ?></label>
                        <div class="readonlydiv"><?= $model->financial_pan_card_no ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('financial_name') ?></label>
                        <div class="readonlydiv"><?= $model->financial_name ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('financial_assessment_year') ?></label>
                        <div class="readonlydiv"><?= $model->financial_assessment_year ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('financial_date_of_filing') ?></label>
                        <div class="readonlydiv"><?= $model->financial_date_of_filing ?></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('financial_sales') ?></label>
                        <div class="readonlydiv"><?= $model->financial_sales ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('financial_share_capital') ?></label>
                        <div class="readonlydiv"><?= $model->financial_share_capital ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('financial_net_profit') ?></label>
                        <div class="readonlydiv"><?= $model->financial_net_profit ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('financial_debtors') ?></label>
                        <div class="readonlydiv"><?= $model->financial_debtors ?></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('financial_creditors') ?></label>
                        <div class="readonlydiv"><?= $model->financial_creditors ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('financial_total_loans') ?></label>
                        <div class="readonlydiv"><?= $model->financial_total_loans ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('financial_depriciation') ?></label>
                        <div class="readonlydiv"><?= $model->financial_depriciation ?></div>
                    </div>
                    <div class="col-lg-3">
                    </div>
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
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('bank_bank_name') ?></label>
                        <div class="readonlydiv"><?= $model->bank_bank_name ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('bank_account_holder') ?></label>
                        <div class="readonlydiv"><?= $model->bank_account_holder ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('bank_account_number') ?></label>
                        <div class="readonlydiv"><?= $model->bank_account_number ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('bank_dated_transaction') ?></label>
                        <div class="readonlydiv"><?= $model->bank_dated_transaction ?></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('bank_pan_card_no') ?></label>
                        <div class="readonlydiv"><?= $model->bank_pan_card_no ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('bank_current_balance') ?></label>
                        <div class="readonlydiv"><?= $model->bank_current_balance ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('bank_account_opening_date') ?></label>
                        <div class="readonlydiv"><?= $model->bank_account_opening_date ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('bank_date_of_birth') ?></label>
                        <div class="readonlydiv"><?= $model->bank_date_of_birth ?></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('bank_address') ?></label>
                        <div class="readonlydiv"><?= $model->bank_address ?></div>
                    </div>
                    <div class="col-lg-6">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('bank_narration') ?></label>
                        <div class="readonlydiv"><?= $model->bank_narration ?></div>
                    </div>
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
                        <span class="pull-right"> 
                            <?= $model->getBadge($model->pan_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="pancard" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('pan_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->pan_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('pan_first_name') ?></label>
                                <div class="readonlydiv"><?= $model->pan_first_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('pan_middle_name') ?></label>
                                <div class="readonlydiv"><?= $model->pan_middle_name ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('pan_last_name') ?></label>
                                <div class="readonlydiv"><?= $model->pan_last_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('pan_pan_no') ?></label>
                                <div class="readonlydiv"><?= $model->pan_pan_no ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('pan_dob') ?></label>
                                <div class="readonlydiv"><?= $model->pan_dob ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('pan_date_of_issue') ?></label>
                                <div class="readonlydiv"><?= $model->pan_date_of_issue ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('pan_address') ?></label>
                                <div class="readonlydiv"><?= $model->pan_address ?></div>
                            </div>
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
                            <?= $model->getBadge($model->ac_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="aadharcard" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ac_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->ac_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ac_first_name') ?></label>
                                <div class="readonlydiv"><?= $model->ac_first_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ac_middle_name') ?></label>
                                <div class="readonlydiv"><?= $model->ac_middle_name ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ac_last_name') ?></label>
                                <div class="readonlydiv"><?= $model->ac_last_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ac_aadhar_no') ?></label>
                                <div class="readonlydiv"><?= $model->ac_aadhar_no ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ac_dob') ?></label>
                                <div class="readonlydiv"><?= $model->ac_dob ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ac_mobile_no') ?></label>
                                <div class="readonlydiv"><?= $model->ac_mobile_no ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ac_address') ?></label>
                                <div class="readonlydiv"><?= $model->ac_address ?></div>
                            </div>
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
                            <?= $model->getBadge($model->passport_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="passport" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('passport_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->passport_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('passport_first_name') ?></label>
                                <div class="readonlydiv"><?= $model->passport_first_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('passport_middle_name') ?></label>
                                <div class="readonlydiv"><?= $model->passport_middle_name ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('passport_last_name') ?></label>
                                <div class="readonlydiv"><?= $model->passport_last_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('passport_passport_no') ?></label>
                                <div class="readonlydiv"><?= $model->passport_passport_no ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('passport_validity') ?></label>
                                <div class="readonlydiv"><?= $model->passport_validity ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('passport_date_of_issue') ?></label>
                                <div class="readonlydiv"><?= $model->passport_date_of_issue ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('passport_address') ?></label>
                                <div class="readonlydiv"><?= $model->passport_address ?></div>
                            </div>
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
                            <?= $model->getBadge($model->electricity_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="elec_bill" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('electricity_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->electricity_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('electricity_name') ?></label>
                                <div class="readonlydiv"><?= $model->electricity_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('electricity_address') ?></label>
                                <div class="readonlydiv"><?= $model->electricity_address ?></div>
                            </div>
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
                            <?= $model->getBadge($model->telephone_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="tele_bill" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('telephone_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->telephone_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('telephone_mobile_no') ?></label>
                                <div class="readonlydiv"><?= $model->telephone_mobile_no ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('telephone_name') ?></label>
                                <div class="readonlydiv"><?= $model->telephone_name ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('telephone_amount') ?></label>
                                <div class="readonlydiv"><?= $model->telephone_amount ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('telephone_address') ?></label>
                                <div class="readonlydiv"><?= $model->telephone_address ?></div>
                            </div>
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
                            <?= $model->getBadge($model->voter_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="voter_id" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('voter_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->voter_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('voter_first_name') ?></label>
                                <div class="readonlydiv"><?= $model->voter_first_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('voter_middle_name') ?></label>
                                <div class="readonlydiv"><?= $model->voter_middle_name ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('voter_last_name') ?></label>
                                <div class="readonlydiv"><?= $model->voter_last_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('voter_voter_id_no') ?></label>
                                <div class="readonlydiv"><?= $model->voter_voter_id_no ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-12">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('voter_address') ?></label>
                                <div class="readonlydiv"><?= $model->voter_address ?></div>
                            </div>
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
                            <?= $model->getBadge($model->driving_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="driv_lic" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('driving_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->driving_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('driving_name') ?></label>
                                <div class="readonlydiv"><?= $model->driving_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('driving_driving_license_number') ?></label>
                                <div class="readonlydiv"><?= $model->driving_driving_license_number ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('driving_validity') ?></label>
                                <div class="readonlydiv"><?= $model->driving_validity ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('driving_date_of_issue') ?></label>
                                <div class="readonlydiv"><?= $model->driving_date_of_issue ?></div>
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
                            <?= $model->getBadge($model->company_id_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="company_id" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('company_id_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->company_id_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('company_id_name') ?></label>
                                <div class="readonlydiv"><?= $model->company_id_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('company_id_designation') ?></label>
                                <div class="readonlydiv"><?= $model->company_id_designation ?></div>
                            </div>
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
                            <?= $model->getBadge($model->shop_act_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="shop_act" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('shop_act_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->shop_act_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('shop_act_name') ?></label>
                                <div class="readonlydiv"><?= $model->shop_act_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('shop_act_shop_act_no') ?></label>
                                <div class="readonlydiv"><?= $model->shop_act_shop_act_no ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('shop_act_from_date') ?></label>
                                <div class="readonlydiv"><?= $model->shop_act_from_date ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('shop_act_till_date') ?></label>
                                <div class="readonlydiv"><?= $model->shop_act_till_date ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-12">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('shop_act_address') ?></label>
                                <div class="readonlydiv"><?= $model->shop_act_address ?></div>
                            </div>
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
                            <?= $model->getBadge($model->gst_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="gst_cert" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('gst_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->gst_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('gst_name') ?></label>
                                <div class="readonlydiv"><?= $model->gst_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('gst_gst_no') ?></label>
                                <div class="readonlydiv"><?= $model->gst_gst_no ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-12">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('gst_address') ?></label>
                                <div class="readonlydiv"><?= $model->gst_address ?></div>
                            </div>
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
                            <?= $model->getBadge($model->rent_agreement_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="rent_agree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('rent_agreement_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->rent_agreement_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('rent_agreement_met_name') ?></label>
                                <div class="readonlydiv"><?= $model->rent_agreement_met_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('rent_agreement_owner_name') ?></label>
                                <div class="readonlydiv"><?= $model->rent_agreement_owner_name ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('rent_agreement_rent_amount') ?></label>
                                <div class="readonlydiv"><?= $model->rent_agreement_rent_amount ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('rent_agreement_validity') ?></label>
                                <div class="readonlydiv"><?= $model->rent_agreement_validity ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('rent_agreement_deposit_amount') ?></label>
                                <div class="readonlydiv"><?= $model->rent_agreement_deposit_amount ?></div>
                            </div>
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
                            <?= $model->getBadge($model->sale_agreement_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="sale_agree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('sale_agreement_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->sale_agreement_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('sale_agreement_seller_name') ?></label>
                                <div class="readonlydiv"><?= $model->sale_agreement_seller_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('sale_agreement_purchaser_name') ?></label>
                                <div class="readonlydiv"><?= $model->sale_agreement_purchaser_name ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-12">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('sale_agreement_address') ?></label>
                                <div class="readonlydiv"><?= $model->sale_agreement_address ?></div>
                            </div>
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
                            <?= $model->getBadge($model->oc_cc_plan_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="oc_cc_plan" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('oc_cc_plan_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->oc_cc_plan_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('oc_cc_plan_cts_no') ?></label>
                                <div class="readonlydiv"><?= $model->oc_cc_plan_cts_no ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('oc_cc_plan_issuing_authority') ?></label>
                                <div class="readonlydiv"><?= $model->oc_cc_plan_issuing_authority ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('oc_cc_plan_signature') ?></label>
                                <div class="readonlydiv"><?= $model->oc_cc_plan_signature ?></div>
                            </div>
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
                            <?= $model->getBadge($model->ocr_receipt_is_complete); ?>
                        </span>
                    </h4>
                </div>
                <div id="ocr_receipt" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ocr_receipt_feedback') ?></label>
                                <div class="readonlydiv"><?= ($model->ocr_receipt_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ocr_receipt_builder_name') ?></label>
                                <div class="readonlydiv"><?= $model->ocr_receipt_builder_name ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ocr_receipt_met_person') ?></label>
                                <div class="readonlydiv"><?= $model->ocr_receipt_met_person ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ocr_receipt_designation') ?></label>
                                <div class="readonlydiv"><?= $model->ocr_receipt_designation ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ocr_receipt_amount') ?></label>
                                <div class="readonlydiv"><?= $model->ocr_receipt_amount ?></div>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ocr_receipt_receipt_no') ?></label>
                                <div class="readonlydiv"><?= $model->ocr_receipt_receipt_no ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ocr_receipt_signature') ?></label>
                                <div class="readonlydiv"><?= $model->ocr_receipt_signature ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ocr_receipt_tpc') ?></label>
                                <div class="readonlydiv"><?= $model->ocr_receipt_tpc ?></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="control-label" for="name" style=" margin-top: 0px;"><?= $model->getAttributeLabel('ocr_receipt_landmark') ?></label>
                                <div class="readonlydiv"><?= $model->ocr_receipt_landmark ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="panel">
    <header class="panel-heading">
        Verifier's Data
    </header>
</section>

<div class="panel-group" id="accordion" style="margin-bottom: 5px;">
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
                <div class="row">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_is_reachable') ?></label>
                        <div class="readonlydiv"><?= ($applicationResi->resi_is_reachable == 0) ? 'Yes' : 'No' ?></div>
                    </div>
                </div>

                <div class="row resi_verification_disable">
                    <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_society_name_plate') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_society_name_plate ?></div>
                    </div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_door_name_plate') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_door_name_plate ?></div>
                    </div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_tpc_neighbor_1') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_tpc_neighbor_1 ?></div>
                    </div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_tpc_neighbor_2') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_tpc_neighbor_2 ?></div>
                    </div>
                </div>
                <div class="row resi_verification_disable">
                    <div class="col-lg-3 resi_locked_disable resi_shifted_enable resi_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_met_person') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_met_person ?></div>
                    </div>
                    <div class="col-lg-3 resi_locked_disable resi_shifted_disable resi_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_relation') ?></label>
                        <div class="readonlydiv"><?= $model->getRelationName($applicationResi->resi_relation) ?></div>
                    </div>
                    <?php if ($applicationResi->resi_ownership_status != 1) {
                        ?>
                        <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable">
                            <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_ownership_status') ?></label>
                            <div class="readonlydiv"><?= $model->getOwnershipStatus($applicationResi->resi_ownership_status) ?></div>
                        </div>
                    <?php }
                    ?>

                    <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_ownership_status_text') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_ownership_status_text ?></div>
                    </div>
                </div>
                <?php if ($applicationResi->resi_ownership_status == 1) {
                    ?>
                    <div class="row resi_verification_disable">
                        <div class="col-lg-3 resi_locked_enable resi_shifted_enable resi_locked_shifted_enable">
                            <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_ownership_status') ?></label>
                            <div class="readonlydiv"><?= $model->getOwnershipStatus($applicationResi->resi_ownership_status) ?></div>
                        </div>
                        <div class="col-lg-3 resi_locked_disable resi_shifted_disable resi_locked_shifted_disable">
                            <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_rented_owner_name') ?></label>
                            <div class="readonlydiv"><?= $applicationResi->resi_rented_owner_name ?></div>
                        </div>
                        <div class="col-lg-3 resi_locked_disable resi_shifted_disable resi_locked_shifted_disable">
                            <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_rent_amount') ?></label>
                            <div class="readonlydiv"><?= $applicationResi->resi_rent_amount ?></div>
                        </div>
                    </div>

                <?php }
                ?>
                <div class="row resi_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_available_status') ?></label>

                        <div class="readonlydiv"><?= $model->getAvailableStatus($applicationResi->resi_available_status) ?></div>
                    </div>
                    <div class="col-lg-3 resi_locked_disable resi_shifted_disable resi_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_home_area') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_home_area ?></div>
                    </div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_disable resi_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_stay_years') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_stay_years ?></div>
                    </div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_disable resi_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_total_family_members') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_total_family_members ?></div>
                    </div>
                    <div class="col-lg-3 resi_locked_enable resi_shifted_disable resi_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_working_members') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_working_members ?></div>
                    </div>

                </div>
                <div class="row resi_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_locality') ?></label>
                        <div class="readonlydiv"><?= $model->getResiLocality($applicationResi->resi_locality) ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_locality_text') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_locality_text ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_landmark_1') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_landmark_1 ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_landmark_2') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_landmark_2 ?></div>
                    </div> 
                </div>

                <div class="row resi_verification_disable">
                    <div class="col-lg-9">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_structure') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_structure ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label>Market Feedback</label>
                        <div class="readonlydiv"><?= ($applicationResi->resi_market_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                    </div>                           
                </div>

                <div class="row resi_verification_enable">
                    <div class="col-lg-3">
                        <label>Reachable Remark</label>
                        <div class="col-lg-9"><?= \yii\bootstrap\Html::textArea('resi_not_reachable_remarks', $applicationResi->resi_not_reachable_remarks, ['maxlength' => true, 'readonly' => 'readonly']) ?></div>
                    </div>
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

                <div class="row resi_verification_disable">
                    <div class="col-lg-9">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResi->getAttributeLabel('resi_remarks') ?></label>
                        <div class="readonlydiv"><?= $applicationResi->resi_remarks ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label>Status</label>
                        <div class="readonlydiv"><?= ($applicationResi->resi_status == 0) ? 'Positive' : (($applicationResi->resi_status == 1) ? 'Negative' : 'Credit Refer') ?></div>
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
                <div class="row">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_is_reachable') ?></label>
                        <div class="readonlydiv"><?= ($applicationBusi->busi_is_reachable == 0) ? 'Yes' : 'No' ?></div>
                    </div>
                </div>
                <div class="row busi_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_tpc_neighbor_1') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_tpc_neighbor_1 ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_tpc_neighbor_2') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_tpc_neighbor_2 ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_company_name_board') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_company_name_board ?></div>
                    </div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_enable busi_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_met_person') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_met_person ?></div>
                    </div>
                </div>

                <div class="row busi_verification_disable busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_designation') ?></label>
                        <div class="readonlydiv"><?= $model->getDesignation($applicationBusi->busi_designation) ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_designation_others') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_designation_others; ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_nature_of_business') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_nature_of_business ?></div>
                    </div>                            
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_years_in_business') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_years_in_business ?></div>
                    </div>
                </div>

                <div class="row busi_verification_disable">                    
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_type_of_business') ?></label>
                        <div class="readonlydiv"><?= $model->getBusiType($applicationBusi->busi_type_of_business) ?></div>
                    </div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_locality') ?></label>
                        <div class="readonlydiv"><?= $model->getBusiLocality($applicationBusi->busi_locality) ?></div>
                    </div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_ownership_status') ?></label>
                        <div class="readonlydiv"><?= $model->getOwnershipStatus($applicationBusi->busi_ownership_status) ?></div>
                    </div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_ownership_status_text') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_ownership_status_text ?></div>
                    </div>                      
                </div>
                <?php if ($applicationBusi->busi_ownership_status == 1) {
                    ?>
                    <div class="row busi_verification_disable busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                        <div class="col-lg-3">
                            <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_rented_owner_name') ?></label>
                            <div class="readonlydiv"><?= $applicationBusi->busi_rented_owner_name ?></div>
                        </div>
                        <div class="col-lg-3">
                            <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_rent_amount') ?></label>
                            <div class="readonlydiv"><?= $applicationBusi->busi_rent_amount ?></div>
                        </div>
                    </div>
                <?php }
                ?>
                <div class="row busi_verification_disable">                    
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_locality_type') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_locality_type ?></div>
                    </div>      
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_locality_text') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_locality_text ?></div>
                    </div>      
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_available_status') ?></label>
                        <div class="readonlydiv"><?= $model->getAvailableStatus($applicationBusi->busi_available_status) ?></div>
                    </div>      
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_staff_declared') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_staff_declared ?></div>
                    </div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_staff_seen') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_staff_seen ?></div>
                    </div>                            
                    <div class="col-lg-3 busi_locked_disable busi_shifted_disable busi_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_area') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_area ?></div>
                    </div>           
                    <div class="col-lg-3 busi_locked_enable busi_shifted_disable busi_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_reason_for_closed') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_reason_for_closed ?></div>
                    </div>      
                    <div class="col-lg-3 busi_locked_disable busi_shifted_enable busi_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_shifted_tenure') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_shifted_tenure ?></div>
                    </div>  
                </div>

                <div class="row busi_verification_disable">                    
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_landmark_1') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_landmark_1 ?></div>
                    </div>   
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_landmark_2') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_landmark_2 ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label>Activity Seen</label>
                        <div class="readonlydiv"><?= ($applicationBusi->busi_activity_seen == 0) ? 'Yes' : 'No' ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_structure') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_structure ?></div>
                    </div>
                </div>   

                <div class="row busi_verification_enable">                            
                    <div class="col-lg-6">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_not_reachable_remarks') ?></label>
                        <div class="col-lg-9"><?= \yii\bootstrap\Html::textArea('busi_not_reachable_remarks', $applicationBusi->busi_not_reachable_remarks, ['maxlength' => true, 'readonly' => 'readonly']) ?></div>
                    </div>
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
                        <div class="readonlydiv"><?= ($applicationBusi->busi_status == 0) ? 'Positive' : (($applicationBusi->busi_status == 1) ? 'Negative' : 'Credit Refer') ?></div>
                    </div>
                    <div class="col-lg-9">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBusi->getAttributeLabel('busi_remarks') ?></label>
                        <div class="readonlydiv"><?= $applicationBusi->busi_remarks ?></div>
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
                <?= $model->verificationStatus($model->id, 3); ?>
            </h4>
        </div>
        <div id="office_verification" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_is_reachable') ?></label>
                        <div class="readonlydiv"><?= ($applicationOffice->office_is_reachable == 0) ? 'Yes' : 'No' ?></div>
                    </div>
                </div>
                <div class="row office_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_company_name_board') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_company_name_board ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_available_status') ?></label>
                        <div class="readonlydiv"><?= $model->getAvailableStatus($applicationOffice->office_available_status) ?></div>
                    </div>
                    <div class="col-lg-3 office_locked_disable office_shifted_enable office_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_met_person') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_met_person ?></div>
                    </div>
                    <div class="col-lg-3 office_locked_disable office_shifted_disable office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_met_person_designation') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_met_person_designation ?></div>
                    </div>

                </div>

                <div class="row office_verification_disable">
                    <div class="col-lg-3 office_locked_disable office_shifted_disable office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_designation') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_designation ?></div>
                    </div>
                    <div class="col-lg-3 office_locked_disable office_shifted_disable office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_department') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_department ?></div>
                    </div>
                    <div class="col-lg-3 office_locked_disable office_shifted_disable office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_nature_of_company') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_nature_of_company ?></div>
                    </div>
                    <div class="col-lg-3 office_locked_disable office_shifted_disable office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_employment_years') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_employment_years ?></div>
                    </div>

                </div>
                <div class="row office_verification_disable">
                    <div class="col-lg-3 office_locked_disable office_shifted_disable office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_net_salary_amount') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_net_salary_amount ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_tpc_for_applicant') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_tpc_for_applicant ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_tpc_for_company') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_tpc_for_company ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_landmark') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_landmark ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 busi_locked_enable busi_shifted_disable office_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_reason_for_closed') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_reason_for_closed ?></div>
                    </div>
                    <div class="col-lg-3 busi_locked_disable busi_shifted_enable office_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_shifted_tenure') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_shifted_tenure ?></div>
                    </div>
                    <div class="col-lg-6 office_verification_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_not_reachable_remarks') ?></label>
                        <div class="col-lg-9"><?= \yii\bootstrap\Html::textArea('office_not_reachable_remarks', $applicationOffice->office_not_reachable_remarks, ['maxlength' => true, 'readonly' => 'readonly']) ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 office_verification_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationOffice->getAttributeLabel('office_remarks') ?></label>
                        <div class="readonlydiv"><?= $applicationOffice->office_remarks ?></div>
                    </div>
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
                        <label>Status</label>
                        <div class="readonlydiv"><?= ($applicationOffice->office_status == 0) ? 'Positive' : (($applicationOffice->office_status == 1) ? 'Negative' : 'Credit Refer') ?></div>
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
                <div class="row">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_is_reachable') ?></label>
                        <div class="readonlydiv"><?= ($applicationResiOffice->resi_office_is_reachable == 0) ? 'Yes' : 'No' ?></div>
                    </div>
                </div>
                <div class="row resi_office_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_society_name_plate') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_society_name_plate ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_door_name_plate') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_door_name_plate ?></div>
                    </div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_tpc_neighbor_1') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_tpc_neighbor_1 ?></div>
                    </div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_tpc_neighbor_2') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_tpc_neighbor_2 ?></div>
                    </div>
                </div>
                <div class="row resi_office_verification_disable">

                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_relation') ?></label>
                        <div class="readonlydiv"><?= $model->getRelationName($applicationResiOffice->resi_office_relation) ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_ownership_status') ?></label>
                        <div class="readonlydiv"><?= $model->getOwnershipStatus($applicationResiOffice->resi_office_ownership_status) ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_ownership_status_text') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_ownership_status_text ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_available_status') ?></label>
                        <div class="readonlydiv"><?= $model->getAvailableStatus($applicationResiOffice->resi_office_available_status) ?></div>
                    </div>

                </div>
                <?php if ($applicationResiOffice->resi_office_ownership_status == 1) {
                    ?>
                    <div class="row resi_office_verification_disable">
                        <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable">
                            <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_rented_owner_name') ?></label>
                            <div class="readonlydiv"><?= $applicationResiOffice->resi_office_rented_owner_name ?></div>
                        </div>
                        <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable">
                            <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_rent_amount') ?></label>
                            <div class="readonlydiv"><?= $applicationResiOffice->resi_office_rent_amount ?></div>
                        </div>
                    </div>
                <?php }
                ?>
                <div class="row resi_office_verification_disable">
                    <div class="col-lg-3 resi_office_locked_enable resi_office_shifted_disable resi_office_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_reason_for_closed') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_reason_for_closed ?></div>
                    </div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_enable resi_office_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_shifted_tenure') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_shifted_tenure ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_available_status') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_available_status ?></div>
                    </div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_home_area') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_home_area ?></div>
                    </div>
                </div>
                <div class="row resi_office_verification_disable">

                    <div class="col-lg-3 resi_office_locked_enable resi_office_shifted_disable resi_office_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_stay_years') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_stay_years ?></div>
                    </div>
                    <div class="col-lg-3 resi_office_locked_enable resi_office_shifted_disable resi_office_locked_shifted_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_total_family_members') ?></label>
                        <div class="readonlydiv"><?= $model->getRelationName($applicationResiOffice->resi_office_total_family_members) ?></div>
                    </div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_working_members') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_working_members ?></div>
                    </div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_company_name_board') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_company_name_board ?></div>
                    </div>
                </div>
                <div class="row resi_office_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_designation') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_designation ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_met_person') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_met_person ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_met_person_designation') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_met_person_designation ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_department') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_department ?></div>
                    </div>
                </div>
                <div class="row resi_office_verification_disable">
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_nature_of_company') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_nature_of_company ?></div>
                    </div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_employment_years') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_employment_years ?></div>
                    </div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_net_salary_amount') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_net_salary_amount ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_tpc_for_applicant') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_tpc_for_applicant ?></div>
                    </div>
                </div>
                <div class="row resi_office_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_tpc_for_company') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_tpc_for_company ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_locality') ?></label>
                        <div class="readonlydiv"><?= $model->getResiLocality($applicationResiOffice->resi_office_locality) ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_locality_text') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_locality_text ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_landmark_1') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_landmark_1 ?></div>
                    </div>
                </div>                        
                <div class="row resi_office_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_landmark_2') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_landmark_2 ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_structure') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_structure ?></div>
                    </div>
                    <div class="col-lg-3 resi_office_locked_disable resi_office_shifted_disable resi_office_locked_shifted_disable"> 
                        <label>Market Feedback</label>
                        <div class="readonlydiv"><?= ($applicationResiOffice->resi_office_market_feedback == 0) ? 'Positive' : 'Negative' ?></div>
                    </div>
                    <div class="col-lg-3">
                    </div>
                </div>
                <div class="row resi_office_verification_enable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_not_reachable_remarks') ?></label>
                        <div class="col-lg-9"><?= \yii\bootstrap\Html::textArea('resi_office_not_reachable_remarks', $applicationResiOffice->resi_office_not_reachable_remarks, ['maxlength' => true, 'readonly' => 'readonly']) ?></div>
                    </div>
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
                <div class="row resi_office_verification_disable">
                    <div class="col-lg-9">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationResiOffice->getAttributeLabel('resi_office_remarks') ?></label>
                        <div class="readonlydiv"><?= $applicationResiOffice->resi_office_remarks ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label>Status</label>
                        <div class="readonlydiv"><?= ($applicationResiOffice->resi_office_status == 0) ? 'Positive' : (($applicationResiOffice->resi_office_status == 1) ? 'Negative' : 'Credit Refer') ?></div>
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
                <div class="row">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_is_reachable') ?></label>
                        <div class="readonlydiv"><?= ($applicationBuilderProfile->builder_profile_is_reachable == 0) ? 'Yes' : 'No' ?></div>
                    </div> 
                </div>
                <div class="row builder_profile_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_company_name_board') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_company_name_board ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_met_person') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_met_person ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_met_person_designation') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_met_person_designation ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_exsistence') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_exsistence ?></div>
                    </div>
                </div>                    
                <div class="row builder_profile_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_current_projects') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_current_projects ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_previous_projects') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_previous_projects ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_staff') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_staff ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_area') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_area ?></div>
                    </div>
                </div>
                <div class="row builder_profile_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_type_of_office') ?></label>
                        <div class="readonlydiv"><?= $model->getOfficeType($applicationBuilderProfile->builder_profile_type_of_office) ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_tpc_neighbor_1') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_tpc_neighbor_1 ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_tpc_neighbor_2') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_tpc_neighbor_2 ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_landmark_1') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_landmark_1 ?></div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-3 builder_profile_verification_enable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_not_reachable_remarks') ?></label>
                        <div class="col-lg-9"><?= \yii\bootstrap\Html::textArea('builder_profile_not_reachable_remarks', $applicationBuilderProfile->builder_profile_not_reachable_remarks, ['maxlength' => true, 'readonly' => 'readonly']) ?></div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-lg-3 builder_profile_verification_disable">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationBuilderProfile->getAttributeLabel('builder_profile_landmark_2') ?></label>
                        <div class="readonlydiv"><?= $applicationBuilderProfile->builder_profile_landmark_2 ?></div>
                    </div>
                    <div class="col-lg-3 builder_profile_verification_disable">
                    </div>
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
                <div class="row">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_is_reachable') ?></label>
                        <div class="readonlydiv"><?= ($applicationPropertyApf->property_apf_is_reachable == 0) ? 'Yes' : 'No' ?></div>
                    </div>
                </div>
                <div class="row property_apf_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_met_person') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_met_person ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_met_person_designation') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_met_person_designation ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_property_status') ?></label>
                        <div class="readonlydiv"><?= $model->getPropertyStatus($applicationPropertyApf->property_apf_property_status) ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_no_of_workers') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_no_of_workers ?></div>
                    </div>
                </div>
                <div class="row property_apf_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_mode_of_payment') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_mode_of_payment ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_construction_stock') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_construction_stock ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_total_flats') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_total_flats ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_how_many_sold') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_how_many_sold ?></div>
                    </div>
                </div>
                <div class="row property_apf_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_total_shops') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_total_shops ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_area') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_area ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_work_completed') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_work_completed ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_possession') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_possession ?></div>
                    </div>
                </div>
                <div class="row property_apf_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_apf') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_apf ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_delay_in_work') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_delay_in_work ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_tpc') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_tpc ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_landmark') ?></label>
                        <div class="readonlydiv"><?= $applicationPropertyApf->property_apf_landmark ?></div>
                    </div>
                </div>
                <div class="row property_apf_verification_enable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationPropertyApf->getAttributeLabel('property_apf_not_reachable_remarks') ?></label>
                        <div class="col-lg-9"><?= \yii\bootstrap\Html::textArea('property_apf_not_reachable_remarks', $applicationPropertyApf->property_apf_not_reachable_remarks, ['maxlength' => true, 'readonly' => 'readonly']) ?></div>
                    </div>
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
                <div class="row">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_is_reachable') ?></label>
                        <div class="readonlydiv"><?= ($applicationIndivProperty->indiv_property_is_reachable == 0) ? 'Yes' : 'No' ?></div>
                    </div>
                </div>
                <div class="row indiv_property_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_met_person') ?></label>
                        <div class="readonlydiv"><?= $applicationIndivProperty->indiv_property_met_person ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_met_person_designation') ?></label>
                        <div class="readonlydiv"><?= $applicationIndivProperty->indiv_property_met_person_designation ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_property_confirmed') ?></label>
                        <div class="readonlydiv"><?= $applicationIndivProperty->indiv_property_property_confirmed ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_previous_owner') ?></label>
                        <div class="readonlydiv"><?= $applicationIndivProperty->indiv_property_previous_owner ?></div>
                    </div>
                </div>
                <div class="row indiv_property_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_property_type') ?></label>
                        <div class="readonlydiv"><?= $model->getPropertyType($applicationIndivProperty->indiv_property_property_type) ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_area') ?></label>
                        <div class="readonlydiv"><?= $applicationIndivProperty->indiv_property_area ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_approx_market_value') ?></label>
                        <div class="readonlydiv"><?= $applicationIndivProperty->indiv_property_approx_market_value ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_society_name_plate') ?></label>
                        <div class="readonlydiv"><?= $applicationIndivProperty->indiv_property_society_name_plate ?></div>
                    </div>
                </div>
                <div class="row indiv_property_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_door_name_plate') ?></label>
                        <div class="readonlydiv"><?= $applicationIndivProperty->indiv_property_door_name_plate ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_tpc') ?></label>
                        <div class="readonlydiv"><?= $applicationIndivProperty->indiv_property_tpc ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_landmark') ?></label>
                        <div class="readonlydiv"><?= $applicationIndivProperty->indiv_property_landmark ?></div>
                    </div>
                    <div class="col-lg-3">
                    </div>
                </div>
                <div class="row indiv_property_verification_enable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationIndivProperty->getAttributeLabel('indiv_property_not_reachable_remarks') ?></label>
                        <div class="col-lg-9"><?= \yii\bootstrap\Html::textArea('indiv_property_not_reachable_remarks', $applicationIndivProperty->indiv_property_not_reachable_remarks, ['maxlength' => true, 'readonly' => 'readonly']) ?></div>
                    </div>
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
                <div class="row">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_is_reachable') ?></label>
                        <div class="readonlydiv"><?= ($applicationNocSoc->noc_soc_is_reachable == 0) ? 'Yes' : 'No' ?></div>
                    </div>
                </div>
                <div class="row noc_soc_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_met_person') ?></label>
                        <div class="readonlydiv"><?= $applicationNocSoc->noc_soc_met_person ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_met_person_designation') ?></label>
                        <div class="readonlydiv"><?= $applicationNocSoc->noc_soc_met_person_designation ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_signature_done_by') ?></label>
                        <div class="readonlydiv"><?= $applicationNocSoc->noc_soc_signature_done_by ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_bldg_reg_number') ?></label>
                        <div class="readonlydiv"><?= $applicationNocSoc->noc_soc_bldg_reg_number ?></div>
                    </div>
                </div>                        
                <div class="row noc_soc_verification_disable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_society_type') ?></label>
                        <div class="readonlydiv"><?= $model->getSocietyType($applicationNocSoc->noc_soc_society_type) ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_previous_owner') ?></label>
                        <div class="readonlydiv"><?= $applicationNocSoc->noc_soc_previous_owner ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_chairman_name') ?></label>
                        <div class="readonlydiv"><?= $applicationNocSoc->noc_soc_chairman_name ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_secretary_name') ?></label>
                        <div class="readonlydiv"><?= $applicationNocSoc->noc_soc_secretary_name ?></div>
                    </div>
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_tresurer_name') ?></label>
                        <div class="readonlydiv"><?= $applicationNocSoc->noc_soc_tresurer_name ?></div>
                    </div>
                </div>
                <div class="row noc_soc_verification_enable">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocSoc->getAttributeLabel('noc_soc_not_reachable_remarks') ?></label>
                        <div class="col-lg-9"><?= \yii\bootstrap\Html::textArea('noc_soc_not_reachable_remarks', $applicationNocSoc->noc_soc_not_reachable_remarks, ['maxlength' => true, 'readonly' => 'readonly']) ?></div>
                    </div>
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
                <div class="row">
                    <div class="col-lg-3">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocBusi->getAttributeLabel('noc_is_reachable') ?></label>
                        <div class="readonlydiv"><?= ($applicationNocBusi->noc_is_reachable == 0) ? 'Yes' : 'No' ?></div>
                    </div>
                </div>
                <div class="row noc_verification_disable">
                    <div class="col-lg-12">
                        <?php echo $nocTable; ?>
                    </div>
                </div>
                <div class="row noc_verification_enable">
                    <div class="col-lg-9">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocBusi->getAttributeLabel('noc_not_reachable_remarks') ?></label>
                        <div class="col-lg-9 noc_verification_enable"><?= \yii\bootstrap\Html::textArea('noc_not_reachable_remarks', $applicationNocBusi->noc_not_reachable_remarks, ['maxlength' => true, 'readonly' => 'readonly']) ?></div>
                    </div>
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

                <div class="row noc_verification_disable">
                    <div class="col-lg-9">
                        <label class="control-label" for="name" style=" margin-top: 0px;"><?= $applicationNocBusi->getAttributeLabel('noc_structure') ?></label>
                        <div class="readonlydiv"><?= $applicationNocBusi->noc_structure ?></div>
                    </div>
                    <div class="col-lg-3 noc_verification_disable">
                        <label>Status</label>
                        <div class="readonlydiv"><?= ($applicationNocBusi->noc_status == 0) ? 'Positive' : (($applicationNocBusi->noc_status == 1) ? 'Negative' : 'Credit Refer') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

<script src="https://maps.google.com/maps/api/js?key=<?= Yii::$app->params['GOOGLE_MAPS_API_KEY_POPUP'] ?>"></script>

<?php
$this->registerJs("
        $(function(){            
            $(document).on('click', '.pop_kyc', function() {
                var path = $(this).find('img').attr('src');
                var new_path = path.replace('/thumbs', '');
                $('.imagepreview').attr('src', new_path);
                $('#imagemodal').modal('show');   
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
        });    
");
?>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        var resiChecked = '<?php echo $applicationResi->resi_is_reachable; ?>'
        autoShowHide(resiChecked, "resi");
        var busiChecked = '<?php echo $applicationBusi->busi_is_reachable; ?>'
        autoShowHide(busiChecked, "busi");
        var resiChecked = '<?php echo $applicationOffice->office_is_reachable; ?>'
        autoShowHide(resiChecked, "office");
        var resiChecked = '<?php echo $applicationResiOffice->resi_office_is_reachable; ?>'
        autoShowHide(resiChecked, "resi_office");
        var resiChecked = '<?php echo $applicationBuilderProfile->builder_profile_is_reachable; ?>'
        autoShowHide(resiChecked, "builder_profile");
        var resiChecked = '<?php echo $applicationPropertyApf->property_apf_is_reachable; ?>'
        autoShowHide(resiChecked, "property_apf");
        var resiChecked = '<?php echo $applicationIndivProperty->indiv_property_is_reachable; ?>'
        autoShowHide(resiChecked, "indiv_property");
        var resiChecked = '<?php echo $applicationNocSoc->noc_soc_is_reachable; ?>'
        autoShowHide(resiChecked, "noc_soc");
        var resiChecked = '<?php echo $applicationNocBusi->noc_is_reachable; ?>'
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

        var resiChecked = '<?php echo $applicationResi->resi_available_status; ?>'
        availableHide("resi", resiChecked);
        var busiChecked = '<?php echo $applicationBusi->busi_available_status; ?>'
        availableHide("busi", busiChecked);
        var officeChecked = '<?php echo $applicationOffice->office_available_status; ?>'
        availableHide("office", officeChecked);
        var resiChecked = '<?php echo $applicationResiOffice->resi_office_available_status; ?>'
        availableHide("resi_office", resiChecked);

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