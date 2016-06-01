<?php

namespace AppBundle\Twig;

class MarkdownExtension extends \Twig_Extension
{
    public function getName()
    {
        return 'app_markdown';
    }

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('markdownify', array($this, 'parseMarkdown'))
        ];
    }
    
    public function parseMarkdown($str)
    {
        return strtoupper($str);
    }

}