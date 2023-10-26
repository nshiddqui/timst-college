<?php
declare(strict_types=1);

namespace App\DataTables;

use Cake\Datasource\EntityInterface;
use DataTables\Table\ConfigBundle;
use DataTables\Table\DataTables;
use DataTables\Table\Renderer;
use DataTables\View\DataTablesView;

/**
 * Class CourceTypesDataTables
 */
class CourceTypesDataTables extends DataTables {


    protected $_ormTableName = 'CourceTypes';

	/**
	 * @param \DataTables\Table\ConfigBundle $configBundle
	 */
    public function config(ConfigBundle $configBundle): void {
        // TODO: Configure your table here.
    }

    /**
	 * @param \DataTables\View\DataTablesView $appView
	 * @param \Cake\Datasource\EntityInterface|\App\Model\Entity\CourceType $entity
	 * @param \DataTables\Table\Renderer $renderer
	 */
    public function rowRenderer(DataTablesView $appView, EntityInterface $entity, Renderer $renderer): void {
        // TODO: Configure each row render here.
    }
}