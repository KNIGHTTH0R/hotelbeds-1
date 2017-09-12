<?php

namespace LadonLabs\Hotelbeds;

use LadonLabs\Hotelbeds\BaseJsonEncodable;

/**
 * Description of Promotions
 *
 * @author antonio
 */
class Promotion extends BaseJsonEncodable {

    /**
     * Promotion code
     * @var integer
     */
    protected $code;

    /**
     * Promotion name
     * @var string
     */
    protected $name;

    /**
     * Promotion remark
     * @var string
     */
    protected $remark;

    public function getCode() {
        return $this->code;
    }

    public function getName() {
        return $this->name;
    }

    public function getRemark() {
        return $this->remark;
    }

    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setRemark($remark) {
        $this->remark = $remark;
        return $this;
    }

}
