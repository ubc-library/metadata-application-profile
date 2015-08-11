<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:23
     */
    
    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;
    
    trait DigitalPreservation {

        /**
         * @var AbstractProperty
         */
        private $AIPUUID;

        /**
         * @var AbstractProperty
         */
        private $FileUUID;

        /**
         * @return AbstractProperty
         */
        public function getAIPUUID () {

            return $this->AIPUUID;
        }

        /**
         * @return AbstractProperty
         */
        public function getFileUUID () {

            return $this->FileUUID;
        }

    }