<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 17/07/2015
     * Time: 1:41 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections;

    /**
     * Class SearchMapper
     *
     * The Search Mapper is used to map Application Profile properties to system properties e.g. for elasticsearch
     *
     * ApplicationProperty => SystemProperty
     */
    class SearchMapper
    {

        private static $systemFields = [
            'AlternateTitle'      => 'alternateTitle',
            'Affiliation'         => 'affiliation',
            'AIPUUID'             => 'aipUUID',
            'Bottom'              => 'bottom',
            'Campus'              => 'campus',
            'Category'            => 'category',
            'Citation'            => 'citation',
            'Collection'          => 'collection',
            'Contents'            => 'contents',
            'Contributor'         => 'contributor',
            'CopyrightHolder'     => 'copyrightHolder',
            'Country'             => 'country',
            'Cover'               => 'cover',
            'Creator'             => 'creator',
            'Credits'             => 'credits',
            'Current'             => 'current',
            'Date'                => 'date',
            'DateAvailable'       => 'dateAvailable',
            'DateCreated'         => 'dateCreated',
            'DateIssued'          => 'dateIssued',
            'DegreeGrantor'       => 'degreeGrantor',
            'Degree'              => 'degree',
            'DepthOfCapture'      => 'depthOfCapture',
            'DepthOfWater'        => 'depthOfWater',
            'Description'         => 'description',
            'DistanceOffshore'    => 'distanceOffshore',
            'Edition'             => 'edition',
            'Episode'             => 'episode',
            'Extent'              => 'extent',
            'Genre'               => 'genre',
            'GeographicLocation'  => 'geographicLocation',
            'GrantFundingAgency'  => 'grantFundingAgency',
            'Identifier'          => 'identifier',
            'Language'            => 'language',
            'MethodOfCapture'     => 'methodOfCapture',
            'Notes'               => 'notes',
            'OriginalPreserved'   => 'originalPreserved',
            'PeerReviewStatus'    => 'peerReviewStatus',
            'PersonOrCorporation' => 'personOrCorporation',
            'Program'             => 'program',
            'ProjectWebsite'      => 'projectWebsite',
            'ProvinceOrState'     => 'provinceOrState',
            'Publisher'           => 'publisher',
            'Reference'           => 'reference',
            'RightsURI'           => 'rightsURI',
            'ScholarlyLevel'      => 'scholarlyLevel',
            'Series'              => 'series',
            'Shore'               => 'shore',
            'Source'              => 'source',
            'StreamWidth'         => 'streamWidth',
            'Subject'             => 'subject',
            'Temperature'         => 'temperature',
            'Tide'                => 'tide',
            'Title'               => 'title',
            'Type'                => 'type',
            'URI'                 => 'uri',
            'Vegetation'          => 'vegetation',
            'Water'               => 'water',
            'Watershed'           => 'watershed'
        ];

        public static function getSystemField ($lookup)
        {
            if ( !empty(self::$systemFields[$lookup])) {
                return self::$systemFields[$lookup];
            }
            error_log ("Language not found for code [$lookup]");

            return $lookup;
        }


    }
