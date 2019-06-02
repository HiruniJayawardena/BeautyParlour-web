<?php
/**
 * Created by IntelliJ IDEA.
 * User: ASUS
 * Date: 12/7/2018
 * Time: 7:40 PM
 */
require_once __DIR__."/../core/Beautician.php";

interface BeauticianBusiness
{
    public function addBeautician(Beautician $beautician): bool ;
    public function deleteBeautician(string $beautyId): bool ;
    public function searchBeautician(string $beautyId): array ;
    public function updateBeautician(Beautician $beautician): bool ;
    public function getAllBeauticians(): array ;

}