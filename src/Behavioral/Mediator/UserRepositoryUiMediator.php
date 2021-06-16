<?php

namespace DesignPattern\Behavioral\Mediator;

/**
 * Class UserRepositoryUiMediator
 * @package DesignPattern\Behavioral\Mediator
 */
class UserRepositoryUiMediator implements Mediator
{
    private UserRepository $userRepository;
    private Ui $ui;

    /**
     * UserRepositoryUiMediator constructor.
     * @param UserRepository $userRepository
     * @param Ui $ui
     */
    public function __construct(UserRepository $userRepository, Ui $ui)
    {
        $this->userRepository = $userRepository;
        $this->ui = $ui;

        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }

    /**
     * @param string $user
     */
    public function printInfoAbout(string $user): void
    {
        $this->ui->outputUserInfo($user);
    }

    /**
     * @param string $username
     * @return string
     */
    public function getUser(string $username): string
    {
        return $this->userRepository->getUserName($username);
    }
}
