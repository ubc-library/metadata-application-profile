<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:24
     */
    
    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait SourceResource {

        /**
         * @var AbstractProperty
         */
        private $DateAvailable;

        /**
         * @var AbstractProperty
         */
        private $DateCreated;

        //private $DateCreated;
        /**
         * @var AbstractProperty
         */
        private $DateIssued;

        /**
         * @var AbstractProperty
         */
        private $Source;
    }