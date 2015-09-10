<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\FI\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\FI\Property;

    class HorizontalDist extends Property
    {
        private $uriPart = 'Link120';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'HorizontalDist';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Horizontal Distribution', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = '"Marine habitat: inshore to offshore range in which the fishery resource is distributed (e.g. littoral, neritic, oceanic ...)." (FIRMS Inventory Guidelines 2011).';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
