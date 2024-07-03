<?php

declare(strict_types=1);

use Coduo\PHPMatcher\PHPUnit\PHPMatcherConstraint;
use PHPUnit\Framework\TestCase;

class MatchJsonPhpUnitTest extends TestCase
{
    public function test_matcher_with_json(): void
    {
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

        $this->assertThat($data[0], new PHPMatcherConstraint($data[1]));
    }
}
