<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\FI\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\FI\Property;

    class WaterCondition extends Property
    {
        private $uriPart = 'Link253';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'WaterCondition';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Water Conditions', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'WaterCondition is information on species affinity related to water conditions or characteristics , e.g. oxygen , temperature etc.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
