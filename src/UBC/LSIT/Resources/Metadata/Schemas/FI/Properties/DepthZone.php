<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\FI\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\FI\Property;

    class DepthZone extends Property
    {
        private $uriPart = 'Link97';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'DepthZone';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Depth Zone', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = '"Marine habitat/Fishing ground: Bathymetric depth range in which a fishery resource is distributed or in which a fishery is conducted" (FIRMS Inventory Guidelines 2011).';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
