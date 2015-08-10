<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 09 Aug 15
     * Time: 18:59
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections\Enrichments;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    /**
     * Class DSpace
     *
     * @package UBC\LSIT\Resources\Metadata\Representations\OpenCollections\Enrichments
     */
    trait DSpace {

        /**
         * @var AbstractProperty
         */
        private $Affiliation;

        /**
         * @var AbstractProperty
         */
        private $Campus;

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
        private $Degree;

        /**
         * @var AbstractProperty
         */
        private $DegreeGrantor;

        /**
         * @var AbstractProperty
         */
        private $GraduationDate;

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
        private $Program;

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
