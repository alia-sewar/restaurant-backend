<?php

namespace App\Helpers;

use Illuminate\Pagination\LengthAwarePaginator;

class CustomLengthAwarePaginator extends LengthAwarePaginator
{
    public function toArray()
    {
        $array = parent::toArray();
        unset(
            $array['first_page_url'],
            $array['last_page_url'],
            $array['links'],
            $array['next_page_url'],
            $array['path'],
            $array['prev_page_url'],
        );
        return $array;
    }
}
