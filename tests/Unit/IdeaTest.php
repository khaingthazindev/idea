<?php

declare(strict_types=1);

use App\Models\Idea;
use App\Models\User;
use Ramsey\Collection\Collection;

test('it belongs to a user', function () {
    $idea = Idea::factory()->create();

    expect($idea->user)->toBeInstanceOf(User::class);
});

test('it can have steps', function () {
    $idea = Idea::factory()->create();

    expect($idea->steps)->toBeInstanceOf(Collection::class);
});
