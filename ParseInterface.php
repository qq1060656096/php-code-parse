<?php
namespace Zwei\PhpCodeParse;


interface ParseInterface
{
    /**
     * @return mixed
     */
    public function getVars();

    /**
     * @param mixed $vars
     */
    public function setVars($vars);

    /**
     * @param $code
     * @return mixed
     */
    public function execute($code);
}