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
 * Password get info
 */
echo "password_get_info\n";
print_r(password_get_info($hash));
