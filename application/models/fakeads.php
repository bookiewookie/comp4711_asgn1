<?php

/**
 * These are ads for my ads table
 * This would be considered a "mock database" model.
 *
 * @author Shah Newaz Khan
 */
class Adverts extends CI_Model {

    // The data comes from http://www.quotery.com/top-100-funny-quotes-of-all-time/?PageSpeed=noscript
    var $data = array(
        array('id' => '1', 'name' => 'Henrik Sedin', 'title' => 'Greatest Captain ever', 'price' =>'$33',
            'condition' => 'Fair', 'contact' => 'hs33@canucks.com'),
        array('id' => '2', 'name' => 'Tupac Shakur', 'title' => 'Greatest rapper ever', 'price' =>'$56',
            'condition' => 'Good', 'contact' => 'tupac@thuglife.com'),
        array('id' => '3', 'name' => 'Henrik Sedin', 'title' => 'Greatest Captain ever', 'price' =>'$33',
            'condition' => 'Fair', 'contact' => 'hs33@canucks.com'),
        array('id' => '4', 'name' => 'Tupac Shakur', 'title' => 'Greatest rapper ever', 'price' =>'$56',
            'condition' => 'Good', 'contact' => 'tupac@thuglife.com'),
        array('id' => '3', 'name' => 'Henrik Sedin', 'title' => 'Greatest Captain ever', 'price' =>'$33',
            'condition' => 'Fair', 'contact' => 'hs33@canucks.com'),
        array('id' => '4', 'name' => 'Tupac Shakur', 'title' => 'Greatest rapper ever', 'price' =>'$56',
            'condition' => 'Good', 'contact' => 'tupac@thuglife.com')
    );

    // Constructor
    public function __construct() {
        parent::__construct();
    }

    // retrieve a single quote
    public function get($which) {
        // iterate over the data until we find the one we want
        foreach ($this->data as $record)
            if ($record['id'] == $which)
                return $record;
        return null;
    }

    // retrieve all of the quotes
    public function all() {
        return $this->data;
    }

    // retrieve the first quote
    public function first() {
        return $this->data[0];
    }

    // retrieve the last quote
    public function last() {
        $index = count($this->data) - 1;
        return $this->data[$index];
    }

}
