<?php 

class Shell {
    protected $ppn;
    private $SSuper,
            $SVpower,
            $SVpowerDiesel,
            $SVpowerNitro;
    public $jumlah;
    public $jenis;

    function __consturct() 
    {
        $this->ppn = 0.1;
    }

    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4)
    {
        $this->SSuper = $tipe1;
        $this->SVpower = $tipe2;
        $this->SVpowerDiesel = $tipe3;
        $this->SVpowerNitro = $tipe4;
    }

    public function getHarga() 
    {
        $data["SSuper"] = $this->SSuper;
        $data["SVpower"] = $this->SVpower ;
        $data["SVpowerDiesel"] = $this->SVpowerDiesel ;
        $data["SVpowerNitro"] =  $this->SVpowerNitro;
        return $data;
    }

    }
    class Beli extends Shell {
        public function hargaBeli()
        {
            $dataHarga = $this->getHarga();
            $hargaBeli = $this->jumlah * $dataHarga[$this->jenis];
            $hargaPPN = $hargaBeli * $this->ppn;
            $hargaBarang = $hargaBeli + $hargaPPN;
            return $hargaBarang;
        }

        public function cetak()
        {
            echo "<center>";
            echo "<p>" . "---------------------------------" . "<p>" . "<br>";
            echo "<p>" . "Anda membeli bahan bakar minyak tipe " . $this->jenis . "</p> " . "<br>";
            echo "<p>" ."Dengan Jumlah " . $this->jumlah . " Liter" . "</p>" . "<br>";
            echo "<p>" . "Total yang harus anda bayar Rp . " . number_format($this->hargaBeli(), 0, '', '.') . "</p>" ."<br>";
            echo "<p>" . "------------------👍------------------" . "<p>"  . "<br>";
            echo "</center>";
        }
    }

?>