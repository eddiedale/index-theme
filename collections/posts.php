<?php

return function ($site) {
    return $site->find('blog')->children()->listed()->sortBy('date', 'desc');
};