<?php
function view($name, $data = [])
{
    extract($data);
    include __DIR__ . "/views/{$name}.php";
}
