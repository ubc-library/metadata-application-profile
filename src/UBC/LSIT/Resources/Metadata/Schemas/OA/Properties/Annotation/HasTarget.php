<?php
    
    namespace UBC\LSIT\Resources\Metadata\Schemas\OA\Properties\Annotation;
    
    use UBC\LSIT\Resources\Metadata\Schemas\OA\Property;
    
    /**
     * Class HasTarget
     */
    class HasTarget extends Property {
        
        /**
         * @param            $value
         * @param bool|false $label
         */
        public function __construct ($value, $label = false)
        {
            if (!$label) {
                $this->label = 'Alternative';
            }
            $this->uri  = 'alternative';
            $this->name = 'alternative';
            parent::__construct ($value, $this->uri, $this->name, $label);
        }
    }
