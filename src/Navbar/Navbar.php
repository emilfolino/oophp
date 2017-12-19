<?php

namespace Efo\Navbar;

/**
 * Navbar to generate HTML för a navbar from a configuration array.
 */
class Navbar implements
    \Anax\Common\ConfigureInterface,
    \Anax\Common\AppInjectableInterface
{
    use \Anax\Common\ConfigureTrait,
        \Anax\Common\AppInjectableTrait;
    /**
     * Get Links for the navbar.
     *
     * @return string as Links with the navbar.
     */
    public function getLinks()
    {
        $links = "";
        foreach ($this->config["items"] as $key => $value) {
            $links .= '<a class="navbar-item" href="' . $this->app->url->create($value["route"]) . '">' . $value["text"] . '</a>';
        }

        return $links;
    }

    /**
     * Get Home link for the brand in navbar.
     *
     * @return string as url with the link home.
     */
    public function getHomeLink()
    {
        return ($this->config["items"]["home"]) ? $this->app->url->create($this->config["items"]["home"]["route"]) : "/";
    }
}
