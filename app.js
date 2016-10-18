window.onload = function () {
  var myform = document.querySelector('#myform');

  myform.addEventListener('submit', function (element) {
    console.log('form submitted');
    var validationFailed = false;

    var firstname = document.querySelector('#firstname').value.trim();
    var lastname = document.querySelector('#lastname').value.trim();

    if (isEmpty(firstname) || isEmpty(lastname)) {
      validationFailed = true;
      alert('You must fill in your First and Last Name');
    };

    var telephone = document.querySelector('#telephone').value.trim();
    console.log(telephone);
    if (!isValidTelephoneNumber(telephone)) {
      validationFailed = true;
      alert('Incorrect format for telephone number.');
    };

    var email = document.querySelector('#email').value.trim();
    console.log(email);
    if (!isValidEmail(email)) {
      validationFailed = true;
      alert('Incorrect format for email.');
    };

    if (validationFailed) {
      console.log('Please fix issues in Form submission and try again.');
      element.preventDefault();
    }
  });
};

/**
 * Check if value for a field is empty.
 */
function isEmpty(elementValue) {
  if (elementValue.length == 0) {
    // Or you could check if the value == ""
    console.log('field is empty');
    return true;
  }

  return false;
}

/**
 * Check if a valid telephone number was entered.
 */
function isValidTelephoneNumber(telephoneNumber) {
  return /^\d{3}-\d{3}-\d{4}$/.test(telephoneNumber);
}

/**
 * Check if a valid email address was entered.
 */
function isValidEmail(emailAddress) {
  return /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/.test(emailAddress);
}
