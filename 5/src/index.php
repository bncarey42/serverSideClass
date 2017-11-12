<?php
include(assets/includes/header.php);
if($loggedIn){
  include(userProfile.php);
} else {
  include(login.html);
}
include(assets/includes/footer.php);
?>
