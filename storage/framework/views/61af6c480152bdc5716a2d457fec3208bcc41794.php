<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Have customers contact you.</p>
    <p>Customer: </p>
    <p>Name: <?php echo e($contact_mail['name']); ?></p>
    <p>Email: <?php echo e($contact_mail['email']); ?></p>
    <p>Phone: <?php echo e($contact_mail['phone']); ?></p>
    <h4>Message: </h4>
    <p><?php echo e($contact_mail['message']); ?></p>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\project-sem2\resources\views/mails/send_mail_contact.blade.php ENDPATH**/ ?>