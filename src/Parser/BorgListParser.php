<?php

namespace Parser; 

class BorgListParser {
    private $data;

    public function __construct(string $json)
    {
        $this->data = json_decode($json, true);
    }

    public function getStructuredData(): array
    {
        // Implement parsing logic to convert JSON output to structured data here.
        return $this->data; // return structured data in desired format
    }

    // Add more methods as needed to assist with parsing
}
