<?php
/**
 * Created by PhpStorm.
 * User: Shadow
 * Date: 27/09/2015
 * Time: 20:33
 */
    //Defini��o das classes abstratas
    abstract class VeiculoAbstrata {
        protected $codigo_veiculo;
        protected $nome;
        protected $marca;
        protected $modelo;
        protected $ano;
        protected $cor;
        protected $quilometragem;
        abstract public function Veiculo_Cadastro($cod, $array_parametros);
        abstract public function Veiculo_Alteracao($cod, $array_parametros);
        abstract public function Veiculo_Exclusao($cod);
    }
    abstract class ClienteAbstrata {
        protected $codigo_cliente;
        protected $nome;
        protected $endereco;
        protected $email;
        protected $telefone;
        protected $celular;
        abstract public function Cliente_Aluga_Veiculo($cod, $array_parametros);
        abstract public function Cliente_Devolve_Veiculo($cod, $array_parametros);
        abstract public function Cliente_Reserva_Veiculo($cod, $array_parametros);
        abstract public function Cliente_Exclusao($cod);
    }
    // Implementa��o da classe dos ve�culos
    class Veiculo extends VeiculoAbstrata {
        public function Veiculo_Cadastro($cod, $array_parametros) {
            echo "Dados para cadastro do ve�culo de c�digo $cod:<br>";
            foreach($array_parametros as $campo)
                echo $campo."<br>";
        }
        public function Veiculo_Alteracao($cod, $array_parametros) {
            echo "Dados para altera��o do ve�culo de c�digo $cod:<br>";
            foreach($array_parametros as $campo)
                echo $campo."<br>";
        }
        public function Veiculo_Exclusao($cod) {
            echo "Exclus�o do ve�culo de c�digo $cod";
        }
    }
    // Implementa��o das classes dos clientes
    class Cliente extends ClienteAbstrata {
        public function Cliente_Aluga_Veiculo($cod, $array_parametros) {
            $codigoVeiculo = $array_parametros[0];
            $dataAluguel = $array_parametros[1];
            $periodo = $array_parametros[2];
            $valor = $array_parametros[3];
            echo "O cliente de c�digo $cod ir� alugar o ve�culo $codigoVeiculo a partir de $dataAluguel, por $periodo. O pre�o � R\$ $valor.";
        }
        public function Cliente_Devolve_Veiculo($cod, $array_parametros) {
            $codigoVeiculo = $array_parametros[0];
            $dataAluguel = $array_parametros[1];
            echo "O cliente de c�digo $cod devolveu o ve�culo $codigoVeiculo, alugado em $dataAluguel.";
        }
        public function Cliente_Reserva_Veiculo($cod, $array_parametros) {
            $codigoVeiculo = $array_parametros[0];
            $dataAluguel = $array_parametros[1];
            echo "O cliente de c�digo $cod reservou o ve�culo $codigoVeiculo para o dia $dataAluguel.";
        }
        public function Cliente_Exclusao($cod) {
            echo "Exclus�o do cliente de c�digo $cod.";
        }
    }
    class PessoaFisica extends Cliente {
        private $cpf;
        private $rg;
        private $data_nascimento;
        private function testaCPF ($cpf) {
            // Implementar aqui algoritmo de verifica��o de CPF
        }
        public function Cadastro($cod, $array_parametros) {
            echo "Dados para cadastro do cliente (pessoa fisica) de c�digo $cod:<br>";
            foreach($array_parametros as $campo)
                echo $campo."<br>";
        }
        public function Alteracao($cod, $array_parametros) {
            echo "Dados para altera��o do cliente (pessoa fisica) de c�digo $cod:<br>";
            foreach($array_parametros as $campo)
                echo $campo."<br>";
        }
    }
    class PessoaJuridica extends Cliente {
        private $cnpj;
        private $inscricao_estadual;
        private $data_de_fundacao;
        private $pessoa_responsavel;
        private $website;
        private function testaCNPJ ($cnpj) {
            // Implementar aqui algoritmo de verifica��o de CNPJ
        }
        public function Cadastro($cod, $array_parametros) {
            echo "Dados para cadastro do cliente (pessoa jur�dica) de c�digo $cod:<br>";
            foreach($array_parametros as $campo)
                echo $campo."<br>";
        }
        public function Alteracao($cod, $array_parametros) {
            echo "Dados para altera��o do cliente (pessoa jur�dica) de c�digo $cod:<br>";
            foreach($array_parametros as $campo)
                echo $campo."<br>";
        }
    }
    // Programa principal - exemplos
    $dadosVeiculo = array("Palio","Fiat","ELX","2005","Prata","35000");
    $objVeiculo = new Veiculo;
    $objVeiculo->Veiculo_Cadastro("1",$dadosVeiculo);
    echo "<hr>";
    $objVeiculo->Veiculo_Exclusao("1");
    echo "<hr>";
    $dadosCliente = array("Pedro","Rua Pereira 52","pedro@pedro.com","31919191","91919191","98845755521","4057841457","30/05/1980");
    $objCliente = new PessoaFisica;
    $objCliente->Cadastro("1",$dadosCliente);
    echo "<hr>";
    $dadosCliente = array("Martins & Cia Frutos do Mar Ltda","Rua Vasco da Gama 87","martins@frutosdomar.com","7619191","92919191","07.055.245/0001-22","096/5487547","20/10/2004","Jo�o","http://www.algumdominio.com.br");
    $objCliente = new PessoaJuridica;
    $objCliente->Cadastro("1",$dadosCliente);
    echo "<hr>";
    $dadosAluguel = array("1","20/10/2011","2 dias","90,00");
    $objCliente->Cliente_Aluga_Veiculo("1",$dadosAluguel);
    echo "<hr>";
    $dadosAluguel = array("1","20/10/2011");
    $objCliente->Cliente_Devolve_Veiculo("1",$dadosAluguel);
    echo "<hr>";
    $objCliente->Cliente_Exclusao("1");
?>