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
        protected $Category;

        /**
         * @var AbstractProperty
         */
        protected $Contents;

        /**
         * @var AbstractProperty
         */
        protected $Edition;

        /**
         * @var AbstractProperty
         */
        protected $PersonOrCorporation;

        /**
         * @var AbstractProperty
         */
        protected $UBCCallNumber;

        /**
         * @return AbstractProperty
         */
        public function getCategory () {

            return $this->Category;
        }

        /**
         * @return AbstractProperty
         */
        public function getContents () {

            return $this->Contents;
        }

        /**
         * @return AbstractProperty
         */
        public function getEdition () {

            return $this->Edition;
        }

        /**
         * @return AbstractProperty
         */
        public function getPersonOrCorporation () {

            return $this->PersonOrCorporation;
        }

        /**
         * @return AbstractProperty
         */
        public function getUBCCallNumber () {

            return $this->UBCCallNumber;
        }

    }