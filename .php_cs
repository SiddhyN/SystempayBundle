<?php
 
$finder = PhpCsFixer\Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__)
    ->exclude('vendor')
    ->exclude('var')
;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setCacheFile(__DIR__.'/.php_cs.cache')
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
    	'@Symfony:risky' => true,
        'array_syntax' => ['syntax' => 'short'],
        'phpdoc_order' => true,
    	'phpdoc_var_without_name' => false,
    	'concat_space' => ['spacing' => 'one'],
    	'no_extra_consecutive_blank_lines' => array('break', 'continue', 'extra', 'return', 'throw', 'use', 'parenthesis_brace_block', 'square_brace_block', 'curly_brace_block'),
    	'no_short_echo_tag' => true,
    	'semicolon_after_instruction' => true,
    	'combine_consecutive_unsets' => true,
    ])
    ->setFinder($finder)
;
