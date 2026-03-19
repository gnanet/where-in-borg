<?php

class Logger {
    const LOG_FILE = 'application.log';

    public static function log($message) {
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "["] . $timestamp . "] " . $message . "\n";
        file_put_contents(self::LOG_FILE, $logMessage, FILE_APPEND);
    }

    public static function setLogFile($filePath) {
        self::LOG_FILE = $filePath;
    }
}

// Usage example:
// Logger::log('This is a log message.');
