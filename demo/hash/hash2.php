<?php
declare(strict_types=1);

/**
 * Argon2id hash
 */
echo "password_hash\n";
$hash = password_hash("supersecretpassword", PASSWORD_ARGON2ID, [
    'memory_cost' => 4096,
    'time_cost' => 3,
    'threads' => 2,
]);
var_dump($hash);
