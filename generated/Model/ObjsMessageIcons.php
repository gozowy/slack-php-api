<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsMessageIcons extends \ArrayObject
{
    /**
     * @var string
     */
    protected $emoji;

    /**
     * @return string
     */
    public function getEmoji(): ?string
    {
        return $this->emoji;
    }

    /**
     * @param string $emoji
     *
     * @return self
     */
    public function setEmoji(?string $emoji): self
    {
        $this->emoji = $emoji;

        return $this;
    }
}