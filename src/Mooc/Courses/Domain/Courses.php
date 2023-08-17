<?php

namespace CodelyTv\Mooc\Courses\Domain;

use Doctrine\Common\Collections\ArrayCollection;

class Courses extends ArrayCollection
{
    public function __construct(array $courses = [])
    {
        parent::__construct($courses);
    }
}