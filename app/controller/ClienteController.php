<?php
require_once '../app/models/Cliente.php';

class ClienteController extends Controller
{
    private $clienteModel;

    public function __construct()
    {
        $this->clienteModel = new Cliente();
    }

    public function index()
    {
        $clientes = $this->clienteModel->getAll();
        $this->view('clientes/index', ['clientes' => $clientes]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->clienteModel->create($_POST);
            header('Location: /?controller=cliente&action=index');
        } else {
            $this->view('clientes/create');
        }
    }

    public function edit()
    {
        $id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->clienteModel->update($id, $_POST);
            header('Location: /?controller=cliente&action=index');
        } else {
            $cliente = $this->clienteModel->getById($id);
            $this->view('clientes/edit', ['cliente' => $cliente]);
        }
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->clienteModel->delete($id);
        header('Location: /?controller=cliente&action=index');
    }
}