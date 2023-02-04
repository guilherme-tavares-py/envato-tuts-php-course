<?php

require("glossaryterm.class.php");

class DataProvider {

    function __construct(public $source) {}


    public function get_terms() {

    }

    public function get_term($term) {

    }


    private function get_data() {
        $json = '';
        if(!file_exists($this->file_path)) {
            file_put_contents($this->file_path, '');
        } else {
            $json = file_get_contents($this->file_path);
        }

        return $json;
    }

    public function search_terms($search) {

    }

    public function add_term($term, $definition) { }


    private function set_data($arr) {

        $json = json_encode($arr);

        file_put_contents($this->file_path, $json);


    }

    public function update_term($original_term, $new_term, $definition) {

    }

    public function delete_term($term) { }

}