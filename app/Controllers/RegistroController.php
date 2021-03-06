<?php namespace App\Controllers;
use App\Models\ModelAnimal;


class RegistroController extends BaseController
{
	public function index()
	{
		return view('index');
	}

    public function registrar(){

        $nombre = $this->request->getPost("nombre");
        $tipo = $this->request->getPost("tipo");
        $edad = $this->request->getPost("edad");
        $descripcion = $this->request->getPost("descripcion");
        $comida = $this->request->getPost("comida");
        $imagen = $this->request->getPost("imagen");
        
        $send = array(
            "nombre" => $nombre,
            "tipo" => $tipo,
            "edad" => $edad,
            "descripcion" => $descripcion,
            "comida" => $comida,
            "imagen" => $imagen,
        );
        $AnimalModel = new ModelAnimal();   
        $data=array("animal"=>$send);
        $res="M.toast({html: 'Animal Registrado con Exito'})";

        try{
            $AnimalModel -> insert($send);
            return redirect()->to(base_url('public/'))->with('res',$res);
        }
        catch(\Exception $e){
            die($e_>getMessage());
        }

    }

    public function listar(){
        $animalModel = new ModelAnimal();   


        try{
            $getAnimal=$animalModel->findAll();
            $data=array("animales"=>$getAnimal);

            return view('listar',$data);
        }
        catch(\Exception $e){
            die($e_>getMessage());
        }
    }

    public function eliminar($idEliminar){


        $animalModel = new ModelAnimal();  
        $res="M.toast({html: 'Animal Eliminado con Exito'})";

        try{
            $animalModel->where('id',$idEliminar)->delete();
            return redirect()->to(base_url('public/listar'))->with('res',$res);
        }
        catch(\Exception $e){
            die($e_>getMessage());
        }
    }

    public function editar($id){

        $nombre = $this->request->getPost("nombre");
        $tipo = $this->request->getPost("tipo");
        $edad = $this->request->getPost("edad");
        $descripcion = $this->request->getPost("descripcion");
        $comida = $this->request->getPost("comida");

        $send = array(
            "nombre" => $nombre,
            "tipo" => $tipo,
            "edad" => $edad,
            "descripcion" => $descripcion,
            "comida" => $comida,
        );

        $res="M.toast({html: 'Animal editado con Exito'})";
        print_r($send);
        $animalModel = new ModelAnimal();   
        try{
            $animalModel->update($id,$send);
            return redirect()->to(base_url('public/listar'))->with('res',$res);
        }
        catch(\Exception $e){
            die($e->getMessage());
            $res="M.toast({html: 'Lo sentimos hubo un error. Estamos trabajando en ello'})";
            return redirect()->to(base_url('public/listar'))->with('res',$res);
        }

    }


}
