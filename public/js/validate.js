/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


// verify username - 610 chars, uc, lc, and underscore only.
function check_valid(form) {
    var error = "";
    error += verify_username(form.username.value);
    error += verify_password(form.pswd.value);
    error += verify_phone(form.phone.value);
    error += verify_email(form.mail.value);
    if (error != "") {
       alert(error);
       return false;
    }
return true;
}
function verify_name(strng){
 var error = "";
if (strng == "") {
   error = "You didn't enter a name.\n";
}
    var illegalChars = /\W/; // allow letters, numbers, and underscores
    if ((strng.length < 6) || (strng.length > 10)) {
       error = "The name is the wrong length. It must be 6-10 characters.\n";
    }
    else if (illegalChars.test(strng)) {
    error = "The name contains illegal characters.\n";
    }
return error;

}
function verify_username(strng){
 var error = "";
if (strng == "") {
   error = "You didn't enter a username.\n";
}
    var illegalChars = /\W/; // allow letters, numbers, and underscores
    if ((strng.length < 6) || (strng.length > 10)) {
       error = "The username is the wrong length. It must be 6-10 characters.\n";
    }
    else if (illegalChars.test(strng)) {
    error = "The username contains illegal characters.\n";
    }
return error;

}
function verify_country (strng) {
var error = "";
if (strng == "") {
   error = "You didn't enter a Country name.\n";
}
    var illegalChars = /\W/; // allow letters, numbers, and underscores
     if (illegalChars.test(strng)) {
    error = "The Country name contains illegal characters.\n";
    }
return error;
}

// verify password - between 68 chars, uppercase, lowercase, and numeral
function verify_password (strng) {
var error = "";
if (strng == "") {
   error = "You didn't enter a password.\n";
}
    var illegalChars = /[\W_]/; // allow only letters and numbers
    if ((strng.length < 6) || (strng.length > 8)) {
       error = "The password is the wrong length. It must betweem 6 to 8 characters.\n";
    }
    else if (illegalChars.test(strng)) {
      error = "The password contains illegal characters.\n";
    }
    else if (!((strng.search(/(a-z)+/)) && (strng.search(/(A-Z)+/)) &&
(strng.search(/(0-9)+/)))) {
 error = "The password must contain at least one uppercase letter, one lowercase letter, and one numeral.\n";
    }
return error;
}

// verify email
function verify_email (strng) {
var error="";
if (strng == "") {
   error = "You didn't enter an email address.\n";
}

    var emailFilter=/^.+@.+\..{2,3}$/;
    if (!(emailFilter.test(strng))) {
       error = "Please enter a valid email address.\n";
    }
    else {
//test email for illegal characters
       var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/
         if (strng.match(illegalChars)) {
          error = "The email address contains illegal characters.\n";
       }
    }
return error;
}

// verify phone number - strip out delimiters and verify for 10 digits
function verify_phone (strng) {
var error = "";
if (strng == "") {
   error = "You didn't enter a phone number.\n";
}
//strip out acceptable non-numeric characters
var stripped = strng.replace(/[\(\)\.\-\ ]/g, '');
    if (isNaN(parseInt(stripped))) {
       error = "The phone number contains illegal characters.";

    }
    if (!(stripped.length == 10)) {
 error = "The phone number is the wrong length. Make sure you included an area code.\n";
    }
return error;
}