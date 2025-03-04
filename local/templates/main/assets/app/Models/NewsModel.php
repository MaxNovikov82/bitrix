<?php

namespace App\Models;

use App\DB;
use PDO;

class NewsModel 
{
    public static function getCount()
    {
        $query = 'SELECT COUNT(*) FROM news';
        $queryConnect = DB::connection()->query($query);
        $result = $queryConnect->fetch();
        return $result[0];
    }

    public static function getList($start, $limit)
    {
        $query = 'SELECT *, DATE_FORMAT(date, "%d.%m.%Y") AS dt FROM news ORDER BY date DESC LIMIT :start, :limit;';
        $queryConnect = DB::connection()->prepare($query);
        $queryConnect->bindValue(":start", $start, PDO::PARAM_INT);
        $queryConnect->bindValue(":limit", $limit, PDO::PARAM_INT);
        $queryConnect->execute();
        return $queryConnect;
    }

    public static function getItem($NewsId)
    {
        $query = 'SELECT *, DATE_FORMAT(date, "%d.%m.%Y") AS dt FROM news WHERE id = :id ;';
        $queryConnect = DB::connection()->prepare($query);
        $queryConnect->bindValue(":id", $NewsId, PDO::PARAM_INT);
        $queryConnect->execute();
        $result = $queryConnect->fetch();
        return $result;
    }

    public static function getLast() 
    {
        $result = self::getList(0, 1);
        $lastItem = $result->fetch();
        return $lastItem;
    }
}