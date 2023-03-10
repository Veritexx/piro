@props('task_hash')

@php
    dd($task);

       $task = \App\Models\Task::where('task_hash', $task_hash)->first();
@endphp

<div>
    <small>
        <strong>{{ __('Created at') }}:</strong> {{ germanDateTime($task->created_at) }} |
        <strong>{{ __('Updated at') }}:</strong> {{ germanDateTime($task->updated_at) }} |
        <strong>{{ __('Deleted at') }}:</strong>
        @if($task->deleted_at)
            {{ germanDateTime($task->deleted_at) }}
        @else
            ---
        @endif
    </small>
</div>
