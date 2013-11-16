<?php

namespace SagePHP\Filesystem\File;

interface FileInterface
{
    public function load();

    public function save($data);
}
