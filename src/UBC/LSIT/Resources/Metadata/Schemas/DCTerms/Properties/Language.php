<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\DCTerms\Property;

    class Language extends Property
    {
        private $uriPart = 'language';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'language';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Language', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'A language of the resource.';
            $d [] = 'Recommended best practice is to use a controlled vocabulary such as RFC 4646 [RFC4646].';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
