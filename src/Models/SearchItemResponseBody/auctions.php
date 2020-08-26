<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20180115\Models\SearchItemResponseBody;

use AlibabaCloud\SDK\ImageSearch\V20180115\Models\SearchItemResponseBody\auctions\auction;
use AlibabaCloud\Tea\Model;

class auctions extends Model
{
    /**
     * @var array
     */
    public $auction;
    protected $_name = [
        'auction' => 'Auction',
    ];

    public function validate()
    {
        Model::validateRequired('auction', $this->auction, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auction) {
            $res['Auction'] = [];
            if (null !== $this->auction && \is_array($this->auction)) {
                $n = 0;
                foreach ($this->auction as $item) {
                    $res['Auction'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auctions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Auction'])) {
            if (!empty($map['Auction'])) {
                $model->auction = [];
                $n              = 0;
                foreach ($map['Auction'] as $item) {
                    $model->auction[$n++] = null !== $item ? auction::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
