<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets the specified media meta data from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766200(v=msads.110).aspx GetMediaMetaDataByIds Response Object
     * 
     * @uses MediaMetaData
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
     */
    final class GetMediaMetaDataByIdsResponse
    {
        /**
         * An array of MediaMetaData objects that corresponds directly to the media identifiers that you specified in the request.
         * @var MediaMetaData[]
         */
        public $MediaMetaData;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
