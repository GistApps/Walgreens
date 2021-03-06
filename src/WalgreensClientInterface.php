<?php
namespace Gist\Walgreens;

use GuzzleHttp\Promise\PromiseInterface;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\UriInterface;

/**
 * Client interface for sending HTTP requests.
 */
interface WalgreensClientInterface
{

    /**
     * Send an HTTP request.
     *
     * @param RequestInterface $params Request to send
     * @param array            $endpoint The enpoint to retrieve
     *
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function request(array $params = [], string $endpoint);

    /**
     * Get a client configuration option.
     *
     * These options include default request options of the client, a "handler"
     * (if utilized by the concrete client), and a "base_uri" if utilized by
     * the concrete client.
     *
     * @param string|null $option The config option to retrieve.
     *
     * @return mixed
     */
    public function getConfig(string $option);
}
