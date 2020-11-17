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
        
        $send = array(
            "nombre" => $nombre,
            "tipo" => $tipo,
            "edad" => $edad,
            "descripcion" => $descripcion,
            "comida" => $comida,
        );

        $AnimalModel = new ModelAnimal();   
        
        try{
            $AnimalModel -> insert($send);
            echo("<script>M.toast({html: 'Registrado con Exito'})</script>");
            return view('index', $send);
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

        try{
            $animalModel->where('id',$idEliminar)->delete();
            
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

        $animalModel = new ModelAnimal();   
        
        try{
            $animalModel -> update($id,$send);
            echo("Usuario Editado con exito");
        }
        catch(\Exception $e){
            die($e_>getMessage());
        }

    }


}
