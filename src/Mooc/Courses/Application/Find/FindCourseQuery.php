<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Shared\Domain\Bus\Query\Query;

final class FindCourseQuery implements Query
{
    public function __construct(private readonly string $id)
    {
        
    }
    
    public function id(): string
    {
        return $this->id;
    }
}