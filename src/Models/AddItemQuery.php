<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20180115\Models;

use AlibabaCloud\Tea\Model;

class AddItemQuery extends Model
{
    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'instanceName' => 'instanceName',
    ];

    public function validate()
    {
        Model::validateRequired('instanceName', $this->instanceName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddItemQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        return $model;
    }
}
