<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas;

    abstract class AbstractProperty {

        protected $uri;

        protected $label;

        protected $name;

        protected $description;

        protected $value;

        protected $namespaceVariableSeparator = ':';

        /**
         * @return string
         */
        protected function getNamespaceVariableSeparator ()
        {
            return $this->namespaceVariableSeparator;
        }

        /**
         * @param string $namespaceVariableSeparator
         */
        protected function setNamespaceVariableSeparator ($namespaceVariableSeparator)
        {
            $this->namespaceVariableSeparator = $namespaceVariableSeparator;
        }


        private $attributes = [];

        public function getAttributes () {
            return $this->attributes;
        }

        public function setAttributes ($array) {
            $this->attributes = $array;
        }

        public function getAttribute ($attr) {
            if(isset($this->attributes[ $attr ])) {
                return $this->attributes[ $attr ];
            }
            return false;
        }

        public function setAttribute ($k, $v) {
            $this->attributes[ $k ] = $v;
        }

        public function unsetAttribute ($attr) {
            if(isset($this->attributes[ $attr ])) {
                unset($this->attributes[ $attr ]);
                return true;
            }
            return false;
        }

        /**
         * @return string
         */
        abstract public function getUri ();

        /**
         * @param string $uri
         */
        abstract public function setUri ($uri);

        /**
         * @return string
         */
        abstract public function getLabel ();

        /**
         * @param string $label
         */
        abstract public function setLabel ($label);

        /**
         * @return string
         */
        abstract public function getName ();

        /**
         * @param string $name
         */
        abstract public function setName ($name);

        /**
         * @return mixed
         */
        abstract public function getValue ();

        /**
         * @param mixed $value
         */
        abstract public function setValue ($value);

        /**
         * @return string
         */
        abstract public function getDescription ();

        /**
         * @param string $description
         */
        abstract public function setDescription ($description);
    }
