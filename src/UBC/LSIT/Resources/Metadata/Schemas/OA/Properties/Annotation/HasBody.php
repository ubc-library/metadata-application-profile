<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\OA\Properties\Annotation;

    use UBC\LSIT\Resources\Metadata\Schemas\OA\Property;

    /**
     * Class HasBody
     */
    class HasBody extends Property
    {

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function __construct($value,$label = false){
            if(!$label){
                $this->label = 'has body';
            }
            $this->uri = 'hasBody';
            $this->name = 'hasBody';
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
