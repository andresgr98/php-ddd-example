<?php

declare(strict_types=1);

namespace CodelyTv\Mooc\Courses\Application\Find;

use CodelyTv\Mooc\Courses\Domain\CourseFinder;
use CodelyTv\Mooc\Courses\Domain\Course;
use CodelyTv\Mooc\Shared\Domain\Courses\CourseId;
use CodelyTv\Shared\Domain\Bus\Command\CommandHandler;

final class FindCourseCommandHandler implements CommandHandler
{
    public function __construct(private readonly CourseFinder $finder)
    {
        
    }
    
    public function __invoke(FindCourseCommand $command): ?Course
    {
        $id = new CourseId($command->id());
        return $this->finder->__invoke($id);
    }
}