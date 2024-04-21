<?php
class Event {
    public $id;
    public $title;
    public $date;
    public $location;
    public $description;

    public function __construct($id, $title, $date, $location, $description) {
        $this->id = $id;
        $this->title = $title;
        $this->date = $date;
        $this->location = $location;
        $this->description = $description;
    }

    public static function getAllEvents(PDO $pdo) {
        $stmt = $pdo->query("SELECT * FROM events");
        $events = [];

        while ($row = $stmt->fetch()) {
            $events[] = new Event(
                $row['event_id'],
                $row['event_name'],
                $row['event_date'],
                $row['event_location'],
                $row['event_description']
            );
        }

        return $events;
    }
}
?>
