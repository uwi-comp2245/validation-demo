<?php
// Process our Form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  dump($_POST);

  // You can use filter_input or filter_var to help you to sanitize and validate
  // user input
  // filter_input - http://php.net/manual/en/function.filter-input.php
  $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
  $telephone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $website = filter_input(INPUT_POST, 'website', FILTER_VALIDATE_URL);

  // Validation
  // Check if 'firstname' is set in the $_POST Super Global
  // isset - http://php.net/isset
  if (!isset($_POST['firstname'])) {
    echo 'First name is empty<br/>';
  }

  // Check if 'lastname' is empty
  // empty - http://php.net/empty
  if (empty($lastname)) {
    echo 'Last name is empty<br/>';
  }

  // Check if telephone number matches the format e.g. 876-999-1234
  // preg_match - http://php.net/preg_match
  if (!preg_match("/^\d{3}-\d{3}-\d{4}$/", $telephone)) {
    echo 'That telephone number is not valid!<br/>';
  }

  // Check if email is valid
  if (!$email) {
    echo 'That email is not valid!<br/>';
  }

  // Check if valid URL
  if (!$website) {
    echo 'That URL is not valid!<br/>';
  }

}


/**
 * Function to help print the contents of a variable in a more readable way.
 */
function dump($value) {
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}
?>
