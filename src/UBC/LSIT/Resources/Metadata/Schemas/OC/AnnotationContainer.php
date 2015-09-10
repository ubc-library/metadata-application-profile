<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:29
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OC;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    /**
     * Class Place
     *
     * THIS IS THE COMPLETE UNIT - V1 SPEC AS OF 08SEP2015
     */

    trait AnnotationContainer
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
