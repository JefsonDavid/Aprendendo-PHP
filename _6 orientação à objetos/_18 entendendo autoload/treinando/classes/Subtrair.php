<?php

    class Subtrair {
        private $resultado = 0;

        private function subtrair($a, $b) {
            $this->resultado = $a - $b;
        }

        public function setSubtrair($a, $b) {
            $this->subtrair($a, $b);
        }

        public function getSubtrair() {
            return $this->resultado;
        }
    }