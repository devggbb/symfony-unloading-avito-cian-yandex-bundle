<?php

namespace Ggbb\SymfonyUploadingAvitoCianYandexBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Ggbb\SymfonyUploadingAvitoCianYandexBundle\Entity\AbstractUploading;

/**
 * @extends ServiceEntityRepository<AbstractUploading>
 *
 * @method AbstractUploading|null find($id, $lockMode = null, $lockVersion = null)
 * @method AbstractUploading|null findOneBy(array $criteria, array $orderBy = null)
 * @method AbstractUploading[]    findAll()
 * @method AbstractUploading[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
abstract class AbstractUploadingRepository extends ServiceEntityRepository
{
}
