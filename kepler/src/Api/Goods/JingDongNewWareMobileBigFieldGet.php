<?php
/**
 * 查询商品大字段（H5）
 * User: smallsea
 * Date: 2018/8/17
 * Time: 17:40
 */

namespace Jd\Kepler\Api\Goods;


use Jd\Kepler\KeplerBase;

class JingDongNewWareMobileBigFieldGet extends KeplerBase
{
    /**
     * 商品编号
     * @var int
     */
    protected $skuId;

    /**
     * @return mixed
     */
    public function getSkuId(): int
    {
        return $this->skuId;
    }

    /**
     * @param mixed $skuId
     */
    public function setSkuId($skuId): void
    {
        $this->skuId = $skuId;
    }

    /**
     * 接口方法
     * @return string
     */
    public function getApiMethod(): string
    {
        return 'jingdong.new.ware.mobilebigfield.get';
    }
}