<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Property;

    class Identifier extends Property
    {
        private $uriPart = 'identifier';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'identifier';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Identifier', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'An unambiguous reference to the resource within a given context.';
            $d [] = 'Recommended best practice is to identify the resource by means of a string conforming to a formal identification system.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
