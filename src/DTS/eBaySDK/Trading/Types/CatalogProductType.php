<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property integer $attributeSetId
 * @property string $detailsUrl
 * @property boolean $displayStockPhotos
 * @property DTS\eBaySDK\Trading\Types\ExternalProductIDType $externalProductId
 * @property integer $itemCount
 * @property DTS\eBaySDK\Trading\Types\NameValueListArrayType $itemSpecifics
 * @property integer $productReferenceId
 * @property DTS\eBaySDK\Trading\Enums\ProductStateCodeType(string) $productState
 * @property integer $reviewCount
 * @property DTS\eBaySDK\Trading\Types\ReviewDetailsType $reviewDetails
 * @property string $stockPhotoUrl
 * @property string $title
 */
class CatalogProductType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'attributeSetId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'AttributeSetID'
        ),
        'detailsUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DetailsURL'
        ),
        'displayStockPhotos' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'DisplayStockPhotos'
        ),
        'externalProductId' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ExternalProductIDType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExternalProductID'
        ),
        'itemCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemCount'
        ),
        'itemSpecifics' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\NameValueListArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemSpecifics'
        ),
        'productReferenceId' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductReferenceID'
        ),
        'productState' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ProductState'
        ),
        'reviewCount' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewCount'
        ),
        'reviewDetails' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ReviewDetailsType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReviewDetails'
        ),
        'stockPhotoUrl' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'StockPhotoURL'
        ),
        'title' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Title'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'urn:ebay:apis:eBLBaseComponents';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
