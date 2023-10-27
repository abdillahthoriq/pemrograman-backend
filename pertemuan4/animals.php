<?php

class AnimalController extends Controller {
    private $animals = [];

    public function index() {
        return $this->animals;
    }

    public function store(Request $request) {
        $newAnimal = $request->input('animal');
        $this->animals[] = $newAnimal;
        return "Hewan " . $newAnimal . " telah ditambahkan.";
    }

    public function update(Request $request, $id) {
        if (isset($this->animals[$id])) {
            $updatedAnimal = $request->input('animal');
            $this->animals[$id] = $updatedAnimal;
            return "Hewan pada indeks " . $id . " telah diperbarui menjadi " . $updatedAnimal . ".";
        } else {
            return "Indeks " . $id . " tidak ditemukan.";
        }
    }

    public function destroy($id) {
        if (isset($this->animals[$id])) {
            $removedAnimal = $this->animals[$id];
            array_splice($this->animals, $id, 1);
            return "Hewan " . $removedAnimal . " pada indeks " . $id . " telah dihapus.";
        } else {
            return "Indeks " . $id . " tidak ditemukan.";
        }
    }
}


?>