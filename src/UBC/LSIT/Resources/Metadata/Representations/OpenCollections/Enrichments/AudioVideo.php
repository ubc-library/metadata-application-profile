<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 09 Aug 15
     * Time: 19:27
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections\Enrichments;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    /**
     * Class AudioVideo
     *
     * @package UBC\LSIT\Resources\Metadata\Representations\OpenCollections\Enrichments
     */
    trait AudioVideo {

        /**
         * @var AbstractProperty
         */
        private $Contents;

        /**
         * @var AbstractProperty
         */
        private $Credits;

        /**
         * @var AbstractProperty
         */
        private $Episode;

    }
