<?php

namespace App\Server\Exceptions;

class SubdomainGeneratorException extends \Exception
{
    protected ?string $generatorName;
    protected array $data = array();

    public function __construct($message, ?string $generatorName = null, $code = 0, \Throwable $previous = null, array $data = array()) {
        parent::__construct($message, $code, $previous);
        $this->generatorName = $generatorName;
        $this->data = $data;
    }

    final public function getGeneratorName(): ?string {
        return $this->generatorName;
    }

    final public function getData(): array {
        return $this->data;
    }

    public function __toString() {
        return !empty($this->generatorName) ?
        __CLASS__ . ": [{$this->code}]: {$this->message}\n" :
        __CLASS__ . ": [{$this->code}]: Subdomain generator '{$this->generatorName}' failed: {$this->message}\n";
    }
}
