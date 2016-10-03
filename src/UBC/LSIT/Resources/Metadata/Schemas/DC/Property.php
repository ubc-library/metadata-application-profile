<?php

    namespace UBC\LSIT\Resources\Metadata\Schemas\DC;

    use UBC\LSIT\Resources\Metadata\Schemas\AbstractProperty;

    class Property extends AbstractProperty {
    
        /**
         * Property constructor.
         *
         * @param        $value
         * @param string $uri
         * @param string $name
         * @param string $label
         */
        public function __construct($value, $uri = '#', $name = '#', $label = ''){

            $this->uri = "http://purl.org/dc/elements/1.1/{$uri}";

            $this->name = "dc{$this->namespaceVariableSeparator}{$name}";

            $this->label = $label;

            $this->value = $value;

            $this->description = 'A Dublin Core Elements Property';

        }

        /**
         * @return string
         */
        public function getUri ()
        {
            return $this->uri;
        }

        /**
         * @param string $uri
         */
        public function setUri ($uri)
        {
            $this->uri = $uri;
        }

        /**
         * @return string
         */
        public function getLabel ()
        {
            return $this->label;
        }

        /**
         * @param string $label
         */
        public function setLabel ($label)
        {
            $this->label = $label;
        }

        /**
         * @return string
         */
        public function getName ()
        {
            return $this->name;
        }

        /**
         * @param string $name
         */
        public function setName ($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getValue ()
        {
            return $this->value;
        }

        /**
         * @param mixed $value
         */
        public function setValue ($value)
        {
            $this->value = $value;
        }

        /**
         * @return string
         */
        public function getDescription ()
        {
            return $this->description;
        }

        /**
         * @param string $description
         */
        public function setDescription ($description)
        {
            $this->description = $description;
        }
    }
