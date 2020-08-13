<?php
namespace Patterns\FactoryMethod\SocialNetworkExample;

abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post($content): void
    {
        $network = $this->getSocialNetwork();

        $network->login();
        $network->createPost($content);
        $network->logout();
    }
}
