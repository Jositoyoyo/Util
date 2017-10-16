<?php

class LoadJson {

    public function __construct($file) {
        if (file_exists($file)) {
            $file = file_get_contents($file);
            return json_decode($file, true);
        }
            return 'error';

    } 
}
