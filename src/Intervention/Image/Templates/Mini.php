<?php

namespace Intervention\Image\Templates;

use Intervention\Image\Image;
use Intervention\Image\Filters\FilterInterface;

class Mini implements FilterInterface
{
    public function applyFilter(Image $image)
    {
        return $image->fit(40, 40);
    }
}