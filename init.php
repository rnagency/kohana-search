<?php

if (!is_writable(Kohana::$config->load("search.index_path"))) {
    throw new Kohana_Exception('Index path :path is not writeable',
            array('path' => Kohana::$config->load("search.index_path")));
}
?>

