<?php
return [
    'adminEmail' => getenv('MAILER_ADMIN_EMAIL'),
    'supportEmail' => getenv('MAILER_SUPPORT_EMAIL'),
    'senderEmail' => getenv('MAILER_SENDER_EMAIL'),
    'senderName' => getenv('MAILER_SENDER_NAME'),
    'user.passwordResetTokenExpire' => 3600,
];
