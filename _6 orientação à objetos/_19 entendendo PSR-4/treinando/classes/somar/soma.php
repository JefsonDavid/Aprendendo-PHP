<?php

    namespace somar;

    class Soma {

        private $resultado = 0;

        private function somar($a, $b) {
            $this->resultado = $a + $b;
        }

        public function setSomar($a, $b) {
            $this->somar($a, $b);
        }

        public function getSomar() {
            return $this->resultado;
        }
    }