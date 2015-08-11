<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:23
     */
    
    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;
    
    trait GeographicDescription {

        /**
         * @var AbstractProperty
         */
        private $Country;

        /**
         * @var AbstractProperty
         */
        private $ProvinceOrState;

    }