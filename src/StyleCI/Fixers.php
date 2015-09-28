<?php

namespace SLLH\StyleCIBridge\StyleCI;

/**
 * This class was auto-generated from StyleCI/Config repository.
 *
 * @link https://github.com/StyleCI/Config/blob/master/src/Config.php
 */
class Fixers
{
    /**
     * @var string[]
     */
    public static $valid = array(
        'alias_functions',
        'align_double_arrow',
        'align_equals',
        'blankline_after_open_tag',
        'braces',
        'concat_without_spaces',
        'concat_with_spaces',
        'double_arrow_multiline_whitespaces',
        'duplicate_semicolon',
        'elseif',
        'empty_return',
        'encoding',
        'eof_ending',
        'ereg_to_preg',
        'extra_empty_lines',
        'function_call_space',
        'function_declaration',
        'function_typehint_space',
        'include',
        'indentation',
        'linefeed',
        'line_after_namespace',
        'list_commas',
        'logical_not_operators_with_spaces',
        'logical_not_operators_with_successor_space',
        'long_array_syntax',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'method_separation',
        'multiline_array_trailing_comma',
        'multiline_spaces_before_semicolon',
        'multiple_use',
        'namespace_no_leading_whitespace',
        'newline_after_open_tag',
        'new_with_braces',
        'no_blank_lines_after_class_opening',
        'no_blank_lines_before_namespace',
        'no_empty_lines_after_phpdocs',
        'object_operator',
        'operators_spaces',
        'ordered_use',
        'parenthesis',
        'php4_constructor',
        'phpdoc_align',
        'phpdoc_indent',
        'phpdoc_inline_tag',
        'phpdoc_no_access',
        'phpdoc_no_empty_return',
        'phpdoc_no_package',
        'phpdoc_order',
        'phpdoc_scalar',
        'phpdoc_separation',
        'phpdoc_short_description',
        'phpdoc_to_comment',
        'phpdoc_trim',
        'phpdoc_type_to_var',
        'phpdoc_types',
        'phpdoc_var_to_type',
        'phpdoc_var_without_name',
        'php_closing_tag',
        'pre_increment',
        'php_unit_construct',
        'php_unit_strict',
        'psr0',
        'psr4',
        'remove_leading_slash_use',
        'remove_lines_between_uses',
        'return',
        'self_accessor',
        'short_array_syntax',
        'short_echo_tag',
        'short_tag',
        'single_array_no_trailing_comma',
        'single_blank_line_before_namespace',
        'single_line_after_imports',
        'single_quote',
        'spaces_before_semicolon',
        'spaces_cast',
        'standardize_not_equal',
        'strict',
        'strict_param',
        'ternary_spaces',
        'trailing_spaces',
        'trim_array_spaces',
        'unalign_double_arrow',
        'unalign_equals',
        'unary_operators_spaces',
        'unused_use',
        'visibility',
        'whitespacy_lines',
    );


    /**
     * @var string[]
     */
    public static $psr1_fixers = array(
        'encoding',
        'psr4',
        'short_tag',
    );


    /**
     * @var string[]
     */
    public static $psr2_fixers = array(
        'braces',
        'elseif',
        'encoding',
        'eof_ending',
        'function_call_space',
        'function_declaration',
        'indentation',
        'linefeed',
        'line_after_namespace',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'multiple_use',
        'parenthesis',
        'php_closing_tag',
        'psr4',
        'short_tag',
        'single_line_after_imports',
        'trailing_spaces',
        'visibility',
    );


    /**
     * @var string[]
     */
    public static $symfony_fixers = array(
        'alias_functions',
        'blankline_after_open_tag',
        'braces',
        'concat_without_spaces',
        'double_arrow_multiline_whitespaces',
        'duplicate_semicolon',
        'elseif',
        'empty_return',
        'encoding',
        'eof_ending',
        'extra_empty_lines',
        'function_call_space',
        'function_declaration',
        'function_typehint_space',
        'include',
        'indentation',
        'linefeed',
        'line_after_namespace',
        'list_commas',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'method_separation',
        'multiline_array_trailing_comma',
        'multiple_use',
        'namespace_no_leading_whitespace',
        'new_with_braces',
        'no_blank_lines_after_class_opening',
        'no_empty_lines_after_phpdocs',
        'object_operator',
        'operators_spaces',
        'parenthesis',
        'phpdoc_align',
        'phpdoc_indent',
        'phpdoc_inline_tag',
        'phpdoc_no_access',
        'phpdoc_no_empty_return',
        'phpdoc_no_package',
        'phpdoc_scalar',
        'phpdoc_separation',
        'phpdoc_short_description',
        'phpdoc_to_comment',
        'phpdoc_trim',
        'phpdoc_type_to_var',
        'phpdoc_types',
        'phpdoc_var_without_name',
        'php_closing_tag',
        'pre_increment',
        'psr4',
        'remove_leading_slash_use',
        'remove_lines_between_uses',
        'return',
        'self_accessor',
        'short_tag',
        'single_array_no_trailing_comma',
        'single_blank_line_before_namespace',
        'single_line_after_imports',
        'single_quote',
        'spaces_before_semicolon',
        'spaces_cast',
        'standardize_not_equal',
        'ternary_spaces',
        'trailing_spaces',
        'trim_array_spaces',
        'unalign_double_arrow',
        'unalign_equals',
        'unary_operators_spaces',
        'unused_use',
        'visibility',
        'whitespacy_lines',
    );


