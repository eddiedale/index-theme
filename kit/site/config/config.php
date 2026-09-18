<?php

/**
 * Kit defaults. Your own options go in the returned array below.
 *
 * On first run this generates a random content salt and cookie signing key
 * for this installation (stored in site/config/secrets.php, which should
 * never be shared or committed). That clears Kirby's security warnings
 * without any manual setup — every install gets its own secrets.
 */

$secretsFile = __DIR__ . '/secrets.php';

if (is_file($secretsFile) === false) {
    $generated = "<?php\n\n// Auto-generated for this installation — keep private, do not commit.\nreturn [\n"
        . "    'content.salt' => '" . bin2hex(random_bytes(32)) . "',\n"
        . "    'cookie.key'   => '" . bin2hex(random_bytes(32)) . "',\n"
        . "];\n";

    // if the folder isn't writable we simply keep Kirby's defaults
    @file_put_contents($secretsFile, $generated, LOCK_EX);
}

$secrets = is_file($secretsFile) ? require $secretsFile : [];

return array_merge([
    // the Panel ships precompiled components; the runtime Vue compiler is
    // only needed by plugins that use inline Vue templates
    'panel.vue.compiler' => false,
], $secrets);
