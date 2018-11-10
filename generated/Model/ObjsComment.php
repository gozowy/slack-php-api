<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsComment extends \ArrayObject
{
    /**
     * @var string
     */
    protected $comment;
    /**
     * @var int
     */
    protected $created;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var bool
     */
    protected $isIntro;
    /**
     * @var DefsPinnedInfoItem[]
     */
    protected $pinnedInfo;
    /**
     * @var string[]
     */
    protected $pinnedTo;
    /**
     * @var ObjsReaction[]
     */
    protected $reactions;
    /**
     * @var int
     */
    protected $timestamp;
    /**
     * @var string
     */
    protected $user;

    /**
     * @return string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     *
     * @return self
     */
    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return int
     */
    public function getCreated(): ?int
    {
        return $this->created;
    }

    /**
     * @param int $created
     *
     * @return self
     */
    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsIntro(): ?bool
    {
        return $this->isIntro;
    }

    /**
     * @param bool $isIntro
     *
     * @return self
     */
    public function setIsIntro(?bool $isIntro): self
    {
        $this->isIntro = $isIntro;

        return $this;
    }

    /**
     * @return DefsPinnedInfoItem[]
     */
    public function getPinnedInfo(): ?\ArrayObject
    {
        return $this->pinnedInfo;
    }

    /**
     * @param DefsPinnedInfoItem[] $pinnedInfo
     *
     * @return self
     */
    public function setPinnedInfo(?\ArrayObject $pinnedInfo): self
    {
        $this->pinnedInfo = $pinnedInfo;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getPinnedTo(): ?array
    {
        return $this->pinnedTo;
    }

    /**
     * @param string[] $pinnedTo
     *
     * @return self
     */
    public function setPinnedTo(?array $pinnedTo): self
    {
        $this->pinnedTo = $pinnedTo;

        return $this;
    }

    /**
     * @return ObjsReaction[]
     */
    public function getReactions(): ?array
    {
        return $this->reactions;
    }

    /**
     * @param ObjsReaction[] $reactions
     *
     * @return self
     */
    public function setReactions(?array $reactions): self
    {
        $this->reactions = $reactions;

        return $this;
    }

    /**
     * @return int
     */
    public function getTimestamp(): ?int
    {
        return $this->timestamp;
    }

    /**
     * @param int $timestamp
     *
     * @return self
     */
    public function setTimestamp(?int $timestamp): self
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return string
     */
    public function getUser(): ?string
    {
        return $this->user;
    }

    /**
     * @param string $user
     *
     * @return self
     */
    public function setUser(?string $user): self
    {
        $this->user = $user;

        return $this;
    }
}