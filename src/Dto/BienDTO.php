<?php

namespace App\Dto;


class BienDTO
{

    private int $id;
    private string $title;
    private string $description;
    private int $surface;
    private int $rooms;
    private int $bedrooms;
    private int $floor;
    private int $price;
    private string $heat;
    private string $city;
    private string $address;
    private string $postal_code;
    private bool $sold = false;
    private \DateTime $created_at;
    private string $image_front;
    private string $type;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return BienDTO
     */
    public function setId(int $id): BienDTO
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return BienDTO
     */
    public function setTitle(string $title): BienDTO
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return BienDTO
     */
    public function setDescription(string $description): BienDTO
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getSurface(): int
    {
        return $this->surface;
    }

    /**
     * @param int $surface
     * @return BienDTO
     */
    public function setSurface(int $surface): BienDTO
    {
        $this->surface = $surface;
        return $this;
    }

    /**
     * @return int
     */
    public function getRooms(): int
    {
        return $this->rooms;
    }

    /**
     * @param int $rooms
     * @return BienDTO
     */
    public function setRooms(int $rooms): BienDTO
    {
        $this->rooms = $rooms;
        return $this;
    }

    /**
     * @return int
     */
    public function getBedrooms(): int
    {
        return $this->bedrooms;
    }

    /**
     * @param int $bedrooms
     * @return BienDTO
     */
    public function setBedrooms(int $bedrooms): BienDTO
    {
        $this->bedrooms = $bedrooms;
        return $this;
    }

    /**
     * @return int
     */
    public function getFloor(): int
    {
        return $this->floor;
    }

    /**
     * @param int $floor
     * @return BienDTO
     */
    public function setFloor(int $floor): BienDTO
    {
        $this->floor = $floor;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     * @return BienDTO
     */
    public function setPrice(int $price): BienDTO
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeat(): string
    {
        return $this->heat;
    }

    /**
     * @param string $heat
     * @return BienDTO
     */
    public function setHeat(string $heat): BienDTO
    {
        $this->heat = $heat;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return BienDTO
     */
    public function setCity(string $city): BienDTO
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @param string $address
     * @return BienDTO
     */
    public function setAddress(string $address): BienDTO
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postal_code;
    }

    /**
     * @param string $postal_code
     * @return BienDTO
     */
    public function setPostalCode(string $postal_code): BienDTO
    {
        $this->postal_code = $postal_code;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSold(): bool
    {
        return $this->sold;
    }

    /**
     * @param bool $sold
     * @return BienDTO
     */
    public function setSold(bool $sold): BienDTO
    {
        $this->sold = $sold;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->created_at;
    }

    /**
     * @param \DateTime $created_at
     * @return BienDTO
     */
    public function setCreatedAt(\DateTime $created_at): BienDTO
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageFront(): string
    {
        return $this->image_front;
    }

    /**
     * @param string $image_front
     * @return BienDTO
     */
    public function setImageFront(string $image_front): BienDTO
    {
        $this->image_front = $image_front;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return BienDTO
     */
    public function setType(string $type): BienDTO
    {
        $this->type = $type;
        return $this;
    }





}