<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\DC\Properties;

    use UBC\LSIT\Resources\Metadata\Schemas\DC\Property;

    class Contributor extends Property
    {
        public function __construct($value,$label = 'Contributor'){
            parent::__construct($value,'http://purl.org/dc/elements/1.1/contributor','contributor',$label);
        }
    }
