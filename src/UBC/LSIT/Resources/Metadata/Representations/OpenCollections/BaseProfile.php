<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 17/07/2015
     * Time: 1:41 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections;

    use OpenLibrary\Metadata\Schemas;
    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    class BaseProfile
    {

        /**
         * @var Schemas\DCTerms\Properties\Identifier
         */
        private $AccessIdentifier;

        /**
         * @var Schemas\DCTerms\Properties\Alternative
         */
        private $AlternateTitle;

        /**
         * @var AbstractProperty
         */
        private $Annotation;

        /**
         * @var Schemas\DCTerms\Properties\IsPartOf
         */
        private $Collection;

        /**
         * @var Schemas\DCTerms\Properties\Title
         */
        private $CollectionTitle;

        /**
         * @var AbstractProperty
         */
        private $CollectionDescription;

        /**
         * @var Schemas\DCTerms\Properties\Creator
         */
        private $Creator;

        /**
         * @var Schemas\DC\Properties\Date
         */
        private $Date;

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
         * @var Schemas\DCTerms\Properties\Description
         */
        private $Description;

        /**
         * @var Schemas\DCTerms\Properties\Extent
         */
        private $Extent;

        /**
         * @var AbstractProperty
         */
        private $FileFormat;

        /**
         * @var Schemas\EDM\Properties\HasType
         */
        private $Genre;

        /**
         * @var Schemas\DCTerms\Properties\Spatial
         */
        private $GeographicLocation;

        /**
         * @var AbstractProperty
         *
         * This is the DOI
         */
        private $IsShownAt;

        /**
         * @var Schemas\DCTerms\Properties\Language
         */
        private $Language;

        /**
         * @var Schemas\DCTerms\Properties\License
         */
        private $License;

        /**
         * @var Schemas\DCTerms\Properties\Relation
         */
        private $ProjectWebsite;

        /**
         * @var AbstractProperty
         */
        private $Provider;

        /**
         * @var Schemas\DCTerms\Properties\Publisher
         */
        private $Publisher;

        /**
         * @var AbstractProperty
         */
        private $Rights;

        /**
         * @var AbstractProperty
         */
        private $Series;

        /**
         * @var Schemas\DCTerms\Properties\Subject
         */
        private $Subject;

        /**
         * @var Schemas\DCTerms\Properties\Title
         */
        private $Title;

        /**
         * @var Schemas\DCTerms\Properties\Type
         */
        private $Type;


        /**
         * @param string      $value
         * @param string|bool $label
         */
        public function setAccessIdentifier ($value, $label = false) {

            $this->AccessIdentifier = new Schemas\DCTerms\Properties\Identifier($value, $label);
        }

    }
