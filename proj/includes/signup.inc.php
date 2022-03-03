<?php

// checking if the user had clicked the submit button
if (isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $cnumber = $_POST['cnumber'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirm-password'];

  require_once './dbh.inc.php';
  require_once './functions.inc.php';

  // ERROR HANDLING
  // Empty Input
  if (emptyInputSignup($name, $email, $cnumber, $password, $confirmpassword) !== false) {
    header("Location: ../php/account.php?error=emptyinput");
    exit();
  }
  // Improper Name
  if (invalidName($name) !== false) {
    header("Location: ../php/account.php?error=invalidname");
    exit();
  }
  // Invalid Email
  if (invalidEmail($email) !== false) {
    header("Location: ../php/account.php?error=invalidemail");
    exit();
  }
  // Password Mismatch
  if (passwordMatch($password, $confirmpassword) !== false) {
    header("Location: ../php/account.php?error=passwordmismatch");
    exit();
  }
  // Email Already Exists
  if (emailExists($conn, $email) !== false) {
    header("Location: ../php/account.php?error=emailexists");
    exit();
  }
  // Contact Number Already Exists
  if (cnumberExists($conn, $cnumber) !== false) {
    header("Location: ../php/account.php?error=cnumberexists");
    exit();
  }
  // Password is longer than 6 characters
  if (pwdLength($password) !== false) {
    header("Location: ../php/account.php?error=weakpassword");
    exit();
  }

  createUser($conn, $name, $email, $cnumber, $password);
}
else{
  header("Location: ../php/account.php");
  exit();
}