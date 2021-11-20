<?php

include "index.php";
echo "<br><div id='nota'><h3><b>===> TOTAL BELANJA <===</b></h3></div>";

class buah
{
	var $totalMangga, $totalJambu, $totalSalak;

	public function __construct($mangga, $jambu, $salak)
	{
		$this->mangga = $mangga;
		$this->jambu = $jambu;
		$this->salak = $salak;
	}

	public function getMangga()
	{
		$this->totalMangga = $this->mangga * 15000;
		if ($this->mangga == NULL) {
			echo "<div id='nota'>0 kg Mangga = Rp.0</div>";
		} else {
			echo "<div id='nota'>$this->mangga kg Mangga = Rp.$this->totalMangga</div>";
		}
	}

	public function getJambu()
	{
		$this->totalJambu = $this->jambu * 13000;
		if ($this->jambu == 0) {
			echo "<div id='nota'>0 kg Mangga = Rp.0</div>";
		} else {
			echo "<div id='nota'>$this->jambu kg Jambu = Rp.$this->totalJambu</div>";
		}
	}

	public function getSalak()
	{
		$this->totalSalak = $this->salak * 10000;
		if ($this->salak == 0) {
			echo "<div id='nota'>0 kg Jambu = Rp.0</div>";
		} else {
			echo "<div id='nota'>$this->salak kg Salak = Rp.$this->totalSalak</div>";
		}
	}

	public function total()
	{
		$total = $this->totalMangga + $this->totalJambu + $this->totalSalak;
		echo '<br>';
		echo "<div id='nota'>Total Harga = Rp.$total</div>";
	}
}

$mangga = $_POST["mangga"];
$jambu = $_POST["jambu"];
$salak = $_POST["salak"];
$transaksi = new buah($mangga, $jambu, $salak);
$transaksi->getMangga();
$transaksi->getJambu();
$transaksi->getSalak();
$transaksi->total();
