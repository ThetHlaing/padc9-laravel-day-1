<?php
declare (strict_types = 1);
require_once('src/Email.php');

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            3,
            Email::sum(1, 2)
        );

        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );

        $this->assertEquals(
            'user@test.org',
            Email::fromString('user@test.org')
        );
    }
}
