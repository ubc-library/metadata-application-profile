<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:29
     */

    namespace UBC\LSIT\Resources\Metadata\Profiles\OpenCollections;

    use OpenLibrary\Metadata\Schemas;
    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait UnmappedDescription {

        /**
         * @var Schemas\DCTerms\Properties\Title
         */
        public $CollectionTitle;

        /**
         * @var AbstractProperty
         */
        public $CollectionDescription;

    }
