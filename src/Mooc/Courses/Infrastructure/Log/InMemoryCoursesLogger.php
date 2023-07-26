<?php

namespace CodelyTv\Mooc\Courses\Infrastructure\Log;

use CodelyTv\Mooc\Courses\Domain\LogRepository;

class InMemoryCoursesLogger implements LogRepository
{
        private string $logFilePath = "../../../log/Mooc/Courses/courses.log";
        private string $coursesTag = "[COURSES]";
        private string $infoTags = "[INFO]";

        public function info($logMessage): void
        {
                $logTime = date("Y-m-d H:i:s");
                $logLine = "[$logTime] $this->infoTags $this->coursesTag $logMessage" . PHP_EOL;

                // Get the parent directory (up three levels) to reach the project root
        $projectRoot = __DIR__ . '/../../../../..';

        // Use the project root to construct the full file path
        $fileHandle = fopen($projectRoot . $this->logFilePath, 'a');

        fwrite($fileHandle, $logLine);

        fclose($fileHandle);
        }
}
