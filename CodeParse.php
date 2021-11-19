<?php
namespace Zwei\PhpCodeParse;


class CodeParse extends StringParse
{
    public function execute($code)
    {
        $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff = $code;
        extract($this->getVars());
        eval($code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff);
        $vars = compact("vars", array_keys($this->vars));
        $this->vars = $vars;
    }
}