<?php
declare(strict_types=1);

/**
 * Bcrypt hash
 */
$bcryptHash = password_hash("supersecretpassword", PASSWORD_DEFAULT);
var_dump($bcryptHash);

/**
 * Argon2id hash
 */
// echo "password_hash\n";
// $hash = password_hash("supersecretpassword", PASSWORD_ARGON2ID, [
//     'memory_cost' => 4096,
//     'time_cost' => 3,
//     'threads' => 2,
// ]);
// var_dump($hash);

/**
 * Password verify
 */
// echo "password_verify\n";
// var_dump((bool) password_verify("supersecretpassword", $hash));

/**
 * Password get info
 */
// echo "password_get_info\n";
// print_r(password_get_info($hash));

/**
 * Password needs rehash
 *
 * Returns true since it needs to be rehashed
 */
// echo "password_needs_rehash bcrypt\n";
// var_dump(password_needs_rehash($bcryptHash, PASSWORD_ARGON2ID));

// echo "password_needs_rehash w/o options\n";
// var_dump(password_needs_rehash($hash, PASSWORD_ARGON2ID));

// echo "password_needs_rehash\n";
// var_dump(password_needs_rehash($hash, PASSWORD_ARGON2ID, [
//     'memory_cost' => 4096,
//     'time_cost' => 10,
//     'threads' => 2,
// ]));

/**
 * Password needs rehash
 *
 * Returns false since it is doesn't need to be rehashed
 */
// echo "password_needs_rehash\n";
// var_dump(password_needs_rehash($hash, PASSWORD_ARGON2ID, [
//     'memory_cost' => 4096,
//     'time_cost' => 3,
//     'threads' => 2,
// ]));
