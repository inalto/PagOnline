<?php

namespace PagOnline\Exception;

class ConnectionException extends IOException {
    public function __construct($url, $message) {
        parent::__construct("[" . $url . "] " . $message);
    }
}