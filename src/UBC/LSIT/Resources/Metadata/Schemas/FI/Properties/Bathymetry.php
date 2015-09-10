<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\FI\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\FI\Property;

    class Bathymetry extends Property
    {
        private $uriPart = 'Link45';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'Bathymetry';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Bathymetry', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'Bathymetry is numeric depth information about the ranges in which an aquatic species is found.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
