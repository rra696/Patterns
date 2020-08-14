<?php
namespace Patterns\FactoryMethod\AppointmentExample;

class BlogsCommsManager extends CommsManager
{
    public function getApptEncoder(): ApptEncoder
    {
        return new BlogsApptEncoder;
    }

    public function getHeaderText(): string
    {
        return "\nBlogs Cal верхний колонтитул \n";
    }
    public function getFooterText(): string
    {
        return "Blogs Cal нижний колонтитул \n";
    }
}