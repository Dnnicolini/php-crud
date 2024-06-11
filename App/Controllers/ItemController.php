<?php 

namespace Controllers;

include_once __DIR__ . '/../Models/Item.php';


class ItemController
{
    public function getAll()
    {
        $item = new Item();
        return $item->getAll();
    }


    public function create($id)
    {
        $item = new Item();
        return $item->get($id);
    }

    public function store($data)
    {
        $item = new Item();
        return $item->insert($data);
    }

    public function edit($data)
    {
        $item = new Item();
        return $item->insert($data);
    }


    public function update($data)
    {
        $item = new Item();
        return $item->update($data);
    }

    public function delete($id)
    {
        $item = new Item();
        return $item->delete($id);
    }
}