    /**
     * @var string[]
     */
    public static $laravel_fixers = array(
        'alias_functions',
        'blankline_after_open_tag',
        'braces',
        'concat_without_spaces',
        'double_arrow_multiline_whitespaces',
        'duplicate_semicolon',
        'elseif',
        'empty_return',
        'encoding',
        'eof_ending',
        'extra_empty_lines',
        'function_call_space',
        'function_declaration',
        'function_typehint_space',
        'include',
        'indentation',
        'linefeed',
        'line_after_namespace',
        'list_commas',
        'logical_not_operators_with_successor_space',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'method_separation',
        'multiline_array_trailing_comma',
        'multiline_spaces_before_semicolon',
        'multiple_use',
        'namespace_no_leading_whitespace',
        'no_blank_lines_after_class_opening',
        'no_empty_lines_after_phpdocs',
        'object_operator',
        'operators_spaces',
        'parenthesis',
        'phpdoc_indent',
        'phpdoc_inline_tag',
        'phpdoc_no_access',
        'phpdoc_no_package',
        'phpdoc_scalar',
        'phpdoc_short_description',
        'phpdoc_to_comment',
        'phpdoc_trim',
        'phpdoc_type_to_var',
        'phpdoc_types',
        'phpdoc_var_without_name',
        'psr4',
        'remove_leading_slash_use',
        'remove_lines_between_uses',
        'return',
        'self_accessor',
        'short_array_syntax',
        'short_echo_tag',
        'short_tag',
        'single_array_no_trailing_comma',
        'single_blank_line_before_namespace',
        'single_line_after_imports',
        'single_quote',
        'spaces_before_semicolon',
        'spaces_cast',
        'standardize_not_equal',
        'ternary_spaces',
        'trailing_spaces',
        'trim_array_spaces',
        'unalign_equals',
        'unary_operators_spaces',
        'unused_use',
        'visibility',
        'whitespacy_lines',
    );


    /**
     * @var string[]
     */
    public static $recommended_fixers = array(
        'alias_functions',
        'align_double_arrow',
        'blankline_after_open_tag',
        'braces',
        'concat_without_spaces',
        'double_arrow_multiline_whitespaces',
        'duplicate_semicolon',
        'elseif',
        'empty_return',
        'encoding',
        'eof_ending',
        'extra_empty_lines',
        'function_call_space',
        'function_declaration',
        'function_typehint_space',
        'include',
        'indentation',
        'linefeed',
        'line_after_namespace',
        'list_commas',
        'lowercase_constants',
        'lowercase_keywords',
        'method_argument_space',
        'method_separation',
        'multiline_array_trailing_comma',
        'multiline_spaces_before_semicolon',
        'multiple_use',
        'namespace_no_leading_whitespace',
        'new_with_braces',
        'no_blank_lines_after_class_opening',
        'no_empty_lines_after_phpdocs',
        'object_operator',
        'operators_spaces',
        'ordered_use',
        'parenthesis',
        'phpdoc_align',
        'phpdoc_indent',
        'phpdoc_inline_tag',
        'phpdoc_no_access',
        'phpdoc_no_package',
        'phpdoc_order',
        'phpdoc_scalar',
        'phpdoc_separation',
        'phpdoc_short_description',
        'phpdoc_to_comment',
        'phpdoc_trim',
        'phpdoc_type_to_var',
        'phpdoc_types',
        'phpdoc_var_without_name',
        'php_closing_tag',
        'psr4',
        'remove_leading_slash_use',
        'remove_lines_between_uses',
        'return',
        'self_accessor',
        'short_array_syntax',
        'short_tag',
        'single_array_no_trailing_comma',
        'single_blank_line_before_namespace',
        'single_line_after_imports',
        'single_quote',
        'spaces_before_semicolon',
        'spaces_cast',
        'standardize_not_equal',
        'ternary_spaces',
        'trailing_spaces',
        'trim_array_spaces',
        'unalign_equals',
        'unary_operators_spaces',
        'unused_use',
        'visibility',
        'whitespacy_lines',
    );


    /**
     * @var string[]
     */
    public static $aliases = array(
        'phpdoc_params' => 'phpdoc_align',
        'join_function' => 'alias_functions',
    );


    /**
     * @var string[]
     */
    public static $conflicts = array(
        'concat_with_spaces' => 'concat_without_spaces',
        'long_array_syntax' => 'short_array_syntax',
        'no_blank_lines_before_namespace' => 'single_blank_line_before_namespace',
        'phpdoc_var_to_type' => 'phpdoc_type_to_var',
        'psr0' => 'psr4',
        'unalign_double_arrow' => 'align_double_arrow',
        'unalign_equals' => 'align_equals',
    );

    public static function getPresets()
    {
        return array(
            'psr1' => self::$psr1_fixers,
            'psr2' => self::$psr2_fixers,
            'symfony' => self::$symfony_fixers,
            'laravel' => self::$laravel_fixers,
            'recommended' => self::$recommended_fixers,
        );
    }
}
