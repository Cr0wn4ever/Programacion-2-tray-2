<?php
class ORM
{
    protected $id;
    protected $table;
    protected $db;

    public function __construct($id, $table, PDO $conexion)
    {
        $this->id = $id;
        $this->table = $table;
        $this->db = $conexion;
    }

    //Create
    public function save($data) {
    // 1. FILTER: Remove empty strings and nulls
    $data = array_filter($data, function($value) {
        return $value !== null && $value !== '';
    });

    // Check if there is anything left to save
    if (empty($data)) {
        // Optionally log an error or return an indicator
        return false; 
    }

    // 2. Build the SQL with filtered data
    $columns = array_keys($data);
    $placeholders = array_map(fn($col) => ":$col", $columns); // PHP 7.4+ arrow function

    $sql = "INSERT INTO {$this->table} (";
    $sql .= implode(', ', $columns);
    $sql .= ") VALUES (";
    $sql .= implode(', ', $placeholders);
    $sql .= ")";
    
    // 3. Prepare and Execute
    $stmt = $this->db->prepare($sql);
    
    // Pass the filtered $data array directly to execute
    return $stmt->execute($data);
}

    //Read
    public function getAll()
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table}");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM {$this->table} WHERE {$this->id} = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    //Update
    public function updateById($id, $data)
    {
        // 1. FILTER: Remove empty strings and nulls
        $data = array_filter($data, function ($value) {
            return $value !== null && $value !== '';
        });

        // Check if there is any data left to update
        if (empty($data)) {
            // No valid data to update, return success (true) or 0 rows affected
            return true;
        }

        // 2. Build the SET clause with filtered data
        $set_clauses = [];
        foreach (array_keys($data) as $key) {
            $set_clauses[] = "{$key} = :{$key}";
        }

        $sql = "UPDATE {$this->table} SET ";
        $sql .= implode(', ', $set_clauses);
        $sql .= " WHERE {$this->id} = :id_value";

        // 3. Prepare the statement
        $stmt = $this->db->prepare($sql);

        // 4. Combine filtered data with the ID for execution
        $bind_params = array_merge($data, ['id_value' => $id]);

        // 5. Execute
        return $stmt->execute($bind_params);
    }

    //Delete
    public function deleteById($id)
    {
        $stmt = $this->db->prepare("DELETE FROM {$this->table} WHERE {$this->id} = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
