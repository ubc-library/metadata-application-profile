<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 17/07/2015
     * Time: 1:41 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections\V1;

    use OpenLibrary\Metadata\Schemas;
    use OpenLibrary\Metadata\Profiles;
    use OpenLibrary\Metadata\Schemas\AbstractProperty;
    use UBC\LSIT\Resources\Metadata\Schemas\OpenCollections;
    use Sabre\XML\Writer;

    /**
     * Class ApplicationProfile
     *
     * Whilst most of the properties should be in their contextual profiles,
     * some, such as the Sort Date, which are needed by the Application, are
     * kept in this file, especially as they may be system generated if not
     * found in the source resource
     */
    class ApplicationProfile
    {

        use Profiles\DPLA\SourceResource;
        use OpenCollections\ArtifactDescription;
        use OpenCollections\DataDescription;
        use OpenCollections\DigitalPreservation;
        use OpenCollections\FieldNotesDescription;
        use OpenCollections\GeographicDescription;
        use OpenCollections\MediaDescription;
        use OpenCollections\PublicationDescription;
        use OpenCollections\SourceResource;
        use OpenCollections\ThesisDescription;
        use OpenCollections\UnmappedDescription;

        /**
         * @var AbstractProperty
         */
        private $SortDate;

        /**
         * @param bool|false $date
         */
        public function __construct ($date = false)
        {

            if ($date === false) {
                $this->SortDate = new Schemas\DC\Properties\Date(time (), 'Fake Sort Date');
            } else {
                $this->SortDate = new Schemas\DC\Properties\Date($date, 'Sort Date');
            }
            $this->SortDate->setAttribute ('lang', 'en');
            $this->SortDate->setAttribute ('classmap', $this->getClassmap ('SortDate'));
        }

        /**
         * @return AbstractProperty
         */
        public function getSortDate ()
        {
            return $this->SortDate;
        }



        private function getClassmap ($name)
        {

            $ret = false;

            $reflect = new \ReflectionClass($this);
            $traits = $reflect->getTraits ();

            foreach ($traits as $k => $trait) {
                $props = $trait->getProperties ();
                foreach ($props as $prop) {
                    if ($prop->name === $name) {
                        $class = $prop->class;
                        $class = str_ireplace ("openlibrary\\", "", $class);
                        $class = str_ireplace ("metadata\\", "", $class);
                        $class = str_ireplace ("profiles\\", "", $class);
                        $class = str_ireplace ("properties\\", "", $class);
                        $class = str_ireplace ("ubc\\", "", $class);
                        $class = str_ireplace ("lsit\\", "", $class);
                        $class = str_ireplace ("resources\\", "", $class);
                        $class = str_ireplace ("schemas\\", "", $class);

                        $class = str_ireplace ("dpla\\", "dpla:", $class);
                        $class = str_ireplace ("opencollections\\", "oc:", $class);

                        return $class;
                    }
                }

            }

            return $ret;
        }

        private function _setProperty(AbstractProperty $obj, $propertyName, &$attributes){
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ($propertyName);
            $obj->setAttributes ($attributes);
            $this->{$propertyName} = $obj;
        }

        /**
         * @deprecated use _setProperty instead
         */
        private function _setPropertyAttributes(AbstractProperty $obj, $propertyName, &$attributes){
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ($propertyName);
            $obj->setAttributes ($attributes);
            $this->{$propertyName} = $obj;
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setSortDate ($value = false, $label = false, $attributes = [])
        {
            if ($value === false) {
                $obj = new Schemas\DC\Properties\Date(time (), 'Fake Sort Date');
            } else {
                $obj = new Schemas\DC\Properties\Date($value, 'Sort Date');
            }
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('AlternateTitle');
            $obj->setAttributes ($attributes);
            $this->SortDate = $obj;
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setAlternateTitle ($value, $label = false, $attributes = [])
        {
            $obj = new Schemas\DCTerms\Properties\Alternative ($value, $label);
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('AlternateTitle');
            $obj->setAttributes ($attributes);
            $this->AlternateTitle [] = $obj;
        }

        // TODO SKK FROM HERE NOT DONE PROPERLY, CHECK THE OBJ CLASSTYPE
        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setProgram ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDegreeGrantor ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCampus ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDateIssued ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDateCreated ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setURI ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setSeries ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setScholarlyLevel ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setRightsURI ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setPersonOrCorporation ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setPeerReviewStatus ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setGrantFundingAgency ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setEdition ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCopyrightHolder ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setContents ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCitation ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCategory ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setEpisode ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCredits ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setProvinceOrState ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCountry ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setWatershed ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setWater ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setVegetation ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setTide ($value, $label = false, $attributes = []){
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setTemperature ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setStreamWidth ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setShore ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setOriginalPreserved ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setMethodOfCapture ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setMap ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDistanceOffshore ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDepthOfWater ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setDepthOfCapture ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCurrent ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCover ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCollectorNumber ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCollectedBy ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setCatalogueNumber ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setBottom ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }

        /**
         * @param            $value
         * @param bool|false $label
         * @param array      $attributes
         */
        public function setReference ($value, $label = false, $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty(new Schemas\DCTerms\Properties\Alternative ($value, $label, $attributes),str_replace("set","",__FUNCTION__), $attributes);
        }



        public function setCollection ($value, $label = false, $attributes = [])
        {
            $obj = new Schemas\DCTerms\Properties\IsPartOf ($value, $label);
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('Collection');
            $obj->setAttributes ($attributes);
            $this->Collection = $obj;
        }

        public function setContributor ($value, $label = false, $attributes = [])
        {

            $obj = new Schemas\DCTerms\Properties\Contributor($value, $label);
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('Contributor');
            $obj->setAttributes ($attributes);
            $this->Contributor[] = $obj;
        }

        public function setCreator ($value, $label = false, $attributes = [])
        {

            $obj = new Schemas\DCTerms\Properties\Creator($value, $label);
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('Creator');
            $obj->setAttributes ($attributes);
            $this->Creator[] = $obj;
        }

        public function setDate ($value, $label = false, $attributes = [])
        {

            $obj = new Schemas\DC\Properties\Date($value, $label);
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('Date');
            $obj->setAttributes ($attributes);
            $this->Date[] = $obj;
        }

        public function setDescription ($value, $label = false, $attributes = [])
        {

            $obj = new Schemas\DCTerms\Properties\Description($value, $label);
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('Description');
            $obj->setAttributes ($attributes);
            $this->Description[] = $obj;
        }

        public function setExtent ($value, $label = false, $attributes = [])
        {
            $obj = new Schemas\DCTerms\Properties\Extent($value, $label);
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('Extent');
            $obj->setAttributes ($attributes);
            $this->Extent[] = $obj;
        }

        public function setGenre ($value, $label = false, $attributes = [])
        {
            $obj = new Schemas\EDM\Properties\HasType($value, $label);
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('Genre');
            $obj->setAttributes ($attributes);
            $this->Genre[] = $obj;
        }

        public function setProjectWebsite ($value, $label = false, $attributes = [])
        {

            $obj = new Schemas\DCTerms\Properties\Relation($value, $label);
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('ProjectWebsite');
            $obj->setAttributes ($attributes);
            $this->ProjectWebsite[] = $obj;
        }

        public function setPublisher ($value, $label = false, $attributes = [])
        {

            $obj = new Schemas\DCTerms\Properties\Publisher($value, $label);
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('Publisher');
            $obj->setAttributes ($attributes);
            $this->Publisher[] = $obj;
        }

        public function setSubject ($value, $label = false, $attributes = [])
        {

            $obj = new Schemas\DCTerms\Properties\Subject($value, $label);
            $attributes['ns'] = $this->getNamespace ($obj);
            $attributes['classmap'] = $this->getClassmap ('Subject');
            $obj->setAttributes ($attributes);
            $this->Subject[] = $obj;
        }

        public function setTitle ($value, $label = false, $attributes = [])
        {

            $obj = new Schemas\DCTerms\Properties\Title($value, $label);
            $attributes['classmap'] = $this->getClassmap ('Title');
            $obj->setAttributes ($attributes);
            $this->Title[] = $obj;
        }

        public function setType ($value, $label = false, $attributes = [])
        {

            $obj = new Schemas\DCTerms\Properties\Type($value, $label);
            $attributes['classmap'] = $this->getClassmap ('Type');
            $obj->setAttributes ($attributes);
            $this->Type[] = $obj;
        }

        private function getNamespace ($obj)
        {
            $reflect = new \ReflectionObject($obj);
            $ret = $reflect->getParentClass ()->getDefaultProperties ();

            return isset($ret['uri']) ? $ret ['uri'] : false;
        }

        public function setSource ($value, $label = false, $attributes = [])
        {

            $obj = new Schemas\DCTerms\Properties\Source($value, $label);
            $attributes['classmap'] = $this->getClassmap ('Source');
            $obj->setAttributes ($attributes);
            $this->Source = $obj;
        }

        public function setFileFormat ($value, $label = false, $attributes = [])
        {
            $obj = new Schemas\DC\Properties\Format($value, $label);
            $attributes['classmap'] = $this->getClassmap ('FileFormat');
            $obj->setAttributes ($attributes);
            $this->FileFormat[] = $obj;
        }

        public function setUBCCallNumber ($value, $label = false, $attributes = [])
        {
            $obj = new Schemas\DCTerms\Properties\Identifier($value, $label);
            $attributes['classmap'] = $this->getClassmap ('UBCCallNumber');
            $obj->setAttributes ($attributes);
            $this->UBCCallNumber = $obj;
        }

        public function setCatalogueRecord ($value, $label = false, $attributes = [])
        {
            $obj = new Schemas\DCTerms\Properties\IsReferencedBy($value, $label);
            $attributes['classmap'] = $this->getClassmap ('CatalogueRecord');
            $obj->setAttributes ($attributes);
            $this->CatalogueRecord = $obj;
        }

        public function setRights ($value, $label = false, $attributes = [])
        {
            $obj = new Schemas\DCTerms\Properties\Rights($value, $label);
            $attributes['classmap'] = $this->getClassmap ('Rights');
            $obj->setAttributes ($attributes);
            $this->Rights = $obj;
        }

        public function setDateAvailable ($value, $label = false, $attributes = [])
        {
            $obj = new Schemas\DCTerms\Properties\Available($value, $label);
            $attributes['classmap'] = $this->getClassmap ('DateAvailable');
            $obj->setAttributes ($attributes);
            $this->DateAvailable = $obj;
        }

        public function setAnnotation ($value, $label = false, $attributes = [])
        {
            $obj = new Schemas\OpenAnnotation\Annotation ($value, 'this', $label);
            $attributes['classmap'] = $this->getClassmap ('Annotation');
            $obj->setAttributes ($attributes);
            $this->Annotation[] = $obj;
        }

        public function generateSchemaDefinitionAsXML ($verbose = true)
        {
            $ret = $this->getAll ($verbose);

            foreach ($ret as $k => &$property) {
                if (is_array ($property) && count (array_filter ($property)) == 0) {
                    unset ($ret[$k]);
                }
            }

            $xml = [];

            $xmlWriter = new Writer();
            $xmlWriter->openMemory ();
            $xmlWriter->startDocument ();
            $xmlWriter->setIndent (true);
            $xmlWriter->namespaceMap = ['https://open.library.ubc.ca/terms#' => 'oc'];

            $xmlWriter->startElement ('{https://open.library.ubc.ca/terms#}OpenCollectionsItem');

            foreach ($ret as $k => &$property) {
                if ( !isset($property['ocmap'])) {
                    foreach ($property as $_k => &$_property) {
                        $ns = isset($_property['ns']) ? $property['ns'] : "";
                        $tg = explode (":", $_property['ocmap']);
                        $tg = array_pop ($tg);

                        $attrs = [
                            'lang' => $_property['attrs']['lang']
                        ];

                        $xml [] = [
                            'name'         => "{{$ns}}$tg"
                            , 'attributes' => $attrs
                            , 'value'      => is_object ($_property['value']) ? $_property['value']->getValue () : $_property['value']
                        ];
                    }
                } else {
                    $ns = isset($property['ns']) ? $property['ns'] : "";
                    $tg = explode (":", $property['ocmap']);
                    $tg = array_pop ($tg);

                    $attrs = [
                        'lang' => $property['attrs']['lang']
                    ];

                    $xml [] = [
                        'name'         => "{{$ns}}$tg"
                        , 'attributes' => $attrs
                        , 'value'      => is_object ($property['value']) ? $property['value']->getValue () : $property['value']
                    ];
                }
            }

            $xmlWriter->write ($xml);
            $xmlWriter->endElement ();

            return $xmlWriter->outputMemory ();
        }

        private function getAll ($verbose)
        {
            if ($verbose) {
                return $this->getAllVerbosely ();
            } else {
                $data = [];
                foreach ($this as $k => $v) {
                    if (isset($v) && !is_null ($v)) {
                        $cmd = "get{$k}";
                        if (method_exists ($this, $cmd)) {
                            $v = $this->{$cmd}();
                            if (is_array ($v)) {
                                foreach ($v as &$_v) {
                                    $data[$k][] = [
                                          'label'   => $_v->getLabel ()
                                        , 'value'   => $_v->getValue ()
                                        , 'attrs'   => $_v->getAttributes ()
                                    ];
                                }
                            } else {
                                $data[$k][] = [
                                      'label'   => $v->getLabel ()
                                    , 'value'   => $v->getValue ()
                                    , 'attrs'   => $v->getAttributes ()
                                ];

                            }
                        }

                    } else {
                        unset($data[$k]);
                    }
                }

                return $data;
            }
        }

        private function getAllVerbosely ()
        {
            $data = [];
            foreach ($this as $k => $v) {
                if (isset($v) && !is_null ($v)) {
                    $cmd = "get{$k}";
                    if (method_exists ($this, $cmd)) {
                        $v = $this->{$cmd}();
                        if (is_array ($v)) {
                            foreach ($v as &$_v) {
                                $data[$k][] = [
                                      'label'   => $_v->getLabel ()
                                    , 'value'   => $_v->getValue ()
                                    , 'ocmap'   => $_v->getName ()
                                    , 'attrs'   => $_v->getAttributes ()
                                    , 'iri'     => $_v->getUri ()
                                    , 'explain' => $_v->getDescription ()
                                ];
                            }
                        } else {
                            $data[$k][] = [
                                  'label'   => $v->getLabel ()
                                , 'value'   => $v->getValue ()
                                , 'ocmap'   => $v->getName ()
                                , 'attrs'   => $v->getAttributes ()
                                , 'iri'     => $v->getUri ()
                                , 'explain' => $v->getDescription ()
                            ];

                        }
                    }

                } else {
                    unset($data[$k]);
                }
            }

            return $data;
        }

        public function generateSchemaDefinitionAsArray ($verbose = true)
        {
            return $this->getAll ($verbose);
        }

        /** @deprecated */
        public function generateSchemaDefinitionAsJSON ($verbose = true)
        {
            return $this->getAll ($verbose);
        }

    }
