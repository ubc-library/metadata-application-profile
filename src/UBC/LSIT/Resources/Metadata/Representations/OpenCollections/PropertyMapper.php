<?php
    /**
     * to make things easier when coding, not actually used
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections;

    use OpenLibrary\Metadata\Schemas;
    use OpenLibrary\Metadata\Profiles;
    use OpenLibrary\Metadata\Schemas\AbstractProperty;
    use UBC\LSIT\Resources\Metadata\Profiles\DPLA;
    use UBC\LSIT\Resources\Metadata\Profiles\EDM;
    use UBC\LSIT\Resources\Metadata\Profiles\FI;
    use UBC\LSIT\Resources\Metadata\Profiles\OA;
    use UBC\LSIT\Resources\Metadata\Profiles\OpenCollections;
    use UBC\LSIT\Resources\Metadata\Profiles\ORE;
    use UBC\LSIT\Resources\Metadata\Profiles\SKOS;
    use UBC\LSIT\Resources\Metadata\Profiles\VIVO;
    
    trait PropertyMapper {

        public function setAffiliation ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        
        public function setAggregatedSourceRepository ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        
        public function setAIPUUID ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }


        
        public function setAlternateTitle ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        
        public function setAnnotation ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\OpenAnnotation\Annotation ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        
        public function setBottom ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        
        public function setCampus ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        
        public function setCatalogueNumber ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        
        public function setCatalogueRecord ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\IsReferencedBy ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, false);
        }

        
        public function setCategory ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        
        public function setCitation ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }
        
        public function setCollectedBy ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        
        public function setCollection ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\IsPartOf ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        
        public function setCollectionDescription ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }
        
        public function setCollectionTitle ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }
        
        public function setCollectorNumber ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }
        
        public function setContents ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }
        
        public function setContributor ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Contributor ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }
        
        public function setCopyrightHolder ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }
        
        public function setCountry ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }
        
        public function setCover ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        // TODO SKK FROM HERE NOT DONE PROPERLY, CHECK THE OBJ CLASSTYPE
        
        public function setCreator ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Creator ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }
        
        public function setCredits ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }
        
        public function setCurrent ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setDate ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DC\Properties\Date ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setDateAvailable ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Available ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, false);
        }

        public function setDateCreated ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setDateIssued ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setDegree ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\VIVO\Properties\RelatedDegree ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setDegreeGrantor ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setDepthOfCapture ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setDepthOfWater ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setDescription ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Description ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setDigitalResourceOriginalRecord ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setDistanceOffshore ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setEdition ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setEpisode ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setExtent ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Extent ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setFileFormat ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Format ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setFileUUID ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Format ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setFullText ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Format ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setGenre ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\EDM\Properties\HasType ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setGeographicLocation ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\EDM\Properties\HasType ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setGraduationDate ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\EDM\Properties\HasType ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setGrantFundingAgency ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }



        public function setHasView ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setIdentifier ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setIsShownAt ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setLanguage ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setLatitude ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setLicense ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setLocality ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setLongitude ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }




        public function setMap ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }


        public function setMethodOfCapture ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setNotes ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setOriginalPreserved ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setPeerReviewStatus ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setPersonOrCorporation ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setProgram ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }


        public function setProjectWebsite ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Relation ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setProvider ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setProvinceOrState ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setPublisher ($value, $label = false, array $attributes = [])
        {

            $this->_setProperty (new Schemas\DCTerms\Properties\Publisher ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setRBSCLocation ($value, $label = false, array $attributes = [])
        {

            $this->_setProperty (new Schemas\DCTerms\Properties\Publisher ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setReference ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }


        public function setRights ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Rights ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, false);
        }

        public function setRightsURI ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setScholarlyLevel ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setSeries ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setShore ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setSource ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Source ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, false);
        }

        public function setStreamWidth ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setSubject ($value, $label = false, array $attributes = [])
        {

            $this->_setProperty (new Schemas\DCTerms\Properties\Subject ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setTemperature ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setTide ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setTime ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Title ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setTitle ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Title ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setTranslation ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Title ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setType ($value, $label = false, array $attributes = [])
        {
            $this->_setProperty (new Schemas\DCTerms\Properties\Type ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes, true);
        }

        public function setURI ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }


        public function setVegetation ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setWater ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }

        public function setWatershed ($value, $label = false, array $attributes = [])
        {
            //TODO SKK this is not the correct class, this is a copy and paste job, fix the type
            $this->_setProperty (new Schemas\DCTerms\Properties\Alternative ($value, $label), str_replace ('set', '', __FUNCTION__), $attributes);
        }


        /**
         * @param \OpenLibrary\Metadata\Schemas\AbstractProperty $obj
         * @param                                                $propertyName
         * @param array                                          $attributes
         * @param bool|false                                     $isArray
         */
        private function _setProperty (AbstractProperty $obj, $propertyName, array $attributes, $isArray = false)
        {
            parent::_setProperty ($obj, $propertyName, $attributes, $isArray);
        }
        
    }