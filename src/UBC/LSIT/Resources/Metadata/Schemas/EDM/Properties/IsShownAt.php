<?php
    /**
     * Created by PhpStorm.
     * User: seanmcna
     * Date: 12/08/2015
     * Time: 11:24 AM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\EDM\Properties;
    use UBC\LSIT\Resources\Metadata\Schemas\EDM\Property;

    class IsShownAt extends Property
    {

        private $uriPart = 'isShownAt';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'isShownAt';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Is Shown At', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'An unambiguous URL reference to the digital object on the provider’s website in its full information context.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
