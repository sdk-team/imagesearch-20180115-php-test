<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20180115\Models;

use AlibabaCloud\SDK\ImageSearch\V20180115\Models\SearchItemResponseBody\auctions;
use AlibabaCloud\SDK\ImageSearch\V20180115\Models\SearchItemResponseBody\head;
use AlibabaCloud\SDK\ImageSearch\V20180115\Models\SearchItemResponseBody\picInfo;
use AlibabaCloud\Tea\Model;

class SearchItemResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $message;

    /**
     * @var int
     */
    public $code;

    /**
     * @var auctions
     */
    public $auctions;

    /**
     * @var head
     */
    public $head;

    /**
     * @var picInfo
     */
    public $picInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'success'   => 'Success',
        'message'   => 'Message',
        'code'      => 'Code',
        'auctions'  => 'Auctions',
        'head'      => 'Head',
        'picInfo'   => 'PicInfo',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('success', $this->success, true);
        Model::validateRequired('message', $this->message, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('auctions', $this->auctions, true);
        Model::validateRequired('head', $this->head, true);
        Model::validateRequired('picInfo', $this->picInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->auctions) {
            $res['Auctions'] = null !== $this->auctions ? $this->auctions->toMap() : null;
        }
        if (null !== $this->head) {
            $res['Head'] = null !== $this->head ? $this->head->toMap() : null;
        }
        if (null !== $this->picInfo) {
            $res['PicInfo'] = null !== $this->picInfo ? $this->picInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchItemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Auctions'])) {
            $model->auctions = auctions::fromMap($map['Auctions']);
        }
        if (isset($map['Head'])) {
            $model->head = head::fromMap($map['Head']);
        }
        if (isset($map['PicInfo'])) {
            $model->picInfo = picInfo::fromMap($map['PicInfo']);
        }

        return $model;
    }
}
