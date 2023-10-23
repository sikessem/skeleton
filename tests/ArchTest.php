<?php

declare(strict_types=1);

test('globals')
    ->expect(['dd', 'dump', 'ray'])
    ->not->toBeUsed();

test('classes')
    ->expect('Sikessem\Skeleton')
    ->toUseStrictTypes();

test('contracts')
    ->expect('Sikessem\Skeleton\Contracts')
    ->interfaces()
    ->toOnlyBeUsedIn('Sikessem\Skeleton', 'Sikessem\Skeleton\Contracts');

test('concerns')
    ->expect('Sikessem\Skeleton\Concerns')
    ->traits()
    ->toOnlyBeUsedIn('Sikessem\Skeleton', 'Sikessem\Skeleton\Concerns');
