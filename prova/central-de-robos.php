<?php 

    session_start();

    abstract class Robo{
        public $nome
        public $modelo
        public $energia
        public $potencia
        public $contador

        function __constructor(){
            $this->nome = "",
            $this->energia = 0,
            $this->potencia = 0,
            $this->contador = 0
        }

        abstract function operar()

        abstract function exibirStatus(){
            return $modelo && $energia && $potencia;
        }

        abstract function recarregar(){
            $this->energia += 10;
            return $energia
        }
    }

    class Explorador{
        public function operar(){
            echo "O planeta foi investigado";
        }
        public function exibirStatus(){
            return $modelo && $energia && $potencia;
        }
        public function recarregar(){
            $this->energia += 10;
            $this->contador += 1;
            return $energia
        }
    }

    class Engenheiro{
        public function operar(){
            echo "Equipamentos foram reparados";
        }
        public function exibirStatus(){
            return $modelo && $energia && $potencia;
        }
        public function recarregar(){
            $this->energia += 10;
            $this->contador += 1;
            return $energia
        }
    }

    class Defensor{
        public function operar(){
            echo "Defesas preparadas"
        }
        public function exibirStatus(){
            return $modelo && $energia && $potencia;
        }
        public function recarregar(){
            $this->energia += 10;
            $this->contador += 1;
            return $energia
        }
    }

    $robo = new Defensor(150,20)
    $robo = new Engenheiro(120,15)
    $robo = new Explorador(100,20)
    htmlspecialchars(
        
    )

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
    <div class = container>
        <button type = action id = >Recarregar</button>
    </div>
</body>
</html>