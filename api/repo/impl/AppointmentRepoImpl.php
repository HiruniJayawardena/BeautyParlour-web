<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 1:00 PM
 */
require_once __DIR__."/../AppointmentRepo.php";
require_once __DIR__."/../../core/Appointment.php";

class AppointmentRepoImpl implements AppointmentRepo
{
    private $connection;

    /**
     * AppointmentRepoImpl constructor.
     */
    public function __construct()
    {
    }


    public function setConnection(mysqli $connection)
    {
        $this->connection=$connection;
    }

    public function addAppointment(Appointment $appointment): bool
    {

            $resp = $this->connection;
          query(
        "INSERT INTO Appointment VALUES (
    '{$appointment->getCustomerName()}',
    '{$appointment->getEmail()}',
    '{$appointment->getCutomerTp()}',
    '{$appointment->getDate()}')");
        return$resp;


    }

    public function deleteAppointment(string $appId): bool
    {
        // TODO: Implement deleteAppointment() method.
    }

    public function searchAppointment(string $appId): array
    {
        // TODO: Implement searchAppointment() method.
    }

    public function updateAppointment(Appointment $appointment): bool
    {
        // TODO: Implement updateAppointment() method.
    }

    public function getAllAppointments(): array
    {
        $resultset=  $this->connection->query("SELECT * FROM Appointment");
        return $resultset->fetch_all();
    }
}