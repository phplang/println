<?php declare(strict_types=1);

namespace phplang;

function println(string $msg = ''): int {
    echo $msg, "\n";
    return strlen($msg) + 1;
}
