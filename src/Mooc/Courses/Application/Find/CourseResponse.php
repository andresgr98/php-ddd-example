<?php

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Shared\Domain\Bus\Query\Response;

final class CourseResponse implements Response
{
    public function __construct(
        private readonly string $id,
        private readonly string $duration,
        private readonly string $name
        )
    {
    }
    
    public function id(): string
    {
        return $this->id;
    }

    public function duration(): string
    {
        return $this->duration;
    }
    
    public function name(): string
    {
        return $this->name;
    }
}