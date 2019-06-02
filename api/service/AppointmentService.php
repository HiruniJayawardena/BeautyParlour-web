<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 2:57 PM
 */

require_once __DIR__."/../business/impl/AppointmentBusinessImpl.php";
require_once __DIR__."/../core/Appointment.php";

$appointmentBO=new AppointmentBusinessImpl();

$method=$_SERVER["REQUEST_METHOD"];
switch ($method){
    case "GET":
        echo json_encode($appointmentBO->getAllAppointments());
        break;
    case "POST":
        $name=$_POST['name'];
        $email=$_POST['email'];
        $tpNo=$_POST['tpNo'];
        $date=$_POST['date'];

        $tempAppointment=new Appointment($name, $email, $tpNo, $date);
        $resp=$appointmentBO->addAppointment($tempAppointment);
        echo $resp;
        break;
}