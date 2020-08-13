<?php
namespace Patterns\FactoryMethod\SocialNetworkExample;

interface SocialNetworkConnector
{
    public function login(): void;
    public function logout(): void;
    public function createPost($content): void;
}