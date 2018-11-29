<?php

namespace AfzalH\LaravelPassportSkipClient;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OauthClients
 * @property mixed secret
 * @property mixed id
 * @package AfzalH\LaravelPassportSkipClient
 * @method static \Illuminate\Database\Eloquent\Builder|OAuthClients wherePasswordClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OAuthClients whereRevoked($value)
 */
class OauthClients extends Model
{
    protected $table = 'oauth_clients';
}
