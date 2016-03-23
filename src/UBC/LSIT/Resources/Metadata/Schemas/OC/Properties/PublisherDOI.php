<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OC\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\OC\Property;

    class PublisherDOI extends Property
    {
        private $uriPart = 'publisherDOI';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'publisherDOI';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'PublisherDOI', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'Local Field';
            $d [] = "If the item was issued a DOI by it's Publisher, that DOI is displayed here";

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
