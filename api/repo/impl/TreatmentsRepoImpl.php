<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 1:01 PM
 */
require_once __DIR__."/../TreatmentsRepo.php";
require_once __DIR__."/../../core/Treatments.php";


class TreatmentsRepoImpl implements TreatmentsRepo
{
    private $connection;

    /**
     * TreatmentsRepoImpl constructor.
     */
    public function __construct()
    {
    }


    public function setConnection(mysqli $connection): void
    {
        // TODO: Implement setConnection() method.
    }

    public function addTreatments(Treatments $treatments): bool
    {
        // TODO: Implement addTreatments() method.
    }

    public function deleteTreatments(string $treatId): bool
    {
        // TODO: Implement deleteTreatments() method.
    }

    public function searchTreatments(string $treatId): array
    {
        // TODO: Implement searchTreatments() method.
    }

    public function updateTreatments(Treatments $treatments): bool
    {
        // TODO: Implement updateTreatments() method.
    }

    public function getAllTreatments(): array
    {
        // TODO: Implement getAllTreatments() method.
    }
}