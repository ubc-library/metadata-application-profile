<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:29
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas\OC;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    trait WebResource {

        /**
         * @var AbstractProperty
         */
        protected $License;

        /**
         * @return AbstractProperty
         */
        public function getLicense ()
        {
            return $this->License;
        }


    }
