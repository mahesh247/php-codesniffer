<?php

echo "Loading PHP-CS-Fixer Configuration...\n";

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->name('*.php')
    ->exclude('vendor')
    ->notName('*.blade.php');

echo "Finder Configured.\n";

$config = new PhpCsFixer\Config();
echo "Config Object Created.\n";

return $config
    ->setRules([
        '@PSR12' => true,
        // Add or modify rules as needed
    ])
    ->setFinder($finder);
