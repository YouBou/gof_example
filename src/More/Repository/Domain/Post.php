<?php

namespace DesignPattern\More\Repository\Domain;

/**
 * Class Post
 * @package DesignPattern\More\Repository\Domain
 */
class Post
{
    private PostId $id;
    private PostStatus $status;
    private string $title;
    private string $text;

    /**
     * @param PostId $id
     * @param string $title
     * @param string $text
     * @return static
     */
    public static function draft(PostId $id, string $title, string $text): self
    {
        return new self(
            $id,
            PostStatus::fromString(PostStatus::STATE_DRAFT),
            $title,
            $text
        );
    }

    /**
     * @param array $state
     * @return static
     */
    public static function fromState(array $state): self
    {
        return new self(
            PostId::fromInt($state['id']),
            PostStatus::fromInt($state['statusId']),
            $state['title'],
            $state['text']
        );
    }

    /**
     * Post constructor.
     * @param PostId $id
     * @param PostStatus $status
     * @param string $title
     * @param string $text
     */
    private function __construct(
        PostId $id,
        PostStatus $status,
        string $title,
        string $text
    ) {
        $this->id = $id;
        $this->status = $status;
        $this->title = $title;
        $this->text = $text;
    }

    /**
     * @return PostId
     */
    public function getId(): PostId
    {
        return $this->id;
    }

    /**
     * @return PostStatus
     */
    public function getStatus(): PostStatus
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}
