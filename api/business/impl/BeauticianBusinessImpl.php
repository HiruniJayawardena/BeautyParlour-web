<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 7:42 PM
 */
require_once __DIR__."/../BeauticianBusiness.php";
require_once __DIR__."/../../core/Beautician.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/impl/BeauticianRepoImpl.php";

class BeauticianBusinessImpl implements BeauticianBusiness
{

    public function addBeautician(Beautician $beautician): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $beauticianRepo=new BeauticianRepoImpl();
        $beauticianRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $beauticianRepo->addBeautician($beautician);
        return true;
    }

    public function deleteBeautician(string $beautyId): bool
    {
        // TODO: Implement deleteBeautician() method.
    }

    public function searchBeautician(string $beautyId): array
    {
        // TODO: Implement searchBeautician() method.
    }

    public function updateBeautician(Beautician $beautician): bool
    {
        // TODO: Implement updateBeautician() method.
    }

    public function getAllBeauticians(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $beauticianRepo=new BeauticianRepoImpl();
        $beauticianRepo->setConnection($connection);
        return $beauticianRepo->getAllBeauticians();
    }
}