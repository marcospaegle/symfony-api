<?php

namespace App\Traits;

use \DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\SerializedName;

trait DeletedAtTrait
{
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $deleted_at;

    /**
     * @SerializedName("deleted_at")
     */
    public function getDeletedAt(): ?DateTime
    {
        return $this->deleted_at;
    }

    /**
     * @SerializedName("deleted_at")
     * @ORM\PreUpdate
     */
    public function setDeletedAt(): self
    {
        $this->deleted_at = $deleted_at;

        return $this;
    }
}
