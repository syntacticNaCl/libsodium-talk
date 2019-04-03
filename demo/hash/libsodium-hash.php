<?php
declare(strict_types=1);

$password = 'supersecretpassword';

// Hash the password and return an ASCII string suitable for storage
$hash = sodium_crypto_pwhash_str(
    $password,
    SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE,
    SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE
);

if (sodium_crypto_pwhash_str_verify($hash, $password)) {
    // Wipe the plaintext password from memory
    sodium_memzero($password);

    echo "\n Hash verified\n";
} else {
    // Wipe the plaintext password from memory
    sodium_memzero($password);

    echo "\n Hash not verified\n";
}

