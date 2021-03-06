<?php
/**
 * LaminasBase
 * @author Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @license AGPL-3.0 <https://www.gnu.org/licenses/agpl-3.0.en.html>
 */
namespace LaminasBase\Db\Adapter;

use Laminas\Db\Adapter\Adapter;

interface MasterSlaveAdapterInterface
{
    /**
     * @return Adapter
     */
    public function getSlaveAdapter();
}