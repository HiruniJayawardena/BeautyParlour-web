<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 7:41 PM
 */
require_once __DIR__."/../AppointmentBusiness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Appointment.php";
require_once __DIR__."/../../repo/impl/AppointmentRepoImpl.php";

class AppointmentBusinessImpl implements AppointmentBusiness
{

    public function addAppointment(Appointment $appointment): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $appointmentRepo=new AppointmentRepoImpl();
        $appointmentRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        
        return $appointmentRepo->addAppointMent($appointment);
        return true;
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
        $connection=(new DBConnection())->getDBConnection();
        $appointmentRepo=new AppointmentRepoImpl();
        $appointmentRepo->setConnection($connection);
        return $appointmentRepo->getAllAppointments();
    }
}