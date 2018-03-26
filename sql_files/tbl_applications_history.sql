
DROP TABLE IF EXISTS `tbl_applications_history`;
CREATE TABLE `tbl_applications_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `previous_id` int(10) NOT NULL,
  `application_id` varchar(150) DEFAULT NULL,
  `profile_id` int(11) NOT NULL,
  `first_name` varchar(150) DEFAULT NULL,
  `middle_name` varchar(150) DEFAULT NULL,
  `last_name` varchar(150) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `aadhaar_card_no` varchar(150) DEFAULT NULL,
  `pan_card_no` varchar(150) DEFAULT NULL,
  `mobile_no` varchar(150) DEFAULT NULL,
  `alternate_contact_no` varchar(50) DEFAULT NULL,
  `case_id` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `institute_id` int(11) DEFAULT NULL,
  `loan_type_id` int(11) DEFAULT NULL,
  `applicant_type` tinyint(1) DEFAULT '1' COMMENT '1 : Salaried, 2 : Self-employed',
  `profile_type` tinyint(1) DEFAULT '1' COMMENT '1 : Resi, 2 : Office, 3 : Resi/Office',
  `area_id` int(11) DEFAULT NULL,
  `date_of_application` date DEFAULT NULL,
  `resi_society_name_plate` varchar(150) DEFAULT NULL,
  `resi_door_name_plate` varchar(150) DEFAULT NULL,
  `resi_tpc_neighbor_1` varchar(150) DEFAULT NULL,
  `resi_tpc_neighbor_2` varchar(150) DEFAULT NULL,
  `resi_met_person` varchar(150) DEFAULT NULL,
  `resi_relation` varchar(150) DEFAULT NULL,
  `resi_home_area` int(6) DEFAULT NULL,
  `resi_ownership_status` tinyint(1) DEFAULT '1' COMMENT '1 : Rented, 2 : Owned, 3 : Parental, 4 : Other',
  `resi_ownership_status_text` varchar(150) DEFAULT NULL,
  `resi_stay_years` int(4) DEFAULT NULL,
  `resi_total_family_members` int(3) DEFAULT NULL,
  `resi_working_members` int(3) DEFAULT NULL,
  `resi_locality` tinyint(1) DEFAULT '1' COMMENT '1 : Chawl , 2 : Residential, 3 : Bunglow, 4 : Others',
  `resi_locality_text` varchar(150) DEFAULT NULL,
  `resi_landmark_1` varchar(150) DEFAULT NULL,
  `resi_landmark_2` varchar(150) DEFAULT NULL,
  `resi_structure` varchar(1000) DEFAULT NULL,
  `resi_market_feedback` tinyint(1) DEFAULT '0' COMMENT '0 : Positive, 1 : Negative',
  `resi_remarks` varchar(1000) DEFAULT NULL,
  `resi_status` tinyint(1) DEFAULT '0' COMMENT '0 : Positive, 1 : Negative, 2 : Credit Refer',
  `resi_is_reachable` tinyint(1) DEFAULT '0' COMMENT '0 : Reachable, 1 : Not-reachable',
  `resi_not_reachable_remarks` text,
  `busi_tpc_neighbor_1` varchar(150) DEFAULT NULL,
  `busi_tpc_neighbor_2` varchar(150) DEFAULT NULL,
  `busi_company_name_board` varchar(150) DEFAULT NULL,
  `busi_met_person` varchar(150) DEFAULT NULL,
  `busi_designation` varchar(150) DEFAULT NULL,
  `busi_designation_others` varchar(100) DEFAULT NULL,
  `busi_nature_of_business` varchar(150) DEFAULT NULL,
  `busi_staff_declared` int(11) DEFAULT NULL,
  `busi_staff_seen` int(11) DEFAULT NULL,
  `busi_years_in_business` int(11) DEFAULT NULL,
  `busi_type_of_business` tinyint(1) DEFAULT '1' COMMENT '1 : DIRECTORSHIP, 2 : PROPRIETOR, 3 : PARTNERSHIP',
  `busi_ownership_status` tinyint(1) DEFAULT '1' COMMENT '1 : Rented, 2 : Owned, 3 : Parental, 4 : Other',
  `busi_ownership_status_text` varchar(150) DEFAULT NULL,
  `busi_area` int(11) DEFAULT NULL,
  `busi_locality` tinyint(1) DEFAULT '1' COMMENT '1 : Gala, 2 : Shopline, 3 : Compound, 4 : Resi, 5 : Commercial, 6 : Other',
  `busi_locality_text` varchar(150) DEFAULT NULL,
  `busi_landmark_1` varchar(150) DEFAULT NULL,
  `busi_landmark_2` varchar(150) DEFAULT NULL,
  `busi_activity_seen` tinyint(1) DEFAULT '0' COMMENT '0 : Yes, 1 : No',
  `busi_structure` varchar(1000) DEFAULT NULL,
  `busi_remarks` varchar(1000) DEFAULT NULL,
  `busi_status` tinyint(1) DEFAULT '0' COMMENT '0 : Positive, 1 : Negative, 2 : Credit Refer',
  `busi_is_reachable` tinyint(1) DEFAULT '0' COMMENT '0 : Reachable, 1 : Not-reachable',
  `busi_not_reachable_remarks` text,
  `office_company_name_board` varchar(150) DEFAULT NULL,
  `office_designation` varchar(150) DEFAULT NULL,
  `office_met_person` varchar(150) DEFAULT NULL,
  `office_met_person_designation` varchar(150) DEFAULT NULL,
  `office_department` varchar(150) DEFAULT NULL,
  `office_nature_of_company` varchar(150) DEFAULT NULL,
  `office_employment_years` int(4) DEFAULT NULL,
  `office_net_salary_amount` varchar(150) DEFAULT NULL,
  `office_tpc_for_applicant` varchar(150) DEFAULT NULL,
  `office_tpc_for_company` varchar(150) DEFAULT NULL,
  `office_landmark` varchar(150) DEFAULT NULL,
  `office_structure` varchar(1000) DEFAULT NULL,
  `office_remarks` varchar(1000) DEFAULT NULL,
  `office_status` tinyint(1) DEFAULT '0' COMMENT '0 : Positive, 1 : Negative, 2 : Credit Refer',
  `office_is_reachable` tinyint(1) DEFAULT '0' COMMENT '0 : Reachable, 1 : Not-reachable',
  `office_not_reachable_remarks` text,
  `financial_pan_card_no` varchar(150) DEFAULT NULL,
  `financial_name` varchar(150) DEFAULT NULL,
  `financial_assessment_year` date DEFAULT NULL,
  `financial_date_of_filing` date DEFAULT NULL,
  `financial_sales` varchar(150) DEFAULT NULL,
  `financial_share_capital` varchar(150) DEFAULT NULL,
  `financial_net_profit` varchar(150) DEFAULT NULL,
  `financial_debtors` varchar(150) DEFAULT NULL,
  `financial_creditors` varchar(150) DEFAULT NULL,
  `financial_total_loans` varchar(150) DEFAULT NULL,
  `financial_depriciation` varchar(150) DEFAULT NULL,
  `bank_bank_name` varchar(150) DEFAULT NULL,
  `bank_account_holder` varchar(150) DEFAULT NULL,
  `bank_account_number` varchar(150) DEFAULT NULL,
  `bank_dated_transaction` date DEFAULT NULL,
  `bank_pan_card_no` varchar(150) DEFAULT NULL,
  `bank_current_balance` varchar(150) DEFAULT NULL,
  `bank_account_opening_date` date DEFAULT NULL,
  `bank_date_of_birth` date DEFAULT NULL,
  `bank_address` varchar(1000) DEFAULT NULL,
  `bank_narration` varchar(1000) DEFAULT NULL,
  `noc_structure` varchar(1000) DEFAULT NULL,
  `noc_status` varchar(45) DEFAULT '0' COMMENT '0 : Positive, 1 : Negative, 2 : Credit Refer',
  `noc_is_reachable` tinyint(1) DEFAULT '0' COMMENT '0 : Reachable, 1 : Not-reachable',
  `noc_not_reachable_remarks` text,
  `resi_office_society_name_plate` varchar(150) DEFAULT NULL,
  `resi_office_door_name_plate` varchar(150) DEFAULT NULL,
  `resi_office_tpc_neighbor_1` varchar(150) DEFAULT NULL,
  `resi_office_tpc_neighbor_2` varchar(150) DEFAULT NULL,
  `resi_office_met_person` varchar(150) DEFAULT NULL,
  `resi_office_met_person_designation` varchar(150) DEFAULT NULL,
  `resi_office_relation` varchar(150) DEFAULT NULL,
  `resi_office_home_area` int(6) DEFAULT NULL,
  `resi_office_ownership_status` tinyint(1) DEFAULT '1' COMMENT '1 : Rented, 2 : Owned, 3 : Parental, 4 : Other',
  `resi_office_ownership_status_text` varchar(150) DEFAULT NULL,
  `resi_office_stay_years` int(4) DEFAULT NULL,
  `resi_office_total_family_members` int(3) DEFAULT NULL,
  `resi_office_working_members` int(3) DEFAULT NULL,
  `resi_office_company_name_board` varchar(150) DEFAULT NULL,
  `resi_office_designation` varchar(150) DEFAULT NULL,
  `resi_office_department` varchar(150) DEFAULT NULL,
  `resi_office_nature_of_company` varchar(150) DEFAULT NULL,
  `resi_office_employment_years` int(4) DEFAULT NULL,
  `resi_office_net_salary_amount` varchar(150) DEFAULT NULL,
  `resi_office_tpc_for_applicant` varchar(150) DEFAULT NULL,
  `resi_office_tpc_for_company` varchar(150) DEFAULT NULL,
  `resi_office_locality` tinyint(1) DEFAULT '1' COMMENT '1 : Chawl , 2 : Residential, 3 : Bunglow, 4 : Others',
  `resi_office_locality_text` varchar(150) DEFAULT NULL,
  `resi_office_landmark_1` varchar(150) DEFAULT NULL,
  `resi_office_landmark_2` varchar(150) DEFAULT NULL,
  `resi_office_structure` varchar(1000) DEFAULT NULL,
  `resi_office_market_feedback` tinyint(1) DEFAULT '0' COMMENT '0 : Positive, 1 : Negative',
  `resi_office_remarks` varchar(1000) DEFAULT NULL,
  `resi_office_status` tinyint(1) DEFAULT '0' COMMENT '0 : Positive, 1 : Negative, 2 : Credit Refer',
  `resi_office_is_reachable` tinyint(1) DEFAULT '0' COMMENT '0 : Reachable, 1 : Not-reachable',
  `resi_office_not_reachable_remarks` text,
  `builder_profile_company_name_board` varchar(150) DEFAULT NULL,
  `builder_profile_met_person` varchar(150) DEFAULT NULL,
  `builder_profile_met_person_designation` varchar(150) DEFAULT NULL,
  `builder_profile_exsistence` int(11) DEFAULT NULL,
  `builder_profile_current_projects` varchar(1000) DEFAULT NULL,
  `builder_profile_previous_projects` varchar(1000) DEFAULT NULL,
  `builder_profile_staff` int(11) DEFAULT NULL,
  `builder_profile_area` int(6) DEFAULT NULL,
  `builder_profile_type_of_office` tinyint(1) DEFAULT NULL COMMENT '1 : Shopline, 2 : Commercial, 3 : Independent, 4 : Residential',
  `builder_profile_tpc_neighbor_1` varchar(150) DEFAULT NULL,
  `builder_profile_tpc_neighbor_2` varchar(150) DEFAULT NULL,
  `builder_profile_landmark_1` varchar(150) DEFAULT NULL,
  `builder_profile_landmark_2` varchar(150) DEFAULT NULL,
  `builder_profile_is_reachable` tinyint(1) DEFAULT '0' COMMENT '0 : Reachable, 1 : Not-reachable',
  `builder_profile_not_reachable_remarks` text,
  `property_apf_met_person` varchar(150) DEFAULT NULL,
  `property_apf_met_person_designation` varchar(150) DEFAULT NULL,
  `property_apf_property_status` tinyint(1) DEFAULT NULL COMMENT '1 : Freshland, 2 : Redevelopment',
  `property_apf_no_of_workers` int(11) DEFAULT NULL,
  `property_apf_mode_of_payment` varchar(150) DEFAULT NULL,
  `property_apf_construction_stock` varchar(150) DEFAULT NULL,
  `property_apf_total_flats` int(11) DEFAULT NULL,
  `property_apf_how_many_sold` int(11) DEFAULT NULL,
  `property_apf_total_shops` int(11) DEFAULT NULL,
  `property_apf_area` int(6) DEFAULT NULL,
  `property_apf_work_completed` varchar(150) DEFAULT NULL,
  `property_apf_possession` varchar(150) DEFAULT NULL,
  `property_apf_apf` varchar(150) DEFAULT NULL,
  `property_apf_delay_in_work` varchar(150) DEFAULT NULL,
  `property_apf_tpc` varchar(150) DEFAULT NULL,
  `property_apf_landmark` varchar(150) DEFAULT NULL,
  `property_apf_is_reachable` tinyint(1) DEFAULT '0' COMMENT '0 : Reachable, 1 : Not-reachable',
  `property_apf_not_reachable_remarks` text,
  `indiv_property_met_person` varchar(150) DEFAULT NULL,
  `indiv_property_met_person_designation` varchar(150) DEFAULT NULL,
  `indiv_property_property_confirmed` varchar(150) DEFAULT NULL,
  `indiv_property_previous_owner` varchar(150) DEFAULT NULL,
  `indiv_property_property_type` tinyint(1) DEFAULT NULL COMMENT '1 : Fresh Property, 2 : Old Sold Out',
  `indiv_property_area` int(6) DEFAULT NULL,
  `indiv_property_approx_market_value` varchar(150) DEFAULT NULL,
  `indiv_property_society_name_plate` varchar(150) DEFAULT NULL,
  `indiv_property_door_name_plate` varchar(150) DEFAULT NULL,
  `indiv_property_tpc` varchar(150) DEFAULT NULL,
  `indiv_property_landmark` varchar(150) DEFAULT NULL,
  `indiv_property_is_reachable` tinyint(1) DEFAULT '0' COMMENT '0 : Reachable, 1 : Not-reachable',
  `indiv_property_not_reachable_remarks` text,
  `noc_soc_met_person` varchar(150) DEFAULT NULL,
  `noc_soc_met_person_designation` varchar(150) DEFAULT NULL,
  `noc_soc_signature_done_by` varchar(150) DEFAULT NULL,
  `noc_soc_bldg_reg_number` varchar(150) DEFAULT NULL,
  `noc_soc_society_type` tinyint(1) DEFAULT '1' COMMENT '1 : Housing, 2 : Mhada, 3 : Chawl Society',
  `noc_soc_previous_owner` varchar(150) DEFAULT NULL,
  `noc_soc_is_reachable` tinyint(1) DEFAULT '0' COMMENT '0 : Reachable, 1 : Not-reachable',
  `noc_soc_not_reachable_remarks` text,
  `application_status` tinyint(1) DEFAULT '1' COMMENT '1 : New, 2: Inprogress, 3: Completed',
  `resi_address` varchar(1000) DEFAULT NULL,
  `resi_address_verification` tinyint(1) DEFAULT '0' COMMENT '0 : Do not Send for Verification , 1: Send for Verification',
  `resi_address_pincode` varchar(10) DEFAULT NULL,
  `resi_address_trigger` varchar(1000) DEFAULT NULL,
  `resi_address_lat` varchar(45) DEFAULT NULL,
  `resi_address_long` varchar(45) DEFAULT NULL,
  `office_address` varchar(1000) DEFAULT NULL,
  `office_address_verification` tinyint(1) DEFAULT '0' COMMENT '0 : Do not Send for Verification , 1: Send for Verification',
  `office_address_pincode` varchar(10) DEFAULT NULL,
  `office_address_trigger` varchar(1000) DEFAULT NULL,
  `office_address_lat` varchar(45) DEFAULT NULL,
  `office_address_long` varchar(45) DEFAULT NULL,
  `busi_address` varchar(1000) DEFAULT NULL,
  `busi_address_verification` tinyint(1) DEFAULT '0' COMMENT '0 : Do not Send for Verification , 1: Send for Verification',
  `busi_address_pincode` varchar(10) DEFAULT NULL,
  `busi_address_trigger` varchar(1000) DEFAULT NULL,
  `busi_address_lat` varchar(45) DEFAULT NULL,
  `busi_address_long` varchar(45) DEFAULT NULL,
  `noc_address` varchar(1000) DEFAULT NULL,
  `noc_address_verification` tinyint(1) DEFAULT '0' COMMENT '0 : Do not Send for Verification , 1: Send for Verification',
  `noc_address_pincode` varchar(10) DEFAULT NULL,
  `noc_address_trigger` varchar(1000) DEFAULT NULL,
  `noc_address_lat` varchar(45) DEFAULT NULL,
  `noc_address_long` varchar(45) DEFAULT NULL,
  `resi_office_address` varchar(1000) DEFAULT NULL,
  `resi_office_address_verification` tinyint(1) DEFAULT '0' COMMENT '0 : Do not Send for Verification , 1: Send for Verification',
  `resi_office_address_pincode` varchar(10) DEFAULT NULL,
  `resi_office_address_trigger` varchar(1000) DEFAULT NULL,
  `resi_office_address_lat` varchar(45) DEFAULT NULL,
  `resi_office_address_long` varchar(45) DEFAULT NULL,
  `builder_profile_address` varchar(1000) DEFAULT NULL,
  `builder_profile_address_verification` tinyint(1) DEFAULT '0' COMMENT '0 : Do not Send for Verification , 1: Send for Verification',
  `builder_profile_address_pincode` varchar(10) DEFAULT NULL,
  `builder_profile_address_trigger` varchar(1000) DEFAULT NULL,
  `builder_profile_address_lat` varchar(45) DEFAULT NULL,
  `builder_profile_address_long` varchar(45) DEFAULT NULL,
  `property_apf_address` varchar(1000) DEFAULT NULL,
  `property_apf_address_verification` tinyint(1) DEFAULT '0' COMMENT '0 : Do not Send for Verification , 1: Send for Verification',
  `property_apf_address_pincode` varchar(10) DEFAULT NULL,
  `property_apf_address_trigger` varchar(1000) DEFAULT NULL,
  `property_apf_address_lat` varchar(45) DEFAULT NULL,
  `property_apf_address_long` varchar(45) DEFAULT NULL,
  `indiv_property_address` varchar(1000) DEFAULT NULL,
  `indiv_property_address_verification` tinyint(1) DEFAULT '0' COMMENT '0 : Do not Send for Verification , 1: Send for Verification',
  `indiv_property_address_pincode` varchar(10) DEFAULT NULL,
  `indiv_property_address_trigger` varchar(1000) DEFAULT NULL,
  `indiv_property_address_lat` varchar(45) DEFAULT NULL,
  `indiv_property_address_long` varchar(45) DEFAULT NULL,
  `noc_soc_address` varchar(1000) DEFAULT NULL,
  `noc_soc_address_verification` tinyint(1) DEFAULT '0' COMMENT '0 : Do not Send for Verification , 1: Send for Verification',
  `noc_soc_address_pincode` varchar(10) DEFAULT NULL,
  `noc_soc_address_trigger` varchar(1000) DEFAULT NULL,
  `noc_soc_address_lat` varchar(45) DEFAULT NULL,
  `noc_soc_address_long` varchar(45) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_on` datetime DEFAULT CURRENT_TIMESTAMP,
  `update_by` int(11) DEFAULT NULL,
  `updated_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_deleted` tinyint(1) DEFAULT '0',
  `company_name` varchar(100) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;