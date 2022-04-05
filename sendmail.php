<?php
include ("connection.php");

  $email=$_GET['email'];
  $password=$_GET['password'];
  $fname=$_GET['fname'];


  require 'sendmail/vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client('5a2d7d67ea2951cde296436e8e58f739','64faad233ff131053131226ae530b5a7',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "departmentmcc@gmail.com",
          'Name' => "MCC Department",
          'Reply-To' => "no-reply@departmentmcc.com"
        ],
        'To' => [
          [
            'Email' => $email

          ]
        ],
        'Subject' => "MCC Account Registration",
        'TextPart' => "Dear $fname,",
        'HTMLPart' => "<h2>You have been accepted to <a href='https://document-management-systems.herokuapp.com/'>MCC</a>!</h2><h3>Here is your login credentials.</h3><h4>Email: $email<br>Password: <i>$password</i></h4>"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success();

  echo "<script>window.location.href='admin/pending-accounts.php';</script>";
?>
