<?php

# membuat class Animal
class Animal
{
  # property animals
  private $animals = [];

  # method constructor - mengisi data awal
  # parameter: data hewan (array)
  public function __construct($data)
  {
    $this->animals = $data;
  }

  # method index - menampilkan data animals
  public function index()
  {
    foreach ($this->animals as $index => $animal) {
      echo "Index $index: $animal<br>";
    }
  }

  # method store - menambahkan hewan baru
  # parameter: hewan baru
  public function store($data)
  {
    array_push($this->animals, $data);
    echo "$data telah ditambahkan.<br>";
  }

  # method update - mengupdate hewan
  # parameter: index dan hewan baru
  public function update($index, $data)
  {
    if (isset($this->animals[$index])) {
      $this->animals[$index] = $data;
      echo "Hewan pada index $index diperbarui menjadi $data.<br>";
    } else {
      echo "Index $index tidak ditemukan.<br>";
    }
  }

  # method delete - menghapus hewan
  # parameter: index
  public function destroy($index)
  {
    if (isset($this->animals[$index])) {
      unset($this->animals[$index]);
      $this->animals = array_values($this->animals); // Merapikan kembali array
      echo "Hewan pada index $index telah dihapus.<br>";
    } else {
      echo "Index $index tidak ditemukan.<br>";
    }
  }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal([]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";
