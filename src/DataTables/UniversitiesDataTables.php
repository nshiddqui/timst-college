<?php

declare(strict_types=1);

namespace App\DataTables;

use Cake\Datasource\EntityInterface;
use DataTables\Table\ConfigBundle;
use DataTables\Table\DataTables;
use DataTables\Table\Renderer;
use DataTables\View\DataTablesView;

/**
 * Class UniversitiesDataTables
 */
class UniversitiesDataTables extends DataTables
{


    protected $_ormTableName = 'Universities';

    /**
     * @param \DataTables\Table\ConfigBundle $configBundle
     */
    public function config(ConfigBundle $configBundle): void
    {
        $configBundle->Columns->deleteAllColumns();

        $configBundle->Query->select('Universities.id');
        $configBundle->Columns->addDatabaseColumn('Universities.name');
        $configBundle->Columns->addDatabaseColumn('Universities.address');
        $configBundle->Columns->addDatabaseColumn('States.name');
        $configBundle->Columns->addDatabaseColumn('Universities.contact');
        $configBundle->Columns->addDatabaseColumn('Universities.created');
        $configBundle->Columns->addNonDatabaseColumn('action')->setWidth('120px');

        $configBundle->Options->setColumns($configBundle->Columns);
    }

    /**
     * @param \DataTables\View\DataTablesView $appView
     * @param \Cake\Datasource\EntityInterface|\App\Model\Entity\University $entity
     * @param \DataTables\Table\Renderer $renderer
     */
    public function rowRenderer(DataTablesView $appView, EntityInterface $entity, Renderer $renderer): void
    {
        $action = $appView->Html->link('<i class="fa fa-pencil-alt"></i>', ['controller' => 'Universities', 'action' => 'edit', $entity->id, 'plugin' => false], ['class' => 'btn btn-primary', 'escape' => false]);
        $renderer->add('action', $action);
        $renderer->renderRow($entity);
    }
}
