<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:55
     */
    
    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait ThesisDescription {

        /**
         * @var AbstractProperty
         */
        private $Campus;

        /**
         * @var AbstractProperty
         */
        private $DegreeGrantor;

        /**
         * @var AbstractProperty
         */
        private $Program;
    }