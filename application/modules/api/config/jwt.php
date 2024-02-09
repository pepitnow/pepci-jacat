<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| JWT Config
| -------------------------------------------------------------------------
| Values to be used in Jwt Client library
|
*/

$config['jwt_issuer'] = 'pepITnow - PepCI JACAT';

// must be non-empty
$config['jwt_secret_key'] = 'This is top secret!';

// expiry time since a JWT is issued (in seconds); set NULL to never expired
$config['jwt_expiry'] = 86400;