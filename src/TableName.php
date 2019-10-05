<?php

namespace Grungestranger\TableName;

trait TableName
{
    /**
     * The name of table.
     *
     * @var string
     */
    protected static $tableName;

    /**
     * Get the name of table.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        if (!static::$tableName) {
            $model = new static();

            static::$tableName = $model->getConnection()->getDatabaseName() . '.' . $model->getTable();
        }

        return static::$tableName;
    }
}
