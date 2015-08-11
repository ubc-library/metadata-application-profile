<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:23
     */
    
    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait BibliographicDescription {

        /**
         * @var AbstractProperty
         */
        private $Category;

        /**
         * @var AbstractProperty
         */
        private $Contents;

        /**
         * @var AbstractProperty
         */
        private $Edition;

        /**
         * @var AbstractProperty
         */
        private $PersonOrCorporation;

        /**
         * @var AbstractProperty
         */
        private $UBCCallNumber;

    }