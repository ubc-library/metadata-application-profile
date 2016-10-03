<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\DC\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\DC\Property;

    class Title extends Property
    {

        public function __construct($value, $label = ''){
    
            $this->uri = 'http://purl.org/dc/elements/1.1/title';
            
            $this->name = 'title';//becomes dc.contributor
            
            if($label !== ''){
                $label = trim ($this->label);
            } else {
                $this->label = 'Title';
            }
            
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
