<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\DC\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\DC\Property;

    class Format extends Property
    {
        private $uriPart = 'format';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'format';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Format', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'The file format, physical medium, or dimensions of the resource.';
            $d [] = 'Examples of dimensions include size and duration. Recommended best practice is to use a controlled vocabulary such as the list of Internet Media Types [MIME].';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
