<?php

    class News
    {
        public $id;
        public $title;
        public $content;
        public $created;

        public function __construct($title, $content)
        {
            $this->title = $title;
            $this->content = $content;
        }

        function get()
        {

        }
    }