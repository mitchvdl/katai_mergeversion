<?php
/**
 * File: Data.php
 *
 * User: Mitch Vanderlinden
 * email: magento@mitchvdl.be
 * Package: Katai_Mergeversion
 */

class Katai_Mergeversion_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XPATH_DEV_JS_MERGE_VERSION = 'dev/js/merge_version';
    const XPATH_DEV_CSS_MERGE_VERSION = 'dev/js/merge_version';
    /**
     * Return the merged JS version
     * @return string
     */
    public function getJsMergeVersion()
    {
        return Mage::getStoreConfig(self::XPATH_DEV_JS_MERGE_VERSION) ?: '0';
    }

    /**
     * Return the merged CSS version
     * @return string
     */
    public function getCssMergeVersion()
    {
        return Mage::getStoreConfig(self::XPATH_DEV_JS_MERGE_VERSION) ?: '0';
    }
}