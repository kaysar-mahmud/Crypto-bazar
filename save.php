<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $contactNumber=$_POST['contactNumber'];
    $issue=$_POST['issue'];
    echo "$name , $email";
    //INSERT INTO `contactustable` (`id`, `name`, `email`, `subject`, `contactNumber`, `issue`) VALUES ('1', 'test', 'test@test.com', 'testSubject', 'testNumber', 'testIssue');
?>