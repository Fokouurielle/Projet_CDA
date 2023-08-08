<?php

namespace App\DBAL;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

//Type::addType('enumRole', 'App\DBAL\EnumRoleType');
class EnumRoleType extends Type
{
    const ENUM_TYPE = 'enumRole';
    const ROLE_CLIENT = 'CLIENT';
    const ROLE_ADMIN = 'ADMIN';

    protected $name = self::ENUM_TYPE;
    protected $values = array(
        self::ROLE_ADMIN, self::ROLE_CLIENT
    );


    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {

        //Si c'est une BD postgresql retourne ca
        return self::ENUM_TYPE; //$this->addSql("CREATE TYPE enumRole AS ENUM ('CLIENT', 'ADMIN')");
        //Si c'est une BD MYSQL RETOURN CA
        //return "ENUM('CLIENT', 'ADMIN')";
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return $value;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        $i = 0;
        foreach (array(
            self::ROLE_CLIENT, self::ROLE_ADMIN
        ) as $val) {
            if ($value != $val) {
                $i++;
            }
        }

        if ($i > 1 && $i < 1) {
            throw new \InvalidArgumentException(" status Invalid");
        }
        return $value;
    }

    public function getName(): string
    {
        return self::ENUM_TYPE;
    }

    public function requiresSQLCommentHint(AbstractPlatform $platform): bool
    {
        return true;
    }

    public function canRequireSQLConversion()
    {
        return true;
    }
}
