<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 1:00 PM
 */
require_once __DIR__."/../BeauticianRepo.php";
require_once __DIR__."/../../core/Beautician.php";

class BeauticianRepoImpl implements BeauticianRepo
{
    private $connection;

    /**
     * BeauticianRepoImpl constructor.
     */
    public function __construct()
    {
    }


    public function setConnection(mysqli $connection): void
    {
        // TODO: Implement setConnection() method.
    }

    public function addBeautician(Beautician $beautician): bool
    {
        // TODO: Implement addBeautician() method.
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
        // TODO: Implement getAllBeauticians() method.
    }
}