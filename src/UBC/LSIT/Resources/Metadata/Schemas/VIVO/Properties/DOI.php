<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\VIVO\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\VIVO\Property;

    class DOI extends Property
    {
        protected $uri = "type";

        protected $label = "Type";

        protected $name = "type";//becomes dc.contributor

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
