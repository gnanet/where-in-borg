<?php

namespace Indexer;  

class IndexManager  
{
    // Property to hold indices  
    private array $indices = [];

    // Create a new index  
    public function createIndex(string $indexName): string  
    {
        if (in_array($indexName, $this->indices)) {
            return "Index \"$indexName\" already exists.";
        }
        $this->indices[] = $indexName;
        return "Index \"$indexName\" created.";
    }

    // Delete an existing index  
    public function deleteIndex(string $indexName): string  
    {
        $key = array_search($indexName, $this->indices);
        if ($key === false) {
            return "Index \"$indexName\" does not exist.";
        }
        unset($this->indices[$key]);
        return "Index \"$indexName\" deleted.";
    }

    // Check the status of an index  
    public function indexStatus(string $indexName): string  
    {
        return in_array($indexName, $this->indices) ? "Index \"$indexName\" exists." : "Index \"$indexName\" does not exist.";
    }
}