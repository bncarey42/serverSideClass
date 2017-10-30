<form action="survey.php" method="post" id="studentInputForm">
  <label for="fname">First Name</label>
  <label for="lname">Last Name</label>
  <input type="text" name="fname" value="<?php check_input($_POST['fname'] ?>)" required />
  <input type="text" name="lname" value="<?php check_input($_POST['fname'] ?>" required />
<label for="gender">Please select your gender</label>
<label for="cohort">Please select your current cohort</label>
  <select name="gender" form="studentInputForm" required>
    <option value="F">Female</option>
    <option value="M">Male</option>
    <option value="$">Other/Pref. not Disclose</option>
  </select>
  <select name="cohort" form="studentInputForm" required>
    <option value="F">Freshman</option>
    <option value="S">Sophmore</option>
    <option value="J">Junior</option>
    <option value="G">Senior</option>
    <option value="$">Senior+/Grad/Other</option>
  </select>
  </br>
  <lable for="dpt">Department code(three letters)</lable>
  <lable for="courseNum">Course number(four numbers)</lable>
  <input class="dpt" type="text" name="courseDpt" value="" required/>
  <input type="number" name="courseNum" value="" required/>
  <div class="buttons">
    <input type="submit" value="Begin Survey" />
    <input type="reset" />
  </div>
</form>

function check_input($input)
