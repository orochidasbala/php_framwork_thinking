<?php


namespace controller;

use core\App;

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
    public function addname()
    {
        $req = request('name');

        if (!$req) {
            redirect("/");
            die();
        }
        App::get('database')->insert([
            "name" => $req
        ], "users");
        redirect("/");
    }
}
