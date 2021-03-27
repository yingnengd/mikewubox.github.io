<?php
/**
 * Created by PhpStorm.
 * User: FZS
 * Time: 2021/03/27  
 */
class freeApi
{
    private $apiUrl;

    public function __construct()
    {
        $this->apiUrl = 'https://way.jd.com/JDAI/intelligent_creation?sku=100006079301&appkey=15cdd5b196a4961065ca669c2224e87f';
    }

    /**
     * 获取结果
     * @return array
     */
    public function getResult()
    {
        return file_get_contents($this->apiUrl);
    }
}