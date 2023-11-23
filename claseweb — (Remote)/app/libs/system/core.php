<?php
    namespace System;
    class Core
    {
        public $load;
        public function __construct(){
            $this->load = Load::getInstance();
        }
    }
?>