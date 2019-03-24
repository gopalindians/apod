<?php
/**
 * apod_simple एस्ट्रोनॉमी पिक्चर ऑफ द डे आपको https://api.nasa.gov से छवियां मंगाने में सहायता करती है
 * @author गोपालः शर्माः<gopalindians@gmail.com>
 * @copyright 2019
 * @license MIT 2019
 * @version 0.0.1
 *
 *
 */

class Apod
{
    /**
     *
     */
    private const API_URL = 'https://api.nasa.gov';


    /**
     *
     * get your key https://api.nasa.gov/index.html#getting-started
     * @param string $api_key
     */
    private $api_key;


    private $response;
    private $date;
    private $explanation;
    private $media_type;
    private $service_version;
    private $title;
    private $url;

    public function __construct(string $api_key)
    {
        $this->api_key = $api_key;

    }

    /**
     * @param mixed $api_key
     */
    public function setApiKey($api_key): void
    {
        $this->api_key = $api_key;
    }

    /**
     * @return mixed
     */
    public function getApiKey(): string
    {
        return $this->api_key;
    }

    /**
     * @return $this
     */
    public function fetch(): ?self
    {
        try {
            $this->response = json_decode(file_get_contents(self::API_URL . '/planetary/apod?api_key=' . $this->api_key));
            return $this;
        } catch (Exception $exception) {
            print $exception->getMessage();
        }
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->response->title;
    }


    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->response->date;
    }

    /**
     * @return string
     */
    public function getExplanation(): string
    {
        return $this->response->explanation;
    }

    /**
     * @return string
     */
    public function getMediaType(): string
    {
        return $this->response->media_type;
    }

    /**
     * @return string
     */
    public function getServiceVersion(): string
    {
        return $this->response->service_version;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->response->url;
    }
}