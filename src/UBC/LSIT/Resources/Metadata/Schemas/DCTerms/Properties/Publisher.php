<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Property;

    class Publisher extends Property
    {
        private $uriPart = 'publisher';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'publisher';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Publisher', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'An entity responsible for making the resource available.';
            $d [] = 'Examples of a Publisher include a person, an organization, or a service.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
