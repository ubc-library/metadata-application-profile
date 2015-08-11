<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 10:32 AM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas;

    use OpenLibrary\Metadata\Schemas;
    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    class UBC {

        /**
         * @var AbstractProperty
         */
        private $Affiliation;

        /**
         * @var AbstractProperty
         */
        private $CatalogueRecord;

        /**
         * @var AbstractProperty
         */
        private $Degree;

        /**
         * @var AbstractProperty
         */
        private $DigitalIdentifier;

        /**
         * @var AbstractProperty
         */
        private $GraduationDate;

        /**
         * @var AbstractProperty
         */
        private $Locality;

        /**
         * @var AbstractProperty
         */
        private $RBSCLocation;

        /**
         * @var AbstractProperty
         */
        private $Time;

        /**
         * @var AbstractProperty
         */
        private $Translation;

        /**
         * @var AbstractProperty
         */
        private $Annotation;

        /**
         * @var Schemas\DCTerms\Properties\Title
         */
        private $CollectionTitle;

        /**
         * @var AbstractProperty
         */
        private $CollectionDescription;

        /**
         * @var AbstractProperty
         */
        private $FileFormat;

        /**
         * @var AbstractProperty
         *
         * This is the DOI
         */
        private $IsShownAt;

        /**
         * @var Schemas\DCTerms\Properties\License
         */
        private $License;

        /**
         * @var AbstractProperty
         */
        private $Provider;

        /**
         * @var AbstractProperty
         */
        private $Rights;

        /**
         * @var AbstractProperty
         */
        private $AggregatedSourceRepository;

        /**
         * @var AbstractProperty
         */
        private $DigitalResourceOriginalRecord;


        /**
         * @var AbstractProperty
         */
        private $HasView;

        /**
         * @var AbstractProperty
         */
        private $ResourceAnnotated;

    }
