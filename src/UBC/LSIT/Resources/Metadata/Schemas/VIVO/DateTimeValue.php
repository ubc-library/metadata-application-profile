<?php
    /**
     * Created by PhpStorm.
     * User: seanmcna
     * Date: 11/08/2015
     * Time: 2:59 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\VIVO;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;


    trait DateTimeValue
    {
        /**
         * @var AbstractProperty
         */
        protected $GraduationDate;

        /**
         * @return AbstractProperty
         */
        public function getGraduationDate ()
        {
            return $this->GraduationDate;
        }

    }
