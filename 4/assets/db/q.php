<?php
  $getQuestions = "SELECT QSTNS_QESTION as question FROM cjohnson_qu5773oo.BTC_QUESTIONS";
  $fetchSurveys = "SELECT survey_result.*, student.*, class.*
                FROM cjohnson_qu5773oo.BTC_Surveys survey_results
                JOIN BTC_CLASS_MEMBERS mbrs on survey_results.srvy_cmbr_id = mbrs.cmbr_id
                JOIN BTC_STUDENT student on student.STDNT_STUDENT_ID = mbrs.CMBR_STUDENT_ID
                JOIN BTC_CLASS class on class.CLS_CLASS_ID = mbrs.CMBRS_CLASS_ID";
  $deleteSurvey = "DELETE FROM cjohnson_qu5773oo.BTC_Survey WHERE SRVY_ID = $srvyToDelete";
  $getQuestions = "SELECT QSTNS_ONE,QSTNS_TWO,QSTNS_THREE, QSTNS_FOUR, QSTNS_FIVE FROM cjohnson_qu5773oo.BTC_QUESTIONS";
  $insertStudent = "INSERT INTO cjohnson_qu5773oo.STUDENT (STDNT_STUDENT_ID, STDNT_FIRST_NAME, STDNT_LAST_NAME, STDNT_GENDER, STDNT_COHORT) VALUES '$fname' '$lname' '$course' '$cohort' '$gender'";
?>
