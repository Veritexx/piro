<?php

use App\Models\Task;

/**
 * Diese Funktion erstellt Erstellung der Task-ID (z.B. ID-2023-0001)
 * @return string
 */

function taskId()
{
    $currentYear = now()->year;
    $taskCount = Task::whereYear('created_at', $currentYear)->count() + 1;
    $taskId = 'ID' . $currentYear . '-' . str_pad($taskCount, 4, '0', STR_PAD_LEFT);

    return $taskId;
}
