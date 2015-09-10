<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 16/04/2015
     * Time: 2:50 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Schemas;

    /**
     * Class Namespaces
     *
     */
    class Namespaces
    {

        /**
         * @var
         */
        protected $element;

        /**
         * @var
         */
        protected $qualifier;



        /**
         * @param $element
         * @param $qualifier
         */
        function __construct ($element, $qualifier)
        {
            $this->element = $element;
            $this->qualifier = $qualifier;
        }


        /**
         * @return mixed
         */
        public function getElement ()
        {
            return $this->element;
        }


        /**
         * @param mixed $element
         */
        public function setElement ($element)
        {
            $this->element = $element;
        }


        /**
         * @return mixed
         */
        public function getQualifier ()
        {
            return $this->qualifier;
        }


        /**
         * @param mixed $qualifier
         */
        public function setQualifier ($qualifier)
        {
            $this->qualifier = $qualifier;
        }
    }
