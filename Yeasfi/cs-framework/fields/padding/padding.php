<?php

if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.
/**
 *
 * Field: Padding
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */

class CSFramework_Option_padding extends CSFramework_Options {

    public function __construct($field, $value = '', $unique = '') {
        parent::__construct($field, $value, $unique);
    }

    public function output() {
        echo $this->element_before();
        $value = $this->element_value();
        $value_top = ( isset($value['top']) ) ? $value['top'] : '';
        $value_right = ( isset($value['right']) ) ? $value['right'] : '';
        $value_bottom = ( isset($value['bottom']) ) ? $value['bottom'] : '';
        $value_left = ( isset($value['left']) ) ? $value['left'] : '';
        echo '<div style="width:20%; display: inline-block;">Top ( PX ) <br/><input placeholder="Padding top" type="' . $this->element_type() . '" name="' . $this->element_name('[top]') . '" value="' . $value_top . '"' . $this->element_class() . $this->element_attributes() . '/></div>';
        echo '<div style="width:20%; display: inline-block;">Right ( PX ) <br/><input placeholder="Padding right" type="' . $this->element_type() . '" name="' . $this->element_name('[right]') . '" value="' . $value_right . '"' . $this->element_class() . $this->element_attributes() . '/></div>';
        echo '<div style="width:20%; display: inline-block;">Bottom ( PX )<br/><input placeholder="Padding bottom" type="' . $this->element_type() . '" name="' . $this->element_name('[bottom]') . '" value="' . $value_bottom . '"' . $this->element_class() . $this->element_attributes() . '/></div>';
        echo '<div style="width:20%; display: inline-block;">Left ( PX ) <br/><input placeholder="Padding left" type="' . $this->element_type() . '" name="' . $this->element_name('[left]') . '" value="' . $value_left . '"' . $this->element_class() . $this->element_attributes() . '/></div>';
        echo $this->element_after();
    }

}
