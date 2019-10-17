<?php

namespace Grungestranger\TableName;

trait TableName
{
    /**
     * Get the name of table.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        $model = new static();

        return $model->getConnection()->getDatabaseName() . '.' . $model->getTable();
    }
}
