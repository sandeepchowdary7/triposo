<?php

namespace Sandeepchowdary7\Laratriposo\Filter;

interface FilterContract
{
    /**
     * Generate, transform or filter your search query
     *
     * @param $query
     * @return array
     */
    public function parse($query =[]);
}