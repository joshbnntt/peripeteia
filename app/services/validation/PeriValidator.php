<?php namespace services\validation;
/**
 * Created by PhpStorm.
 * User: Josh
 * Date: 2/5/2015
 * Time: 3:32 PM
 */
use Illuminate\Validation\Validator as IlluminateValidator;

class PeriValidator extends IlluminateValidator {

    private $_custom_messages = array(
        "alpha_space" => "The :attribute may only contain letters, numbers, and spaces."
    );

    public function __construct( $translator, $data, $rules, $messages = array(), $customAttributes = array() ) {
        parent::__construct( $translator, $data, $rules, $messages, $customAttributes );

        $this->_set_custom_stuff();
    }

    protected function _set_custom_stuff() {
        //setup our custom error messages
        $this->setCustomMessages( $this->_custom_messages );
    }

    public function validateAlphaSpace($attribute, $value, $parameters)
    {
        return preg_match('/^([a-zA-Z0-9\x20])+$/', $value);
    }
}