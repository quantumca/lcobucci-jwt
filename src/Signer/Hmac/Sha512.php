<?php
declare(strict_types=1);

namespace Lcobucci\JWT\Signer\Hmac;

use Lcobucci\JWT\Signer\Hmac;

final class Sha512 extends UnsafeSha512
{
    public function algorithmId(): string
    {
        return 'HS512';
    }

    public function algorithm(): string
    {
        return 'sha512';
    }

    public function minimumBitsLengthForKey(): int
    {
        return 512;
    }
}
