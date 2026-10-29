<?php 
    session_start();

    abstract class Robo{
        public $nome
        public $modelo
        public $energia
        public $potencia
        public $contador

        function __constructor($nome, $energia, $potencia, $modelo, $contador){
            $this->nome = $nome,
            $this->energia = $energia,
            $this->potencia = $potencia,
            $this->contador = $contador,
            $this->modelo = $modelo
        }

        abstract public function operar()

        abstract public function exibirStatus(){
            return $modelo && $energia && $potencia;
        }

        abstract public function recarregar(){
            $this->energia += 10;
            return $energia
        }

        public function getEnergia(){
            return $energia
        }

        public function setEnergia(){
            $this->energia = $energia
        }
    }

    class Explorador extends Robo{
        
        public function operar(){
            getEnergia()
            if ($energia >= 20){
                $this->energia = $energia - 20;
                echo "Equipamentos foram reparados";
            }
            else {
                echo "Você está sem energia"
            }
        }
        public function exibirStatus(){
            return $modelo && $energia && $potencia;
        }
        public function recarregar(){
            if ($energia < 200){
                $this->energia = $energia + 10;
                $this->contador += 1;
                return $energia
            }
            else {
                echo "Energia no máximo"
            }
        }
    }

    class Engenheiro extends Robo{
        
        public function operar(){
            getEnergia()
            if ($energia >= 20){
                $this->energia = $energia - 20;
                echo "Equipamentos foram reparados";
            }
            else {
                echo "Você está sem energia"
            }
        }
        public function exibirStatus(){
            return $modelo && $energia && $potencia;
        }
        public function recarregar(){
            if ($energia < 200){
                $this->energia = $energia + 10;
                $this->contador += 1;
                return $energia
            }
            else {
                echo "Energia no máximo"
            }
        }
    }

    class Defensor extends Robo{
            
        public function operar(){
            getEnergia()
            if ($energia >= 20){
                $this->energia = $energia - 20;
                echo "Equipamentos foram reparados";
            }
            else {
                echo "Você está sem energia"
            }
        }
        public function exibirStatus(){
            return $modelo && $energia && $potencia;
        }
        public function recarregar(){
            if ($energia < 200){
                $this->energia = $energia + 10;
                $this->contador += 1;
                return $energia
            }
            else {
                echo "Energia no máximo"
            }
        }
    }
    $explorador = new Explorador("Robo 1",100, 20, "Engenheiro", 0)
    $engenheiro = new Engenheiro("Robo 2",120, 15, "Engenheiro", 0)
    $defensor = new Defensor("Robo 3",150, 30, "Defensor", 0)

    if($_SERVER['REQUEST_METOD'] === $_POST){
        if ($nome = "" ??, ||
        $potencia >= 15 ||
        $energia >= 100){
            if ($robo = class Explorador){
                operar()
            } elseif ($robo = class Engenheiro){
                operar()
            } elseif ($robo = class Defensor){
                operar()
            }
        }
        else{
            echo "Preencha os campos corretamente"
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/prova/central-de-robos.css">
</head>
<body>
    <div class = container>
        <label for="maquina">
            <h1>Cadastro de Robôs</h1>
        </label>
    </div>
    <button type = increment>Aumentar energia</button>
</body>
</html>