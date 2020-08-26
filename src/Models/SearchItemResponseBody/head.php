<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20180115\Models\SearchItemResponseBody;

use AlibabaCloud\Tea\Model;

class head extends Model
{
    /**
     * @var int
     */
    public $searchTime;

    /**
     * @var int
     */
    public $docsFound;

    /**
     * @var int
     */
    public $docsReturn;
    protected $_name = [
        'searchTime' => 'SearchTime',
        'docsFound'  => 'DocsFound',
        'docsReturn' => 'DocsReturn',
    ];

    public function validate()
    {
        Model::validateRequired('searchTime', $this->searchTime, true);
        Model::validateRequired('docsFound', $this->docsFound, true);
        Model::validateRequired('docsReturn', $this->docsReturn, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchTime) {
            $res['SearchTime'] = $this->searchTime;
        }
        if (null !== $this->docsFound) {
            $res['DocsFound'] = $this->docsFound;
        }
        if (null !== $this->docsReturn) {
            $res['DocsReturn'] = $this->docsReturn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return head
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchTime'])) {
            $model->searchTime = $map['SearchTime'];
        }
        if (isset($map['DocsFound'])) {
            $model->docsFound = $map['DocsFound'];
        }
        if (isset($map['DocsReturn'])) {
            $model->docsReturn = $map['DocsReturn'];
        }

        return $model;
    }
}
