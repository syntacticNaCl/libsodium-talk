<?php
declare(strict_types=1);

/**
 * Argon2id hash
 */
$hash = password_hash("supersecretpassword", PASSWORD_ARGON2ID, [
    'memory_cost' => 4096,
    'time_cost' => 3,
    'threads' => 2,
]);

/**
 * Password verify
 */
echo "password_verify\n";
var_dump((bool) password_verify("supersecretpassword", $hash));
