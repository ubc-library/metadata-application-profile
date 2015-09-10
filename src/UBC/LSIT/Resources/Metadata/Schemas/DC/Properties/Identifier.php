<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\DC\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\DC\Property;

    class Identifier extends Property
    {
        protected $uri = "http://purl.org/dc/elements/1.1/identifier";

        protected $label = "Identifier";

        protected $name = "identifier";//becomes dc.contributor

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
