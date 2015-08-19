<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:29
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait ArtifactDescription {

        /**
         * @var AbstractProperty
         */
        protected $Reference;

        /**
         * @return AbstractProperty
         */
        public function getReference () {

            return $this->Reference;
        }
    }
