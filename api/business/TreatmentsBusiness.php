<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 7:40 PM
 */
require_once __DIR__."/../core/Treatments.php";

interface TreatmentsBusiness
{
    public function addTreatments(Treatments $treatments): bool ;
    public function deleteTreatments(string $treatId): bool ;
    public function searchTreatments(string $treatId): array ;
    public function updateTreatments(Treatments $treatments): bool ;
    public function getAllTreatments(): array ;

}