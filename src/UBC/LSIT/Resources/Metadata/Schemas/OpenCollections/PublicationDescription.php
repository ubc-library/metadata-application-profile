<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:24
     */
    
    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait PublicationDescription {

        /**
         * @var AbstractProperty
         */
        private $Citation;

        /**
         * @var AbstractProperty
         */
        private $CopyrightHolder;

        /**
         * @var AbstractProperty
         */
        private $GrantFundingAgency;

        /**
         * @var AbstractProperty
         */
        private $PeerReviewStatus;

        /**
         * @var AbstractProperty
         */
        private $RightsURI;

        /**
         * @var AbstractProperty
         */
        private $ScholarlyLevel;

        /**
         * @var AbstractProperty
         */
        private $URI;

    }