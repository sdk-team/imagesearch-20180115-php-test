<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20180115\Models\SearchItemResponseBody;

use AlibabaCloud\SDK\ImageSearch\V20180115\Models\SearchItemResponseBody\picInfo\allCategory;
use AlibabaCloud\Tea\Model;

class picInfo extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $region;

    /**
     * @var allCategory
     */
    public $allCategory;
    protected $_name = [
        'category'    => 'Category',
        'region'      => 'Region',
        'allCategory' => 'AllCategory',
    ];

    public function validate()
    {
        Model::validateRequired('category', $this->category, true);
        Model::validateRequired('region', $this->region, true);
        Model::validateRequired('allCategory', $this->allCategory, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->allCategory) {
            $res['AllCategory'] = null !== $this->allCategory ? $this->allCategory->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return picInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['AllCategory'])) {
            $model->allCategory = allCategory::fromMap($map['AllCategory']);
        }

        return $model;
    }
}
