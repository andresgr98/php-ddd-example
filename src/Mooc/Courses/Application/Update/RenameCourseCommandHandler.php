<?php

namespace CodelyTv\Mooc\Courses\Application\Update;

use CodelyTv\Mooc\Courses\Domain\CourseName;
use CodelyTv\Mooc\Shared\Domain\Courses\CourseId;
use CodelyTv\Shared\Domain\Bus\Command\CommandHandler;

final class RenameCourseCommandHandler implements CommandHandler
{
    public function __construct(private readonly CourseRenamer $renamer){
        
    }
    
    public function __invoke(RenameCourseCommand $command): void
    {
        $id = new CourseId($command->id());
        $newName = new CourseName($command->name());
        $this->renamer->__invoke($id, $newName);
    }

}