<?php
namespace App\DTO;

class Product {
    private $productId;
    private $title;
    private $subtitle;
    private $image;
    private $category;

    private $url;
    private $upc;
    private $gtin14;
    private $createdAt;
    private $brand;

    /**
     * @param $productId
     * @param $title
     * @param $subtitle
     * @param $image
     * @param $category
     */
    public function __construct($productId, $title, $subtitle, $image, $category)
    {
        $this->productId = $productId;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->image = $image;
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * @param mixed $subtitle
     */
    public function setSubtitle($subtitle): void
    {
        $this->subtitle = $subtitle;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category): void
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getUpc()
    {
        return $this->upc;
    }

    /**
     * @param mixed $upc
     */
    public function setUpc($upc): void
    {
        $this->upc = $upc;
    }

    /**
     * @return mixed
     */
    public function getGtin14()
    {
        return $this->gtin14;
    }

    /**
     * @param mixed $gtin14
     */
    public function setGtin14($gtin14): void
    {
        $this->gtin14 = $gtin14;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at): void
    {
        $this->createdAt = $created_at;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand): void
    {
        $this->brand = $brand;
    }


}