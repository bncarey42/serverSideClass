<form action="survey.php" method="post" id="studentInputForm">
  <input type="text" name="fname" value="First Name" required />
  <input type="text" name="lname" value="Last Name" required />
  <select name="gender" form="studentInputForm" required>
    <option>Please select your gender</option>
    <option value="F">Female</option>
    <option value="M">Male</option>
    <option value="$">Other/Pref. not Disclose</option>
  </select>
  <select name="cohort" form="studentInputForm" required>
    <option>Please select your current cohort</option>
    <option value="F">Freshman</option>
    <option value="S">Sophmore</option>
    <option value="J">Junior</option>
    <option value="G">Senior</option>
    <option value="$">Senior+/Grad/Other</option>
  </select>
  </br>
  <input class="dpt" type="text" name="courseDpt" value="Department code(three letters)" required/>
  <input type="text" name="courseNum" value="Course number(four numbers)" required/>
  <div class="buttons">
    <input type="submit" value="Begin Survey" />
    <input type="reset" />
  </div>
</form>
