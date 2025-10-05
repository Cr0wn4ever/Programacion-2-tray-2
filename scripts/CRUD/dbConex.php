<?php
class Database
{
    private static ?PDO $connection = null;

    public static function connect(string $dsn, string $username, string $password): void
    {
        if (self::$connection === null) {
            self::$connection = new PDO($dsn, $username, $password);
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    public static function getConnection(): PDO
    {
        if (self::$connection === null) {
            throw new Exception("No se ha podido establecer la conexión a la base de datos.");
        }
        return self::$connection;
    }
}
