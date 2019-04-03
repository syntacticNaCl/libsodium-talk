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
 * Password needs rehash
 *
 * Returns false since it is doesn't need to be rehashed
 */
echo "password_needs_rehash\n";
var_dump(password_needs_rehash($hash, PASSWORD_ARGON2ID, [
    'memory_cost' => 4096,
    'time_cost' => 3,
    'threads' => 2,
]));
