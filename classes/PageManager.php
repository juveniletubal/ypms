<?php

class PageManager
{
    private $title = 'Admin Panel';
    private $current_page = '';
    private $breadcrumbs = [];

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setCurrentPage($page)
    {
        $this->current_page = $page;
    }

    public function getCurrentPage()
    {
        return $this->current_page;
    }

    public function addBreadcrumb($name, $url = '')
    {
        $this->breadcrumbs[] = ['name' => $name, 'url' => $url];
    }

    public function getBreadcrumbs()
    {
        return $this->breadcrumbs;
    }

    public function isActive($page)
    {
        return $this->current_page === $page ? 'active' : '';
    }
}
