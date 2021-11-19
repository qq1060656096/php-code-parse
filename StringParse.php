<?php
namespace Zwei\PhpCodeParse;


class StringParse implements ParseInterface
{
    protected $vars;

    /**
     * @return mixed
     */
    public function getVars()
    {
        return $this->vars;
    }

    /**
     * @param mixed $vars
     */
    public function setVars($vars)
    {
        $this->vars = $vars;
    }

    /**
     * $code = sha256(mac zwei  2021:11:16.1230.01 f0:18:98:64:32:9c)
     * @param string $code
     * @return mixed
     */
    public function execute($code) {
        return $this->executeString($code);
    }

    /**
     * $code = sha256(mac zwei  2021:11:16.1230.01 f0:18:98:64:32:9c)
     * @param string $code
     * @return mixed
     */
    protected function executeCode($code) {
        $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff = ($code);
        extract($this->vars);
        $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_return = <<<str
return "$code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff";
str;
        return eval($code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_return);
    }

    protected function executeString($string) {
        $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff = $string;
        $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_this = $this;
        $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_pattern = '/(\$\{|(\{\$)).*?\}/';
        extract($this->vars);
        $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_callback = function ($code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_matches) use($code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_this) {
            if (is_array($code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_matches)) {
                return $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_this->executeCode($code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_matches[0]);
            }
            return $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_matches;
        };
        $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff = preg_replace_callback($code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_pattern, $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff_callback, $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff);
        return $code_d48950b6a986cc7754e2da5c95b4a5ba5bc15b1c0d20d16168e50232d766d2ff;
    }
}