<?php

declare(strict_types=1);

use Coduo\PHPMatcher\PHPUnit\PHPMatcherConstraint;

it('works fine', function () {
    $data = [
        /* @lang JSON */
        '{
            "url": "01BX5ZZKBKACTAV9WEVGEMMVS0"
        }',
        /* @lang JSON */
        '{
            "url": "@ulid@"
        }',
    ];

    expect($data[0])->toMatchConstraint(new PHPMatcherConstraint($data[1]));
});

it('shows a warning', function () {
    $data = [
        /* @lang JSON */
        '{
            "url": "/profile/01BX5ZZKBKACTAV9WEVGEMMVS0"
        }',
        /* @lang JSON */
        '{
            "url": "/profile/@ulid@"
        }',
    ];

    expect($data[0])->toMatchConstraint(new PHPMatcherConstraint($data[1]));
});
