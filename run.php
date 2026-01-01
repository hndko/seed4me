<?php

/**
 * Seed4Me POWERFUL Generator
 * Wrapper Script for Enhanced UI/UX
 */

// Define Colors
$green = "\033[0;32m";
$cyan = "\033[0;36m";
$red = "\033[0;31m";
$yellow = "\033[1;33m";
$bold = "\033[1m";
$reset = "\033[0m";

// Clear Screen
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    system('cls');
} else {
    system('clear');
}

// Banner
echo $cyan . $bold . "
   _____                _ _  _   __  __
  / ____|              | | || | |  \/  |
 | (___   ___  ___   __| | || |_| \  / | ___
  \___ \ / _ \/ _ \ / _` |__   _| |\/| |/ _ \
  ____) |  __/  __/| (_| |  | | | |  | |  __/
 |_____/ \___|\___| \__,_|  |_| |_|  |_|\___|
" . $reset . "\n";
echo $green . " ⚡ POWERFUL EDITION " . $reset . " | " . $yellow . "v2.0" . $reset . "\n";
echo $reset . str_repeat('=', 50) . "\n\n";

// Status Icons
$icon_check = $green . "✔" . $reset;
$icon_cross = $red . "✖" . $reset;
$icon_wait = $cyan . "⧗" . $reset;
$icon_rocket = $yellow . "🚀" . $reset;

echo " {$icon_rocket}  Initializing System...\n";
usleep(300000);
echo " {$icon_wait}  Loading modules...\n";
usleep(500000);

if (!file_exists(__DIR__ . '/run.original.php')) {
    echo " {$icon_cross}  Error: Core missing!\n";
    exit(1);
}

echo " {$icon_check}  System Ready!\n";
echo "\n" . $reset;
echo " [!] Starting Generator Logic...\n\n";
sleep(1);

// Include the obfuscated logic
include __DIR__ . '/run.original.php';

echo "\n" . $reset;
?>
