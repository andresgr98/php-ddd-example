<?php
declare(strict_types=1);
namespace CodelyTv\Mooc\Videos\Application\Update;

use CodelyTv\Shared\Domain\Bus\Command\Command;

class UpdateVideoTitleCommand implements Command
{
    public function __construct(
        private readonly string $id,
        private readonly string $videoTitle,
    )
    {
    }

    public function id(): string
    {
        return $this->id;
    }

    public function videoTitle(): string
    {
        return $this->videoTitle;
    }

}