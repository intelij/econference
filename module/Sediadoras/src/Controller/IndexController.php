<?php
/**
 * @link      http://github.com/fgsl/econference for the canonical source repository
 * @copyright Copyleft 2017 FTSL. (http://www.ftsl.org.br)
 * @license   https://www.gnu.org/licenses/agpl-3.0.en.html GNU Affero General Public License
 */
namespace Sediadoras\Controller;

use Application\Controller\AbstractCrudController;

class IndexController extends AbstractCrudController
{
	protected $mainTableFactory = 'SedeTable';
	
	protected $rowsObjectName = 'sediadoras';
	
	protected $primaryKeyName = 'codigo';
	
	protected $modelName = 'Sediadoras\Model\Sede';
	
	protected $routeName = 'sediadoras';
	
	public function getDataFromRequest()
    {
        $codigo = $this->getRequest()->getPost('codigo');
        $nome = $this->getRequest()->getPost('nome');
        return [
            'codigo' => $codigo,
            'nome' => $nome
        ];
    }
}