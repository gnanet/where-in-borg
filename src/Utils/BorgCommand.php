<?php

namespace Utils;

class BorgCommand {
    private $command;

    public function __construct($command) {
        $this->command = $command;
    }

    public function execute() {
        $output = array();
        $return_var = 0;

        // Execute the command
        exec($this->command, $output, $return_var);

        // Return JSON output
        return json_encode(array(
            'output' => $output,
            'return_code' => $return_var
        ));
    }
}
