<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:29
     */

    namespace UBC\LSIT\Resources\Metadata\Profiles\SKOS;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait Concept {

        /**
         * @var AbstractProperty
         */
        protected $Notes;

        /**
         * @return AbstractProperty
         */
        public function getNotes () {

            return $this->Notes;
        }
    }
