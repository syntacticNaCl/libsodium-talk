<?php

$bcryptHash = password_hash("supersecretpassword", PASSWORD_DEFAULT);

echo "password_hash\n";
$hash = password_hash("supersecretpassword", PASSWORD_ARGON2ID, [
    'memory_cost' => 4096,
    'time_cost' => 3,
    'threads' => 2,
]);
var_dump($hash);

echo "\n\n";

echo "password_verify\n";
var_dump((bool) password_verify("supersecretpassword", $hash));

echo "\n\n";

echo "password_get_info\n";
print_r(password_get_info($hash));

echo "\n\n";

echo "password_needs_rehash bcrypt\n";
var_dump(password_needs_rehash($bcryptHash, PASSWORD_ARGON2ID));

echo "\n\n";

echo "password_needs_rehash w/o options\n";
var_dump(password_needs_rehash($hash, PASSWORD_ARGON2ID));

echo "\n\n";

echo "password_needs_rehash\n";
var_dump(password_needs_rehash($hash, PASSWORD_ARGON2ID, [
    'memory_cost' => 4096,
    'time_cost' => 10,
    'threads' => 2,
]));
