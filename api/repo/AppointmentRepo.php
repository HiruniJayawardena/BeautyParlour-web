<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 12:59 PM
 */
require_once __DIR__."/../core/Appointment.php";

interface AppointmentRepo
{
    public function setConnection(mysqli $connection);

    public function addAppointment(Appointment $appointment): bool ;

    public function deleteAppointment(string $appId): bool ;

    public function searchAppointment(string $appId): array ;

    public function updateAppointment(Appointment $appointment): bool ;

    public function getAllAppointments(): array ;

}