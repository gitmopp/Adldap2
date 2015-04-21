<?php

namespace Adldap\Tests;

use Adldap\Adldap;

class AdldapLiveTest extends FunctionalTestCase
{
    /**
     * This tests that the public georgia tech LDAP server
     * is up and running. This is useful for making sure a notice
     * is placed on the readme if it's no longer active.
     */
    public function testGeorgiaTechConnection()
    {
        $config = array(
            'account_suffix' => "@gatech.edu",

            'domain_controllers' => array("whitepages.gatech.edu"),

            'base_dn' => 'dc=whitepages,dc=gatech,dc=edu',

            'admin_username' => '',

            'admin_password' => '',
        );

        $ad = new Adldap($config);

        $this->assertTrue($ad->getLdapConnection()->isBound());
    }
}