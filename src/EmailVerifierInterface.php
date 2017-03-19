<?php

declare(strict_types=1);

namespace PCF\DisposableEmail;

/**
 * Interface EmailVerifierInterface
 *
 * @package PCF\DisposableEmail\Verifier
 */
interface EmailVerifierInterface
{
    /** Domain is known and trusted */
    const DOMAIN_TRUSTED   = 1;

    /** Domain is known and untrusted */
    const DOMAIN_UNTRUSTED = 2;

    /** Domain is known and user not decided about trust policy*/
    const DOMAIN_KNOWN     = 3;

    /** Domain is unknown */
    const DOMAIN_UNKNOWN   = 4;

    /**
     * Method will check email's domain status based on inserted into class lists.
     *
     * @param string $domain
     *
     * @return int
     */
    public function verifyDomain(string $domain): int;
}
