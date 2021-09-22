<?php

return (new PhpCsFixer\Config())
	->setRules([
		'@PSR1' => true,
		'use_arrow_functions' => true,
		// presets tuning
		'array_syntax' => [
			'syntax' => 'short',
		],
		'declare_strict_types' => true,
		'indentation_type' => true,
		'blank_line_after_namespace' => true,
		'blank_line_after_opening_tag' => true,
		'single_blank_line_before_namespace' => true,
		'single_line_after_imports' => true,
		'no_blank_lines_after_class_opening' => true,
		'visibility_required' => true,
		'no_unused_imports' => true,
		'group_import' => true,
		'ordered_imports' => ['sort_algorithm' => 'length'],
		'ordered_traits' => true,
		'cast_spaces' => ['space' => 'single']
	])->setIndent("    ")
	->setFinder(
		(new PhpCsFixer\Finder())
			->notPath('bootstrap/cache')
			->notPath('storage')
			->notPath('vendor')
			->notPath('node_modules')
			->in(__DIR__)
			->append([__FILE__])
			->name('*.php')
			->notName('*.blade.php')
			->notName('_ide_helper.php')
			->ignoreDotFiles(true)
			->ignoreVCS(true)
	);
