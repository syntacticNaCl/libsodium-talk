<?php
declare(strict_types=1);

/**
 * Bcrypt hash
 */
$bcryptHash = password_hash("supersecretpassword", PASSWORD_DEFAULT);

/**
 * Password needs rehash
 *
 * Returns true since it needs to be rehashed
 */
echo "password_needs_rehash\n";
var_dump(password_needs_rehash($bcryptHash, PASSWORD_ARGON2ID, [
    'memory_cost' => 4096,
    'time_cost' => 10,
    'threads' => 2,
]));
