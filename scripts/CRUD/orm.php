<?php
abstract class Model
{
    protected static string $table; // Database table name  

    public static function find(int $id): ?static
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT * FROM " . static::$table . " WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        return $data ? static::mapToObject($data) : null;
    }

    public static function all(): array
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT * FROM " . static::$table);
        $results = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $results[] = static::mapToObject($row);
        }
        return $results;
    }

    public function save(): bool
    {
        $pdo = Database::getConnection();
        $fields = get_object_vars($this);
        $columns = array_keys($fields);

        if (isset($this->id)) {
            // Update record  
            $query = "UPDATE " . static::$table . " SET " . implode(", ", array_map(fn($col) => "$col = :$col", $columns)) . " WHERE id = :id";
        } else {
            // Insert new record  
            $query = "INSERT INTO " . static::$table . " (" . implode(", ", $columns) . ") VALUES (" . implode(", ", array_map(fn($col) => ":$col", $columns)) . ")";
        }

        $stmt = $pdo->prepare($query);
        return $stmt->execute($fields);
    }

    private static function mapToObject(array $data): static
    {
        $object = new static();
        foreach ($data as $key => $value) {
            $object->$key = $value;
        }
        return $object;
    }
}
