<?php

namespace Parser;

class DocumentTransformer {
    public function transform(array $borgMetadata): array {
        // Transform Borg metadata to ZincSearch document format
        $document = [];

        // Assuming borgMetadata has keys that match ZincSearch document fields
        foreach ($borgMetadata as $key => $value) {
            // Example transformation logic (customize as needed)
            $document[$key] = $value;
        }

        return $document;
    }
}