<?php

namespace DesignPattern\More\Repository;

use OutOfBoundsException;
use DesignPattern\More\Repository\Domain\Post;
use DesignPattern\More\Repository\Domain\PostId;

/**
 * Class PostRepository
 * @package DesignPattern\More\Repository
 */
class PostRepository
{
    private Persistence $persistence;

    /**
     * PostRepository constructor.
     * @param Persistence $persistence
     */
    public function __construct(Persistence $persistence)
    {
        $this->persistence = $persistence;
    }

    /**
     * @return PostId
     */
    public function generateId(): PostId
    {
        return Postid::fromInt($this->persistence->generateId());
    }

    /**
     * @param PostId $id
     * @return Post
     * @throws OutOfBoundsException
     */
    public function findById(Postid $id): Post
    {
        try {
            $arrayData = $this->persistence->retrieve($id->toInt());
        } catch (OutOfBoundsException $e) {
            throw new OutOfBoundsException(sprintf('Post with id %d does not exist', $id->toInt()), 0, $e);
        }

        return Post::fromState($arrayData);
    }

    /**
     * @param Post $post
     */
    public function save(Post $post): void
    {
        $this->persistence->persist([
            'id' => $post->getId()->toInt(),
            'statusId' => $post->getStatus()->toInt(),
            'text' => $post->getText(),
            'title' => $post->getTitle(),
        ]);
    }
}
