<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 17/07/2015
     * Time: 1:41 PM
     */

    namespace UBC\LSIT\Resources\Metadata\Representations\OpenCollections;

    /**
     * Class Label
     *
     * The label Mapper is used to provide a user-friendly field label for instances where ApplicationProperty is not over-ridden
     *
     * ApplicationProperty => System Predefined Label
     */
    class LabelMapper
    {

        private static $systemFields = [
            'AlternateTitle'      => 'alternateTitle',
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

        public static function getPropertyLabel ($lookup)
        {
            if ( !empty(self::$systemFields[$lookup])) {
                return self::$systemFields[$lookup];
            }
            error_log ("Property Label not found for Property [$lookup]");

            return $lookup;
        }


    }
