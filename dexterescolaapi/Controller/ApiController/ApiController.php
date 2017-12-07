<?php 

namespace Controller\ApiController;

use Controller\AlunoController\AlunoController;

class ApiController
{
	public function run(){

		$method = $_SERVER['REQUEST_METHOD'];
		// $route 	= isset($_GET['route']) ? $_GET['route'] : 'home';

		$route = $_SERVER['REQUEST_URI'];

		if ($route != '/') {
            $arrayRoute = explode('/', $route);
        }

        $route = isset($arrayRoute[1]) ? $arrayRoute[1] : 'home';

		switch ($route) {
			case 'alunos':
				
					switch ($method) {
						case 'GET':
							$id = isset($_GET['id']) ? $_GET['id'] : null;
							if ($id) {
								AlunoController::find($id);
							} else {
								AlunoController::all();
							}
							break;
						case 'POST':
							echo "POST";
							break;
						case 'PUT':
							echo "PUT";
							break;
						case 'DELETE':
							echo "DELETE";
							break;
						default:
							# code...
							break;
					}

				break;
			case 'home':
			switch ($method) {
				case 'GET':
					echo "GET";
					break;
				case 'POST':
					echo "POST";
					break;
				case 'PUT':
					echo "PUT";
					break;
				case 'DELETE':
					echo "DELETE";
					break;
				default:
					# code...
					break;
			}
				
				break;			
			default:
				echo "Rota Inválida";
				break;
		}

	}
}