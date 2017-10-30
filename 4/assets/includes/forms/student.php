<div class="form">
<form action="survey.php" method="post" id="studentInputForm">
  <table>
    <tr>
        <th>  <label for="fname">First Name </label> </th>
        <th><label for="lname">Last Name</label></th>
    </tr>
    <tr>
        <th><input type="text" name="fname" value="<?php check_input($_POST['fname']) ?>" /></th>
        <th><input type="text" name="lname" value="<?php check_input($_POST['lname']) ?>" required /></th>
    </tr>
    <tr>
      <th><label for="gender">Please select your gender</label></th>
      <th><label for="cohort">Please select your current cohort</label></th>
    </tr>
    <tr>
      <th>
        <select name="gender" form="studentInputForm" required>
          <option></option>
          <option value="F">Female</option>
          <option value="M">Male</option>
          <option value="$">Other/Pref. not Disclose</option>
        </select>
      </th>
        <th>
          <select name="cohort" form="studentInputForm" required>
            <option></option>
            <option value="F">Freshman</option>
            <option value="S">Sophmore</option>
            <option value="J">Junior</option>
            <option value="G">Senior</option>
            <option value="$">Senior+/Grad/Other</option>
          </select>
      </th>
    </tr>
    <tr>
      <th><lable for="dpt">Department code(four(4) letters)</lable></th>
        <th><lable for="courseNum">Course number(up to four(4) numbers)</lable></th>
    </tr>
    <tr>
      <th><input class="dpt" type="text" name="courseDpt" value="" required maxlength="4"/></th>
        <th><input type="number" name="courseNum" value="" required maxlength="4"/></th>
    </tr>
  </table>
  <div class="buttons">
    <input type="submit" value="Begin Survey" />
    <input type="reset" />
  </div>
</form>
</div>

<?php
function check_input($input){
  switch ($input) {
    case isset($input):
      return $input;
      break;

    default:
      # code...
      break;
  }
}
?>
