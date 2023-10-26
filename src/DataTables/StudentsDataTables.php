<?php
declare(strict_types=1);

namespace App\DataTables;

use Cake\Datasource\EntityInterface;
use DataTables\Table\ConfigBundle;
use DataTables\Table\DataTables;
use DataTables\Table\Renderer;
use DataTables\View\DataTablesView;

/**
 * Class StudentsDataTables
 */
class StudentsDataTables extends DataTables
{


    protected $_ormTableName = 'Students';

    /**
     * @param \DataTables\Table\ConfigBundle $configBundle
     */
    public function config(ConfigBundle $configBundle): void
    {
        $configBundle->Columns->deleteAllColumns();
        $configBundle->getDataTables()->getOrmTable()->getAssociation('CommunicationDetails')->associations()->removeAll();


        $configBundle->Query->select('Students.id');
        $configBundle->Query->select('ProgrammeDetails.cource_id');
        $configBundle->Columns->addDatabaseColumn('Students.candidate_name');
        $configBundle->Columns->addDatabaseColumn('Students.father_name');
        $configBundle->Columns->addDatabaseColumn('Students.mother_name');
        $configBundle->Columns->addDatabaseColumn('Students.date_of_birth');
        $configBundle->Columns->addDatabaseColumn('CommunicationDetails.contact_number');
        $configBundle->Columns->addDatabaseColumn('Cources.name')->setTitle('Cource Name');
        $configBundle->Columns->addDatabaseColumn('CommunicationDetails.email_address');
        $configBundle->Columns->addDatabaseColumn('Students.created');
        $configBundle->Columns->addNonDatabaseColumn('action')->setWidth('120px');

        $configBundle->Options->setColumns($configBundle->Columns);
    }

    /**
     * @param \DataTables\View\DataTablesView $appView
     * @param \Cake\Datasource\EntityInterface|\App\Model\Entity\Student $entity
     * @param \DataTables\Table\Renderer $renderer
     */
    public function rowRenderer(DataTablesView $appView, EntityInterface $entity, Renderer $renderer): void
    {
        $action = $appView->Html->link('<i class="fa fa-pencil-alt"></i>', ['controller' => 'Students', 'action' => 'edit', $entity->id, 'plugin' => false], ['class' => 'btn btn-primary', 'escape' => false]);
        $renderer->add('action', $action);
        $renderer->renderRow($entity);
    }
}