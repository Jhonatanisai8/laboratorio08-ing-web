<?php
require_once '../app/models/Material.php';

class MaterialController extends Controller
{
    private $materialModel;

    public function __construct
    ()
    {
        $this->materialModel = new Material();
    }

    public function index()
    {
        $materiales = $this->materialModel->getAll();
        $this->view('index', ['materiales' => $materiales]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->materialModel->create($_POST);
            header('Location: /?controller=material&action=index');
        } else {
            $this->view('create');
        }
    }

    public function edit()
    {
        $id = $_GET['codigo'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->materialModel->update($id, $_POST);
            header('Location: /?controller=material&action=index');
        } else {
            $user = $this->materialModel->getById($id);
            $this->view('edit', ['user' => $user]);
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->materialModel->delete($id);
        header('Location: /?controller=material&action=index');
    }
}