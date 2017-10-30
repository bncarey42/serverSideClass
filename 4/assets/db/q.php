<?php
$getQuestions = "SELECT QSTNS_ONE,QSTNS_TWO,QSTNS_THREE, QSTNS_FOUR, QSTNS_FIVE FROM cjohnson_qu5773oo.BTC_QUESTIONS;";
$getAllSurveys = "SELECT student.*, class.*, survey_result.* 
                FROM cjohnson_qu5773oo.BTC_Surveys survey_results 
                JOIN BTC_CLASS_MEMBERS mbrs on survey_results.srvy_cmbr_id = mbrs.cmbr_id 
                JOIN BTC_STUDENT student on student.STDNT_STUDENT_ID = mbrs.CMBR_STUDENT_ID
                JOIN BTC_CLASS class on class.CLS_CLASS_ID = mbrs.CMBRS_CLASS_ID;";
$deleteSurvey = "DELETE FROM cjohnson_qu5773oo.BTC_Survey WHERE SRVY_ID = $srvyToDelete;";
?>
