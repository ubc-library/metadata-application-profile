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
         * @return AbstractProperty
         */
        public function getIsShownAt () {

            return $this->IsShownAt;
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
