<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:29
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas;
    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait UnmappedDescription {

        /**
         * @var AbstractProperty
         */
        public $Affiliation;

        /**
         * @var AbstractProperty
         */
        public $CatalogueRecord;

        /**
         * @var AbstractProperty
         */
        public $Degree;

        /**
         * @var AbstractProperty
         */
        public $DigitalIdentifier;

        /**
         * @var AbstractProperty
         */
        public $GraduationDate;

        /**
         * @var AbstractProperty
         */
        public $Locality;

        /**
         * @var AbstractProperty
         */
        public $RBSCLocation;

        /**
         * @var AbstractProperty
         */
        public $Time;

        /**
         * @var AbstractProperty
         */
        public $Translation;

        /**
         * @var AbstractProperty
         */
        public $Annotation;

        /**
         * @var Schemas\DCTerms\Properties\Title
         */
        public $CollectionTitle;

        /**
         * @var AbstractProperty
         */
        public $CollectionDescription;

        /**
         * @var AbstractProperty
         */
        public $FileFormat;

        /**
         * @var Schemas\DCTerms\Properties\License
         */
        public $License;

        /**
         * @var AbstractProperty
         */
        public $Provider;

        /**
         * @var AbstractProperty
         */
        public $Rights;

        /**
         * @var AbstractProperty
         */
        public $AggregatedSourceRepository;

        /**
         * @var AbstractProperty
         */
        public $DigitalResourceOriginalRecord;


        /**
         * @var AbstractProperty
         */
        public $HasView;

        /**
         * @var AbstractProperty
         */
        public $ResourceAnnotated;

        /**
         * @return AbstractProperty
         */
        public function getAffiliation () {

            return $this->Affiliation;
        }

        /**
         * @return AbstractProperty
         */
        public function getCatalogueRecord () {

            return $this->CatalogueRecord;
        }

        /**
         * @return AbstractProperty
         */
        public function getDegree () {

            return $this->Degree;
        }

        /**
         * @return AbstractProperty
         */
        public function getDigitalIdentifier () {

            return $this->DigitalIdentifier;
        }

        /**
         * @return AbstractProperty
         */
        public function getGraduationDate () {

            return $this->GraduationDate;
        }

        /**
         * @return AbstractProperty
         */
        public function getLocality () {

            return $this->Locality;
        }

        /**
         * @return AbstractProperty
         */
        public function getRBSCLocation () {

            return $this->RBSCLocation;
        }

        /**
         * @return AbstractProperty
         */
        public function getTime () {

            return $this->Time;
        }

        /**
         * @return AbstractProperty
         */
        public function getTranslation () {

            return $this->Translation;
        }

        /**
         * @return AbstractProperty
         */
        public function getAnnotation () {

            return $this->Annotation;
        }

        /**
         * @return Schemas\DCTerms\Properties\Title
         */
        public function getCollectionTitle () {

            return $this->CollectionTitle;
        }

        /**
         * @return AbstractProperty
         */
        public function getCollectionDescription () {

            return $this->CollectionDescription;
        }

        /**
         * @return AbstractProperty
         */
        public function getFileFormat () {

            return $this->FileFormat;
        }

        /**
         * @return Schemas\DCTerms\Properties\License
         */
        public function getLicense () {

            return $this->License;
        }

        /**
         * @return AbstractProperty
         */
        public function getProvider () {

            return $this->Provider;
        }

        /**
         * @return AbstractProperty
         */
        public function getRights () {

            return $this->Rights;
        }

        /**
         * @return AbstractProperty
         */
        public function getAggregatedSourceRepository () {

            return $this->AggregatedSourceRepository;
        }

        /**
         * @return AbstractProperty
         */
        public function getDigitalResourceOriginalRecord () {

            return $this->DigitalResourceOriginalRecord;
        }

        /**
         * @return AbstractProperty
         */
        public function getHasView () {

            return $this->HasView;
        }

        /**
         * @return AbstractProperty
         */
        public function getResourceAnnotated () {

            return $this->ResourceAnnotated;
        }


    }
