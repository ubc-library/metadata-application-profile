<?php

    namespace UBC\LSIT\Resources\Metadata\Profiles\OA;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    /**
     * Class Place
     *
     * THIS IS THE COMPLETE UNIT - V1 SPEC AS OF 08SEP2015
     */

    trait Annotation
    {
        /**
         * @var AbstractProperty
         */
        protected $Annotations;

        /**
         * @var AbstractProperty
         */
        protected $FullText;

        /**
         * @return AbstractProperty
         */
        public function getAnnotations ()
        {
            return $this->Annotations;
        }

        /**
         * @return AbstractProperty
         */
        public function getFullText ()
        {
            return $this->FullText;
        }
    }
