<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\VIVO\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\VIVO\Property;

    class DepartmentOrSchool extends Property
    {
        private $uriPart = 'departmentOrSchool';//http://purl.org/dc/terms/#uriPart

        private $namePart = 'departmentOrSchool';//Term Name: #name

        /**
         * @param string $value
         * @param string $label
         * @param array  $attrs
         */
        public function __construct ($value, $label = 'Department or School', array $attrs = [])
        {
            #    value
            #  , uri (part put in the uri)
            #  , name (element name in the spec)
            #  , label
            parent::__construct ($value, $this->uriPart, $this->namePart, $label);

            $d = [];
            $d [] = $this->getDescription ();
            $d [] = 'The department or school name within institution';
            $d [] = 'Not intended to be an institution name.';

            $this->setDescription (implode ('; ', $d));

            $this->setAttributes ($attrs);
        }
    }
