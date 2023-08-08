<?php

namespace App\Utils;

use App\DBAL\EnumNombreModify;
use App\DBAL\EnumRoleType;
use App\Entity\Admin;
use App\Entity\TypePoteau;
use App\Repository\HistoriqueActiviteRepository;
use Endroid\QrCode\LabelAlignment;
use Endroid\QrCode\QrCode;
use Symfony\Component\Uid\Uuid;
use Endroid\QrCode\ErrorCorrectionLevel;
use Symfony\Component\HttpKernel\KernelInterface;

class Helpers
{
    protected $projectDir;
    const ROLES = [
        EnumRoleType::ROLE_CLIENT, EnumRoleType::ROLE_ADMIN
    ];

    public function __construct(
        KernelInterface $kernel
    ) {
        $this->projectDir = $kernel->getProjectDir();
    }

    public function parseRequestToAccountJson()
    {
    }

    public function truncateFees($fee)
    {
        return ceil($fee);
    }

    public function roundFees($fee)
    {
        return round($fee, 3);
    }


    public function isGranted($role, $array = self::ROLES): bool
    {
        return in_array($role, $array);
    }

 

    /**
     * @param $attributes
     * @return false|string
     * On récupère les attributs pour avoir les paramètres
     */
    public function getAttributes($attributes)
    {
        return $attributes->attributes;
    }


   
}
