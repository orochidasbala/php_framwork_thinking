<?php

class Pages
{
    public function index()
    {
        view("index", [
            "users" => App::get("database")->selectAll("users")
        ]);
    }
    public function about()
    {
        view("about");
    }
    public function contact()
    {
        view("contact");
    }
    public function delete()
    {
        App::get("database")->delete($_REQUEST['id'], "users");

        header("Location: /");
    }
    public function addname(){
        if ($_POST['name']) {
            App::get('database')->insert([
                "name" => $_POST['name']
            ], "users");
            header("Location: /");
        } else {
            header("Location: /");
        }
    }
}
