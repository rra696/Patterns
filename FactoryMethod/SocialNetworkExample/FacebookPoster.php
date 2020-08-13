<?php
namespace Patterns\FactoryMethod\SocialNetworkExample;

require_once('./SocialNetworkPoster.php');

class FacebookPoster extends SocialNetworkPoster
{   
    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }
}