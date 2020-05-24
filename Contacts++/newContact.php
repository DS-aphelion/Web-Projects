<?php

    class Contact
    {
        public $contactID;
        public $first;
        public $last;

        function set_first($first)
        {
            $this->first = $first;
        }

        function set_last($last)
        {
            $this->last = $last;
        }

        function get_name()
        {
            return $this->first . $this->last;
        }

        function socials()
        {
            $socials = array();

            print_r($socials);
        }
    }


    $test = new Contact();
    $test->set_first("abcd");
    $test->set_last("edfg");
    echo $test->socials();



?>