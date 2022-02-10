<?php

Kirby::plugin('lemmon/pages', [
  'pageMethods' => [
    'getAnchor' => function () {
      return str_replace('/', '__', explode('/', $this->id(), 2)[1]);
    },
  ],
]);
