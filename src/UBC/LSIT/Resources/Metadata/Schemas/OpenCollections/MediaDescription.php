<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:24
     */
    
    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;
    
    class MediaDescription {

        /**
         * @var AbstractProperty
         */
        protected $Credits;

        /**
         * @var AbstractProperty
         */
        protected $Episode;

        /**
         * @return AbstractProperty
         */
        public function getCredits () {

            return $this->Credits;
        }

        /**
         * @return AbstractProperty
         */
        public function getEpisode () {

            return $this->Episode;
        }

    }