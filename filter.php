<?php
/**
 * AMC-text filter
 *
 * @package    filter
 * @subpackage amc
 * @copyright  2013 Silecs <contact@silecs.info>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Filtering class.
 */
class filter_amc extends moodle_text_filter {
    function filter($text, array $options = array()) {
        return preg_replace(
            array('/\[\[(?:\$\$?|\\\\\\()?/', '/(?:\$\$?|\\\\\\))?\]\]/'),
            array('<tex>', '</tex>'),
            str_replace(
                array('[_', '_]', '[*', '*]'),
                array('<em>', '</em>', '<b>', '</b>'),
                $text
            )
        );
    }
}


