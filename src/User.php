<?php
namespace Slack;

/**
 * Contains information about a team member.
 */
class User extends SlackUser
{
    /**
     * @var ApiClient|null
     */
    protected $client;

    /**
     * @var array
     */
    protected $data;

    /**
     * User constructor.
     * @param ApiClient|null $client
     * @param array $data
     */
    public function __construct(ApiClient $client = null, array $data = [])
    {
        $this->client = $client;
        $this->data = $data;
    }

    /**
     * @return null|ApiClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return array
     */
    public function getRawUser()
    {
        return $this->data;
    }
}
