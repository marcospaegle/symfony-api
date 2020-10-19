<?php

namespace App\Traits;

use \DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\SerializedName;

trait CreatedAtTrait
{
    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    protected $created_at;

    /**
     * @SerializedName("created_at")
     */
    public function getCreatedAt(): DateTime
    {
        return $this->created_at;
    }

    /**
     * @SerializedName("created_at")
     * @ORM\PrePersist
     */
    public function setCreatedAt(): self
    {
        $this->created_at = new DateTime('now');

        return $this;
    }
}
