<?php

test('example', function ($url) {
    $this->get($url)->assertOk();
})->with('routes');
