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
    use OpenLibrary\Metadata\Profiles\DPLA;

    class SourceResource
    {
        use DPLA\SourceResource;





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
        private $Series;





        /**
         * @param string      $value
         * @param string|bool $label
         */
        public function setAccessIdentifier ($value, $label = false) {

            $this->AccessIdentifier = new Schemas\DCTerms\Properties\Identifier($value, $label);
        }

    }
