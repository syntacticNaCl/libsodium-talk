<?php
declare(strict_types=1);

/**
 * Bcrypt hash
 */
$bcryptHash = password_hash("supersecretpassword", PASSWORD_DEFAULT);
var_dump($bcryptHash);
