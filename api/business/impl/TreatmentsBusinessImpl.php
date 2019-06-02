<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 7:42 PM
 */
require_once __DIR__."/../TreatmentsBusiness.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../core/Treatments.php";
require_once __DIR__."/../../repo/impl/TreatmentsRepoImpl.php";

class TreatmentsBusinessImpl implements TreatmentsBusiness
{

    public function addTreatments(Treatments $treatments): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $treatmentsRepo=new TreatmentsRepoImpl();
        $treatmentsRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $treatmentsRepo->addTreatments($treatments);
        return true;
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
        $connection=(new DBConnection())->getDBConnection();
        $treatmentsRepo=new TreatmentsRepoImpl();
        $treatmentsRepo->setConnection($connection);
        return $treatmentsRepo->getAllTreatments();
    }
}