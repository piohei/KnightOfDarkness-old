<?php
private $config = array
        (
            'open_string' => array('[',']'),
            'close_string' => array('[/',']')
        );
    
    private $tags = array
        (
            'b' => '<strong>{value}</strong>',
            'i' => '<span style="font-style:italic;">{value}</span>',
            'u' => '<span style="text-decoration:underline;">{value}</span>',
            'img' => '<img src="{value}" alt="obrazek" title="{parameter}" />',
            'url' => '<a href="{value}">{parameter}</a>',
            'size' => '<span style="font-size:{parameter}px">{value}</span>',
            'ul' => '<ul>{value}</ul>',
            'ol' => '<ol>{value}</ol>',
            'li' => '<li>{value}</li>'
        );
?>