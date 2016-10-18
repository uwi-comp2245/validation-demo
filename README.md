# Validation

The code here shows some basic validation using HTML5, JavaScript and PHP.

**Note:** There are much more feature rich validation libraries that you can use, however, the purpose of this code is just to show you how you could do some basic validation on both the client-side and server-side.

## Plain JavaScript Validation

`index.php` will use plain JavaScript to do client-side validation on the form.

JavaScript validation is done in the `app.js` file.

Pay attention to the `trim()`, RegEx `test()` and using the `.length` property.

## HTML5 Client-Side Validation

`html5-validation.php` uses HTML5 elements and attributes to do client-side Validation with JavaScript as a fallback.

Pay special attention to the input `type` attributes e.g. `type=tel` and `type=url`. There are other input field types that can do some basic validation. Also note the `pattern` attribute used for the telephone field. This allows for regular expressions to be used to help validate input in a particular format.

## PHP Server-side Validation

`process.php` does some basic server-side validation.

Pay special attention to the `filter_input()`, `isset()`, `empty()`, `preg_match()` functions.
