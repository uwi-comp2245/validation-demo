<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form Validation</title>
    <link rel="stylesheet" href="styles.css" media="screen">
    <script src="app.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Registration Form</h1>
      <form id="myform" action="process.php" method="post">
        <div class="form-field">
          <label for="firstname">First Name <em>(Required)</em></label>
          <input type="text" id="firstname" name="firstname" required>
        </div>
        <div class="form-field">
          <label for="lastname">Last Name <em>(Required)</em></label>
          <input type="text" id="lastname" name="lastname" required>
        </div>
        <div class="form-field">
          <label for="telephone">Telephone # <em>(Required)</em></label>
          <input type="tel" id="telephone" name="telephone" placeholder="e.g. 876-999-1234" required pattern="^\d{3}-\d{3}-\d{4}$" title="876-999-1234">
        </div>
        <div class="form-field">
          <label for="email">Email <em>(Required)</em></label>
          <input type="email" id="email" name="email" placeholder="e.g. firstname.lastname@mymona.uwi.edu" required>
        </div>
        <div class="form-field">
          <label for="website">Website Address:</label>
          <input type="url" id="website" name="website" placeholder="e.g. http://www.mona.uwi.edu">
        </div>
        <button type="submit" name="submitBtn" class="btn">Submit</button>
      </form>
    </div>
  </body>
</html>
