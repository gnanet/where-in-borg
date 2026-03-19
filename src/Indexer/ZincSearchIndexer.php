<?php

class ZincSearchIndexer {
    private $baseUrl;

    public function __construct($baseUrl) {
        $this->baseUrl = rtrim($baseUrl, '/');
    }

    public function indexDocument($index, $document) {
        $url = "$this->baseUrl/$index/documents";
        $options = [
            'http' => [
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode($document),
            ],
        ];
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) {
            // Handle error
            throw new Exception('Failed to index document.');
        }
        return json_decode($result, true);
    }
}
