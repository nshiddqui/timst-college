<?php
declare(strict_types=1);

namespace App\DataTables;

use Cake\Datasource\EntityInterface;
use DataTables\Table\ConfigBundle;
use DataTables\Table\DataTables;
use DataTables\Table\Renderer;
use DataTables\View\DataTablesView;

/**
 * Class ModeOfStudiesDataTables
 */
class ModeOfStudiesDataTables extends DataTables {


    protected $_ormTableName = 'ModeOfStudies';

	/**
	 * @param \DataTables\Table\ConfigBundle $configBundle
	 */
    public function config(ConfigBundle $configBundle): void {
        // TODO: Configure your table here.
        $configBundle->Columns->addNonDatabaseColumn('action')->setWidth('120px');
        $configBundle->Options->setColumns($configBundle->Columns);
    }

    /**
	 * @param \DataTables\View\DataTablesView $appView
	 * @param \Cake\Datasource\EntityInterface|\App\Model\Entity\ModeOfStudy $entity
	 * @param \DataTables\Table\Renderer $renderer
	 */
    public function rowRenderer(DataTablesView $appView, EntityInterface $entity, Renderer $renderer): void {
        // TODO: Configure each row render here.
        $action = $appView->Html->link('<i class="fa fa-pencil-alt"></i>', ['controller' => 'ModeOfStudies', 'action' => 'edit', $entity->id, 'plugin' => false], ['class' => 'btn btn-primary', 'escape' => false]);
        $renderer->add('action', $action);
        $renderer->renderRow($entity);
    }
}