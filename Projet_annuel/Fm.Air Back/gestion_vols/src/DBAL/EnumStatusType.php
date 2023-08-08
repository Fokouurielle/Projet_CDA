<?php

namespace App\DBAL;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;

//Type::addType('enumStatus', 'App\DBAL\EnumStatusType');
class EnumStatusType extends Type
{
    const ENUM_TYPE = 'enumStatus';
    const STATUS_TRUE = '6';
    const STATUS_FALSE = '5';

    protected $name = self::ENUM_TYPE;
    protected $values = array(self::STATUS_TRUE, self::STATUS_FALSE);


    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {

        //Si c'est une BD postgresql retourne ca
        return self::ENUM_TYPE; //$this->addSql("CREATE TYPE enumStatus AS ENUM ('5' , '6')");
        //Si c'est une BD MYSQL RETOURN CA
        //return "ENUM('6', '5')";
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return $value;
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        $i = 0;
        foreach (array(self::STATUS_TRUE, self::STATUS_FALSE) as $val) {
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
