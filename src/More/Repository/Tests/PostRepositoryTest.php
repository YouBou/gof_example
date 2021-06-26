<?php

namespace DesignPattern\More\Repository\Tests;

use DesignPattern\More\Repository\Domain\Post;
use DesignPattern\More\Repository\Domain\PostId;
use DesignPattern\More\Repository\Domain\PostStatus;
use DesignPattern\More\Repository\InMemoryPersistence;
use DesignPattern\More\Repository\PostRepository;
use PHPUnit\Framework\TestCase;
use OutOfBoundsException;

/**
 * Class PostRepositoryTest
 * @package DesignPattern\More\Repository\Tests
 */
class PostRepositoryTest extends TestCase
{
    private PostRepository $repository;

    /**
     * @inheritDoc
     */
    protected function setUp(): void
    {
        $this->repository = new PostRepository(new InMemoryPersistence());
    }

    public function testCanGenerateId(): void
    {
        self::assertEquals(1, $this->repository->generateId()->toInt());
    }

    public function testThrowsExceptionWhenTryingToFindPostWhichDoesNotExist(): void
    {
        $this->expectException(OutOfBoundsException::class);
        $this->expectDeprecationMessage('Post with id 42 does not exist');

        $this->repository->findById(PostId::fromInt(42));
    }

    public function testCanPersistPostDraft(): void
    {
        $postId = $this->repository->generateId();
        $post = Post::draft($postId, 'Repository Pattern', 'Design Patterns PHP');
        $this->repository->save($post);

        $this->repository->findById($postId);

        self::assertEquals($postId, $this->repository->findById($postId)->getId());
        self::assertEquals(PostStatus::STATE_DRAFT, $post->getStatus()->toString());
    }
}