<?php

namespace CodelyTv\Mooc\Courses\Domain;

interface LogRepository
{
    public function info(string $logMessage);
}