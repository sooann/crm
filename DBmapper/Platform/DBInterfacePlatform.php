<?php

namespace DBmapper\Platform;

abstract class DBInterfacePlatform {

    //declaring platform type constants
    const DBAL = 'DBAL';

    /** The map of supported doctrine mapping types. */
    protected static $_typesMap = array(
        self::DBAL => 'DBmapper\Platform\DBALPlatform',
    );
    
}

?>